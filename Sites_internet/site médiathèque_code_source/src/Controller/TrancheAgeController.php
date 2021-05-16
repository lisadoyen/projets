<?php

namespace App\Controller;

use App\Entity\TrancheAge;
use App\Form\TrancheAgeType;
use App\Repository\TrancheAgeRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/trancheAge")
 * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_BENEVOLE')")
 */
class TrancheAgeController extends AbstractController
{
    /**
     * @Route("/", name="tranche_age_index", methods={"GET"})
     */
    public function index(TrancheAgeRepository $trancheAgeRepository): Response
    {
        return $this->render('tranche_age/index.html.twig', [
            'tranche_ages' => $trancheAgeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="tranche_age_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $trancheAge = new TrancheAge();
        $form = $this->createForm(TrancheAgeType::class, $trancheAge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($trancheAge);
            $entityManager->flush();

            return $this->redirectToRoute('tranche_age_index');
        }

        return $this->render('tranche_age/new.html.twig', [
            'tranche_age' => $trancheAge,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tranche_age_show", methods={"GET"})
     */
    public function show(TrancheAge $trancheAge): Response
    {
        return $this->render('tranche_age/show.html.twig', [
            'tranche_age' => $trancheAge,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="tranche_age_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, TrancheAge $trancheAge): Response
    {
        $form = $this->createForm(TrancheAgeType::class, $trancheAge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tranche_age_index');
        }

        return $this->render('tranche_age/edit.html.twig', [
            'tranche_age' => $trancheAge,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="tranche_age_delete", methods={"DELETE"})
     */
    public function delete(Request $request, TrancheAge $trancheAge): Response
    {
        if ($this->isCsrfTokenValid('delete'.$trancheAge->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($trancheAge);
            $entityManager->flush();
        }

        return $this->redirectToRoute('tranche_age_index');
    }
}
