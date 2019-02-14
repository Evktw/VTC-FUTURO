<?php

namespace App\Controller;

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
        return $this-> render('Compta/index.html.twig');
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
        $facture = $em->getRepository('App:Facture')->getFactureByID($id);
        if(!$facture)
        {
            throw new NotFoundHttpException("Erreur lors de la récupération de la facture $id");
        }
        else {
            return $this->render('Compta/facture.html.twig', ['idFacture' => $id, 'facture' => $facture]);
        }
    }

}