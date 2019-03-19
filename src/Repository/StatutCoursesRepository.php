<?php

namespace App\Repository;

use App\Entity\StatutCourses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StatutCourses|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutCourses|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutCourses[]    findAll()
 * @method StatutCourses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutCoursesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StatutCourses::class);
    }

    // /**
    //  * @return StatutCourses[] Returns an array of StatutCourses objects
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
    public function findOneBySomeField($value): ?StatutCourses
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
