<?php

namespace ColombiaAutos\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ColombiaAutosSecurityBundle:Default:index.html.twig', array('name' => $name));
    }
}
