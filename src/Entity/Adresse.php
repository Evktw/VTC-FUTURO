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

    /**
     * @return int
     */
    public function getIdAdresse(): int
    {
        return $this->idAdresse;
    }

    /**
     * @param int $idAdresse
     */
    public function setIdAdresse(int $idAdresse): void
    {
        $this->idAdresse = $idAdresse;
    }

    /**
     * @return string
     */
    public function getAdresseAdresse(): string
    {
        return $this->adresseAdresse;
    }

    /**
     * @param string $adresseAdresse
     */
    public function setAdresseAdresse(string $adresseAdresse): void
    {
        $this->adresseAdresse = $adresseAdresse;
    }

    /**
     * @return int
     */
    public function getAdresseCp(): int
    {
        return $this->adresseCp;
    }

    /**
     * @param int $adresseCp
     */
    public function setAdresseCp(int $adresseCp): void
    {
        $this->adresseCp = $adresseCp;
    }

    /**
     * @return string
     */
    public function getAdresseVille(): string
    {
        return $this->adresseVille;
    }

    /**
     * @param string $adresseVille
     */
    public function setAdresseVille(string $adresseVille): void
    {
        $this->adresseVille = $adresseVille;
    }



}
