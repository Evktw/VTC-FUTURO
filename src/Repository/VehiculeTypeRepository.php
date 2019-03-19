<?php

namespace App\Repository;

use App\Entity\VehiculeType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method VehiculeType|null find($id, $lockMode = null, $lockVersion = null)
 * @method VehiculeType|null findOneBy(array $criteria, array $orderBy = null)
 * @method VehiculeType[]    findAll()
 * @method VehiculeType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehiculeTypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, VehiculeType::class);
    }

    // /**
    //  * @return VehiculeType[] Returns an array of VehiculeType objects
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
    public function findOneBySomeField($value): ?VehiculeType
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
