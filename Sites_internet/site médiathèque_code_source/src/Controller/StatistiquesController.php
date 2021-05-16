<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Action;
use App\Entity\Article;
use App\Entity\Avis;
use App\Entity\Categorie;
use App\Entity\Enregistrement;
use App\Entity\Entite;
use App\Entity\Favoris;
use App\Entity\Genre;
use App\Entity\StatutEnregistrement;
use App\Entity\TypeEntite;
use App\Form\AvisFormType;
use App\Form\BibliothequeType;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\AvisRepository;
use App\Repository\BibliothequeRepository;
use App\Repository\CategorieRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\EntiteRepository;
use App\Repository\FavorisRepository;
use App\Repository\GenreRepository;
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

class StatistiquesController extends AbstractController
{
    /**
     * @Route("/admin/statistiques", name="admin_statistiques", methods={"GET", "POST"})
     * @param Request $request
     * @param EnregistrementRepository $enregistrementRepository
     * @param StatutRepository $statutRepository
     * @param PaginatorInterface $paginator
     * @param Filtre $filtre
     * @param GenreRepository $genreRepository
     * @param TrancheAgeRepository $ageRepository
     * @param CategorieRepository $categorieRepo
     * @param SessionInterface $session
     * @param ArticleRepository $ar
     * @return Response
     */
    public function statistiques(Request $request, EnregistrementRepository $enregistrementRepository, StatutRepository $statutRepository,
                                 PaginatorInterface $paginator, Filtre $filtre, GenreRepository $genreRepository, TrancheAgeRepository $ageRepository,
                                 CategorieRepository $categorieRepo, SessionInterface $session, ArticleRepository $ar,  Nouveaute $new, ActionRepository $actionsRepo, RubriqueRepository $rubriqueRepository)
    {
        $allArticles =  $enregistrementRepository->getNbEmpruntByArticle();

        return $this->render('statistiques/statistiques.html.twig', [
            'categories' => $categorieRepo->findAll(),
            'genres' => $genreRepository->findAll(),
            'articles'=>$filtre->filtreStatistique($request, true, $categorieRepo, $session, $ar, $genreRepository),
            'donnees' => $filtre->filtreStatistique($request, false, $categorieRepo, $session, $ar, $genreRepository),
            'allArticles'=>$allArticles,
        ]);
    }
}
