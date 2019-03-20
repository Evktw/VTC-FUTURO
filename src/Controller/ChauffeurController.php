<?php
/**
 * Created by PhpStorm.
 * User: mrouss15
 * Date: 18/03/2019
 * Time: 09:32
 */

namespace App\Controller;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class ChauffeurController extends AbstractController
{

    /**
     * @Route("/chauffeur/mainview", name="mainview")
     */
    public function mainViewAction(EntityManagerInterface $em)
    {
        $user = $this->getUser();
        $courses = $em->getRepository('App:Course')->findCoursesWithIdEmploye($user->getIdEmploye());
        $em->getRepository('App:Adresse')->findAll();
        $em->getRepository('App:Facture')->findAll();

        $nbCourses = count($courses);

        return $this->render('Chauffeur/mainview.html.twig',
            array('courses' => $courses, 'user' => $user, 'nbCourses' => $nbCourses));
    }

    /**
     * @Route("/chauffeur/updateStatus/{id}", requirements={"id": "\d+"}, name="updateStatus")
     */
    public function updateStatusAction($id, EntityManagerInterface $em)
    {
        echo '<script>alert("OK");</script>';
        $user = $this->getUser();
        $employe = $em->getRepository('App:Employes')->findOneBy($user->getIdEmploye());
        $employe->setStatutEmploye($id);
    }

    /**
     * @Route("/chauffeur", name="app_login")
     *
     * @return Response
     */
    public function loginAction(AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('Chauffeur/viewchauffeur.html.twig', array('last_username' => $lastUsername, 'error' => $error));
    }

    /**
     * @Route("/login_check", name="app_login_check")
     *
     * @return Response
     * @throws \Exception
     */
    public function loginCheckAction()
    {
        throw new \Exception('Unexpexted loginCheck action');
    }

    /**
     * @Route("/logout", name="app_logout")
     *
     * @return Response
     * @throws \Exception
     */
    public function logoutAction()
    {
        throw new \Exception('Unexpected logout action');
    }
}