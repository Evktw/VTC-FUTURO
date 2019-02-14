<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distance
 *
 * @ORM\Table(name="Distance")
 * @ORM\Entity
 */
class Distance
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_AdresseDepart", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdressedepart;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_AdresseArrivee", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAdressearrivee;

    /**
     * @var float
     *
     * @ORM\Column(name="Course_Distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $courseDistance;

    /**
     * @return int
     */
    public function getIdAdressedepart(): int
    {
        return $this->idAdressedepart;
    }

    /**
     * @param int $idAdressedepart
     */
    public function setIdAdressedepart(int $idAdressedepart): void
    {
        $this->idAdressedepart = $idAdressedepart;
    }

    /**
     * @return int
     */
    public function getIdAdressearrivee(): int
    {
        return $this->idAdressearrivee;
    }

    /**
     * @param int $idAdressearrivee
     */
    public function setIdAdressearrivee(int $idAdressearrivee): void
    {
        $this->idAdressearrivee = $idAdressearrivee;
    }

    /**
     * @return float
     */
    public function getCourseDistance(): float
    {
        return $this->courseDistance;
    }

    /**
     * @param float $courseDistance
     */
    public function setCourseDistance(float $courseDistance): void
    {
        $this->courseDistance = $courseDistance;
    }



}
