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


}
