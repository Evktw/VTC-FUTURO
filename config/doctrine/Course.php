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


}
