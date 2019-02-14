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

    /**
     * @return int
     */
    public function getIdEmploye(): int
    {
        return $this->idEmploye;
    }

    /**
     * @param int $idEmploye
     */
    public function setIdEmploye(int $idEmploye): void
    {
        $this->idEmploye = $idEmploye;
    }

    /**
     * @return string
     */
    public function getEmployeNom(): string
    {
        return $this->employeNom;
    }

    /**
     * @param string $employeNom
     */
    public function setEmployeNom(string $employeNom): void
    {
        $this->employeNom = $employeNom;
    }

    /**
     * @return string
     */
    public function getEmployePrenom(): string
    {
        return $this->employePrenom;
    }

    /**
     * @param string $employePrenom
     */
    public function setEmployePrenom(string $employePrenom): void
    {
        $this->employePrenom = $employePrenom;
    }

    /**
     * @return int
     */
    public function getEmployeTelephone(): int
    {
        return $this->employeTelephone;
    }

    /**
     * @param int $employeTelephone
     */
    public function setEmployeTelephone(int $employeTelephone): void
    {
        $this->employeTelephone = $employeTelephone;
    }

    /**
     * @return string
     */
    public function getEmployeMail(): string
    {
        return $this->employeMail;
    }

    /**
     * @param string $employeMail
     */
    public function setEmployeMail(string $employeMail): void
    {
        $this->employeMail = $employeMail;
    }

    /**
     * @return string
     */
    public function getEmployeEtat(): string
    {
        return $this->employeEtat;
    }

    /**
     * @param string $employeEtat
     */
    public function setEmployeEtat(string $employeEtat): void
    {
        $this->employeEtat = $employeEtat;
    }

    /**
     * @return string
     */
    public function getEmployeLogin(): string
    {
        return $this->employeLogin;
    }

    /**
     * @param string $employeLogin
     */
    public function setEmployeLogin(string $employeLogin): void
    {
        $this->employeLogin = $employeLogin;
    }

    /**
     * @return string
     */
    public function getEmployeMdp(): string
    {
        return $this->employeMdp;
    }

    /**
     * @param string $employeMdp
     */
    public function setEmployeMdp(string $employeMdp): void
    {
        $this->employeMdp = $employeMdp;
    }

    /**
     * @return string
     */
    public function getEmployeAdresse(): string
    {
        return $this->employeAdresse;
    }

    /**
     * @param string $employeAdresse
     */
    public function setEmployeAdresse(string $employeAdresse): void
    {
        $this->employeAdresse = $employeAdresse;
    }

    /**
     * @return int
     */
    public function getEmployeCp(): int
    {
        return $this->employeCp;
    }

    /**
     * @param int $employeCp
     */
    public function setEmployeCp(int $employeCp): void
    {
        $this->employeCp = $employeCp;
    }

    /**
     * @return string
     */
    public function getEmployeVille(): string
    {
        return $this->employeVille;
    }

    /**
     * @param string $employeVille
     */
    public function setEmployeVille(string $employeVille): void
    {
        $this->employeVille = $employeVille;
    }

    /**
     * @return string
     */
    public function getEmployeStatut(): string
    {
        return $this->employeStatut;
    }

    /**
     * @param string $employeStatut
     */
    public function setEmployeStatut(string $employeStatut): void
    {
        $this->employeStatut = $employeStatut;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getIdStatutemploye(): int
    {
        return $this->idStatutemploye;
    }

    /**
     * @param int $idStatutemploye
     */
    public function setIdStatutemploye(int $idStatutemploye): void
    {
        $this->idStatutemploye = $idStatutemploye;
    }


}
