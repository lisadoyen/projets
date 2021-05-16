<?php

namespace App\Controller;

use App\Entity\Rubrique;
use App\Form\RubriqueType;
use App\Repository\CategorieRepository;
use App\Repository\RubriqueRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/rubrique")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE')")
 */
class RubriqueController extends AbstractController
{
    /**
     * @Route("/", name="rubrique_index", methods={"GET"})
     */
    public function index(RubriqueRepository $rubriqueRepository): Response
    {
        return $this->render('rubrique/index.html.twig', [
            'rubriques' => $rubriqueRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="rubrique_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $rubrique = new Rubrique();
        $form = $this->createForm(RubriqueType::class, $rubrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // many to many
            foreach ($rubrique->getCategories() as $categorie) {
                $categorie->addRubrique($rubrique);
                $entityManager->persist($categorie);
            }

            $entityManager->persist($rubrique);
            $entityManager->flush();

            return $this->redirectToRoute('rubrique_index');
        }

        return $this->render('rubrique/new.html.twig', [
            'rubrique' => $rubrique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="rubrique_show", methods={"GET"})
     */
    public function show(Rubrique $rubrique): Response
    {
        return $this->render('rubrique/show.html.twig', [
            'rubrique' => $rubrique,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="rubrique_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Rubrique $rubrique): Response
    {
        // categories actuellement selectionnees
        $categoriesCurr = new ArrayCollection();
        foreach ($rubrique->getCategories() as $categorie) {
            $categoriesCurr->add($categorie);
        }

        $form = $this->createForm(RubriqueType::class, $rubrique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            // supprime les categories decochees
            foreach ($categoriesCurr as $categorie) {
                if (!$rubrique->getCategories()->contains($categorie)) {
                    $categorie->removeRubrique($rubrique);
                    $entityManager->persist($categorie);
                }
            }

            // ajoute les nouvelles
            foreach ($rubrique->getCategories() as $categorie) {
                $categorie->addRubrique($rubrique);
                $entityManager->persist($categorie);
            }

            $entityManager->persist($rubrique);
            $entityManager->flush();

            return $this->redirectToRoute('rubrique_index');
        }

        return $this->render('rubrique/edit.html.twig', [
            'rubrique' => $rubrique,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="rubrique_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Rubrique $rubrique, CategorieRepository $rep): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rubrique->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();

            // many to many
            foreach ($rep->findAll() as $categorie) {
                if ($categorie->getRubriques()->contains($rubrique)) {
                    $categorie->removeRubrique($rubrique);
                    $entityManager->persist($categorie);
                }
            }

            $entityManager->remove($rubrique);
            $entityManager->flush();
        }

        return $this->redirectToRoute('rubrique_index');
    }
}
