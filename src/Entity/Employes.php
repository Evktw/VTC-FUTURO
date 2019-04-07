<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Employes
 *
 * @ORM\Table(name="Employes")
 * @ORM\Entity(repositoryClass="App\Repository\EmployesRepository")
 */
class Employes implements UserInterface, \Serializable
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
     * @ORM\Column(name="Employe_login", type="string", length=50, nullable=false)
     */
    private $employeLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="Employe_mdp", type="string", length=250, nullable=false)
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
     * @var array
     *
     * @ORM\Column(name="Roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var StatutEmployes
     *
     * @ORM\ManyToOne(targetEntity="StatutEmployes")
     * @ORM\JoinColumn(name="ID_StatutEmploye", referencedColumnName="ID_StatutEmploye")
     */
    private $StatutEmploye;

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
    public function getEmployeNom(): ?string
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
    public function getEmployePrenom(): ?string
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
    public function getEmployeTelephone(): ?int
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
    public function getEmployeMail(): ?string
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
    public function getEmployeLogin(): ?string
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
    public function getEmployeMdp(): ?string
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
    public function getEmployeAdresse(): ?string
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
    public function getEmployeCp(): ?int
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
    public function getEmployeVille(): ?string
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
     * @return StatutEmployes
     */
    public function getStatutEmploye(): ?StatutEmployes
    {
        return $this->StatutEmploye;
    }

    /**
     * @param StatutEmployes $StatutEmploye
     */
    public function setStatutEmploye(StatutEmployes $StatutEmploye): void
    {
        $this->StatutEmploye = $StatutEmploye;
    }


    public function getUsername(): string
    {
        return $this->employeLogin;
    }

    public function setUsername(string $employeLogin): void
    {
        $this->employeLogin = $employeLogin;
    }

    /**
     * Retourne les rôles de l'user
     */
    public function getRoles(): array
    {
        $roles = $this->roles;

        // Afin d'être sûr qu'un user a toujours au moins 1 rôle
        if (empty($roles)) {
            $roles[] = 'ROLE_USER';
        }

        return array_unique($roles);
    }

    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * Retour le salt qui a servi à coder le mot de passe
     *
     * {@inheritdoc}
     */
    public function getSalt(): ?string
    {
        // See "Do you need to use a Salt?" at https://symfony.com/doc/current/cookbook/security/entity_provider.html
        // we're using bcrypt in security.yml to encode the password, so
        // the salt value is built-in and you don't have to generate one

        return null;
    }

    /**
     * Removes sensitive data from the user.
     *
     * {@inheritdoc}
     */
    public function eraseCredentials(): void
    {
        // Nous n'avons pas besoin de cette methode car nous n'utilions pas de plainPassword
        // Mais elle est obligatoire car comprise dans l'interface UserInterface
        // $this->plainPassword = null;
    }

    /**
     * {@inheritdoc}
     */
    public function serialize(): string
    {
        return serialize([$this->idEmploye, $this->employeLogin, $this->employeMdp]);
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized): void
    {
        [$this->idEmploye, $this->employeLogin, $this->employeMdp] = unserialize($serialized, ['allowed_classes' => false]);
    }


    /**
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        // TODO: Implement getPassword() method.
        return $this->employeMdp;
    }
}