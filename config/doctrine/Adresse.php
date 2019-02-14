<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresse
 *
 * @ORM\Table(name="Adresse")
 * @ORM\Entity
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


}
