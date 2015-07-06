<?php

namespace Ntech\ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServiceController extends Controller
{
    public function show404Action()
    {
        return $this->render('NtechClientBundle:Service:page404/index.html.twig');
    }
}