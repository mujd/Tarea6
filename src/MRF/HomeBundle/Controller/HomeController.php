<?php

namespace MRF\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('MRFHomeBundle:Home:index.html.twig');
    }
}
