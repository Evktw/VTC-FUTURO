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


}
