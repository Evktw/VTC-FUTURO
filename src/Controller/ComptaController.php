<?php

namespace App\Controller;

use App\Entity\Facture;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
/**
 * Created by PhpStorm.
 * User: mlemainq
 * Date: 11/02/2019
 * Time: 14:55
 * Class ComptaController
 * @package BE\Controller
 * @route("/compta")
 */

class ComptaController extends AbstractController{

    /**
     * @Route(
     *     "/index",
     *     name="compta"
     * )
     */
    public function comptaAction(){
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository('App:Course')->findAll();
        $nbTotalPages = count($courses)/10;
        return $this-> render('Compta/index.html.twig', ['courses' => $courses, 'nbTotalPages' =>$nbTotalPages]);
    }

    /**
     * @Route(
     *     "/view-facture/{id]",
     *     requirements={"id" : "^[1-9]+[0-9]*"},
     *     name="Vue-Facture"
     * )
     *
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function ViewFactureAction($id){
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('App:Facture')->findOneBy($id);
        if(!$facture)
        {
            throw new NotFoundHttpException("Erreur lors de la récupération de la facture $id");
        }
        else {
            return $this->render('Compta/facture.html.twig', ['idFacture' => $id, 'facture' => $facture]);
        }
    }

}