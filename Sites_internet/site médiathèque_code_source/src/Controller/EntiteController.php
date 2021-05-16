<?php

namespace App\Controller;

use App\Entity\Entite;
use App\Form\EntiteType;
use App\Repository\EntiteRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/entite")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE')")
 */
class EntiteController extends AbstractController
{
    /**
     * @Route("/", name="entite_index", methods={"GET"})
     */
    public function index(EntiteRepository $entiteRepository): Response
    {
        return $this->render('entite/index.html.twig', [
            'entites' => $entiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="entite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $entite = new Entite();
        $form = $this->createForm(EntiteType::class, $entite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($entite);
            $entityManager->flush();

            return $this->redirectToRoute('entite_index');
        }

        return $this->render('entite/new.html.twig', [
            'entite' => $entite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="entite_show", methods={"GET"})
     */
    public function show(Entite $entite): Response
    {
        return $this->render('entite/show.html.twig', [
            'entite' => $entite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="entite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Entite $entite): Response
    {
        $form = $this->createForm(EntiteType::class, $entite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('entite_index');
        }

        return $this->render('entite/edit.html.twig', [
            'entite' => $entite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="entite_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Entite $entite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$entite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($entite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('entite_index');
    }
}
