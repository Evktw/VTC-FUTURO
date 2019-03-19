<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VehiculeType
 *
 * @ORM\Table(name="Vehicule_Type")
 * @ORM\Entity(repositoryClass="App\Repository\VehiculeTypeRepository")
 */
class VehiculeType
{
    /**
     * @var int
     *
     * @ORM\Column(name="Vehicule_Type_ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vehiculeTypeId;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehicule_Type", type="string", length=50, nullable=false)
     */
    private $vehiculeType;

    /**
     * @return int
     */
    public function getVehiculeTypeId(): int
    {
        return $this->vehiculeTypeId;
    }

    /**
     * @param int $vehiculeTypeId
     */
    public function setVehiculeTypeId(int $vehiculeTypeId): void
    {
        $this->vehiculeTypeId = $vehiculeTypeId;
    }

    /**
     * @return string
     */
    public function getVehiculeType(): string
    {
        return $this->vehiculeType;
    }

    /**
     * @param string $vehiculeType
     */
    public function setVehiculeType(string $vehiculeType): void
    {
        $this->vehiculeType = $vehiculeType;
    }


}
