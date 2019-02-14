<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conduire
 *
 * @ORM\Table(name="Conduire")
 * @ORM\Entity
 */
class Conduire
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Permis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPermis;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehicule_NumPlaques", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $vehiculeNumplaques;


}
