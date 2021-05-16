<?php


namespace App\Controller;


use App\Entity\Favoris;
use App\Repository\ArticleRepository;
use App\Repository\FavorisRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;


class FavorisController extends AbstractController
{
    public function isFavourite($idArticle, FavorisRepository $favorisRepository, ArticleRepository $articleRepository){
        $article = $articleRepository->find($idArticle);
        $favori = null;
        $favori = $favorisRepository->findOneBy(['utilisateur'=>$this->getUser(), 'article'=>$article]);
        return $this->render('favoris/isFavourite.html.twig', [
            'favoris' => $favori,
            'article' => $article
        ]);
    }

    /**
     * @Route("/favoris", name="favoris")
     */
    public function favoris(FavorisRepository $favorisRepository)
    {
        $favoris = $favorisRepository->findBy(['utilisateur' => $this->getUser()]);

        return $this->render('users/profil/favoris.html.twig', ['favoris' => $favoris]);
    }


    /**
     * @Route("/favoris/vider", name="vider_favoris", methods={"DELETE"})
     */
    public function viderFavoris( FavorisRepository $favorisRepository, Request $request)
    {
        if(!$this->isCsrfTokenValid('favoris_delete', $request->get('token'))) {
            throw new  InvalidCsrfTokenException('Invalid CSRF token delete favoris');
        }
        $user = $this->getUser();
        $favoris = $favorisRepository->findBy(['utilisateur'=>$user]);

        foreach ($favoris as $fav){
            $this->getDoctrine()->getManager()->remove($fav);
            $this->getDoctrine()->getManager()->flush();
        }

        //$this->addFlash('notif',"-1");

        return $this->redirectToRoute('favoris');
    }

    /**
     * @Route("/{page}/articles/{id}/remove/favoris", name="remove_article_favoris")
     */
    public function removeFavoris(SessionInterface $session, ArticleRepository $articleRepository,FavorisRepository $favorisRepository, $id=1, $page){
        $user = $this->getUser();
        $fav = $favorisRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $this->getDoctrine()->getManager()->remove($fav);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('notif-favoris',"-1");

        if($page == "list"){
            $donnees = $session->get('donnees');
            if(empty($donnees))
                return $this->redirectToRoute('articles_show');
            else {
                if(!empty($donnees['categorie']) && !empty($donnees['genre'])){
                    return $this->redirectToRoute('categories_id_genres_id_articles_show', ['idCategorie' => 1, 'idGenre'=>1]);
                }
                elseif(!empty($donnees['categorie'])){
                    return $this->redirectToRoute('categories_id_articles_show', ['idCategorie' => 1]);
                }
                 else {
                    return $this->redirectToRoute('articles_show');
                }
            }
        }
        if ($page == "detail") {
            return $this->redirectToRoute('article_details', ['id' => $id]);
        }
        return;
    }

    /**
     * @Route("/favoris/remove/{id}", name="remove_favoris")
     */
    public function removeFavoris2(ArticleRepository $articleRepository,FavorisRepository $favorisRepository, $id=1){
        $user = $this->getUser();
        $fav = $favorisRepository->findOneBy(['article' => $id, 'utilisateur'=>$user]);

        $this->getDoctrine()->getManager()->remove($fav);
        $this->getDoctrine()->getManager()->flush();

        $this->addFlash('notif-favoris',"-1");

        return $this->redirectToRoute('favoris');
    }

    /**
     * @Route("/{page}/favoris/add/{id}", name="add_article_favoris")
     */
    public function addFavoris(PaginatorInterface $paginator, SessionInterface $session, ArticleRepository $articleRepository, FavorisRepository  $favorisRepository,$id=1, $page){
        $user = $this->getUser();
        $article = $articleRepository->find($id);

        $verifFav = $favorisRepository->findOneBy(['utilisateur'=>$user,'article'=>$article]);

        if(!$verifFav){
            $favoris = new Favoris();
            $favoris->setArticle($article);
            $favoris->setUtilisateur($user);
            $this->getDoctrine()->getManager()->persist($favoris);
            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('notif-favoris',"+1");

            if($page == "list"){
                $donnees = $session->get('donnees');
                if(empty($donnees)) {
                    return $this->redirectToRoute('articles_show');
                }else {
                    if(!empty($donnees['categorie']) && !empty($donnees['genre'])){
                        return $this->redirectToRoute('categories_id_genres_id_articles_show', [ 'idCategorie' => 1, 'idGenre'=>1]);
                    }
                    elseif(!empty($donnees['categorie'])){
                        return $this->redirectToRoute('categories_id_articles_show', ['idCategorie' => 1]);
                    }else {
                        return $this->redirectToRoute('articles_show');
                    }
                }
            }
            if ($page == "detail") {
                return $this->redirectToRoute('article_details', ['id' => $id]);
            }
        }
    }
}