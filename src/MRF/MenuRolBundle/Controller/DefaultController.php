<?php

namespace MRF\MenuRolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MRFMenuRolBundle:Default:index.html.twig', array('name' => $name));
    }
}
