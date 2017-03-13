<?php

namespace MRF\ProveedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\ProveedorBundle\Entity\Proveedor;
use MRF\ProveedorBundle\Form\ProveedorType;
use Symfony\Component\HttpFoundation\Session\Session;

class ProveedorController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository('MRFProveedorBundle:Proveedor')->findAll();
        
        $session = new Session();
        $em2 = $this->getDoctrine()->getManager();
        $menuRol = $em2->getRepository('MRFMenuRolBundle:MenuRol')->findBy(array("rol" => $session->get('usuarioRolID')));
        
        return $this->render('MRFProveedorBundle:Proveedor:list.html.twig', array(
            'usuarioNombre' => $session->get('usuarioNombre'),
            'usuarioRol' => $session->get('usuarioRolNombre'),
            'menuRol'=>$menuRol,
            'proveedor' => $proveedor));
    }
    
//    public function listAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        
//        $dql = "SELECT p FROM MRFProveedorBundle:Proveedor p";
//        $proveedores = $em->createQuery($dql);
//        
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $proveedores, $request->query->getInt('page', 1),
//                15
//                );
//                        
//        return $this->render('MRFProveedorBundle:Proveedor:list.html.twig', array(
//            'pagination' => $pagination));
//    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "Proveedor" en la variable $proveedor                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $proveedor */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $proveedor = new Proveedor();
        $form = $this->createCreateForm($proveedor);
        return $this->render('MRFProveedorBundle:Proveedor:add.html.twig', array(
            'form' => $form->createView(),
            'largoFono' => $this->getParameter('app.fono_largo_default')));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* create: Registra la entidad en la base de datos                                                    */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Recibe como parámetro el objeto "Request" ($request), sirve para recirbir la peticion dentro del*/
    /*    formulario, contiene toda la información de este y será utilizado para el almacenamiento en la  */
    /*    base de datos                                                                                   */
    /* 2. Instanciación de la clase "Proveedor" en la variable $proveedor                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $proveedor */
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
        $proveedor = new Proveedor();
        $form = $this->createCreateForm($proveedor);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedor);
            $em->flush();
            $this->addFlash('mensaje', 'El Proveedor fue creado con exito.');    
            return $this->redirectToRoute('mrf_proveedor_list');
        }
        return $this->render('MRFProveedorBundle:Proveedor:add.html.twig', array('form' => $form->createView()));
    }
    
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $proveedor = $em->getRepository('MRFProveedorBundle:Proveedor')->find($id);
        if(!$proveedor){
            throw $this->createNotFoundException('El proveedor no fue encontrado!');
        }
        $form = $this->createEditForm($proveedor);   
        return $this->render('MRFProveedorBundle:Proveedor:edit.html.twig', array('proveedor' => $proveedor, 'form'=>$form->createView(),
            'largoFono' => $this->getParameter('app.fono_largo_default')));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del proveedor y los datos del formulario (datos del proveedor)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el proveedor buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $proveedor                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al usuario un mensaje error               */
    /* 5. Si el usuario existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $proveedor                                                                               */
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
        $proveedor = $em->getRepository('MRFProveedorBundle:Proveedor')->find($id);
        if(!$proveedor){
            throw $this->createNotFoundException('El proveedor no fue encontrado!');
        }
        $form = $this->createEditForm($proveedor);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Proveedor fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_proveedor_list', array('id'=>$proveedor->getId()));
        }
        return $this->render('MRFProveedorBundle:Proveedor:edit.html.twig', array('proveedor'=>$proveedor,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del proveedor                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad Proveedor en las variables $request y $proveedor*/
    /*    siendo el sgeundo parámetro el registro de proveedor seleccionado                                 */
    /* 2. Si el proveedor seleccionado es nulo, se despliega el listao de proveedors                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los proveedors                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, Proveedor $proveedor) {
        if($proveedor === null){
            return $this->redirectToRoute('mrf_proveedor_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($proveedor);
        $em->flush();
        $this->addFlash('mensaje', 'El Proveedor fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_proveedor_list');
    }
    */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $proveedor= $em->getRepository('MRFProveedorBundle:Proveedor')->find($id);
        if(!$proveedor){
            throw $this->createNotFoundException('El proveedor no fue encontrado!');
        }
        $em->remove($proveedor);
        $em->flush();
        $this->addFlash('mensaje', 'El Proveedor fue Eliminado con exito.');
        return $this->redirectToRoute('mrf_proveedor_list');
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(Proveedor $entity)
    {
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action' => $this->generateUrl('mrf_proveedor_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(Proveedor $entity){
        $form = $this->createForm(new ProveedorType(), $entity, array(
            'action'=> $this->generateUrl('mrf_proveedor_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
}