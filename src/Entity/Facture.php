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

    /**
     * @return int
     */
    public function getIdFacture(): int
    {
        return $this->idFacture;
    }

    /**
     * @param int $idFacture
     */
    public function setIdFacture(int $idFacture): void
    {
        $this->idFacture = $idFacture;
    }

    /**
     * @return int
     */
    public function getCourseNumtransaction(): int
    {
        return $this->courseNumtransaction;
    }

    /**
     * @param int $courseNumtransaction
     */
    public function setCourseNumtransaction(int $courseNumtransaction): void
    {
        $this->courseNumtransaction = $courseNumtransaction;
    }

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


}
