<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employes
 *
 * @ORM\Table(name="Employes")
 * @ORM\Entity(repositoryClass="App\Repository\EmployesRepository")
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

    public function getIdEmploye(): ?int
    {
        return $this->idEmploye;
    }

    public function getEmployeNom(): ?string
    {
        return $this->employeNom;
    }

    public function setEmployeNom(string $employeNom): self
    {
        $this->employeNom = $employeNom;

        return $this;
    }

    public function getEmployePrenom(): ?string
    {
        return $this->employePrenom;
    }

    public function setEmployePrenom(string $employePrenom): self
    {
        $this->employePrenom = $employePrenom;

        return $this;
    }

    public function getEmployeTelephone(): ?int
    {
        return $this->employeTelephone;
    }

    public function setEmployeTelephone(int $employeTelephone): self
    {
        $this->employeTelephone = $employeTelephone;

        return $this;
    }

    public function getEmployeMail(): ?string
    {
        return $this->employeMail;
    }

    public function setEmployeMail(string $employeMail): self
    {
        $this->employeMail = $employeMail;

        return $this;
    }

    public function getEmployeEtat(): ?string
    {
        return $this->employeEtat;
    }

    public function setEmployeEtat(string $employeEtat): self
    {
        $this->employeEtat = $employeEtat;

        return $this;
    }

    public function getEmployeLogin(): ?string
    {
        return $this->employeLogin;
    }

    public function setEmployeLogin(string $employeLogin): self
    {
        $this->employeLogin = $employeLogin;

        return $this;
    }

    public function getEmployeMdp(): ?string
    {
        return $this->employeMdp;
    }

    public function setEmployeMdp(string $employeMdp): self
    {
        $this->employeMdp = $employeMdp;

        return $this;
    }

    public function getEmployeAdresse(): ?string
    {
        return $this->employeAdresse;
    }

    public function setEmployeAdresse(string $employeAdresse): self
    {
        $this->employeAdresse = $employeAdresse;

        return $this;
    }

    public function getEmployeCp(): ?int
    {
        return $this->employeCp;
    }

    public function setEmployeCp(int $employeCp): self
    {
        $this->employeCp = $employeCp;

        return $this;
    }

    public function getEmployeVille(): ?string
    {
        return $this->employeVille;
    }

    public function setEmployeVille(string $employeVille): self
    {
        $this->employeVille = $employeVille;

        return $this;
    }

    public function getEmployeStatut(): ?string
    {
        return $this->employeStatut;
    }

    public function setEmployeStatut(string $employeStatut): self
    {
        $this->employeStatut = $employeStatut;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getIdStatutemploye(): ?int
    {
        return $this->idStatutemploye;
    }

    public function setIdStatutemploye(int $idStatutemploye): self
    {
        $this->idStatutemploye = $idStatutemploye;

        return $this;
    }




}
