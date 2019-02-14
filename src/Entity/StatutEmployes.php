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

    /**
     * @return int
     */
    public function getIdStatutemploye(): int
    {
        return $this->idStatutemploye;
    }

    /**
     * @param int $idStatutemploye
     */
    public function setIdStatutemploye(int $idStatutemploye): void
    {
        $this->idStatutemploye = $idStatutemploye;
    }

    /**
     * @return string
     */
    public function getStatutNomemploye(): string
    {
        return $this->statutNomemploye;
    }

    /**
     * @param string $statutNomemploye
     */
    public function setStatutNomemploye(string $statutNomemploye): void
    {
        $this->statutNomemploye = $statutNomemploye;
    }
}
