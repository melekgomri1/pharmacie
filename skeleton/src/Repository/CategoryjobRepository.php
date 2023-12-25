<?php

namespace App\Repository;

use App\Entity\Categoryjob;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categoryjob>
 *
 * @method Categoryjob|null find($id, $lockMode = null, $lockVersion = null)
 * @method Categoryjob|null findOneBy(array $criteria, array $orderBy = null)
 * @method Categoryjob[]    findAll()
 * @method Categoryjob[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryjobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categoryjob::class);
    }

//    /**
//     * @return Categoryjob[] Returns an array of Categoryjob objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Categoryjob
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
