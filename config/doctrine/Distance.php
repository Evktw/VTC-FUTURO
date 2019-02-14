<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distance
 *
 * @ORM\Table(name="Distance")
 * @ORM\Entity
 */
class Distance
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_AdresseDepart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdressedepart;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_AdresseArrivee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdressearrivee;

    /**
     * @var float
     *
     * @ORM\Column(name="Course_Distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $courseDistance;


}
