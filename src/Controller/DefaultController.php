<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("default", name="default")
     */
    public function helloWorldAction()
    {
        //return new Response('<body>Hello World !</body>');

        //$locale = $request->getLocale();
        $em = $this->getDoctrine()->getManager();
        $lesEmployes = $em->getRepository('App:Employes')->findAll();
        $lesStatuts = $em->getRepository('App:StatutEmployes')->findAll();
        return $this->render('hello_world.html.twig',array('lesEmployes' => $lesEmployes,));
    }
}