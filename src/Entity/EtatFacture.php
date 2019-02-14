<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatFacture
 *
 * @ORM\Table(name="Etat_Facture")
 * @ORM\Entity
 */
class EtatFacture
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_EtatFacture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatfacture;

    /**
     * @var string
     *
     * @ORM\Column(name="EtatFacture_Nom", type="string", length=50, nullable=false)
     */
    private $etatfactureNom;

    /**
     * @return int
     */
    public function getIdEtatfacture(): int
    {
        return $this->idEtatfacture;
    }

    /**
     * @param int $idEtatfacture
     */
    public function setIdEtatfacture(int $idEtatfacture): void
    {
        $this->idEtatfacture = $idEtatfacture;
    }

    /**
     * @return string
     */
    public function getEtatfactureNom(): string
    {
        return $this->etatfactureNom;
    }

    /**
     * @param string $etatfactureNom
     */
    public function setEtatfactureNom(string $etatfactureNom): void
    {
        $this->etatfactureNom = $etatfactureNom;
    }


}
