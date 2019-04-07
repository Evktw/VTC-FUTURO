<?php

namespace App\Repository;

use App\Entity\Employes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Employes|null find($id, $lockMode = null, $lockVersion = null)
 * @method Employes|null findOneBy(array $criteria, array $orderBy = null)
 * @method Employes[]    findAll()
 * @method Employes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmployesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Employes::class);
    }

}
