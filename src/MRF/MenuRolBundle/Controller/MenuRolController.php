<?php

namespace MRF\MenuRolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use MRF\MenuRolBundle\Entity\MenuRol;
use MRF\MenuRolBundle\Form\MenuRolType;
use MRF\MenuBundle\Entity\Menu;

class MenuRolController extends Controller
{
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MRFMenuRolBundle:MenuRol')->findAll();
                
        return $this->render('MRFMenuRolBundle:MenuRol:list.html.twig', array(
            'menuRol' => $menuRol));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* add: Despliega un formulario vacío para ingresar los datos                                         */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Instanciación de la clase "MenuRol" en la variable $menuRol                                     */
    /* 2. Creación de formulario mediante la función "createCreateForm", se le envía la variable $menuRol */
    /* 3. Se renderiza plantilla "add.html" junto con el formulario creado                                */
    /*----------------------------------------------------------------------------------------------------*/
    public function addAction()
    {
        $menuRol = new MenuRol();
        $form = $this->createCreateForm($menuRol);
        return $this->render(
                'MRFMenuRolBundle:MenuRol:add.html.twig', 
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
    /* 2. Instanciación de la clase "MenuRol" en la variable $menuRol                                     */
    /* 3. Creación de formulario mediante la función "createCreateForm", se le envía la variable $menuRol */
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
        $menuRol = new MenuRol();
        $form = $this->createCreateForm($menuRol);
        $form->handleRequest($request);       
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($menuRol);
            $em->flush();
            $this->addFlash('mensaje', 'El MenuRol fue creado con exito.');    
            return $this->redirectToRoute('mrf_menuRol_list');
        }
        return $this->render('MRFMenuRolBundle:MenuRol:add.html.twig', array('form' => $form->createView()));
    }
    
    
     public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $menuRol = $em->getRepository('MRFMenuRolBundle:MenuRol')->find($id);
        if(!$menuRol){
            throw $this->createNotFoundException('El menuRol no fue encontrado!');
        }
        $form = $this->createEditForm($menuRol);   
        return $this->render('MRFMenuRolBundle:MenuRol:edit.html.twig', array('menuRol' => $menuRol, 'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* Update: Registra el update realizado a la entidad en la base de datos                              */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el ID y el "Request" en las variables $id y $request respectivamente, */
    /*    las cuales corresponden al ID del menuRol y los datos del formulario (datos del menuRol)        */
    /* 2. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia ($em)     */
    /* 3. Se obtiene el menuRol buscando por su ID obtanído paramétrocamente usando la función "find"  y  */
    /*    almacena en la variable $menuRol                                                                */
    /* 4. Si la función anterior no retorna datos, se despliega al usuario un mensaje error               */
    /* 5. Si el usuario existe, se utiliza la función "createEditForm" para crear un formulario con la    */
    /*    variable $menuRol                                                                               */
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
        $menuRol = $em->getRepository('MRFMenuRolBundle:MenuRol')->find($id);
        if(!$menuRol){
            throw $this->createNotFoundException('El menuRol no fue encontrado!');
        }
        $form = $this->createEditForm($menuRol);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('mensaje', 'El MenuRol fue Actualizado con exito.');            
            return $this->redirectToRoute('mrf_menuRol_list', array('id'=>$menuRol->getId()));
        }
        return $this->render('MRFMenuRolBundle:MenuRol:edit.html.twig', array('menuRol'=>$menuRol,
                'form'=>$form->createView()));
    }
    
    /*----------------------------------------------------------------------------------------------------*/
    /* delete: Borra una entidad dentro de la lista del menuRol                                           */
    /*----------------------------------------------------------------------------------------------------*/
    /* 1. Se recibe como parámetros el "Request" y la entidad MenuRol en las variables $request y $menuRol*/
    /*    siendo el sgeundo parámetro el registro de menuRol seleccionado                                 */
    /* 2. Si el menuRol seleccionado es nulo, se despliega el listao de menuRols                          */
    /* 3. Recupera el objeto entitymanager de Doctrine, responsable del proceso de persistencia           */
    /* 3. Usa el metodo remove() para borrar la entidad asignada dentro de la base de datos               */
    /* 4. Metodo flush() Se encarga de realizar y guardar cada uno de los campos al registro dentro de la */
    /*    base de datos                                                                                   */
    /* 5. Metodo addFlash() servira para enviar un mensaje avisando que la peticion tuvo exito            */
    /* 6. Se redirige a la ruta donde esta la lista de los menuRols                                       */
    /*----------------------------------------------------------------------------------------------------*/
    /*
    public function deleteAction(Request $request, MenuRol $menuRol) {
        if($menuRol === null){
            return $this->redirectToRoute('mrf_menuRol_list');
        }
        $em = $this->getDoctrine()->getManager();
        $em->remove($menuRol);
        $em->flush();
        $this->addFlash('mensaje', 'El MenuRol fue Eliminado con exito.');         
        return $this->redirectToRoute('mrf_menuRol_list');
    }
    */
    public function deleteAction($id) {
        $em = $this->getDoctrine()->getManager();
        $menuRol= $em->getRepository('MRFMenuRolBundle:MenuRol')->find($id);
        if(!$menuRol){
            //throw $this->createNotFoundException('El rol no fue encontrado!');
            $this->addFlash('mensaje', 'El MenuRol fue NO puede ser eliminado ya que esta asignado a un Usuario.');    
            return $this->redirectToRoute('mrf_menu_list');
        }
        try {
            $em->remove($menuRol);
            $em->flush();
            $this->addFlash('mensaje', 'El MenuRol fue Eliminado con exito.');
        }catch(\Exception $e){
            $this->addFlash('mensaje', $e->getmessage());
        }
        finally{
            return $this->redirectToRoute('mrf_menuRol_list');
        }
    }
    
    
    /* Funciones comunes */ 
    
    /* Crea un formulario en base a una entidad */
    /* CreateForm() Metodo para estructurar Formulario */
    private function createCreateForm(MenuRol $entity)
    {
        $form = $this->createForm(new MenuRolType(), $entity, array(
            'action' => $this->generateUrl('mrf_menuRol_create'), 
            'method' => 'POST'));   
        return $form;
    }
    
     /* Crea un formulario en base a una entidad */
    private function createEditForm(MenuRol $entity){
        $form = $this->createForm(new MenuRolType(), $entity, array(
            'action'=> $this->generateUrl('mrf_menuRol_update', array(
                'id' => $entity->getId())),
            'method'=>'PUT'));        
        return $form;
    }
    
}