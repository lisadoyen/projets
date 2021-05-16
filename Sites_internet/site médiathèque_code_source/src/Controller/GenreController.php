<?php

namespace App\Controller;

use App\Entity\Genre;
use App\Form\GenreType;
use App\Repository\CategorieRepository;
use App\Repository\GenreRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Sodium\add;

/**
 * @Route("/genre")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE') or is_granted('ROLE_ADHERENT')")
 */
class GenreController extends AbstractController
{
    public function getLivreGenres(GenreRepository $genreRepository)
    {
        return $this->render('genres/_genre_submenu.html.twig', ['genres' => $this->getGenreByCategorie("livre")]);
    }
    public function getVideoGenres(GenreRepository $genreRepository)
    {
        return $this->render('genres/_genre_submenu.html.twig', ['genres' => $this->getGenreByCategorie("video")]);
    }
    public function getMusiqueGenres(GenreRepository $genreRepository)
    {
        return $this->render('genres/_genre_submenu.html.twig', ['genres' => $this->getGenreByCategorie("musique")]);
    }
    public function getJeuGenres(GenreRepository $genreRepository)
    {
        return $this->render('genres/_genre_submenu.html.twig', ['genres' => $this->getGenreByCategorie("jeu")]);
    }

    public function getGenreByCategorie($libelleCategorie){
        $genres = $this->getDoctrine()->getRepository(Genre::class)->findAll();
        $genresCategorie = array();
        foreach ($genres as $genre){
            $categories = $genre->getCategories();
            foreach ($categories as $categorie){
                if($categorie->getLibelle() == $libelleCategorie){
                    array_push($genresCategorie,$genre);
                }
            }
        }
        return $genresCategorie;
    }

    /**
     * @Route("/", name="genre_index", methods={"GET"})
     */
    public function index(GenreRepository $genreRepository): Response
    {
        return $this->render('genre/index.html.twig', [
            'genres' => $genreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="genre_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $genre = new Genre();
        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // many to many
            foreach ($genre->getCategories() as $categorie) {
                $categorie->addGenre($genre);
                $entityManager->persist($categorie);
            }

            $entityManager->persist($genre);
            $entityManager->flush();

            return $this->redirectToRoute('genre_index');
        }

        return $this->render('genre/new.html.twig', [
            'genre' => $genre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="genre_show", methods={"GET"})
     */
    public function show(Genre $genre): Response
    {
        return $this->render('genre/show.html.twig', [
            'genre' => $genre,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="genre_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Genre $genre): Response
    {
        // categories actuellement selectionnees
        $categoriesCurr = new ArrayCollection();
        foreach ($genre->getCategories() as $categorie) {
            $categoriesCurr->add($categorie);
        }

        $form = $this->createForm(GenreType::class, $genre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // supprime les categories decochees
            foreach ($categoriesCurr as $categorie) {
                if (!$genre->getCategories()->contains($categorie)) {
                    $categorie->removeGenre($genre);
                    $entityManager->persist($categorie);
                }
            }

            // ajoute les nouvelles
            foreach ($genre->getCategories() as $categorie) {
                $categorie->addGenre($genre);
                $entityManager->persist($categorie);
            }

            $entityManager->persist($genre);
            $entityManager->flush();

            return $this->redirectToRoute('genre_index');
        }

        return $this->render('genre/edit.html.twig', [
            'genre' => $genre,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="genre_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Genre $genre, CategorieRepository $rep): Response
    {
        if ($this->isCsrfTokenValid('delete'.$genre->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();

            // many to many
            foreach ($rep->findAll() as $categorie) {
                if ($categorie->getGenres()->contains($genre)) {
                    $categorie->removeGenre($genre);
                    $entityManager->persist($categorie);
                }
            }

            $entityManager->remove($genre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('genre_index');
    }
}
