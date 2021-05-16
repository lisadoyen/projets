<?php

namespace App\Controller;

use App\Entity\TypeEntite;
use App\Form\TypeEntiteType;
use App\Repository\TypeEntiteRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/typeEntite")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE')")
 */
class TypeEntiteController extends AbstractController
{
    /**
     * @Route("/", name="type_entite_index", methods={"GET"})
     */
    public function index(TypeEntiteRepository $typeEntiteRepository): Response
    {
        return $this->render('type_entite/index.html.twig', [
            'type_entites' => $typeEntiteRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="type_entite_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $typeEntite = new TypeEntite();
        $form = $this->createForm(TypeEntiteType::class, $typeEntite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($typeEntite);
            $entityManager->flush();

            return $this->redirectToRoute('type_entite_index');
        }

        return $this->render('type_entite/new.html.twig', [
            'type_entite' => $typeEntite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_entite_show", methods={"GET"})
     */
    public function show(TypeEntite $typeEntite): Response
    {
        return $this->render('type_entite/show.html.twig', [
            'type_entite' => $typeEntite,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="type_entite_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TypeEntite $typeEntite): Response
    {
        $form = $this->createForm(TypeEntiteType::class, $typeEntite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('type_entite_index');
        }

        return $this->render('type_entite/edit.html.twig', [
            'type_entite' => $typeEntite,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="type_entite_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TypeEntite $typeEntite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$typeEntite->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($typeEntite);
            $entityManager->flush();
        }

        return $this->redirectToRoute('type_entite_index');
    }
}
