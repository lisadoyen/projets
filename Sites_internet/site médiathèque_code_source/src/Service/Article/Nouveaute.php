<?php
namespace App\Service\Article;

use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class Nouveaute
{
    /** Fonction qui permet de transformer une date,
     * sert à calculer la date en fonction de la durée pour la nouveauté
     * @param $date
     * @param $nombre_jour
     * @return false|string
     */
    function transformDate($date,$nombre_jour) {

        $year = (int)substr($date, 0, 4);
        $month = (int)substr($date, 5, 2);
        $day = (int)substr($date, 8, 2);

        // récupère la date du jour
        $date_string = mktime(0,0,0,$month,$day,$year);

        // Supprime les jours
        $timestamp = $date_string - ($nombre_jour * 86400);
        $nouvelle_date = date("d/m/Y", $timestamp);

        // pour afficher
        return $nouvelle_date;

    }

    /**
     * fonctions qui permet de déterminer si un article est nouveau ou non
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param int $max nombre de nouveaute max a recherche
     * @return int|mixed|string
     */
    function findArticleNouveaute_AvecIdCategorie(CategorieRepository $categorieRepo,ActionRepository $actionsRepo,
                                  $max, $idCategorie){

        $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
        $today = $dateTodayConvert->format('Y-m-d');
        $categorie = $categorieRepo->find($idCategorie); // selection de la catégorie
        $nbJourNouveaute = $categorie->getDureeNouveaute(); // récupération nb nouveauté en fonction de l'id de la catégorie
        $dateDureeMax = $this->transformDate($today, 500); // TODO 500 pour test => mettre nbJourNouveaute normalement
        $nouveaute = $actionsRepo->findIsNouveaute($dateDureeMax,$max);
        return $nouveaute;
    }

    /**
     * fonctions qui permet de déterminer si un article est nouveau ou non
     * @param CategorieRepository $categorieRepo
     * @param ActionRepository $actionsRepo
     * @param int $max nombre de nouveaute max a recherche
     * @return int|mixed|string
     */
    function findArticleNouveaute(CategorieRepository $categorieRepo,ActionRepository $actionsRepo,
                                  $max){

        $dateTodayConvert=\DateTime::createFromFormat('d/m/Y', \date("d/m/Y"));
        $today = $dateTodayConvert->format('Y-m-d');
        $categorie = $categorieRepo->findAll(); // selection de la catégorie
        foreach ($categorie as $cat){
            $nbJourNouveaute = $cat->getDureeNouveaute(); // récupération nb nouveauté en fonction de l'id de la catégorie

        }
        $dateDureeMax = $this->transformDate($today, 500); // TODO 500 pour test => mettre nbJourNouveaute normalement
        $nouveaute = $actionsRepo->findIsNouveaute($dateDureeMax,$max);
        return $nouveaute;
    }
}