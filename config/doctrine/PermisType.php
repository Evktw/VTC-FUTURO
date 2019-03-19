<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermisType
 *
 * @ORM\Table(name="Permis_Type")
 * @ORM\Entity
 */
class PermisType
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Permis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermis;

    /**
     * @var string
     *
     * @ORM\Column(name="Permis_TypeNom", type="string", length=50, nullable=false)
     */
    private $permisTypenom;


}
