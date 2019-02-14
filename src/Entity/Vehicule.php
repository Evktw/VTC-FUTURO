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

    /**
     * @return string
     */
    public function getVehiculeNumplaques(): string
    {
        return $this->vehiculeNumplaques;
    }

    /**
     * @param string $vehiculeNumplaques
     */
    public function setVehiculeNumplaques(string $vehiculeNumplaques): void
    {
        $this->vehiculeNumplaques = $vehiculeNumplaques;
    }

    /**
     * @return int
     */
    public function getVehiculeNbplaces(): int
    {
        return $this->vehiculeNbplaces;
    }

    /**
     * @param int $vehiculeNbplaces
     */
    public function setVehiculeNbplaces(int $vehiculeNbplaces): void
    {
        $this->vehiculeNbplaces = $vehiculeNbplaces;
    }

    /**
     * @return int
     */
    public function getVehiculeNbkmrevision(): int
    {
        return $this->vehiculeNbkmrevision;
    }

    /**
     * @param int $vehiculeNbkmrevision
     */
    public function setVehiculeNbkmrevision(int $vehiculeNbkmrevision): void
    {
        $this->vehiculeNbkmrevision = $vehiculeNbkmrevision;
    }

    /**
     * @return int
     */
    public function getVehiculeNbkmparcouru(): int
    {
        return $this->vehiculeNbkmparcouru;
    }

    /**
     * @param int $vehiculeNbkmparcouru
     */
    public function setVehiculeNbkmparcouru(int $vehiculeNbkmparcouru): void
    {
        $this->vehiculeNbkmparcouru = $vehiculeNbkmparcouru;
    }

    /**
     * @return int
     */
    public function getVehiculeTypeId(): int
    {
        return $this->vehiculeTypeId;
    }

    /**
     * @param int $vehiculeTypeId
     */
    public function setVehiculeTypeId(int $vehiculeTypeId): void
    {
        $this->vehiculeTypeId = $vehiculeTypeId;
    }

    /**
     * @return int
     */
    public function getIdEtatvehicule(): int
    {
        return $this->idEtatvehicule;
    }

    /**
     * @param int $idEtatvehicule
     */
    public function setIdEtatvehicule(int $idEtatvehicule): void
    {
        $this->idEtatvehicule = $idEtatvehicule;
    }
}
