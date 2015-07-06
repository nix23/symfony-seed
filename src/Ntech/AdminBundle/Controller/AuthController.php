<?php
namespace Ntech\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthController extends Controller
{
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
            'NtechAdminBundle:Auth:index.html.twig',
            array(
                'lastUsername' => $lastUsername,
                'error'        => $error,
            )
        );
    }
}