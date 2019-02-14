<?php

namespace App\Repository;

use App\Entity\StatutEmployes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StatutEmployes|null find($id, $lockMode = null, $lockVersion = null)
 * @method StatutEmployes|null findOneBy(array $criteria, array $orderBy = null)
 * @method StatutEmployes[]    findAll()
 * @method StatutEmployes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatutEmployesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StatutEmployes::class);
    }

    // /**
    //  * @return StatutEmployes[] Returns an array of StatutEmployes objects
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
    public function findOneBySomeField($value): ?StatutEmployes
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
