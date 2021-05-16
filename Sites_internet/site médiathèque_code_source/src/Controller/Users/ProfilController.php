<?php

namespace App\Controller\Users;

use App\Entity\Avis;
use App\Entity\Favoris;
use App\Entity\User;
use App\Form\AvatarProfilFormType;
use App\Form\AvisFormType;
use App\Form\CommentaireFormType;
use App\Form\EditProfilFormType;
use App\Repository\ArticleRepository;
use App\Repository\AvisRepository;
use App\Repository\FavorisRepository;
use App\Repository\PanierRepository;
use App\Service\FileUploader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException;
use Symfony\Component\Security\Core\User\UserInterface;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil", name="profil")
     */
    public function index(Request $request, EntityManagerInterface $manager, FileUploader $fileUploader)
    {
        $user = $this->getUser();
        $form = $this->createForm(AvatarProfilFormType::class,$user);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $avatar = $form->get('avatar')->getData();
            if ($avatar){
                $photoName = $fileUploader->upload($avatar);
                $user->setAvatar($photoName);
            }
            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'success',
                'Votre avatar à bien été mis à jour !'
            );
            return $this->redirectToRoute('profil');
        }
        return $this->render('users/profil/profil.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/profil/MesDonnees", name="mes_donnees")
     */
    public function donneePerso()
    {
        return $this->render('users/profil/rgpd_data.html.twig');
    }

    /**
     * @Route("/profil/data/download", name="mes_donnees_download")
     */
    public function mesDonneeDownload()
    {
        $pdfOption = new Options();
        $pdfOption->set('defaultFont','Roboto');
        $pdfOption->setIsRemoteEnabled(true);

        $dompdf = new Dompdf($pdfOption);
        $context = stream_context_create([
            'ssl' => [
                'verfify_peer' => FALSE,
                'verfify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        $html = $this->renderView('users/profil/download_data.html.twig');

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $file = $this->getUser()->getUsername().'-data-'.date('Y-m-d-H-i').'.pdf';

        $dompdf->stream($file,[
            'Attachement' => true
        ]);

        return new Response();
    }

    /**
     * @Route("/profil/edit", name="edit_profil")
     */
    public function editProfil(Request $request, EntityManagerInterface $manager, MailerInterface $mailer)
    {
        $user = $this->getUser();
        $form = $this->createForm(EditProfilFormType::class,$user);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            if (!$user->getNotificationPerso() && !$user->getNotificationPro()){
                $this->addFlash(
                    'danger',
                    'Vous devez activer au moins une notification (personnel ou professionnel) !'
                );
                return $this->render('users/profil/_profil_form.html.twig', [
                    'form' => $form->createView()
                ]);
            } else {
            $email = (new TemplatedEmail())
                ->from($user->getEmailRecup())//TODO lien avec l'adresse de la médiathèque
                ->to($user->getEmailPro())
                ->to($user->getEmailPerso())
                ->subject('Modification des notifications')
                ->htmlTemplate('users/profil/mail/mail_edit_notif.html.twig');
            $mailer->send($email);
        }
            $manager->persist($user);
            $manager->flush();
            $this->addFlash(
                'success',
                'Le profil à bien été mis à jour !'
            );
            return $this->redirectToRoute('profil');
        }
        return $this->render('users/profil/_profil_form.html.twig', [
            'form' => $form->createView()
        ]);
        
    }

    /**
     * @Route("/profil/edit/avatar/{color}", name="edit_color_avatar_profil")
     */
    public function editAvatarColorProfil(EntityManagerInterface $manager, $color = null)
    {
        $user = $this->getUser();
        $user->setAvatar("account_".$color.".png");

        $manager->persist($user);
        $manager->flush();
        $this->addFlash(
            'success',
            'Votre avatar à bien été mis à jour !'
        );
        return $this->redirectToRoute('profil');
    }

    /**
     * @Route("/profil/edit/password", name="edit_password_profil")
     */
    public function editPassword(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, MailerInterface $mailer){
        if($request->isMethod('POST')){
            $user = $this->getUser();
            if($request->request->get('password') == $request->request->get('password_confirm')){
                $user->setPassword($encoder->encodePassword($user,$request->request->get('password')));
                $email = (new TemplatedEmail())
                    //TODO identifiant, email, récup et lien avec l'adresse de la médiathèque
                    ->from($user->getEmailRecup())
                    ->to($user->getEmailRecup())
                    ->subject('Modification de profil')
                    ->htmlTemplate('users/profil/mail/mail_edit_profil.html.twig');
                $mailer->send($email);
                $manager->persist($user);
                $manager->flush();
                $this->addFlash(
                    'success',
                    'Le mot de passe à bien été modifié !'
                );
                return $this->redirectToRoute('profil');
            } else {
                $this->addFlash(
                    'danger',
                    'Les deux mots de passe doivent être identiques !'
                );
            }
        }
    	return $this->render('users/profil/_profil_form_reset_password.html.twig');
    }
}