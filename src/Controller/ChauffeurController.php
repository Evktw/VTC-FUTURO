<?php
/**
 * Created by PhpStorm.
 * User: mrouss15
 * Date: 18/03/2019
 * Time: 09:32
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ChauffeurController extends AbstractController
{
    /**
     * @Route("/chauffeur", name="chauffeur")
     */
    public function chauffeurAction()
    {
        return $this->render('Chauffeur/viewchauffeur.html.twig');
    }
}