<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Client")
 * @ORM\Entity
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

    /**
     * @return int
     */
    public function getIdClient(): int
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient(int $idClient): void
    {
        $this->idClient = $idClient;
    }

    /**
     * @return string
     */
    public function getClientNom(): string
    {
        return $this->clientNom;
    }

    /**
     * @param string $clientNom
     */
    public function setClientNom(string $clientNom): void
    {
        $this->clientNom = $clientNom;
    }

    /**
     * @return string
     */
    public function getClientPrenom(): string
    {
        return $this->clientPrenom;
    }

    /**
     * @param string $clientPrenom
     */
    public function setClientPrenom(string $clientPrenom): void
    {
        $this->clientPrenom = $clientPrenom;
    }

    /**
     * @return int
     */
    public function getClientTelephone(): int
    {
        return $this->clientTelephone;
    }

    /**
     * @param int $clientTelephone
     */
    public function setClientTelephone(int $clientTelephone): void
    {
        $this->clientTelephone = $clientTelephone;
    }

    /**
     * @return string
     */
    public function getClientEmail(): string
    {
        return $this->clientEmail;
    }

    /**
     * @param string $clientEmail
     */
    public function setClientEmail(string $clientEmail): void
    {
        $this->clientEmail = $clientEmail;
    }




}
