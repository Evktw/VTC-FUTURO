<?php
/**
 * Created by PhpStorm.
 * User: gboisson
 * Date: 14/02/2019
 * Time: 14:37
 */





namespace App\Controller;

use App\Entity\Employes;
use App\Form\EmployesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RhController extends AbstractController
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @Route("/addEmploye", name="addEmploye")
     */
    public function AddEmployeAction(Request $request)
    {
        $employe = new Employes();

        $form = $this->createForm(EmployesType::class, $employe);
        $form->add('send', SubmitType::class, ['label' =>'Ajouter']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ) {

            $employe->setUsername($employe->getLogin());
            $employe->setEmployeMdp($this->passwordEncoder->encodePassword($employe, $employe->getEmployeMdp()));

            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();

            $this->addFlash('info', "Employe ajouté");
            return $this->redirectToRoute('accueilConnection');
        }

        return $this->render('RH/addEmploye.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("/listEmploye", name="listEmploye")
     */
    public function listEmployeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $Employes = $em->getRepository("App:Employes")->findAll();

        return $this->render('RH/listEmploye.html.twig',array('Employes' => $Employes));
    }

    /**
     * @Route("/viewEmploye/{id}", requirements={"id": "\d+"}, name="viewEmploye")
     */
    public function viewEmployeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $Employe = $em->getRepository("App:Employes")->find($id);

        return $this->render('RH/viewEmploye.html.twig',array('Employe' => $Employe));
    }

    /**
     * @Route("/editEmploye/{id}", requirements={"id": "\d+"}, name="editEmploye")
     */
    public function editEmployeAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository("App:Employes")->find($id);

        $form = $this->createForm(EmployesType::class, $employe);
        $form->add('send', SubmitType::class, ['label' =>'Modifier']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employe);
            $em->flush();

            $this->addFlash('info', "Employe modifié");
            return $this->redirectToRoute('viewEmploye', array('id' => $id));
        }

        return $this->render('RH/editEmploye.html.twig',array('form' => $form->createView()));
    }

    /**
     * @Route("deleteEmploye/{id}", name="deleteEmploye")
     *
     */
    public function deleteEmployeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository("App:Employes")->find($id);
        if($employe) {
            $em->remove($employe);
            $em->flush();
        }
        $this->addFlash('info', "Employé supprimé");
        return $this->redirectToRoute('listEmploye');
    }

}