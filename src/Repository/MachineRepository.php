<?php

namespace App\Repository;

use App\Entity\Machine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Machine|null find($id, $lockMode = null, $lockVersion = null)
 * @method Machine|null findOneBy(array $criteria, array $orderBy = null)
 * @method Machine[]    findAll()
 * @method Machine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MachineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Machine::class);
    }

    public function search($searchQuery,$searchQuery2)
    {
        return $this->createQueryBuilder('m')
            ->select('m')
            ->join('m.model', 'p')
            ->join('p.marque', 'ma')
            ->where($this->createQueryBuilder('m')->expr()->like('p.model_name', ':ModelQuery'))
            ->andWhere($this->createQueryBuilder('m')->expr()->like('ma.marque_name', ':MarqueQuery'))
            ->setParameter('ModelQuery', $searchQuery . '%')
            ->setParameter('MarqueQuery', $searchQuery2 . '%')
            ->getQuery()
            ->getResult();
    }


    // /**
    //  * @return Machine[] Returns an array of Machine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Machine
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
