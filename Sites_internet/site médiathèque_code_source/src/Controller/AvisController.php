<?php


namespace App\Controller;


use App\Repository\ArticleRepository;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/avis")
 */
class AvisController extends AbstractController
{
    public function getTotalCommentairesByArticle($idArticle,AvisRepository $avisRepository, ArticleRepository $articleRepository)
    {
        // trouves tous les avis par 1 article
        $CommentairesByArticle = $avisRepository->findBy(['article' => $articleRepository->find($idArticle)]);
        // compte le nombre d'avis sur cet article
        $nbCommentaires = count($CommentairesByArticle);
        return $this->render('avis/totalCommentaires.html.twig', ['total' => $nbCommentaires]);
    }

}