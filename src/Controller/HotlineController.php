<?php
/**
 * Created by PhpStorm.
 * User: kmessmer
 * Date: 11/02/2019
 * Time: 16:58
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HotlineController extends AbstractController
{
    /**
     * @Route("/creation-client", name="creationClient")
     */
    function creationClientAction()
    {
        return $this->render("/Hotline/creationclient.html.twig");
    }

    /**
     * @Route("/creation-course", name="creationCourse")
     */
    function creationCourseAction()
    {
        return $this->render("/Hotline/creationcourse.html.twig");
    }

    /**
     * @Route("/update-client/{id}", requirements={"id" : "\d+"}, name="updateClient")
     */
    function updateClientAction($idclient)
    {
        return $this->render("/Hotline/updateclient.html.twig");
    }

    /**
     * @Route("/delete-client/{id}", requirements={"id" : "\d+"}, name="deleteClient")
     */
    function deleteClient($idclient)
    {
        return $this->render("/Hotline/deleteclient.html.twig");
    }

    /**
     * @Route("/show-client/{id}", requirements={"id" : "\d+"}, name="showClient")
     */
    function showOneClient($idclient)
    {
        return $this->render("/Hotline/showoneclient.html.twig");
    }

    /**
     * @Route("/show-clients", name="showAllClients")
     */
    function showAllClients()
    {
        return $this->render("/Hotline/showallclients.html.twig");
    }
}