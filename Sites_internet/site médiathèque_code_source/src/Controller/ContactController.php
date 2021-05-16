<?php

namespace App\Controller;

use App\Data\Contact;
use App\Form\ContactType;
use App\Service\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{

    /**
     * @Route("/contact", name="contact", methods={"GET"})
     */
    public function search(Request $request, MailerService $mailerService) {
        $data = new Contact();
        $form = $this->createForm(ContactType::class, $data);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $nom = $data->nom;
            $prenom = $data->prenom;
            $mail = $data->email;
            $contenu = $data->contenu;

            $mailerService->send("main",
                "Contact de ". $nom . " " . $prenom,
                "no-reply@mediathalesbrest.com",
                "mediathequetest0@gmail.com",
                "contact/mail_contact.html.twig",
                ['nom' => $nom, 'prenom' => $prenom, "email" => $mail, 'contenu' => $contenu]
            );

            $this->addFlash('success', 'Votre message a été transmit, vous receverez une réponse à l\'adresse suivante : ' . $request->get('email'));
            return $this->redirectToRoute('index');
        }

        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
            'refer' => $_SERVER['HTTP_REFERER']
        ]);
    }
}
