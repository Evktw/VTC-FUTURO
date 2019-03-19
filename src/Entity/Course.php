<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="Course", indexes={@ORM\Index(name="CourseEmployesFK", columns={"ID_Employe"}), @ORM\Index(name="CourseFactureFK", columns={"ID_Facture"}), @ORM\Index(name="CourseAdresseDepartFK", columns={"ID_AdresseDepart"}), @ORM\Index(name="CourseClientFK", columns={"ID_Client"})})
 * @ORM\Entity(repositoryClass="App\Repository\CourseRepository")
 */
class Course
{
    /**
     * @var int
     *
     * @ORM\Column(name="Course_NumTransaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $courseNumtransaction;

    /**
     * @var int
     *
     * @ORM\Column(name="Course_NbPassagers", type="integer", nullable=false)
     */
    private $courseNbpassagers;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Course_HeureDepart", type="datetime", nullable=false)
     */
    private $courseHeuredepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Course_HeureArrivee", type="datetime", nullable=false)
     */
    private $courseHeurearrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="Course_Statut", type="string", length=50, nullable=false)
     */
    private $courseStatut;

    /**
     * @var float
     *
     * @ORM\Column(name="Course_Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $coursePrix;

    /**
     * @var float
     *
     * @ORM\Column(name="Course_Distance", type="float", precision=10, scale=0, nullable=false)
     */
    private $courseDistance;

    /**
     * @var string
     *
     * @ORM\Column(name="Vehicule_NumPlaques", type="string", length=50, nullable=false)
     */
    private $vehiculeNumplaques;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_AdresseArrivee", type="integer", nullable=false)
     */
    private $idAdressearrivee;

    /**
     * @var int
     *
     * @ORM\Column(name="ID_StatutCourse", type="integer", nullable=false)
     */
    private $idStatutcourse;

    /**
     * @var \Facture
     *
     * @ORM\ManyToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Facture", referencedColumnName="ID_Facture")
     * })
     */
    private $idFacture;

    /**
     * @var \Adresse
     *
     * @ORM\ManyToOne(targetEntity="Adresse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_AdresseDepart", referencedColumnName="ID_Adresse")
     * })
     */
    private $idAdressedepart;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Client", referencedColumnName="ID_Client")
     * })
     */
    private $idClient;

    /**
     * @var \Employes
     *
     * @ORM\ManyToOne(targetEntity="Employes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ID_Employe", referencedColumnName="ID_Employe")
     * })
     */
    private $idEmploye;
/*
    /**
     * @var Client
     *
     * @ORM\OneToMany(targetEntity="Client", mappedBy="Client")
     */
/*
    private $courseClient;

    public function getCourseClient() : ?Client
    {
        return $this->courseClient;
    }

    public function setCourseClient(Client $courseClient) : self
    {
        $this->courseClient = $courseClient;

        return $this;
    }
*/
    public function getCourseNumtransaction(): ?int
    {
        return $this->courseNumtransaction;
    }

    public function getCourseNbpassagers(): ?int
    {
        return $this->courseNbpassagers;
    }

    public function setCourseNbpassagers(int $courseNbpassagers): self
    {
        $this->courseNbpassagers = $courseNbpassagers;

        return $this;
    }

    public function getCourseHeuredepart(): ?\DateTimeInterface
    {
        return $this->courseHeuredepart;
    }

    public function setCourseHeuredepart(\DateTimeInterface $courseHeuredepart): self
    {
        $this->courseHeuredepart = $courseHeuredepart;

        return $this;
    }

    public function getCourseHeurearrivee(): ?\DateTimeInterface
    {
        return $this->courseHeurearrivee;
    }

    public function setCourseHeurearrivee(\DateTimeInterface $courseHeurearrivee): self
    {
        $this->courseHeurearrivee = $courseHeurearrivee;

        return $this;
    }

    public function getCourseStatut(): ?string
    {
        return $this->courseStatut;
    }

    public function setCourseStatut(string $courseStatut): self
    {
        $this->courseStatut = $courseStatut;

        return $this;
    }

    public function getCoursePrix(): ?float
    {
        return $this->coursePrix;
    }

    public function setCoursePrix(float $coursePrix): self
    {
        $this->coursePrix = $coursePrix;

        return $this;
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

    public function getVehiculeNumplaques(): ?string
    {
        return $this->vehiculeNumplaques;
    }

    public function setVehiculeNumplaques(string $vehiculeNumplaques): self
    {
        $this->vehiculeNumplaques = $vehiculeNumplaques;

        return $this;
    }

    public function getIdAdressearrivee(): ?int
    {
        return $this->idAdressearrivee;
    }

    public function setIdAdressearrivee(int $idAdressearrivee): self
    {
        $this->idAdressearrivee = $idAdressearrivee;

        return $this;
    }

    public function getIdStatutcourse(): ?int
    {
        return $this->idStatutcourse;
    }

    public function setIdStatutcourse(int $idStatutcourse): self
    {
        $this->idStatutcourse = $idStatutcourse;

        return $this;
    }

    public function getIdFacture(): ?Facture
    {
        return $this->idFacture;
    }

    public function setIdFacture(?Facture $idFacture): self
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    public function getIdAdressedepart(): ?Adresse
    {
        return $this->idAdressedepart;
    }

    public function setIdAdressedepart(?Adresse $idAdressedepart): self
    {
        $this->idAdressedepart = $idAdressedepart;

        return $this;
    }

    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }

    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdEmploye(): ?Employes
    {
        return $this->idEmploye;
    }

    public function setIdEmploye(?Employes $idEmploye): self
    {
        $this->idEmploye = $idEmploye;

        return $this;
    }




}
