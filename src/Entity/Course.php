<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="Course", indexes={@ORM\Index(name="CourseClientFK", columns={"ID_Client"}), @ORM\Index(name="CourseAdresseDepartFK", columns={"ID_AdresseDepart"}), @ORM\Index(name="CourseEmployesFK", columns={"ID_Employe"}), @ORM\Index(name="CourseFactureFK", columns={"ID_Facture"})})
 * @ORM\Entity
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
     * @ORM\Column(name="Course_HeureDepart", type="date", nullable=false)
     */
    private $courseHeuredepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Course_HeureArrivee", type="date", nullable=false)
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

    /**
     * @return int
     */
    public function getCourseNumtransaction(): int
    {
        return $this->courseNumtransaction;
    }

    /**
     * @param int $courseNumtransaction
     */
    public function setCourseNumtransaction(int $courseNumtransaction): void
    {
        $this->courseNumtransaction = $courseNumtransaction;
    }

    /**
     * @return int
     */
    public function getCourseNbpassagers(): int
    {
        return $this->courseNbpassagers;
    }

    /**
     * @param int $courseNbpassagers
     */
    public function setCourseNbpassagers(int $courseNbpassagers): void
    {
        $this->courseNbpassagers = $courseNbpassagers;
    }

    /**
     * @return \DateTime
     */
    public function getCourseHeuredepart(): \DateTime
    {
        return $this->courseHeuredepart;
    }

    /**
     * @param \DateTime $courseHeuredepart
     */
    public function setCourseHeuredepart(\DateTime $courseHeuredepart): void
    {
        $this->courseHeuredepart = $courseHeuredepart;
    }

    /**
     * @return \DateTime
     */
    public function getCourseHeurearrivee(): \DateTime
    {
        return $this->courseHeurearrivee;
    }

    /**
     * @param \DateTime $courseHeurearrivee
     */
    public function setCourseHeurearrivee(\DateTime $courseHeurearrivee): void
    {
        $this->courseHeurearrivee = $courseHeurearrivee;
    }

    /**
     * @return string
     */
    public function getCourseStatut(): string
    {
        return $this->courseStatut;
    }

    /**
     * @param string $courseStatut
     */
    public function setCourseStatut(string $courseStatut): void
    {
        $this->courseStatut = $courseStatut;
    }

    /**
     * @return float
     */
    public function getCoursePrix(): float
    {
        return $this->coursePrix;
    }

    /**
     * @param float $coursePrix
     */
    public function setCoursePrix(float $coursePrix): void
    {
        $this->coursePrix = $coursePrix;
    }

    /**
     * @return float
     */
    public function getCourseDistance(): float
    {
        return $this->courseDistance;
    }

    /**
     * @param float $courseDistance
     */
    public function setCourseDistance(float $courseDistance): void
    {
        $this->courseDistance = $courseDistance;
    }

    /**
     * @return string
     */
    public function getVehiculeNumplaques(): string
    {
        return $this->vehiculeNumplaques;
    }

    /**
     * @param string $vehiculeNumplaques
     */
    public function setVehiculeNumplaques(string $vehiculeNumplaques): void
    {
        $this->vehiculeNumplaques = $vehiculeNumplaques;
    }

    /**
     * @return int
     */
    public function getIdAdressearrivee(): int
    {
        return $this->idAdressearrivee;
    }

    /**
     * @param int $idAdressearrivee
     */
    public function setIdAdressearrivee(int $idAdressearrivee): void
    {
        $this->idAdressearrivee = $idAdressearrivee;
    }

    /**
     * @return int
     */
    public function getIdStatutcourse(): int
    {
        return $this->idStatutcourse;
    }

    /**
     * @param int $idStatutcourse
     */
    public function setIdStatutcourse(int $idStatutcourse): void
    {
        $this->idStatutcourse = $idStatutcourse;
    }

    /**
     * @return \Facture
     */
    public function getIdFacture(): \Facture
    {
        return $this->idFacture;
    }

    /**
     * @param \Facture $idFacture
     */
    public function setIdFacture(\Facture $idFacture): void
    {
        $this->idFacture = $idFacture;
    }

    /**
     * @return \Adresse
     */
    public function getIdAdressedepart(): \Adresse
    {
        return $this->idAdressedepart;
    }

    /**
     * @param \Adresse $idAdressedepart
     */
    public function setIdAdressedepart(\Adresse $idAdressedepart): void
    {
        $this->idAdressedepart = $idAdressedepart;
    }

    /**
     * @return \Client
     */
    public function getIdClient(): \Client
    {
        return $this->idClient;
    }

    /**
     * @param \Client $idClient
     */
    public function setIdClient(\Client $idClient): void
    {
        $this->idClient = $idClient;
    }

    /**
     * @return \Employes
     */
    public function getIdEmploye(): \Employes
    {
        return $this->idEmploye;
    }

    /**
     * @param \Employes $idEmploye
     */
    public function setIdEmploye(\Employes $idEmploye): void
    {
        $this->idEmploye = $idEmploye;
    }


}
