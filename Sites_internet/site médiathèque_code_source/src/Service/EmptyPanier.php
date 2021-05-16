<?php


namespace App\Service;

use App\Repository\PanierRepository;
use App\Repository\StatutRepository;
use Doctrine\ORM\EntityManagerInterface;

class EmptyPanier
{

    /**
     * @var StatutRepository
     */
    private $statutRepo;
    /**
     * @var PanierRepository
     */
    private $panierRepo;
    /**
     *
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * EmptyPanier constructor.
     * @param StatutRepository $statutRepository
     * @param PanierRepository $panierRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(StatutRepository $statutRepository, PanierRepository $panierRepository, EntityManagerInterface $entityManager)
    {
        $this->panierRepo = $panierRepository;
        $this->statutRepo = $statutRepository;
        $this->em = $entityManager;
    }

    public function emptyPanier($user)
    {
        $panierRepository = $this->panierRepo;
        $statutRepository = $this->statutRepo;

        $panier = $panierRepository->findBy(['utilisateur'=>$user]);

        foreach ($panier as $lignePanier){
            $article = $lignePanier->getArticle();
            $statut = $lignePanier->getArticle()->getStatut()->getLibelle();

            if ($statut == "reserve_emprunt") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'empruntable']));
            } else if ($statut == "reserve_achat") {
                $article->setStatut($statutRepository->findOneBy(['libelle'=>'vendable']));
            }

            $this->em->persist($article);
            $this->em->remove($lignePanier);
            $this->em->flush();
        }
    }
}