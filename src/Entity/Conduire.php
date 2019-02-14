<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conduire
 *
 * @ORM\Table(name="Conduire")
 * @ORM\Entity(repositoryClass="App\Repository\ConduireRepository")
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

    public function getIdPermis(): ?int
    {
        return $this->idPermis;
    }

    public function getVehiculeNumplaques(): ?string
    {
        return $this->vehiculeNumplaques;
    }





}
