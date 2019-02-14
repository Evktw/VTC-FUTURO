<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distance
 *
 * @ORM\Table(name="Distance")
 * @ORM\Entity(repositoryClass="App\Repository\DistanceRepository")
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

    public function getIdAdressedepart(): ?int
    {
        return $this->idAdressedepart;
    }

    public function getIdAdressearrivee(): ?int
    {
        return $this->idAdressearrivee;
    }

    public function getCourseDistance(): ?float
    {
        return $this->courseDistance;
    }

    public function setCourseDistance(float $courseDistance): self
    {
        $this->courseDistance = $courseDistance;

        return $this;
    }





}
