<?php

namespace MRF\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MRFMenuBundle:Default:index.html.twig', array('name' => $name));
    }
}
