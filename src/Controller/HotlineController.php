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

    }

    /**
     * @Route("/creation-course", name="creationCourse")
     */
    function creationCourseAction()
    {

    }

    /**
     * @Route("/update-client/{id}", requirements={"id" : "\d+"}, name="updateClient")
     */
    function updateClientAction($idclient)
    {

    }

    /**
     * @Route("/delete-client/{id}", requirements={"id" : "\d+"}, name="deleteClient")
     */
    function deleteClient($idclient)
    {

    }

    /**
     * @Route("/show-client/{id}", requirements={"id" : "\d+"}, name="showClient")
     */
    function showOneClient($idclient)
    {

    }

    /**
     * @Route("/show-clients", name="showAllClients")
     */
    function showAllClients()
    {

    }
}