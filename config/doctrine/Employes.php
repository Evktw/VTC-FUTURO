<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employes
 *
 * @ORM\Table(name="Employes")
 * @ORM\Entity
 */
class Employes
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_Employe", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmploye;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Nom", type="string", length=50, nullable=false)
     */
    private $employeNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Prenom", type="string", length=50, nullable=false)
     */
    private $employePrenom;

    /**
     * @var int
     *
     * @ORM\Column(name="Employe_Telephone", type="integer", nullable=false)
     */
    private $employeTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Mail", type="string", length=50, nullable=false)
     */
    private $employeMail;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Etat", type="string", length=50, nullable=false)
     */
    private $employeEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_login", type="string", length=50, nullable=false)
     */
    private $employeLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_mdp", type="string", length=50, nullable=false)
     */
    private $employeMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Adresse", type="string", length=50, nullable=false)
     */
    private $employeAdresse;

    /**
     * @var int
     *
     * @ORM\Column(name="Employe_CP", type="integer", nullable=false)
     */
    private $employeCp;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Ville", type="string", length=50, nullable=false)
     */
    private $employeVille;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_Statut", type="string", length=50, nullable=false)
     */
    private $employeStatut;

    /**
     * @var string
     *
     * @ORM\Column(name="Role", type="text", length=65535, nullable=false)
     */
    private $role;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_StatutEmploye", type="integer", nullable=false)
     */
    private $idStatutemploye;


}
