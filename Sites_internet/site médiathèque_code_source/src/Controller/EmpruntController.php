<?php

namespace App\Controller;

use App\Repository\ActionRepository;
use App\Repository\EnregistrementRepository;
use App\Repository\StatutEnregistrementRepository;
use App\Repository\StatutRepository;
use App\Repository\TypeActionRepository;
use App\Repository\TypeEnregistrementRepository;
use App\Repository\UserRepository;
use App\Service\MailerService;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmpruntController extends AbstractController
{
    /**
     * Histortique des emprunts du client
     * @Route("/emprunts/historique", name="emprunts_historique")
     */
    public function empruntHistorique(EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository $statutEnregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findBy(['utilisateur'=>$this->getUser(), 'statutEnregistrement'=>$statutEnregistrementRepository->findAll()],['dateRendu'=>'DESC']);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/emprunts_client.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'historique'
        ]);
    }

    /**
     * Les Emprunts en cours du client
     * @Route("/emprunts/actif", name="emprunts_actif")
     */
    public function empruntActif(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $user = $this->getUser();
        $emprunts = $enregistrementRepository->findEmpruntActifBy($user);
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/emprunts_client.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'en cours'
        ]);
    }

    /**
     * @Route("/emprunts/gestion/actif", name="gestion_actif_emprunts")
     */
    public function empruntGestionActif(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findAllEmpruntActif();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_emprunts.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'en cours'
        ]);
    }

    /**
     * @Route("/emprunts/gestion/historique", name="gestion_historique_emprunts")
     */
    public function empruntGestionHistorique(EnregistrementRepository $enregistrementRepository, TypeEnregistrementRepository $typeEnregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findHistoryEmprunt();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_emprunts.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'historique'
        ]);
    }

    /**
     * @Route("/commande/gestion/actif", name="gestion_actif_commande")
     */
    public function commandeGestionActif(EnregistrementRepository $enregistrementRepository,PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findAllAchatActif();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_commandes.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'en cours'
        ]);
    }

    /**
     * @Route("/commande/gestion/historique", name="gestion_historique_commande")
     */
    public function commandeGestionHistorique(EnregistrementRepository $enregistrementRepository, PaginatorInterface $paginator, Request $request)
    {
        $emprunts = $enregistrementRepository->findHistoryCommande();
        $empruntsPages = $paginator ->paginate(
            $emprunts,
            $request->query->getInt('page',1),
            10
        );

        return $this->render('emprunt/gestion_commandes.html.twig', [
            'emprunts' => $empruntsPages,
            'nbEmprunt' => count($emprunts),
            'statut' => 'historique'
        ]);
    }


    /**
     * @Route("/emprunts/{id}/statut/pret", name="changer_statut_pret")
     */
    public function empruntChangerPret(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository,
                                       UserRepository $userRepository, MailerService $mailerService)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'pret']));
        $date = new \DateTime('now');
        $emprunts->setDatePreparationFini($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_achat"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendu']));
        }

        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        $benevoles = $userRepository->findByRole("ROLE_BENEVOLE");

        $this->sendMail($mailerService, $emprunts->getUtilisateur(), $emprunts );
        // Envoyer un mail à tous les bénévoles
        foreach ($benevoles as $benevole){
            $this->sendMail($mailerService, $benevole, $emprunts);
        }

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/emprunte", name="changer_statut_emprunte")
     */
    public function empruntChangerEmprunt(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository,
                                       UserRepository $userRepository, MailerService $mailerService, ActionRepository $actionRepository, TypeActionRepository $typeActionRepository)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'emprunte']));
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_emprunt"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'emprunte']));
        }


        // Règle d'emprunt : re-calcule la date de rendu théorique
        $action = $actionRepository->findOneBy(['article' => $emprunts->getArticle(), 'typeAction' => $typeActionRepository->findOneBy(['libelle' => 'creation'])]);
        $categorie = $emprunts->getArticle()->getCategorie();
        $dateAjd = new \DateTime('now');
        $dateCreation = $action->getDate();
        $finNouveaute = $dateCreation->add(new \DateInterval('P' . $categorie->getDureeNouveaute() . 'D'));
        $dateRendu = new \DateTime('now');
        if ($finNouveaute >= $dateAjd) {
            //nouveauté
            $nbJours = $categorie->getDureeEmpruntMaxNouveaute();
        } else {
            // pas nouveauté
            $nbJours = $categorie->getDureeEmpruntMax();
        }
        $dateRendu->add(new \DateInterval('P' . $nbJours . 'D')); // + $nbJours
        $emprunts->setDateRenduTheorique($dateRendu);

        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->flush();

        $benevoles = $userRepository->findByRole("ROLE_BENEVOLE");

        $this->sendMail($mailerService, $emprunts->getUtilisateur(), $emprunts );
        // Envoyer un mail à tous les bénévoles
        foreach ($benevoles as $benevole){
            $this->sendMail($mailerService, $benevole, $emprunts);
        }

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/achete", name="changer_statut_achete")
     */
    public function empruntChangerAchete(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository,
                                       UserRepository $userRepository, MailerService $mailerService)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'achete']));
        $article = $emprunts->getArticle();
        if($article->getStatut() == "reserve_achat"){
            $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendu']));
        }

        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        $benevoles = $userRepository->findByRole("ROLE_BENEVOLE");

        $this->sendMail($mailerService, $emprunts->getUtilisateur(), $emprunts );
        // Envoyer un mail à tous les bénévoles
        foreach ($benevoles as $benevole){
            $this->sendMail($mailerService, $benevole, $emprunts);
        }

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * @Route("/emprunts/{id}/statut/rendu", name="changer_statut_rendu")
     */
    public function empruntChangerRendu(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository,
                                       UserRepository $userRepository, MailerService $mailerService)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'rendu']));
        $date = new \DateTime('now');
        $emprunts->setDateRendu($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "emprunte") {
            $article->setStatut($statutRepository->findOneBy(['libelle' => 'empruntable']));
        }
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        $benevoles = $userRepository->findByRole("ROLE_BENEVOLE");

        $this->sendMail($mailerService, $emprunts->getUtilisateur(), $emprunts );
        // Envoyer un mail à tous les bénévoles
        foreach ($benevoles as $benevole){
            $this->sendMail($mailerService, $benevole, $emprunts);
        }

        return $this->redirectToRoute('gestion_actif_emprunts');
    }
    /**
     * @Route("/emprunts/{id}/statut/perdu", name="changer_statut_perdu")
     */
    public function empruntChangerPerdu(Request $request, EnregistrementRepository $enregistrementRepository, StatutEnregistrementRepository  $statutEnregistrementRepository, StatutRepository $statutRepository,
                                       UserRepository $userRepository, MailerService $mailerService)
    {
        $id = $request->get('id');
        $emprunts = $enregistrementRepository->find($id);
        $emprunts->setStatutEnregistrement($statutEnregistrementRepository->findOneBy(['libelle'=>'perdu']));
        $date = new \DateTime('now');
        $emprunts->setDateRendu($date);
        $article = $emprunts->getArticle();
        if($article->getStatut() == "emprunte") {
            $article->setStatut($statutRepository->findOneBy(['libelle' => 'perdu']));
        }
        $this->getDoctrine()->getManager()->persist($article);
        $this->getDoctrine()->getManager()->persist($emprunts);
        $this->getDoctrine()->getManager()->flush();

        $benevoles = $userRepository->findByRole("ROLE_BENEVOLE");

        $this->sendMail($mailerService, $emprunts->getUtilisateur(), $emprunts );
        // Envoyer un mail à tous les bénévoles
        foreach ($benevoles as $benevole){
            $this->sendMail($mailerService, $benevole, $emprunts);
        }

        return $this->redirectToRoute('gestion_actif_emprunts');
    }

    /**
     * Envoier un mail au client
     * @param MailerService $mailerService
     * @param $user
     * @param $categorie
     * @param $enregistrement
     * @param $totalAchat
     * @param $dateAjd
     * @throws \Symfony\Component\Mailer\Exception\TransportExceptionInterface
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    private function sendMail(MailerService $mailerService, $user, $enregistrement){
        if ($enregistrement != null){
            $categorie = $enregistrement->getArticle()->getCategorie()->getLibelle();
            $statut = $enregistrement->getStatutEnregistrement()->getLibelle();
            if ($user->getEmailPro() == null and $user->getEmailPerso() == null){
                $mailerService->send(
                    $categorie."",
                    $enregistrement->getArticle()->getTitre()." est ".$statut,
                    "no-reply@mediathalesbrest.com",
                    $user->getEmailRecup()."",
                    "users/profil/mail/mail_statut_enregistrement.html.twig",
                    ['enregistrement' => $enregistrement, 'statut'=>$statut]
                );
            } else {
                if ($user->getNotificationPro()){
                    $mailerService->send(
                        $categorie."",
                        $enregistrement->getArticle()->getTitre()." est ".$statut,
                        "no-reply@mediathalesbrest.com",
                        $user->getEmailPro()."",
                        "users/profil/mail/mail_statut_enregistrement.html.twig",
                        ['enregistrement' => $enregistrement, 'statut'=>$statut]
                    );
                }
                if ($user->getNotificationPerso()){
                    $mailerService->send(
                        $categorie."",
                        $enregistrement->getArticle()->getTitre()." est ".$statut,
                        "no-reply@mediathalesbrest.com",
                        $user->getEmailPerso()."",
                        "users/profil/mail/mail_statut_enregistrement.html.twig",
                        ['enregistrement' => $enregistrement, 'statut'=>$statut]
                    );
                }
            }
        }
    }
}