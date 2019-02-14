<?php

namespace App\Repository;

use App\Entity\EtatVehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EtatVehicule|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatVehicule|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatVehicule[]    findAll()
 * @method EtatVehicule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatVehiculeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EtatVehicule::class);
    }

    // /**
    //  * @return EtatVehicule[] Returns an array of EtatVehicule objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtatVehicule
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
