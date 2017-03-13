<?php

namespace MRF\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\UsuarioBundle\Entity\Usuario;
use MRF\UsuarioBundle\Form\UsuarioType;
use Symfony\Component\HttpFoundation\Session\Session;

class UsuarioController extends Controller
{
        public function loginAction()
    {
        return $this->render('MRFUsuarioBundle:Login:login.html.twig');
    }
    
    public function validarAction(Request $request)
    {

        $session = new Session();

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('MRFUsuarioBundle:Usuario')->findOneBy(array(
            'username' => $request->request->get('username'),
            'password' => $request->request->get('password')
        ));
        if(!$user){
            //throw $this->createNotFoundException('El usuario no fue encontrado!');
            $this->addFlash('status', 'El Usuario NO fue encontrado!!.');    
            return $this->redirectToRoute('mrf_usuario_login');
        }
        $session->set('usuario', $user->getId());
        $session->set('usuarioNombre', $user->getNombres().' '.$user->getApellidoP().' '.$user->getApellidoM());
        $session->set('usuarioRolID', $user->getRol()->getId());
        $session->set('usuarioRolNombre', $user->getRol()->getNombre());
        //$this->addFlash('status', 'Bienvenido!!.',$user->getNombres());    
        return $this->redirectToRoute('mrf_home_homepage');

    }
    
    public function logoutAction(){
        return $this->render('MRFUsuarioBundle:Login:logout.html.twig');
    }

//    public function validarAction(Request $request)
//    {
//
//        $session = new Session();
//
//        $em = $this->getDoctrine()->getManager();
//        $usuario = $em->getRepository('MRFUsuarioBundle:Usuario')->findOneBy(array(
//            'username' => $request->request->get('username'),
//            'password' => $request->request->get('password')
//        ));
//        if(!$usuario){
//            //throw $this->createNotFoundException('El usuario no fue encontrado!');
//            $this->addFlash('mensaje', 'El Usuario NO fue encontrado!!.');    
//            return $this->redirectToRoute('mrf_usuario_login');
//        }
//        $session->set('usuario', $usuario->getId());
//        $this->addFlash('mensaje', 'Bienvenido!!.');    
//        return $this->redirectToRoute('mrf_menu_list');
//
//    }
    
//    public function listAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//        $usuario = $em->getRepository('MRFUsuarioBundle:Usuario')->findAll();
//                
//        return $this->render('MRFUsuarioBundle:Usuario:list.html.twig', array(
//            'usuario' => $usuario));
//    }
    
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('MRFUsuarioBundle:Usuario')->findAll();
        
        $session = new Session();
        $em2 = $this->getDoctrine()->getManager();
        $menuRol = $em2->getRepository('MRFMenuRolBundle:MenuRol')->findBy(array("rol" => $session->get('usuarioRolID')));
        return $this->render('MRFUsuarioBundle:Usuario:list.html.twig', array(
            'usuario' => $usuario,
            'usuarioNombre' => $session->get('usuarioNombre'),
            'usuarioRol' => $session->get('usuarioRolNombre'),
            'menuRol'=>$menuRol));
    }
    
//    public function listAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        //$cliente = $em->getRepository('MRFUsuarioBundle:Usuario')->findAll();
//        
//        $dql = "SELECT u FROM MRFUsuarioBundle:Usuario u";
//        $usuarios = $em->createQuery($dql);
//        
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $usuarios, $request->query->getInt('page', 1),
//                5
//                );
//                        
//        return $this->render('MRFUsuarioBundle:Usuario:list.html.twig', array(
//            'pagination' => $pagination));
//    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "Usuario" en la variable $usuario                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $usuario */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $usuario = new Usuario();
        $form = $this->createCreateForm($usuario);
        return $this->render('MRFUsuarioBundle:Usuario:add.html.twig', array('form' => $form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* create: Registra la entidad en la base de datos                                                    */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Recibe como parámetro el objeto "Request" ($request), sirve para recirbir la peticion dentro del*/
    /*    formulario, contiene toda la información de este y será utilizado para el almacenamiento en la  */
    /*    base de datos                                                                                   */
    /* 2. Instanciación de la clase "Usuario" en la variable $usuario                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $usuario */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, obtenemos la información de persistencia en la variable $em     */
    /* 7. En base al metodo getManager() Se utiliza el metodo persist() que enviara el objeto asignado    */
    /* 8. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al usuario al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "add.html" para desplegar al usuario      */
    /*    nuevamente el formulario de creción                                                             */
    /*----------------------------------------------------------------------------------------------------*/
    public function createAction(Request $request)
    {   
        $usuario = new Usuario();
        $form = $this->createCreateForm($usuario);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();
            $this->addFlash('mensaje', 'El Usuario fue creado con exito.');    
            return $this->redirectToRoute('mrf_usuario_list');
        }
        return $this->render('MRFUsuarioBundle:Usuario:add.html.twig', array('form' => $form->createView()));
    }
    
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('MRFUsuarioBundle:Usuario')->find($id);
        if(!$usuario){
            throw $this->createNotFoundException('El usuario no fue encontrado!');
        }
        $form = $this->createEditForm($usuario);   
        return $this->render('MRFUsuarioBundle:Usuario:edit.html.twig', array('usuario' => $usuario, 'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del usuario y los datos del formulario (datos del usuario)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el usuario buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $usuario                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al usuario un mensaje error               */
    /* 5. Si el usuario existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $usuario                                                                               */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, se gatilla el método flush() para guardar los campos a la base  */
    /*    de datos                                                                                        */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al usuario al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "edit.html" para desplegar al usuario     */
    /*    nuevamente el formulario de edición                                                             */
    /*----------------------------------------------------------------------------------------------------*/    
    public function UpdateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('MRFUsuarioBundle:Usuario')->find($id);
        if(!$usuario){
            throw $this->createNotFoundException('El usuario no fue encontrado!');
        }
        $form = $this->createEditForm($usuario);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Usuario fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_usuario_list', array('id'=>$usuario->getId()));
        }
        return $this->render('MRFUsuarioBundle:Usuario:edit.html.twig', array('usuario'=>$usuario,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del usuario                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad Usuario en las variables $request y $usuario*/
    /*    siendo el sgeundo parámetro el registro de usuario seleccionado                                 */
    /* 2. Si el usuario seleccionado es nulo, se despliega el listao de usuarios                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los usuarios                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, Usuario $usuario) {
        if($usuario === null){
            return $this->redirectToRoute('mrf_usuario_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($usuario);
        $em->flush();
        $this->addFlash('mensaje', 'El Usuario fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_usuario_list');
    }
    */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $usuario= $em->getRepository('MRFUsuarioBundle:Usuario')->find($id);
        if(!$usuario){
            //throw $this->createNotFoundException('El rol no fue encontrado!');
            $this->addFlash('mensaje', 'El Usuario fue NO puede ser eliminado ya que esta asignado a un Usuario.');    
            return $this->redirectToRoute('mrf_usuario_list');
        }
        $em->remove($usuario);
        $em->flush();
        $this->addFlash('mensaje', 'El Usuario fue Eliminado con exito.');
        return $this->redirectToRoute('mrf_usuario_list');
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(Usuario $entity)
    {
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action' => $this->generateUrl('mrf_usuario_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(Usuario $entity){
        $form = $this->createForm(new UsuarioType(), $entity, array(
            'action'=> $this->generateUrl('mrf_usuario_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
}