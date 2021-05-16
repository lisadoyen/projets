<?php

namespace App\Repository;

use App\Entity\TypeLien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeLien|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeLien|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeLien[]    findAll()
 * @method TypeLien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeLienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeLien::class);
    }

    // /**
    //  * @return TypeLien[] Returns an array of TypeLien objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeLien
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
