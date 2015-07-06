<?php

namespace Ntech\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LandingController extends Controller
{
    public function indexAction()
    {
        return $this->render('NtechClientBundle:Landing:index.html.twig');
    }
}