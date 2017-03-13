<?php

namespace MRF\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MRF\UsuarioBundle\Entity\Usuario;
use MRF\MenuBundle\Entity\Menu;
use MRF\RolBundle\Entity\Rol;
use MRF\MenuRolBundle\Entity\MenuRol;
use Symfony\Component\HttpFoundation\Session\Session;

class MenuController extends Controller
{
    public function indexAction()
    {
        return $this->render('MRFMenuBundle:Menu:index.html.twig');
    }


    public function listAction()
    {
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MRFMenuRolBundle:MenuRol')->findBy(array("rol" => $session->get('usuarioRolID')));
        return $this->render('MRFUsuarioBundle:Menu:list.html.twig', array(
            'usuarioNombre' => $session->get('usuarioNombre'),
            'usuarioRol' => $session->get('usuarioRolNombre'),
            'menuRol'=>$menuRol));
    }



}
