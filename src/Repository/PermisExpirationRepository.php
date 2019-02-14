<?php

namespace App\Repository;

use App\Entity\PermisExpiration;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PermisExpiration|null find($id, $lockMode = null, $lockVersion = null)
 * @method PermisExpiration|null findOneBy(array $criteria, array $orderBy = null)
 * @method PermisExpiration[]    findAll()
 * @method PermisExpiration[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PermisExpirationRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PermisExpiration::class);
    }

    // /**
    //  * @return PermisExpiration[] Returns an array of PermisExpiration objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PermisExpiration
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
