<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="Adresse")
 * @ORM\Entity(repositoryClass="App\Repository\AdresseRepository")
 */
class Adresse
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Adresse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Adresse", type="string", length=50, nullable=false)
     */
    private $adresseAdresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Adresse_CP", type="integer", nullable=false)
     */
    private $adresseCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse_Ville", type="string", length=50, nullable=false)
     */
    private $adresseVille;

    public function getIdAdresse(): ?int
    {
        return $this->idAdresse;
    }

    public function getAdresseAdresse(): ?string
    {
        return $this->adresseAdresse;
    }

    public function setAdresseAdresse(string $adresseAdresse): self
    {
        $this->adresseAdresse = $adresseAdresse;

        return $this;
    }

    public function getAdresseCp(): ?int
    {
        return $this->adresseCp;
    }

    public function setAdresseCp(int $adresseCp): self
    {
        $this->adresseCp = $adresseCp;

        return $this;
    }

    public function getAdresseVille(): ?string
    {
        return $this->adresseVille;
    }

    public function setAdresseVille(string $adresseVille): self
    {
        $this->adresseVille = $adresseVille;

        return $this;
    }



}
