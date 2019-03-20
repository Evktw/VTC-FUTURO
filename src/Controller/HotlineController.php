<?php

namespace App\Controller;


use App\Entity\Adresse;
use App\Entity\Client;
use App\Entity\Course;
use App\Forms\AdresseType;
use App\Forms\ClientType;
use App\Forms\CourseType;
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
     * @Route("/update-client/{idclient}", requirements={"idclient" : "\d+"}, name="updateClient")
     */
    function updateClientAction($idclient, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy(array('idClient' => $idclient));

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

            return $this->redirectToRoute('showClient', array('idclient' => $idclient));

        }

        return $this->render("/Hotline/updateclient.html.twig",array('id' => $idclient, 'form' => $form->createView()));
    }

    /**
     * @Route("/delete-client/{idclient}", requirements={"idclient" : "\d+"}, name="deleteClient")
     */
    function deleteClientAction($idclient)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy(array('idClient' => $idclient));

        $courseClient = $em->getRepository('App:Course')->findAllCoursesForAClient($idclient);

        foreach($courseClient as $course)
        {
            $em->remove($course);
        }

        $em->flush();

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
     * @Route("/show-client/{idclient}", requirements={"idclient" : "\d+"}, name="showClient")
     */
    function showOneClientAction($idclient)
    {
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('App:Client')->findOneBy(array('idClient' => $idclient));

        if(!$client)
        {
            throw $this->createNotFoundException("Pas de client correspondant à cette ID");
        }

        return $this->render("/Hotline/showoneclient.html.twig", array('client'=>$client));
    }

    /**
     * @Route("/show-clients", name="showAllClients")
     */
    function showAllClientsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $allclients = $em->getRepository('App:Client')->findAll();


        return $this->render("/Hotline/showallclients.html.twig",array('clients' => $allclients));
    }

    /**
     *  @Route("/management-clients", name="managementClients")
     */
    function managementClientsAction()
    {
        return $this->render("/Hotline/managementclients.html.twig");
    }

    /**
     * @Route("/creation-course", name="creationCourse")
     */
    /*
    function creationCourseAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $course = new Course();
        $adresseDepart = new Adresse();
        $adresseArrivee = new Adresse();

        $form = $this->createForm(AdresseType::class, $adresseDepart);
        $form->add($this->createForm(AdresseType::class), $adresseArrivee);

        $form->add('Ajouter',SubmitType::class, ['label'=>'Ajouter Course']);

        $form->handleRequest($request);

        if($form -> isSubmitted() && $form->isValid())
        {
            try
            {
                $em->persist($course);
                $em->flush();
                $this->addFlash('info',"Course bien ajouté");
            }
            catch(\Exception $exceptionajout)
            {
                $this->addFlash('info',"Erreur lors de l'ajout");
            }

            return $this->redirectToRoute('creationCourse');
        }

        return $this->render("/Hotline/creationcourse.html.twig", array('form' => $form->createView()));
    }

    */


}