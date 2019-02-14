<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatutCourses
 *
 * @ORM\Table(name="Statut_courses")
 * @ORM\Entity
 */
class StatutCourses
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID_StatutCourse", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStatutcourse;

    /**
     * @var string
     *
     * @ORM\Column(name="Statut_NomCourse", type="string", length=50, nullable=false)
     */
    private $statutNomcourse;


}
