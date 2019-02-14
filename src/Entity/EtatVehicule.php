<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatVehicule
 *
 * @ORM\Table(name="Etat_vehicule")
 * @ORM\Entity(repositoryClass="App\Repository\EtatVehiculeRepository")
 */
class EtatVehicule
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_EtatVehicule", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatvehicule;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatVehicule_Nom", type="string", length=50, nullable=false)
     */
    private $etatvehiculeNom;

    public function getIdEtatvehicule(): ?int
    {
        return $this->idEtatvehicule;
    }

    public function getEtatvehiculeNom(): ?string
    {
        return $this->etatvehiculeNom;
    }

    public function setEtatvehiculeNom(string $etatvehiculeNom): self
    {
        $this->etatvehiculeNom = $etatvehiculeNom;

        return $this;
    }




}
