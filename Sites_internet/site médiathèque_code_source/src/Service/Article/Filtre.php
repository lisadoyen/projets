<?php
namespace App\Service\Article;

use App\Data\SearchData;
use App\Data\StatistiqueSearch;
use App\Repository\ActionRepository;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\GenreRepository;
use App\Repository\RubriqueRepository;
use App\Repository\StatutRepository;
use App\Repository\TrancheAgeRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class Filtre
{

    function filtreAvecCategorie_Genre($order, $type, $idGenre, $idCategorie,  $bool, GenreRepository $genreRepository, StatutRepository $statutRepository,
                           CategorieRepository $categorieRepo, SessionInterface $session, ArticleRepository $ar, EnregistrementRepository $enregistrementRepository) {

        $data = new SearchData();
        $genres = [];
        if($idGenre != null) {
            $genres[$idGenre] = $genreRepository->find($idGenre);
            $data->genre = $genres;
            $donnees['genres'] = $genres;
        }
        $categories = [];
        if($idCategorie != null) {
            $categories[$idCategorie] = $categorieRepo->find($idCategorie);
            $data->categorie = $categories;
            $donnees['categories'] = $categories;
        }
        $session->set('donnees', null);
        $statuts = $statutRepository->findAll();
        $data->statut = $statuts;
        $donnees['statuts'] = $statuts;
        $session->set('donnees', $donnees);
        if (!empty($donnees)) {
            $donnees = $session->get('donnees');
            if($idGenre != null) $data->genre = $donnees['genres'];
            if($idCategorie != null) $data->categorie = $donnees['categories'];
        }
        if($bool == true)
            return $ar->findSearch($data, $order, $type,$enregistrementRepository);
        else
            return $donnees;
    }

    function filtre(Request $request,$order, $type, $bool,  GenreRepository $genreRepository,
                    CategorieRepository $categorieRepo, SessionInterface $session,
                    ArticleRepository $ar, StatutRepository $statutRepository, TrancheAgeRepository $ageRepository,
                    RubriqueRepository $rubriqueRepository, EnregistrementRepository $enregistrementRepository){

        $data = new SearchData();
        if ($request->getMethod() == 'POST') {
            if(isset($_POST['search'])) {
                $donnees['search'] = $_POST['search'];
                $data->q = $donnees['search'];
            }
            if(isset($_POST['dateMin'])) {
                $donnees['dateMin'] = $_POST['dateMin'];
                $data->dateMin = $donnees['dateMin'];
            }
            if(isset($_POST['dateMax'])) {
                $donnees['dateMax'] = $_POST['dateMax'];
                $data->dateMax = $donnees['dateMax'];
            }
            if(!empty($_POST['genres'])){
                $donnees['genres'] = $_POST['genres'];
                $genres = [];
                foreach ($donnees['genres'] as $id) {
                    $genres[$id] = $genreRepository->find($id);
                    $data->genre = $genres;
                    $donnees['genres'] = $genres;
                }
            }
            if(!empty($_POST['nouveaute'])){
                $donnees['nouveaute'] = $_POST['nouveaute'];
                $data->nouveaute = true;
            }
            if(!empty($_POST['categories'])) {
                $donnees['categories'] = $_POST['categories'];
                $categories = [];
                foreach ($donnees['categories'] as $id) {
                    $categories[$id] = $categorieRepo->find($id);
                    $data->categorie = $categories;
                    $donnees['categories'] = $categories;
                }
            }
            if(!empty($_POST['ages'])) {
                $donnees['ages'] = $_POST['ages'];
                $ages = [];
                foreach ($donnees['ages'] as $id) {
                    $ages[$id] = $ageRepository->find($id);
                    $data->age = $ages;
                    $donnees['ages'] = $ages;
                }
            }
            if(!empty($_POST['rubriques'])) {
                $donnees['rubriques'] = $_POST['rubriques'];
                $rubriques = [];
                foreach ($donnees['rubriques'] as $id) {
                    $rubriques[$id] = $rubriqueRepository->find($id);
                    $data->rubrique = $rubriques;
                    $donnees['rubriques'] = $rubriques;
                }
            }
            if(!empty($_POST['statuts'])) {
                $donnees['statuts'] = $_POST['statuts'];
                $statuts = [];
                foreach ($donnees['statuts'] as $id) {
                    if($id == 1){
                        array_push($donnees['statuts'], 6, 7);
                    }
                    if($id == 2){
                        array_push($donnees['statuts'], 8);
                    }
                }
                foreach ($donnees['statuts'] as $id) {
                    $statuts[$id] = $statutRepository->find($id);
                    $data->statut = $statuts;
                    $donnees['statuts'] = $statuts;
                }
            }
            if(isset($donnees))
                $session->set('donnees', $donnees);
            else
                $donnees=null;
        } else {
            // on remplie le filtre avec la session
            $donnees = $session->get('donnees');
            if (!empty($donnees)) {
                if(isset($donnees['search']))
                    $data->q = $donnees['search'];
                if(isset($donnees['dateMax']))
                    $data->dateMax = $donnees['dateMax'];
                if(isset($donnees['dateMin']))
                    $data->dateMin = $donnees['dateMin'];
                if (!empty($donnees['genres'])) {
                    $data->genre = $donnees['genres'];
                }
                if (!empty($donnees['categories'])) {
                    $data->categorie = $donnees['categories'];
                }
                if (!empty($donnees['rubriques'])) {
                    $data->rubrique = $donnees['rubriques'];
                }
                if (!empty($donnees['statuts'])) {
                    $data->statut = $donnees['statuts'];
                }
                if (!empty($donnees['ages'])) {
                    $data->age = $donnees['ages'];
                }
                if(!empty($donnees['nouveaute'])){
                    $data->nouveaute = true;
                }
            }
        }
        if($bool == true)
            return $ar->findSearch($data, $order, $type, $enregistrementRepository);
        else
            return $donnees;
    }


    function filtreStatistique(Request $request, $bool,
                    CategorieRepository $categorieRepo, SessionInterface $session,
                    ArticleRepository $ar, GenreRepository $genreRepository){

        $statistique = new StatistiqueSearch();
        if ($request->getMethod() == 'POST') {
            if(!empty($_POST['categories'])) {
                $donnees['categories'] = $_POST['categories'];
                $categories = [];
                foreach ($donnees['categories'] as $id) {
                    $categories[$id] = $categorieRepo->find($id);
                    $statistique->categorie = $categories;
                    $donnees['categories'] = $categories;
                }
            }
            if(!empty($_POST['genres'])){
                $donnees['genres'] = $_POST['genres'];
                $genres = [];
                foreach ($donnees['genres'] as $id) {
                    $genres[$id] = $genreRepository->find($id);
                    $statistique->genre = $genres;
                    $donnees['genres'] = $genres;
                }
            }
            if(isset($donnees))
                $session->set('donnees', $donnees);
            else
                $donnees=null;
        } else {
            // on remplie le filtre avec la session
            $donnees = $session->get('donnees');
            if (!empty($donnees)) {
                if (!empty($donnees['categories'])) {
                    $statistique->categorie = $donnees['categories'];
                }
                if (!empty($donnees['genres'])) {
                    $statistique->genre = $donnees['genres'];
                }
            }
        }
        if($bool == true)
            return $ar->findSearchStatistique($statistique);
        else
            return $donnees;
    }

}