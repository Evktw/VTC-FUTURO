<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermisExpiration
 *
 * @ORM\Table(name="Permis_expiration")
 * @ORM\Entity(repositoryClass="App\Repository\PermisExpirationRepository")
 */
class PermisExpiration
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Employe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEmploye;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_Permis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPermis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Permis_DateExpiration", type="date", nullable=false)
     */
    private $permisDateexpiration;

    public function getIdEmploye(): ?int
    {
        return $this->idEmploye;
    }

    public function getIdPermis(): ?int
    {
        return $this->idPermis;
    }

    public function getPermisDateexpiration(): ?\DateTimeInterface
    {
        return $this->permisDateexpiration;
    }

    public function setPermisDateexpiration(\DateTimeInterface $permisDateexpiration): self
    {
        $this->permisDateexpiration = $permisDateexpiration;

        return $this;
    }




}
