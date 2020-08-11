<?php

namespace App\Repository;

use App\Entity\StatementFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method StatementFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatementFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatementFile[]    findAll()
 * @method StatementFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatementFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StatementFile::class);
    }

    // /**
    //  * @return StatementFile[] Returns an array of StatementFile objects
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
    public function findOneBySomeField($value): ?StatementFile
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
