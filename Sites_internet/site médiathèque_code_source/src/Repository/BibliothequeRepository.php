<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Bibliotheque;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method Bibliotheque|null find($id, $lockMode = null, $lockVersion = null)
 * @method Bibliotheque|null findOneBy(array $criteria, array $orderBy = null)
 * @method Bibliotheque[]    findAll()
 * @method Bibliotheque[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BibliothequeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Bibliotheque::class);
    }

    /**
     * @param SearchData $search
     */
    public function findSearch(SearchData $search){
        return $this->getSearchQuery($search)->getQuery()->getResult();
    }

    public function getSearchQuery(SearchData $search, $ignorePrice = false): \Doctrine\ORM\QueryBuilder
    {
        $query = $this
            ->createQueryBuilder('b')
            ->select('t', 'b')
            ->join('b.fkIdGenre', 't');


        if(!empty($search->q)){
            $query = $query
                ->andWhere('b.titreDesignation LIKE :q')
                ->setParameter('q', "%{$search->q}");
        }

        if(!empty($search->genre)) {
            $query = $query
                ->andWhere('t.idGenre IN (:fkIdGenre)')
                ->setParameter('fkIdGenre', $search->genre);
        }

        return $query;
    }
    // /**
    //  * @return User[] Returns an array of User objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?User
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
