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

    /**
     * @return int
     */
    public function getIdEmploye(): int
    {
        return $this->idEmploye;
    }

    /**
     * @param int $idEmploye
     */
    public function setIdEmploye(int $idEmploye): void
    {
        $this->idEmploye = $idEmploye;
    }

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
     * @return \DateTime
     */
    public function getPermisDateexpiration(): \DateTime
    {
        return $this->permisDateexpiration;
    }

    /**
     * @param \DateTime $permisDateexpiration
     */
    public function setPermisDateexpiration(\DateTime $permisDateexpiration): void
    {
        $this->permisDateexpiration = $permisDateexpiration;
    }


}
