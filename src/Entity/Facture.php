<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="Facture")
 * @ORM\Entity(repositoryClass="App\Repository\FactureRepository")
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

    public function getIdFacture(): ?int
    {
        return $this->idFacture;
    }

    public function getCourseNumtransaction(): ?int
    {
        return $this->courseNumtransaction;
    }

    public function setCourseNumtransaction(int $courseNumtransaction): self
    {
        $this->courseNumtransaction = $courseNumtransaction;

        return $this;
    }

    public function getIdEtatfacture(): ?int
    {
        return $this->idEtatfacture;
    }

    public function setIdEtatfacture(int $idEtatfacture): self
    {
        $this->idEtatfacture = $idEtatfacture;

        return $this;
    }




}
