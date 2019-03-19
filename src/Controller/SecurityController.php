<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Security;
class SecurityController extends AbstractController
{
    /**
     * @Route("/", name="app_login")
     *
     * @return Response
     */
    public function loginAction(Request $request, AuthenticationUtils $authUtils)
    {
        // Récupération des erreurs s'il y en a eu lors de la précédente authentification
        $error = $authUtils->getLastAuthenticationError();
        // Login précédemment saisi par l'utilisateur
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('Security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }
    /**
     * @Route("login_check", name="app_login_check")
     * On déclare une route mais l'action ne sera jamais exécutée car Symfony catche l'évènement
     *
     * @return Response
     * @throws \Exception
     */
    public function loginCheckAction()
    {
        // Non censé entrer ici car la route doit être catchée par Symfony ==> L'exception joue un rôle de garde fou
        throw new \Exception('Unexpexted loginCheck action');
    }

    /**
     * @Route("logout", name="app_logout")
     *
     * @return Response
     * @throws \Exception
     */
    public function logoutAction()
    {
        // Non censé entrer ici car la route doit être catchée par Symfony ==> L'exception joue un rôle de garde fou
        throw new \Exception('Unexpected logout action');
    }

    /**
     * @Route("accueilConnection", name="accueilConnection")
     */
    public function accueilConnectionAction(Request $request, AuthenticationUtils $authUtils,Security $security)
    {

        if(!$security->isGranted('Role_Rh')) {
            return $this->render('RH/accueilRh.html.twig');
        }

        // Récupération des erreurs s'il y en a eu lors de la précédente authentification
        $error = $authUtils->getLastAuthenticationError();
        // Login précédemment saisi par l'utilisateur
        $lastUsername = $authUtils->getLastUsername();
        return $this->render('Security/login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));

        return $this->render('Security/login.html.twig');
    }
}