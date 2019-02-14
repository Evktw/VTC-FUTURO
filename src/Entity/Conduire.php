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

    /**
     * @return int
     */
    public function getIdPermis(): int
    {
        return $this->idPermis;
    }

    /**
     * @param int $idPermis
     */
    public function setIdPermis(int $idPermis): void
    {
        $this->idPermis = $idPermis;
    }

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



}
