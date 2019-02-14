<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiculeType
 *
 * @ORM\Table(name="Vehicule_Type")
 * @ORM\Entity
 */
class VehiculeType
{
    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_Type_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vehiculeTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehicule_Type", type="string", length=50, nullable=false)
     */
    private $vehiculeType;


}
