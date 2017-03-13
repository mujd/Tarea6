<?php

namespace MRF\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\MenuBundle\Entity\Menu;
use MRF\MenuBundle\Form\MenuType;

class MenuController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('MRFMenuBundle:Menu')->findAll();
                
        return $this->render('MRFMenuBundle:Menu:list.html.twig', array(
            'menu' => $menu));
    }
    
//    public function listAction(Request $request)
//    {
//        $em = $this->getDoctrine()->getManager();
//        
//        $dql = "SELECT m FROM MRFMenuBundle:Menu m";
//        $menus = $em->createQuery($dql);
//        
//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//                $menus, $request->query->getInt('page', 1),
//                3
//                );
//                        
//        return $this->render('MRFMenuBundle:Menu:list.html.twig', array(
//            'pagination' => $pagination));
//    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "Menu" en la variable $menu                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $menu */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $menu = new Menu();
        $form = $this->createCreateForm($menu);
        return $this->render(
                'MRFMenuBundle:Menu:add.html.twig', 
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
    /* 2. Instanciación de la clase "Menu" en la variable $menu                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $menu */
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
        $menu = new Menu();
        $form = $this->createCreateForm($menu);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($menu);
            $em->flush();
            $this->addFlash('mensaje', 'El Menu fue creado con exito.');    
            return $this->redirectToRoute('mrf_menus_list');
        }
        return $this->render('MRFMenuBundle:Menu:add.html.twig', array('form' => $form->createView()));
    }
    
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository('MRFMenuBundle:Menu')->find($id);
        if(!$menu){
            throw $this->createNotFoundException('El menu no fue encontrado!');
        }
        $form = $this->createEditForm($menu);   
        return $this->render('MRFMenuBundle:Menu:edit.html.twig', array('menu' => $menu, 'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del menu y los datos del formulario (datos del menu)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el menu buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $menu                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al usuario un mensaje error               */
    /* 5. Si el usuario existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $menu                                                                               */
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
        $menu = $em->getRepository('MRFMenuBundle:Menu')->find($id);
        if(!$menu){
            throw $this->createNotFoundException('El menu no fue encontrado!');
        }
        $form = $this->createEditForm($menu);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El Menu fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_menus_list', array('id'=>$menu->getId()));
        }
        return $this->render('MRFMenuBundle:Menu:edit.html.twig', array('menu'=>$menu,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del menu                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad Menu en las variables $request y $menu*/
    /*    siendo el sgeundo parámetro el registro de menu seleccionado                                 */
    /* 2. Si el menu seleccionado es nulo, se despliega el listao de menus                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los menus                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, Menu $menu) {
        if($menu === null){
            return $this->redirectToRoute('mrf_menus_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($menu);
        $em->flush();
        $this->addFlash('mensaje', 'El Menu fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_menus_list');
    }
    */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $menu= $em->getRepository('MRFMenuBundle:Menu')->find($id);
        if(!$menu){
            //throw $this->createNotFoundException('El rol no fue encontrado!');
            $this->addFlash('mensaje', 'El Menu fue NO puede ser eliminado ya que esta asignado a un Usuario.');    
            return $this->redirectToRoute('mrf_menu_list');
        }
        try {
        $em->remove($menu);
        $em->flush();
        $this->addFlash('mensaje', 'El Menu fue Eliminado con exito.');
        }catch(\Exception $e){
            $this->addFlash('mensaje', $e->getmessage());
        }
        finally{
            return $this->redirectToRoute('mrf_menus_list');
        }
    
        
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(Menu $entity)
    {
        $form = $this->createForm(new MenuType(), $entity, array(
            'action' => $this->generateUrl('mrf_menu_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(Menu $entity){
        $form = $this->createForm(new MenuType(), $entity, array(
            'action'=> $this->generateUrl('mrf_menu_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
    
}