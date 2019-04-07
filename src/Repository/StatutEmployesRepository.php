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

}
