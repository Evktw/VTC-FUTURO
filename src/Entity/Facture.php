<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="Facture")
 * @ORM\Entity
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Facture", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="Course_NumTransaction", type="integer", nullable=false)
     */
    private $courseNumtransaction;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_EtatFacture", type="integer", nullable=false)
     */
    private $idEtatfacture;


}
