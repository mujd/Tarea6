<?php

namespace MRF\ClienteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\ClienteBundle\Entity\Cliente;
use MRF\ClienteBundle\Form\ClienteType;
use Symfony\Component\HttpFoundation\Session\Session;

class ClienteController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('MRFClienteBundle:Cliente')->findAll();
        
        $session = new Session();
        $em2 = $this->getDoctrine()->getManager();
        $menuRol = $em2->getRepository('MRFMenuRolBundle:MenuRol')->findBy(array("rol" => $session->get('usuarioRolID')));
        return $this->render('MRFClienteBundle:Cliente:list.html.twig', array(
            'cliente' => $cliente,
            'usuarioNombre' => $session->get('usuarioNombre'),
            'usuarioRol' => $session->get('usuarioRolNombre'),
            'menuRol'=>$menuRol));
    }
    
//    public function listAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        //$cliente = $em->getRepository('MRFClienteBundle:Cliente')->findAll();
//        
//        $dql = "SELECT c FROM MRFClienteBundle:Cliente c";
//        $clientes = $em->createQuery($dql);
//        
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $clientes, $request->query->getInt('page', 1),
//                15
//                );
//                        
//        return $this->render('MRFClienteBundle:Cliente:list.html.twig', array(
//            'pagination' => $pagination));
//    }
    
    
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "Cliente" en la variable $cliente                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $cliente */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        return $this->render(
                'MRFClienteBundle:Cliente:add.html.twig', 
                array(
                    'form' => $form->createView(),
                    'largoFono' => $this->getParameter('app.fono_largo_default')
                )
        ); //Para que se vea más ordenado (y se distingan los parámetros)
    }
     public function addAction2()
    {
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        return $this->render(
                'MRFClienteBundle:Cliente:add.html.twig', 
                array(
                    'form' => $form->createView(),
                    'largoFono' => $this->getParameter('app.fono_largo_default')
                )
        ); //Para que se vea más ordenado (y se distingan los parámetros)
    }
    /*----------------------------------------------------------------------------------------------------*/
    /* create: Registra la entidad en la base de datos                                                    */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Recibe como parámetro el objeto "Request" ($request), sirve para recirbir la peticion dentro del*/
    /*    formulario, contiene toda la información de este y será utilizado para el almacenamiento en la  */
    /*    base de datos                                                                                   */
    /* 2. Instanciación de la clase "Cliente" en la variable $cliente                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $cliente */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, obtenemos la información de persistencia en la variable $em     */
    /* 7. En base al metodo getManager() Se utiliza el metodo persist() que enviara el objeto asignado    */
    /* 8. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al cliente al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "add.html" para desplegar al cliente      */
    /*    nuevamente el formulario de creción                                                             */
    /*----------------------------------------------------------------------------------------------------*/
    public function createAction(Request $request)
    {   
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue creado con exito.');    
            return $this->redirectToRoute('mrf_cliente_list');
        }
        return $this->render('MRFClienteBundle:Cliente:add.html.twig', array('form' => $form->createView()));
    }
    public function createAction2(Request $request)
    {   
        $cliente = new Cliente();
        $form = $this->createCreateForm($cliente);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue creado con exito.');    
            return $this->redirectToRoute('mrf_cliente_list');
        }
        return $this->render('MRFClienteBundle:Cliente:add.html.twig', array('form' => $form->createView()));
    }
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('MRFClienteBundle:Cliente')->find($id);
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        $form = $this->createEditForm($cliente);   
        return $this->render('MRFClienteBundle:Cliente:edit.html.twig', array('cliente' => $cliente, 'form'=>$form->createView(),
            'largoFono' => $this->getParameter('app.fono_largo_default')));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del cliente y los datos del formulario (datos del cliente)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el cliente buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $cliente                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al cliente un mensaje error               */
    /* 5. Si el cliente existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $cliente                                                                               */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, se gatilla el método flush() para guardar los campos a la base  */
    /*    de datos                                                                                        */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al cliente al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "edit.html" para desplegar al cliente     */
    /*    nuevamente el formulario de edición                                                             */
    /*----------------------------------------------------------------------------------------------------*/    
    public function UpdateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('MRFClienteBundle:Cliente')->find($id);
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        $form = $this->createEditForm($cliente);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Cliente fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_cliente_list', array('id'=>$cliente->getId()));
        }
        return $this->render('MRFClienteBundle:Cliente:edit.html.twig', array('cliente'=>$cliente,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del cliente                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad Cliente en las variables $request y $cliente*/
    /*    siendo el sgeundo parámetro el registro de cliente seleccionado                                 */
    /* 2. Si el cliente seleccionado es nulo, se despliega el listao de clientes                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los clientes                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, Cliente $cliente) {
        if($cliente === null){
            return $this->redirectToRoute('mrf_cliente_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($cliente);
        $em->flush();
        $this->addFlash('mensaje', 'El Cliente fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_cliente_list');
    }
    */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $cliente= $em->getRepository('MRFClienteBundle:Cliente')->find($id);
        if(!$cliente){
            throw $this->createNotFoundException('El cliente no fue encontrado!');
        }
        $em->remove($cliente);
        $em->flush();
        $this->addFlash('mensaje', 'El Cliente fue Eliminado con exito.');
        return $this->redirectToRoute('mrf_cliente_list');
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(Cliente $entity)
    {
        $form = $this->createForm(new ClienteType(), $entity, array(
            'action' => $this->generateUrl('mrf_cliente_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(Cliente $entity){
        $form = $this->createForm(new ClienteType(), $entity, array(
            'action'=> $this->generateUrl('mrf_cliente_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
    
}