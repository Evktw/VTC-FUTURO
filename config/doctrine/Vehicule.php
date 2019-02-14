<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vehicule
 *
 * @ORM\Table(name="Vehicule")
 * @ORM\Entity
 */
class Vehicule
{
    /**
     * @var string
     *
     * @ORM\Column(name="Vehicule_NumPlaques", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vehiculeNumplaques;

    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_NbPlaces", type="integer", nullable=false)
     */
    private $vehiculeNbplaces;

    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_NbKmRevision", type="integer", nullable=false)
     */
    private $vehiculeNbkmrevision;

    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_NbKmParcouru", type="integer", nullable=false)
     */
    private $vehiculeNbkmparcouru;

    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_Type_ID", type="integer", nullable=false)
     */
    private $vehiculeTypeId;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_EtatVehicule", type="integer", nullable=false)
     */
    private $idEtatvehicule;


}
