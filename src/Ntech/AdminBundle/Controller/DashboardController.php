<?php

namespace Ntech\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('NtechAdminBundle:Dashboard:index.html.twig', array(
        ));
    }
}