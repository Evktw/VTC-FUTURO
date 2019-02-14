<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutEmployes
 *
 * @ORM\Table(name="Statut_employes")
 * @ORM\Entity(repositoryClass="App\Repository\StatutEmployesRepository")
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

    public function getIdStatutemploye(): ?int
    {
        return $this->idStatutemploye;
    }

    public function getStatutNomemploye(): ?string
    {
        return $this->statutNomemploye;
    }

    public function setStatutNomemploye(string $statutNomemploye): self
    {
        $this->statutNomemploye = $statutNomemploye;

        return $this;
    }




}
