<?php

namespace MRF\RolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\RolBundle\Entity\Rol;
use MRF\RolBundle\Form\RolType;
use Symfony\Component\HttpFoundation\Session\Session;

class RolController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('MRFRolBundle:Rol')->findAll();
                
        return $this->render('MRFRolBundle:Rol:list.html.twig', array(
            'rol' => $rol));
    }
    
//    public function listAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        //$cliente = $em->getRepository('MRFRolBundle:Rol')->findAll();
//        
//        $dql = "SELECT r FROM MRFRolBundle:Rol r";
//        $roles = $em->createQuery($dql);
//        
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $roles, $request->query->getInt('page', 1),
//                15
//                );
//                        
//        return $this->render('MRFRolBundle:Rol:list.html.twig', array(
//            'pagination' => $pagination));
//    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "Rol" en la variable $rol                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $rol */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $rol = new Rol();
        $form = $this->createCreateForm($rol);
        return $this->render('MRFRolBundle:Rol:add.html.twig', array('form' => $form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* create: Registra la entidad en la base de datos                                                    */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Recibe como parámetro el objeto "Request" ($request), sirve para recirbir la peticion dentro del*/
    /*    formulario, contiene toda la información de este y será utilizado para el almacenamiento en la  */
    /*    base de datos                                                                                   */
    /* 2. Instanciación de la clase "Rol" en la variable $rol                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $rol */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, obtenemos la información de persistencia en la variable $em     */
    /* 7. En base al metodo getManager() Se utiliza el metodo persist() que enviara el objeto asignado    */
    /* 8. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al rol al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "add.html" para desplegar al rol      */
    /*    nuevamente el formulario de creción                                                             */
    /*----------------------------------------------------------------------------------------------------*/
    public function createAction(Request $request)
    {   
        $rol = new Rol();
        $form = $this->createCreateForm($rol);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($rol);
            $em->flush();
            $this->addFlash('mensaje', 'El Rol fue creado con exito.');    
            return $this->redirectToRoute('mrf_rol_list');
        }
        return $this->render('MRFRolBundle:Rol:add.html.twig', array('form' => $form->createView()));
    }
    
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('MRFRolBundle:Rol')->find($id);
        if(!$rol){
            throw $this->createNotFoundException('El rol no fue encontrado!');
        }
        $form = $this->createEditForm($rol);   
        return $this->render('MRFRolBundle:Rol:edit.html.twig', array('rol' => $rol, 'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del rol y los datos del formulario (datos del rol)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el rol buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $rol                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al rol un mensaje error               */
    /* 5. Si el rol existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $rol                                                                               */
    /* 4. Mediante la función handleRequest(), se obtiene la información del "Request" que está           */
    /*    almacenado en la variable $request                                                              */
    /* 5. Valida si el form es valido con el metodo isValid(), o sea, si el formulario se envio bien      */
    /* 6. Si el punto anterior es válido, se gatilla el método flush() para guardar los campos a la base  */
    /*    de datos                                                                                        */
    /* 9. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /*10. Redireccionamos al rol al listado de clietnes con el método "redirectToRoute"               */
    /*10. Si el formulario no es válido, se renderiza plantilla "edit.html" para desplegar al rol     */
    /*    nuevamente el formulario de edición                                                             */
    /*----------------------------------------------------------------------------------------------------*/    
    public function UpdateAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $rol = $em->getRepository('MRFRolBundle:Rol')->find($id);
        if(!$rol){
            throw $this->createNotFoundException('El rol no fue encontrado!');
        }
        $form = $this->createEditForm($rol);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Rol fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_rol_list', array('id'=>$rol->getId()));
        }
        return $this->render('MRFRolBundle:Rol:edit.html.twig', array('rol'=>$rol,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del rol                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad Rol en las variables $request y $rol*/
    /*    siendo el sgeundo parámetro el registro de rol seleccionado                                 */
    /* 2. Si el rol seleccionado es nulo, se despliega el listao de rols                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los rols                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, Rol $rol) {
        if($rol === null){
            return $this->redirectToRoute('mrf_rol_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($rol);
        $em->flush();
        $this->addFlash('mensaje', 'El Rol fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_rol_list');
    }
    */
    public function deleteAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $rol= $em->getRepository('MRFRolBundle:Rol')->find($id);
        if(!$rol){
            //throw $this->createNotFoundException('El rol no fue encontrado!');
            $this->addFlash('mensaje', 'No se encontro un Rol.');    
            return $this->redirectToRoute('mrf_rol_list');
        }
        
        try {
            $em->remove($rol);
            $em->flush();
            $this->addFlash('mensaje', 'El Rol fue Eliminado con exito.');
        }
        catch (\Exception $e) {
            $this->addFlash('mensaje', $e->getmessage());
        } 
        finally {
            return $this->redirectToRoute('mrf_rol_list');
        }

        
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(Rol $entity)
    {
        $form = $this->createForm(new RolType(), $entity, array(
            'action' => $this->generateUrl('mrf_rol_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(Rol $entity){
        $form = $this->createForm(new RolType(), $entity, array(
            'action'=> $this->generateUrl('mrf_rol_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
}