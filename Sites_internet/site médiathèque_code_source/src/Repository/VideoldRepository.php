<?php

namespace App\Repository;

use App\Entity\Videold;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Videold|null find($id, $lockMode = null, $lockVersion = null)
 * @method Videold|null findOneBy(array $criteria, array $orderBy = null)
 * @method Videold[]    findAll()
 * @method Videold[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoldRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Videold::class);
    }

    // /**
    //  * @return Videold[] Returns an array of Videold objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Videold
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
