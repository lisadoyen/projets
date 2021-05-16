<?php


namespace App\Controller\Api;


use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Entite;
use App\Form\ArticleApiType;
use App\Form\ArticleType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\EntiteRepository;
use App\Repository\GenreRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEntiteRepository;
use App\Repository\UserRepository;
use App\Service\Api\LivreApi;
use Doctrine\ORM\EntityManagerInterface;
use SimpleXMLElement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/api/livre")
 * @Security("is_granted('ROLE_ADMIN')")
 */
class LivreApiController extends AbstractController
{


    /**
     * @Route("/search", name="api_livre_search_isbn", methods={"GET","POST"})
     * @param Request $request
     * @param LivreApi $livreApi
     * @return Response
     */
    public function searchISBN(Request $request, LivreApi $livreApi): Response
    {
        if($request->isMethod('post')){
            $erreurs = [];
            if(isset($_POST['isbn'])){
                $isbn = $_POST['isbn'];
                $erreurs = $this->erreurIsbn($isbn);

                if(!empty($erreurs)){
                    return $this->render('api/get_ISBN.html.twig',[
                        'erreurs' => $erreurs
                    ]);
                }else{
                     $datas = $livreApi->getDataFromIsbn($isbn);
                     $isEmpty = true;
                     foreach ($datas as $data){
                         if(array($data)){
                             foreach ($data as $donne){
                                 if($donne != "") $isEmpty = false;
                             }
                         }
                     }
                     if($isEmpty){
                         $erreurs['vide'] = "Aucune informations n'a été trouvé pour l'ISBN renseigné";
                         return $this->render('api/get_ISBN.html.twig',[
                             'erreurs' => $erreurs
                         ]);
                     }
                     return $this->redirectToRoute('create_book_isbn',['isbn' => $isbn]);
                }
            }
        }
        //$infos = $livreApi->getDataFromIsbn($isbn);
        //dd($infos);
        return $this->render('api/get_ISBN.html.twig');
    }

    /**
     * @Route("/create/{isbn}", name="create_book_isbn", methods={"GET","POST"})
     * @param $isbn
     * @param LivreApi $livreApi
     * @param GenreRepository $genreRepository
     * @param TypeEntiteRepository $typeEntiteRepository
     * @param CategorieRepository $categorieRepository
     * @param Request $request
     * @param TypeActionRepository $typeActionRepository
     * @param UserInterface $user
     * @param EntityManagerInterface $em
     * @return Response
     */
    public function createBookFromISBN($isbn,LivreApi $livreApi,GenreRepository $genreRepository,TypeEntiteRepository $typeEntiteRepository,
                                       CategorieRepository $categorieRepository,Request $request, TypeActionRepository $typeActionRepository, UserInterface $user,
                                       EntityManagerInterface $em): Response
    {
        if(isset($isbn)) {
            $erreurs = $this->erreurIsbn($isbn);
            if (!empty($erreurs)) {
                return $this->render('api/get_ISBN.html.twig', [
                    'erreurs' => $erreurs
                ]);
            }

            $article = new Article();

            // premier champ 'auteur'
            $entite = new Entite();
            $entite->setTypeEntite($typeEntiteRepository->findOneBy(['id' => 1]));
            $article->addEntite($entite);

            // data est un tableau à double entré
            // titres
            // auteurs
            // editeurs
            // publications
            // images
            $datas = $livreApi->getDataFromIsbn($isbn);

            $typeAuteur = $typeEntiteRepository->findOneBy(['libelle' => 'auteur']);
            $typeEditeur = $typeEntiteRepository->findOneBy(['libelle' => 'editeur']);

            foreach ($datas['auteurs'] as $auteur){
                if($auteur != ""){
                    $entite = new Entite();
                    $entite->setTypeEntite($typeAuteur);
                    $entite->setNom($auteur);
                    $article->addEntite($entite);
                }
            }

            foreach ($datas['editeurs'] as $editeur){
                if($editeur != ""){
                    $entite = new Entite();
                    $entite->setNom($editeur);
                    $entite->setTypeEntite($typeEditeur);
                    $article->addEntite($entite);
                }
            }

            $form = $this->createForm(ArticleApiType::class, $article);
            $form->get('gencode')->setData($isbn);

            $categorie = $categorieRepository->find(1);
            $form->get('categorie')->setData($categorie);
            $form->handleRequest($request);

            if(isset($_POST['titre_radio']) && strlen($_POST['titre_radio']) <= 3)
                $erreurs['titre'] = "Le titre doit avoir au minimum 3 caractères !";
            if(isset($_POST['date_radio']) && strlen($_POST['date_radio']) <= 0 )
                $erreurs['dateRadio'] = "Veuillez sélectionnez une date";
            if(isset($_POST['image_radio']) && strlen($_POST['image_radio']) <= 0 )
                $erreurs['image'] = "Veuillez sélectionnez une image";


            if ($form->isSubmitted() && $form->isValid() && empty($erreurs)) {


                $article->setTitre($_POST['titre_radio']);

                $article->setDatePublication(new \DateTime($_POST['date_radio']));

                $article->setVignette($_POST['image_radio']);


                // ajout des entites
                foreach ($article->getEntites() as $entite) {
                    $find = $this->exists($entite);
                    // creer l'entite si elle n'existe pas
                    if (!$find) $em->persist($entite);
                    // ou remplace par l'entite existante
                    else {
                        $article->removeEntite($entite);
                        $article->addEntite($find);
                    }
                }

                // ajout de l'action creation
                // type id 2 = creation
                $creation = new Action();
                $creation->setDate(new \DateTime());
                $creation->setStaff($user);
                $creation->setTypeAction($typeActionRepository->findOneBy(['id' => 2]));
                $creation->setArticle($article);
                // ajout de l'action obtention
                // type id 1 = obtention
                $obtention = new Action();
                $obtention->setDate($form->get('dateObtention')->getData());
                $obtention->setStaff($user);
                $obtention->setTypeAction($typeActionRepository->findOneBy(['id' => 1]));
                $obtention->setArticle($article);

                $em->persist($article);
                $em->persist($obtention);
                $em->persist($creation);
                $em->flush();
                $this->addFlash('add_livre_isbn',"L'Article ". $article->getTitre() ." a bien été ajouté par ". $user->getUsername());
                return $this->redirectToRoute('api_livre_search_isbn');

            }
            return $this->render('api/form_livre/new.html.twig', [
                'isbn' => $isbn,
                'article' => $article,
                'form' => $form->createView(),
                'datas' => $datas,
                'erreurs' => $erreurs
            ]);
        }
        return $this->redirectToRoute('index');
    }

    public function erreurIsbn($isbn){
        $erreurs = [];
        if($isbn == "") $erreurs['noValue'] = "Veuillez rentrez un ISBN";
        if(strlen($isbn) < 10)  $erreurs['length'] = "Veuillez rentrez un ISBN d'au moins 10 chiffres";
        if(strlen($isbn) > 13)  $erreurs['max'] = "Veuillez rentrez un ISBN d'au plus 13 chiffres";
        if(!is_numeric($isbn)) $erreurs['numeric'] = "Un isbn ne doit contenir que des chifres";
        return $erreurs;
    }

    /**
     * @Route("/fillBooks", name="api_livre_fill", methods={"GET","POST"})
     * @param LivreApi $livreApi
     * @param ArticleRepository $articleRepository
     * @param EntiteRepository $entiteRepository
     * @param TypeEntiteRepository $typeEntiteRepository
     * @param EntityManagerInterface $em
     * @param UserRepository $userRepository
     * @param TypeActionRepository $typeActionRepository
     * @return Response
     */
    public function fillBooks(LivreApi $livreApi, ArticleRepository $articleRepository, EntiteRepository $entiteRepository,
                              TypeEntiteRepository $typeEntiteRepository, EntityManagerInterface $em, UserRepository $userRepository, TypeActionRepository $typeActionRepository): Response
    {
        $livresWithIsbn = $articleRepository->findByISBN();
        $typeAuteur = $typeEntiteRepository->find(1);
        $typeEditeur = $typeEntiteRepository->find(8);
        $modification = $typeActionRepository->find(3);
        $admin = $userRepository->find(2);

        /** @var Article $livre */
        foreach ($livresWithIsbn as $livre){
            $infos = $livreApi->getDataFromIsbn($livre->getGencode());

            $author = "";
            foreach ($infos['auteurs'] as $auteur) {
                if($auteur != "" && !is_array($auteur)){
                    $author = $auteur;
                    break;
                }
            }

            $editor = "";
            foreach ($infos['editeurs'] as $editeur) {
                if($editeur != "" && !is_array($editeur)){
                    $editor = $editeur;
                    break;
                }
            }
            $date = "";
            foreach ($infos['publications'] as $publication) {
                if($publication != ""){
                    $date = $publication;
                    break;
                }
            }

            $description = "";
            foreach ($infos['descriptions'] as $des) {
                if($des != ""){
                    $description = $des;
                    break;
                }
            }

            $image = "";
            foreach ($infos['images'] as $img) {
                if($img != ""){
                    $image = $img;
                    break;
                }
            }
            $findEntite = null;
            if($author != "" && !is_object($author) && strlen($author) <= 50){
                /** @var Entite $findEntite */
                if (isset($author)) {
                    $findEntite = $entiteRepository->findOneBy(['nom' => $author]);
                }
                if(!$findEntite){
                    $auteur = new Entite();
                    $auteur->setTypeEntite($typeAuteur);
                    $auteur->setNom($author);
                    $em->persist($auteur);
                    $em->flush();
                    $livre->addEntite($auteur);
                }else{
                    $livre->addEntite($findEntite);
                }
            }
            if($editor != "" && !is_object($editor) && strlen($editor) <= 50){
                /** @var Entite $findEntite */
                $findEntite = $entiteRepository->findOneBy(['nom' => $editor]);
                if(!$findEntite){
                    $editeur = new Entite();
                    $editeur->setTypeEntite($typeEditeur);
                    $editeur->setNom($editor);
                    $em->persist($editeur);
                    $em->flush();
                    $livre->addEntite($editeur);
                }else{
                    $livre->addEntite($findEntite);
                }
            }
            if($date != "") $livre->setDatePublication($date);
            $livre->setVignette($image);
            if($description != "") $livre->setDescription($description);

            $action = new Action();

            $action->setStaff($admin);
            $action->setDate(new \DateTime());
            $action->setTypeAction($modification);
            $livre->addAction($action);
            $em->persist($action);
            $em->flush();

            $em->persist($livre);
            $em->flush();


        }
        return $this->redirectToRoute('annonce_index');
    }

    public function exists(Entite $entite): ?Entite
    {
        if (!empty($entite)) {
            $entiteRepository = $this->getDoctrine()->getRepository(Entite::class);
            $find = $entiteRepository->findOneBy(['nom' => $entite->getNom(), 'typeEntite' => $entite->getTypeEntite()]);
            if($find) return $find;
        }
        return null;
    }
    
}