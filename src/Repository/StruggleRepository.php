<?php

namespace App\Repository;

use App\Entity\Struggle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Struggle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Struggle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Struggle[]    findAll()
 * @method Struggle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StruggleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Struggle::class);
    }

    // /**
    //  * @return Struggle[] Returns an array of Struggle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Struggle
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
