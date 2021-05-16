<?php

namespace App\Controller\Articles;

use App\Data\SearchData;
use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Avis;
use App\Entity\Bibliotheque;
use App\Entity\Categorie;
use App\Entity\Enregistrement;
use App\Entity\Entite;
use App\Entity\Favoris;
use App\Entity\Genre;
use App\Entity\StatutEnregistrement;
use App\Entity\TypeEntite;
use App\Form\AvisFormType;
use App\Form\BibliothequeType;
use App\Form\SearchDataType;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\AvisRepository;
use App\Repository\BibliothequeRepository;
use App\Repository\CategorieRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\EntiteRepository;
use App\Repository\FavorisRepository;
use App\Repository\GenreRepository;
use App\Repository\PanierRepository;
use App\Repository\RubriqueRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
use App\Repository\TrancheAgeRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEnregistrementRepository;
use App\Repository\TypeEntiteRepository;
use App\Repository\UserRepository;
use App\Repository\VideoldRepository;
use App\Service\Article\Filtre;
use App\Service\Article\Nouveaute;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Constraints\Date;

class ArticleController extends AbstractController
{

    /**
     * @Route ("/articles/{idCategorie}/show", name="articles_idCategorie", methods={"GET", "POST"})
     * @Route("/articles/show", name="articles_show", methods={"GET", "POST"})
     * @Route("/articles/{type}/{order}/show", name="articles_show_order", methods={"GET", "POST"})
     * @Route("/articles/categorie/{idCategorie}/genres/{idGenre}/show", name="categories_id_genres_id_articles_show", methods={"GET", "POST"})
     * @param null $order
     * @param null $type
     * @param null $idGenre
     * @param null $idCategorie
     * @param SessionInterface $session
     * @param ArticleRepository $ar
     * @param CategorieRepository $categorieRepo
     * @param GenreRepository $genreRepository
     * @param ActionRepository $actionsRepo
     * @param Filtre $filtre
     * @param StatutRepository $statutRepository
     * @param Request $request
     * @param PaginatorInterface $paginator
     * @param Nouveaute $new
     * @param TrancheAgeRepository $ageRepository
     * @param RubriqueRepository $rubriqueRepository
     * @param EnregistrementRepository $enregistrementRepository
     * @param PanierRepository $panierRepository
     * @param UserInterface $user
     * @param AvisRepository $avisRepository
     * @return Response
     */
    public function showAll($order = null, $type = null, $idGenre = null, $idCategorie = null, SessionInterface $session,
                            ArticleRepository $ar, CategorieRepository $categorieRepo, GenreRepository $genreRepository,
                            ActionRepository $actionsRepo, Filtre $filtre, StatutRepository $statutRepository,
                            Request $request, PaginatorInterface $paginator, Nouveaute $new,
                            TrancheAgeRepository $ageRepository, RubriqueRepository $rubriqueRepository,
                            EnregistrementRepository $enregistrementRepository, PanierRepository $panierRepository,
                            UserInterface $user, AvisRepository $avisRepository)
    {
        // Menu genre et/ou catégorie
        if ($idGenre != null || $idCategorie != null) {
            $livres = $paginator->paginate(
                $filtre->filtreAvecCategorie_Genre($order, $type, $idGenre, $idCategorie, true, $genreRepository, $statutRepository, $categorieRepo, $session, $ar, $enregistrementRepository),
                $request->query->getInt('page', 1),
                30
            );
            return $this->render('articles/show_all_articles.html.twig', [
                'articles' => $livres,
                'statuts' => $statutRepository->findAll(),
                'genres' => $genreRepository->findAll(),
                'categories' => $categorieRepo->findAll(),
                'rubriques' => $rubriqueRepository->findAll(),
                'ages' => $ageRepository->findAll(),
                'donnees' => $filtre->filtreAvecCategorie_Genre($order, $type, $idGenre, $idCategorie, false, $genreRepository, $statutRepository, $categorieRepo, $session, $ar, $enregistrementRepository),
                'nouveaute' => $new->findArticleNouveaute_AvecIdCategorie($categorieRepo, $actionsRepo, 500, $idCategorie),
                'ordre' => $order,
                'type' => $type,
                'moyenne' => $this->showMoyenne($livres, $avisRepository),
                'nbArticlesTotal' => $ar->findNbArticleTotal(),
                'nbArticlesTotalSortie' => $ar->findNbArticleTotalSortie(),
                'nbArticles' => count($filtre->filtreAvecCategorie_Genre($order, $type, $idGenre, $idCategorie, true, $genreRepository, $statutRepository, $categorieRepo, $session, $ar, $enregistrementRepository)),
                'panierUser' => $this->showIconePanier($panierRepository),
                'premierEntite' => $this->showPremierEntite($livres),
                'enregistrements' => $this->showDateDernierEmprunt($user, $enregistrementRepository)
            ]);
        } // filtre
        else {
            $livres = $paginator->paginate(
                $filtre->filtre($request, $order, $type, true, $genreRepository, $categorieRepo, $session, $ar, $statutRepository, $ageRepository, $rubriqueRepository, $enregistrementRepository),
                $request->query->getInt('page', 1),
                30
            );
            return $this->render('articles/show_all_articles.html.twig', [
                'articles' => $livres,
                'statuts' => $statutRepository->findAll(),
                'genres' => $genreRepository->findAll(),
                'categories' => $categorieRepo->findAll(),
                'rubriques' => $rubriqueRepository->findAll(),
                'ages' => $ageRepository->findAll(),
                'donnees' => $filtre->filtre($request, $order, $type, false, $genreRepository, $categorieRepo, $session, $ar, $statutRepository, $ageRepository, $rubriqueRepository, $enregistrementRepository),
                'nouveaute' => $new->findArticleNouveaute($categorieRepo, $actionsRepo, 500),
                'ordre' => $order,
                'type' => $type,
                'moyenne' => $this->showMoyenne($livres, $avisRepository),
                'nbArticlesTotal' => $ar->findNbArticleTotal(),
                'nbArticlesTotalSortie' => $ar->findNbArticleTotalSortie(),
                'nbArticles' => count($filtre->filtre($request, $order, $type, true, $genreRepository, $categorieRepo, $session, $ar, $statutRepository, $ageRepository, $rubriqueRepository, $enregistrementRepository)),
                'panierUser' => $this->showIconePanier($panierRepository),
                'premierEntite' => $this->showPremierEntite($livres),
                'enregistrements' => $this->showDateDernierEmprunt($user, $enregistrementRepository)
            ]);
        }
    }

    /**
     * Récupération et affichage de la moyenne pour chaque article
     * @param $livres
     * @param $avisRepository
     * @return array
     */
    public function showMoyenne($livres, $avisRepository)
    {
        $moyenne = null;
        foreach ($livres->getItems() as $items) { // pour tous les articles affichés
            if ($avisRepository->avgAvisByArticle($items->getId()) != null) { // si la note n'est pas nul
                $moyenne[$items->getId()] = $avisRepository->avgAvisByArticle($items->getId());
                // récupération de la moyenne de toutes les notes pour chaque article
            }
        }
        return $moyenne;
    }

    /**
     * Affichage de l'icone kadis bleu si article dans mon panier actuellement
     * @param $panierRepository
     * @return mixed
     */
    public function showIconePanier($panierRepository)
    {

        $paniers = $panierRepository->findBy(['utilisateur' => $this->getUser()]); // récupere le panier de l'utilisateur
        $panierUser = [];
        foreach ($paniers as $panier) {
            array_push($panierUser, $panier->getArticle()->getId()); // récupère l'id de l'article dans le panier
        }
        return $panierUser;
    }

    /**
     * Récupération et affichage du premier Entite en fonction de la catégorie
     * @param $livres
     * @return array
     */
    public function showPremierEntite($livres)
    {
        $premierEntite = null;
        foreach ($livres->getItems() as $items) { // pour chaque article
            foreach ($items->getEntites() as $entite) { // pour chaque entité de l'article
                if ($items->getCategorie()->getLibelle() == "livre") { // si la catégorie de l'article est livre
                    if ($entite->getTypeEntite()->getLibelle() == "auteur") { // si il y a un auteur
                        $premierEntite[$items->getId()]['prenom'] = $entite->getPrenom(); // on récupère le prénom
                        $premierEntite[$items->getId()]["nom"] = $entite->getNom(); // on récupère le nom
                        break;
                    }
                }
                if ($items->getCategorie()->getLibelle() == "video") {
                    if ($entite->getTypeEntite()->getLibelle() == "realisateur") {
                        $premierEntite[$items->getId()]['prenom'] = $entite->getPrenom();
                        $premierEntite[$items->getId()]["nom"] = $entite->getNom();
                        break;
                    }
                }
            }
        }
        return $premierEntite;
    }

    /**
     * @param $user
     * @param $enregistrementRepository
     * @return array
     */
    public function showDateDernierEmprunt($user, $enregistrementRepository)
    {
        /* trouver les emprunts de l'utilisateur : la date du dernier emprunt pour chaque article */
        $enregistrements = $enregistrementRepository->findDateEnregistrementByArticle($user->getId());
        $enregistrementsIdDate = [];
        foreach ($enregistrements as $enregistrement) {
            $enregistrementsIdDate[$enregistrement['id']] = $enregistrement['date'];
        }
        return $enregistrementsIdDate;
    }

    /**
     * @Route("/articles/test", name="articles_show_test", methods={"GET", "POST"})
     * @param $consumer_secret
     * @param null $token_secret
     * @param string $http_method
     */
    function sign_request($token_secret = null, $http_method = 'GET')
    {


        $base = str_replace('+', ' ', str_replace('%7E', '~', rawurlencode($http_method)));
        $base .= '&';
        $base .= str_replace('+', ' ', str_replace('%7E', '~', rawurlencode("http://api.music-story.com/oauth/request_token")));
        $base .= '&';
        $base .= str_replace('+', ' ', str_replace('%7E', '~', rawurlencode("oauth_consumer_key=bfc91e71e5dc3289b85bdee0c76c698e22cc3b5a")));

        $hmac_key = str_replace('+', ' ', str_replace('%7E', '~', rawurlencode("8e0a650048d01bfa5f150ce6868903e8681c2687")));
        $hmac_key .= '&';
        $hmac_key .= str_replace('+', ' ', str_replace('%7E', '~', rawurlencode($token_secret)));

        $oauth_signature = base64_encode(hash_hmac('sha1', $base, $hmac_key, true));

        dd($oauth_signature);
    }


    /**
     * @Route("/article/filtre/clear", name="filter_clear", methods={"GET", "POST"})
     * @param SessionInterface $session
     * @return Response
     */
    public function clearFiltrer(SessionInterface $session)
    {
        $session->set('donnees', null);
        return $this->redirectToRoute('articles_show');
    }

    /**
     * @Route("/articles/getISBN", name="get_ISBN", methods={"GET","POST"})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function getISBN()
    {
        return $this->render('articles/get_ISBN.html.twig');
    }

    /**
     * @Route("/articles/add", name="add_livre", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_BENEVOLE")
     */
    public function addLivre()
    {

        $article = new Bibliotheque();
        if (!empty($_POST)) {
            $data = $_POST;
            $article->setTitreDesignation($data['titre']);
            $article->setPhoto($data['image']);
        }
        $form = $this->createForm(BibliothequeType::class, $article);

        return $this->render('articles/add.html.twig', [
            'form' => $form->createView(),
            'data' => $data ?? null
        ]);
    }

    /**
     * @Route("/article/{id}", name="article_details",methods={"GET","POST"} )
     * @param UserInterface $user
     * @param Request $request
     * @param AvisRepository $avisRepository
     * @param ArticleRepository $articleRepository
     * @param FavorisRepository $favorisRepository
     * @param CategorieRepository $categorieRepository
     * @param ActionRepository $actionRepository
     * @param int $id
     * @param Nouveaute $new
     * @param PanierRepository $panierRepository
     * @param EnregistrementRepository $enregistrementRepository
     * @return Response
     */
    public function livreDetails(UserInterface $user, Request $request,
                                 AvisRepository $avisRepository,
                                 ArticleRepository $articleRepository,
                                 FavorisRepository $favorisRepository,
                                 CategorieRepository $categorieRepository,
                                 ActionRepository $actionRepository, $id = 1,
                                 Nouveaute $new, PanierRepository $panierRepository,
                                 EnregistrementRepository $enregistrementRepository): Response
    {
        /* article */
        $livre = $articleRepository->findOneBy(['id' => $id]);

        /* entite */
        $premierEntite = null;
        foreach ($livre->getEntites() as $entite){
            if($livre->getCategorie()->getLibelle() == "livre") {
                if ($entite->getTypeEntite()->getLibelle() == "auteur") {
                    $premierEntite["prenom"] = $entite->getPrenom();
                    $premierEntite["nom"] = $entite->getNom();
                    break;
                }
            }
            if($livre->getCategorie()->getLibelle() == "video") {
                if ($entite->getTypeEntite()->getLibelle() == "realisateur") {
                    $premierEntite["prenom"] = $entite->getPrenom();
                    $premierEntite["nom"] = $entite->getNom();
                    break;
                }
            }
        }

        /* nouveaute */
        $nouveaute = $new->findArticleNouveaute_AvecIdCategorie($categorieRepository,$actionRepository,500,
            $livre->getCategorie()->getId());

        $nouveau = null;
        foreach($nouveaute as $new){
            if($new['id'] == $livre->getId()){
                $nouveau = $livre->getId();
            }
        }

        /* avis + moyenne */
        $avis = $avisRepository->findBy(['article'=>$id], ['date' => 'DESC']);
        if($avisRepository->avgAvisByArticle($id) != null) {
            $moyenne = $avisRepository->avgAvisByArticle($id);
        }
        else{
            $moyenne = null;
        }

        /* ajout avis + commentaire */
        $form = $this->createForm(AvisFormType::class, NULL, [
            'action' => '/article/'.$id,
            'method' => 'POST'
        ]);
        $form->handleRequest($request);
        if($request->getMethod() == 'POST') {
            if(isset($_POST['note']))
                $note = $_POST['note'];
        }
        else{
            $note = 10;
        }
        if ($form->isSubmitted() && $form->isValid()) {
            /* @var Avis $commentaire */
            $commentaire = $form->getData();
            $commentaire->setArticle($articleRepository->find($id));
            $commentaire->setSignale(0);
            $commentaire->setUtilisateur($user);
            $commentaire->setDate(\DateTime::createFromFormat('d-m-Y', date('d-m-Y')));
            if(isset($note))
                $commentaire->setNote($note);
            $this->getDoctrine()->getManager()->persist($commentaire);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('article_details', ['id' => $id]);
        }

        return $this->render('articles/show_article_details.html.twig', [
            'article' => $livre,
            'favoris' => $favorisRepository->findOneBy(['utilisateur'=>$this->getUser(), 'article'=>$livre]),
            'nouveaute' => $nouveaute,
            'idNouveaute' => $nouveau,
            'avis' => $avis,
            'note'=> $note,
            'moyenne' => $moyenne,
            'panierUser' =>$this->showIconePanier($panierRepository),
            'enregistrements'=>$this->showDateDernierEmprunt($user, $enregistrementRepository),
            'premierEntite' =>$premierEntite,
            'form' => $form->createView()
        ]);
    }

    /**
     * transfert bdd
     * @Route("/bdd/transfert", name="modifVideold", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     * @throws Exception
     */
    public function transfertBDD(VideoldRepository $videoldRepository,
                                 EntiteRepository $entiteRepository,
                                 CategorieRepository $categorieRepository,
                                 TrancheAgeRepository $trancheAgeRepository,
                                 StatutRepository $statutRepository,
                                 GenreRepository $genreRepository,
                                 UserRepository $userRepository,
                                 TypeActionRepository $typeActionRepository,
                                 TypeEnregistrementRepository $typeEnregistrementRepository,
                                 StatutEnregistrementRepository $statutEnregistrementRepository,
                                 EnregistrementRepository $enregistrementRepository,
                                 EntityManagerInterface $em,
                                 TypeEntiteRepository $typeEntiteRepository)
    {
        $admin = $userRepository->find(2);
        $typeEmprunt = $typeEnregistrementRepository->find(2);
        $videos = $videoldRepository->findAll();
        $typeAuteur = $typeEntiteRepository->find(1);
        $categorieVideo = $categorieRepository->find(2);
        $tranche = $trancheAgeRepository->find(1);
        $statutEmprunte = $statutEnregistrementRepository->find(5);
        $statutRendu = $statutEnregistrementRepository->find(7);
        $empruntable = $statutRepository->find(1);
        $vendable = $statutRepository->find(2);
        $emprunte = $statutRepository->find(6);
        $perdu = $statutRepository->find(3);
        $vendu = $statutRepository->find(5);

        $obtention = $typeActionRepository->find(1);
        $creation = $typeActionRepository->find(2);
        $modification = $typeActionRepository->find(3);

        $comedie = $genreRepository->find(1);

        $em->getConnection()->getConfiguration()->setSQLLogger(null);

        foreach ($videos as $video) {
            $nom = $video->getNomAuteur();
            $prenom = $video->getPrenomAuteur();
            if(!$entiteRepository->findBy(['nom' => $nom])){
                $auteur = new Entite();
                $auteur->setTypeEntite($typeAuteur);
                $auteur->setNom($nom);
                $auteur->setPrenom($prenom);
                $em->persist($auteur);
                $em->flush();
            }

            $article = new Article();
            $article->setCategorie($categorieVideo);
            $article->setTrancheAge($tranche);

            if($video->getCodeEtat() === 'AC'){
                $article->setStatut($empruntable);
                if($video->getSortie() === 'S'){
                    $article->setStatut($emprunte);
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement(new \DateTime());
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutEmprunte); // statut emprunte
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $date = new \DateTime();
                    $date->add(new \DateInterval('P'.$categorieVideo->getDureeEmpruntMax().'D'));
                    $enregistrement->setDateRenduTheorique($date);
                    $enregistrement->setNoCommande(1);
                    $em->persist($enregistrement);
                }
                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();
                for($i = 0; $i < $video->getNbSortie() ; $i++){
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement($date);
                    $enregistrement->setDateRenduTheorique( $dateRendu);
                    $enregistrement->setDateRendu($dateRendu);
                    $enregistrement->setDatePreparationFini($datePrepFini);
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutRendu); // statut rendu
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $enregistrement->setNoCommande(1);
                    $em->persist($enregistrement);
                }
            }else if ($video->getCodeEtat() === 'PERDU'){
                $article->setStatut($perdu);
            }else if ($video->getCodeEtat() === 'VENTE'){
                $article->setStatut($vendable);
            }else{
                $article->setStatut($vendu);
            }

            $action = new Action();
            $dateModif = $video->getDateCreation();
            if ($dateModif != NULL) $action->setDate($dateModif);
            else $action->setDate(new \DateTime());
            $action->setStaff($admin);
            $action->setTypeAction($creation);
            $article->addAction($action);
            $em->persist($action);

            $action = new Action();
            $dateModif = $video->getDateAchat();
            if ($dateModif != NULL) $action->setDate($dateModif);
            else $action->setDate(new \DateTime());
            $action->setStaff($admin);
            $action->setTypeAction($obtention);
            $article->addAction($action);
            $em->persist($action);

            $action = new Action();
            $dateModif = $video->getDateRetrait();
            if ($dateModif != NULL) {
                $action->setDate($dateModif);
                $action->setStaff($admin);
                $action->setTypeAction($modification);
                $article->addAction($action);
                $em->persist($action);
            }

            $article->setGenre($comedie);
            $article->setGencode($video->getGencode());
            $article->setCodeArticle($video->getCodeArticle());
            $article->setTitre($video->getTitre());
            $article->setMontantObtention($video->getPrixAchat());
            $article->setMontantCaution(5.30);
            $article->setMontantVente(5.40);
            $article->setNumerique(false);
            $em->persist($article);
            $em->flush();
        }

        return $this->redirectToRoute("index");
    }
    /**
     * transfert bdd
     * @Route("/bdd/transfert/entite", name="modifEntite", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     */
    public function transfertEntite(VideoldRepository $videoldRepository,
                                 EntiteRepository $entiteRepository,
                                 EntityManagerInterface $em,
                                 ArticleRepository $articleRepository){


        foreach ($videoldRepository->findAll() as $video){
            $code = $video->getCodeArticle();
            $article = $articleRepository->findOneBy(['codeArticle' => $code]);
            $entite = $entiteRepository->findOneBy(['nom' => $video->getNomAuteur()]);
            if($article && $entite){
                $article->addEntite($entite);
                $em->persist($article);
                $em->flush();
            }
        }

        return $this->redirectToRoute("index");
    }

    /**
     * test xml
     * @Route("/testxml", name="testxml", methods={"GET","POST"}, options={"expose" = true})
     * @param ArticleRepository $articleRepository
     * @param EntityManagerInterface $em
     * @return Response
     * @throws Exception
     * @IsGranted("ROLE_ADMIN")
     */
    public function testxml(ArticleRepository $articleRepository, EntityManagerInterface $em){
        foreach ($articleRepository->findAll() as $article){
            if($article->getGencode() != ""){
                $xml = simplexml_load_file("https://www.dvdfr.com/api/search.php?gencode=".$article->getGencode());
                $xml = $xml->dvd;
                $json = json_encode($xml);
                $array = json_decode($json,TRUE);
                $cover = $array['cover'] ?? null;
                $titre = $array['titres']['fr'] ?? null;
                $annee = $array['annee'] ?? null;
                if($cover != null) $article->setVignette($cover);
                if($titre != null) $article->setTitre($titre);
                if($annee != null) $article->setDatePublication(DateTime::createFromFormat('Y', $annee));
                $em->persist($article);
                $em->flush();
            }
        }

        return $this->redirectToRoute("index");
    }
    /**
     * transfert bdd
     * @Route("/transfertLivre", name="modifLivre", methods={"GET","POST"}, options={"expose" = true})
     * @return Response
     * @IsGranted("ROLE_ADMIN")
     * @throws Exception
     */
    public function transfertBDDLivre(LivreOldRepository $livreOldRepository,
                                      EntiteRepository $entiteRepository,
                                      CategorieRepository $categorieRepository,
                                      TrancheAgeRepository $trancheAgeRepository,
                                      StatutRepository $statutRepository,
                                      GenreRepository $genreRepository,
                                      UserRepository $userRepository,
                                      TypeActionRepository $typeActionRepository,
                                      TypeEnregistrementRepository $typeEnregistrementRepository,
                                      StatutEnregistrementRepository $statutEnregistrementRepository,
                                      EnregistrementRepository $enregistrementRepository,
                                      EntityManagerInterface $em,
                                      TypeEntiteRepository $typeEntiteRepository)
    {
        $admin = $userRepository->find(2);
        $typeEmprunt = $typeEnregistrementRepository->find(2);
        $typeAchat= $typeEnregistrementRepository->find(1);
        $livres= $livreOldRepository->findAll();
        $typeAuteur = $typeEntiteRepository->find(1);
        $categorieLivre = $categorieRepository->find(1);
        $tranche = $trancheAgeRepository->find(1);
        $statutEmprunte = $statutEnregistrementRepository->find(5);
        $statutAchete = $statutEnregistrementRepository->find(6);
        $statutRendu = $statutEnregistrementRepository->find(7);
        $empruntable = $statutRepository->find(1);
        $donne = $statutRepository->find(4);
        $emprunte = $statutRepository->find(6);
        $perdu = $statutRepository->find(3);
        $vendu = $statutRepository->find(5);

        $obtention = $typeActionRepository->find(1); // achat
        $creation = $typeActionRepository->find(2); // mise en bdd
        $modification = $typeActionRepository->find(3);
        $declassement = $typeActionRepository->find(4);

        $sport = $genreRepository->find(3);

        $em->getConnection()->getConfiguration()->setSQLLogger(null);

        foreach ($livres as $livre) {
            $nom = $livre->getNomAuteur();
            $prenom = $livre->getPrenomAuteur();
            $auteur = NULL;
            if(!$entiteRepository->findBy(['nom' => $nom]) && !preg_match('~[0-9]+~', $nom)){
                $auteur = new Entite();
                $auteur->setTypeEntite($typeAuteur);
                $auteur->setNom($nom);
                $auteur->setPrenom($prenom);
                $em->persist($auteur);
                $em->flush();
            }
            $article = new Article();
            $article->setCategorie($categorieLivre);

            if($auteur != NULL) $article->addEntite($auteur);
            $article->setTrancheAge($tranche);

            if($livre->getCodeEtat() === 'AC'){
                $article->setStatut($empruntable);
                if($livre->getSortie() === 'S'){
                    $article->setStatut($emprunte);
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement(new \DateTime());
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutEmprunte); // statut emprunte
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $date = new \DateTime();
                    $date->add(new \DateInterval('P'.$categorieLivre->getDureeEmpruntMax().'D'));
                    $enregistrement->setDateRenduTheorique($date);
                    $enregistrement->setNoCommande(2);
                    $em->persist($enregistrement);
                }
                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();
                for($i = 0; $i < $livre->getNbSortie() ; $i++){
                    $enregistrement = new Enregistrement();
                    $enregistrement->setArticle($article);
                    $enregistrement->setDateEnregistrement($date);
                    $enregistrement->setDateRenduTheorique( $dateRendu);
                    $enregistrement->setDateRendu($dateRendu);
                    $enregistrement->setDatePreparationFini($datePrepFini);
                    $enregistrement->setTypeEnregistrement($typeEmprunt); // type Emprunt
                    $enregistrement->setStatutEnregistrement($statutRendu); // statut rendu
                    $enregistrement->addStaff($admin);
                    $enregistrement->setUtilisateur($admin);
                    $enregistrement->setNoCommande(2);
                    $em->persist($enregistrement);
                }
            }else if ($livre->getCodeEtat() === ('PERDU') ){
                $article->setStatut($perdu);
            }else if ($livre->getCodeEtat() === 'DON'){
                $article->setStatut($donne);
            }else{
                $article->setStatut($vendu);

                $dateRendu = new \DateTime();
                $dateRendu->add(new \DateInterval('P10D'));
                $datePrepFini = new \DateTime();
                $datePrepFini->add(new \DateInterval('P5D'));
                $date = new \DateTime();

                $enregistrement = new Enregistrement();
                $enregistrement->setArticle($article);
                $enregistrement->setDateEnregistrement($date);
                $enregistrement->setDateRenduTheorique( $dateRendu);
                $enregistrement->setDateRendu($dateRendu);
                $enregistrement->setDatePreparationFini($datePrepFini);
                $enregistrement->setTypeEnregistrement($typeAchat); // type Emprunt
                $enregistrement->setStatutEnregistrement($statutAchete); // statut rendu
                $enregistrement->addStaff($admin);
                $enregistrement->setUtilisateur($admin);
                $enregistrement->setNoCommande(2);
                $em->persist($enregistrement);
            }

            // création du livre dans la bdd
            $action = new Action();
            $date = $livre->getDateCreation();
            if($date == NULL){
                $date= $livre->getDateModif();
                if($date == NULL){
                    $date = $livre->getDateRetrait();
                }
            }
            $action->setStaff($admin);
            $action->setDate($date);
            $action->setTypeAction($creation);
            $article->addAction($action);
            $em->persist($action);

            // modification du livre dans la bdd
            $dateModif = $livre->getDateModif();
            if ($dateModif != NULL){
                $action = new Action();
                $action->setStaff($admin);
                $action->setDate($dateModif);
                $action->setTypeAction($modification);
                $article->addAction($action);
                $em->persist($action);
            }

            // obtention du livre
            $dateAchat = $livre->getDateAchat();
            if ($dateAchat!= NULL){
                $action = new Action();
                $action->setDate($dateAchat);
                $action->setStaff($admin);
                $action->setTypeAction($obtention);
                $article->addAction($action);
                $em->persist($action);
            }

            // déclassement du livre
            $dateModif = $livre->getDateRetrait();
            if ($dateModif != NULL) {
                $action = new Action();
                $action->setDate($dateModif);
                $action->setStaff($admin);
                $action->setTypeAction($declassement);
                $article->addAction($action);
                $em->persist($action);
            }

            $article->setGenre($sport);
            $article->setGencode($livre->getGencode());
            $article->setCodeArticle($livre->getCodeArticle());
            $article->setTitre($livre->getTitre());
            $article->setMontantObtention($livre->getPrixAchat());
            $article->setMontantCaution(5.30);
            $article->setMontantVente(5.40);
            $article->setNumerique(false);
            $em->persist($article);
            $em->flush();
        }

        return $this->redirectToRoute("index");
    }
}
