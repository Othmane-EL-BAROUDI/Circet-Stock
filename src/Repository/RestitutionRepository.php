<?php

namespace App\Repository;

use App\Entity\Restitution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Restitution|null find($id, $lockMode = null, $lockVersion = null)
 * @method Restitution|null findOneBy(array $criteria, array $orderBy = null)
 * @method Restitution[]    findAll()
 * @method Restitution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RestitutionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Restitution::class);
    }

    // /**
    //  * @return Restitution[] Returns an array of Restitution objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Restitution
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
