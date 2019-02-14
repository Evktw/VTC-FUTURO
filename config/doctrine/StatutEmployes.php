<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutEmployes
 *
 * @ORM\Table(name="Statut_employes")
 * @ORM\Entity
 */
class StatutEmployes
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_StatutEmploye", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatutemploye;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut_NomEmploye", type="string", length=50, nullable=false)
     */
    private $statutNomemploye;


}
