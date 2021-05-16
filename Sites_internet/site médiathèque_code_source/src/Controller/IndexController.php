<?php

namespace App\Controller;

use App\Controller\Articles\ArticleController;
use App\Entity\Article;
use App\Repository\ActionRepository;
use App\Repository\AnnonceRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Service\Article\Nouveaute;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DependencyInjection\ControllerArgumentValueResolverPass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;

class IndexController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Request $request)
    {
        if($this->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('accueil');
        } else {
            return $this->redirectToRoute('security_login');
        }
    }

    /**
     * @Route("/accueil", name="accueil")
     * @param AnnonceRepository $ar
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param ArticleRepository $articleRepo
     * @param Nouveaute $new
     * @return Response
     */
    public function accueil(AnnonceRepository $ar, CategorieRepository $categorieRepo,
                            ActionRepository $actionsRepo, ArticleRepository $articleRepo, Nouveaute $new)
    {

        return $this->render('accueil.html.twig', [
            'annonces' => $ar->findAll(),
            'nouveaute' => $nouveaute = $new->findArticleNouveaute($categorieRepo, $actionsRepo,3),
            'vente' => $articleRepo->findArticleVendable()
        ]);
    }

    /**
     * @Route("/nouveautes", name="nouveautes")
     */
    public function nouveaute(CategorieRepository $categorieRepo, ActionRepository $actionsRepo, Nouveaute $new, PaginatorInterface $paginator, Request $request)
    {
        $nouveaute = $new->findArticleNouveaute($categorieRepo, $actionsRepo,3);
        $nouveautePages = $paginator ->paginate(
            $nouveaute,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('articles/nouveaute.html.twig', [
            'nouveaute' => $nouveautePages
        ]);
    }

    /**
     * @Route("/vente", name="vente")
     */
    public function vente(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request)
    {
        $vente = $articleRepository->findArticleVendable();
        $ventePages = $paginator ->paginate(
            $vente,
            $request->query->getInt('page',1),
            10
        );
        return $this->render('articles/vente.html.twig', [
            'vente' => $ventePages
        ]);
    }

    /**
     * @Route("/crud_list", name="crud_list")
     */
    public function crudlist() {
        return $this->render('crud_list.html.twig');
    }
}