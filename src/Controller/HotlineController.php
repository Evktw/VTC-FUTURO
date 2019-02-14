<?php
/**
 * Created by PhpStorm.
 * User: kmessmer
 * Date: 11/02/2019
 * Time: 16:58
 */

namespace App\Controller;


use App\Entity\Client;
use App\Forms\ClientType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HotlineController extends AbstractController
{
    /**
     * @Route("/creation-client", name="creationClient")
     */
    function creationClientAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $client = new Client();

        $form = $this->createForm(ClientType::class, $client);
        $form->add('Ajouter',SubmitType::class, ['label'=>'Ajouter Client']);

        $form->handleRequest($request);

        if($form -> isSubmitted() && $form->isValid())
        {
            try
            {
                $em->persist($client);
                $em->flush();
                $this->addFlash('info',"Client bien ajouté");
            }
            catch(\Exception $exceptionajout)
            {
                $this->addFlash('info',"Erreur lors de l'ajout");
            }

            return $this->redirectToRoute('creationCourse');
        }

        return $this->render("/Hotline/creationclient.html.twig", array('form' => $form->createView()));
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
    function updateClientAction($idclient, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy(array('id' => $idclient));

        $form = $this->createForm(ClientType::class, $client);
        $form->add('Modifier', SubmitType::class, ['label'=>'Modifier Client']);
        $form->handleRequest($request);

        if($form -> isSubmitted() && $form->isValid())
        {
            try
            {
                $em->flush();
                $this->addFlash('info',"Modification validé");
            }
            catch(\Exception $e)
            {
                $this->addFlash('info',"Erreur lors de la modifications");
            }

            return $this->redirectToRoute('showClient', array('id' => $idclient));

        }

        return $this->render("/Hotline/updateclient.html.twig");
    }

    /**
     * @Route("/delete-client/{id}", requirements={"id" : "\d+"}, name="deleteClient")
     */
    function deleteClientAction($idclient)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy(array('id' => $idclient));

        if(!$client)
        {
            throw $this->createNotFoundException("Pas d'article correspondant à cette ID");
        }
        else
        {
            $em->remove($client);
            $em->flush();

            $this->addFlash('info',"Tu as supprimer un client !");

            return $this->redirectToRoute('showAllClients');
        }
    }

    /**
     * @Route("/show-client/{id}", requirements={"id" : "\d+"}, name="showClient")
     */
    function showOneClientAction($idclient)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy($idclient);

        if(!$client)
        {
            throw $this->createNotFoundException("Pas de client correspondant à cette ID");
        }

        return $this->render("/Hotline/showoneclient.html.twig", array('id'=>$idclient));
    }

    /**
     * @Route("/show-clients", name="showAllClients")
     */
    function showAllClientsAction()
    {
        return $this->render("/Hotline/showallclients.html.twig");
    }
}