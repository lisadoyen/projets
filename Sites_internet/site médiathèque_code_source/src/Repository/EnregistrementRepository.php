<?php

namespace App\Repository;

use App\Entity\Enregistrement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Enregistrement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Enregistrement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Enregistrement[]    findAll()
 * @method Enregistrement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnregistrementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Enregistrement::class);
    }

    public function getNbEmpruntByArticle(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select('distinct count(a.id) as nbEmpruntParArticle, a.titre, c.libelle as categorie')
            ->join('e.article', 'a')
            ->join('a.categorie', 'c')
            ->join('e.typeEnregistrement', 'te')
            ->andWhere("te.libelle='emprunt'")
            ->groupBy('a.id')
            ->addOrderBy('nbEmpruntParArticle', 'DESC')
            ->setMaxResults(10);

        return $qb->getQuery()->getResult();
    }

    public function getNbEmpruntByArticleTrierPar($order){
        $qb = $this->createQueryBuilder('e');
        $qb ->select("distinct count(a.id) as nbEmpruntParArticle")
            ->join('e.article', 'a')
            ->join('e.typeEnregistrement', 'te')
            ->andWhere("te.libelle='emprunt'")
            ->groupBy('a.id')
            ->addOrderBy('nbEmpruntParArticle',$order);

        return $qb->getQuery()->getResult();

    }

    /**
     * récupérer tous les articles empruntable, emprunté, réservé_emprunt
     * @param $user
     * @return int|mixed|string
     */
    public function findEnregistrementByUser($user){
        $qb = $this->createQueryBuilder('e');
        $qb ->select('a.id')
            ->join('e.article', 'a')
            ->join('a.statut', 's')
            ->andWhere("e.utilisateur=$user")
            ->andWhere("s.libelle='emprunte' or s.libelle='reserve_emprunt' or s.libelle='empruntable'");

        return $qb->getQuery()->getResult();
    }

    public function findDerniereDateEnregistrement($user, $id){
        $qb = $this->createQueryBuilder('e');
        $qb ->select("max(e.dateEnregistrement)")
            ->andWhere("e.utilisateur='$user'")
            ->andWhere("e.article='$id'")
            ->groupBy('e.article');

        try {
            return $qb->getQuery()->getSingleScalarResult();
        } catch (NoResultException | NonUniqueResultException $e) {
            return null;
        }
    }

    public function findDateEnregistrementByArticle($user){
        $qb = $this->createQueryBuilder('e');
        $qb ->select('a.id, max(e.dateEnregistrement) as date')
            ->join('e.article', 'a')
            ->join('a.statut', 's')
            ->andWhere("e.utilisateur=$user")
            ->andWhere("e.article=a.id")
            ->andWhere("s.libelle='emprunte' or s.libelle='reserve_emprunt' or s.libelle='empruntable'")
            ->groupBy('e.article');

        return $qb->getQuery()->getResult();
    }

    /**
     * récupère tous les emprunts actifs : en attente, pret, emprunté selon un utilisateur
     * @return int|mixed|string
     */
    public function findEmpruntActifBy($user){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:StatutEnregistrement', 's')
            ->where('s.id = e.statutEnregistrement')
            ->join('App:TypeEnregistrement', 't')
            ->where('t.id = e.typeEnregistrement')
            ->join('App:User', 'u')
            ->where('u.id = e.utilisateur')
            ->andWhere('e.utilisateur = :utilisateur')
            ->setParameter('utilisateur', $user)
            ->andWhere("t.libelle ='emprunt'")
            ->andWhere("s.libelle !='rendu'")
            ->andWhere("s.libelle !='perdu'")
            ->andWhere("s.libelle !='telecharge'")
            ->addOrderBy('e.dateEnregistrement','DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * récupère tous les emprunts actifs : en attente, pret, emprunté pour tous les utilisateurs
     * @return int|mixed|string
     */
    public function findAllEmpruntActif(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:TypeEnregistrement', 't')
            ->where('t.id = e.typeEnregistrement')
            ->join('App:StatutEnregistrement', 's')
            ->andWhere('s.id = e.statutEnregistrement')
            ->andWhere("s.libelle !='rendu'")
            ->andWhere("s.libelle !='perdu'")
            ->andWhere("s.libelle !='telecharge'")
            ->andWhere("t.libelle ='emprunt'")
            ->addOrderBy('e.dateEnregistrement','DESC');

        return $qb->getQuery()->getResult();
    }
    /**
     * récupère tous les achats actifs : en attente, pret, emprunté pour tous les utilisateurs
     * @return int|mixed|string
     */
    public function findAllAchatActif(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:TypeEnregistrement', 't')
            ->where('t.id = e.typeEnregistrement')
            ->join('App:StatutEnregistrement', 's')
            ->andWhere('s.id = e.statutEnregistrement')
            ->andWhere("s.libelle !='rendu'")
            ->andWhere("s.libelle !='perdu'")
            ->andWhere("s.libelle !='telecharge'")
            ->andWhere("s.libelle !='achete'")
            ->andWhere("t.libelle ='achat'")
            ->addOrderBy('e.dateEnregistrement','DESC');

        return $qb->getQuery()->getResult();
    }

    /**
     * récupère tous l'historique de tous les emprunts : pour tous les utilisateurs
     * @return int|mixed|string
     */
    public function findHistoryEmprunt(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:TypeEnregistrement', 't')
            ->where('t.id = e.typeEnregistrement')
            ->join('App:StatutEnregistrement', 's')
            ->andWhere('s.id = e.statutEnregistrement')
            ->andWhere("s.libelle !='en attente'")
            ->andWhere("s.libelle !='pret'")
            ->andWhere("s.libelle !='telecharge'")
            ->andWhere("t.libelle ='emprunt'")
            ->addOrderBy('e.dateEnregistrement','DESC');

        return $qb->getQuery()->getResult();
    }
    /**
     * récupère tous l'historique de tous les achats : pour tous les utilisateurs
     * @return int|mixed|string
     */
    public function findHistoryCommande(){
        $qb = $this->createQueryBuilder('e');
        $qb ->select()
            ->join('App:TypeEnregistrement', 't')
            ->where('t.id = e.typeEnregistrement')
            ->join('App:StatutEnregistrement', 's')
            ->andWhere('s.id = e.statutEnregistrement')
            ->andWhere("s.libelle !='en attente'")
            ->andWhere("s.libelle !='pret'")
            ->andWhere("s.libelle !='telecharge'")
            ->andWhere("t.libelle ='achat'")
            ->addOrderBy('e.dateEnregistrement','DESC');

        return $qb->getQuery()->getResult();
    }

    /**
    * @return Enregistrement[] Returns an array of Enregistrement objects
     */

    public function findByCategorie($categorie, $date)
    {
        return $this->createQueryBuilder('e')
            ->join('App:Article', 'a')
            ->where('a.id = e.article')
            ->andWhere('a.categorie = :categorie')
            ->setParameter('categorie', $categorie)
            ->andWhere('e.dateEnregistrement = :date')
            ->setParameter('date', $date)
            ->getQuery()
            ->getResult()
        ;
    }


    /*
    public function findOneBySomeField($value): ?Enregistrement
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
