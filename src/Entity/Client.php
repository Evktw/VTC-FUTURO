<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Client")
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_Nom", type="string", length=50, nullable=false)
     */
    private $clientNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_Prenom", type="string", length=50, nullable=false)
     */
    private $clientPrenom;

    /**
     * @var int
     *
     * @ORM\Column(name="Client_Telephone", type="integer", nullable=false)
     */
    private $clientTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Client_Email", type="string", length=50, nullable=false)
     */
    private $clientEmail;

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function getClientNom(): ?string
    {
        return $this->clientNom;
    }

    public function setClientNom(string $clientNom): self
    {
        $this->clientNom = $clientNom;

        return $this;
    }

    public function getClientPrenom(): ?string
    {
        return $this->clientPrenom;
    }

    public function setClientPrenom(string $clientPrenom): self
    {
        $this->clientPrenom = $clientPrenom;

        return $this;
    }

    public function getClientTelephone(): ?int
    {
        return $this->clientTelephone;
    }

    public function setClientTelephone(int $clientTelephone): self
    {
        $this->clientTelephone = $clientTelephone;

        return $this;
    }

    public function getClientEmail(): ?string
    {
        return $this->clientEmail;
    }

    public function setClientEmail(string $clientEmail): self
    {
        $this->clientEmail = $clientEmail;

        return $this;
    }






}
