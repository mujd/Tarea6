<?php

namespace MRF\MenuRolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MRF\MenuBundle\Entity\Menu;
use MRF\RolBundle\Entity\Rol;
use MRF\MenuRolBundle\Entity\MenuRol;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Component\Validator\Constraints\NotBlank;

class MenuRolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rol', 'entity', array(
                  'class' => 'MRF\RolBundle\Entity\Rol',
                  'property' => 'nombre',
                  'placeholder' =>'Seleccione Opción',
                  //'required'=>false,  
                  'expanded' => false,
                  'multiple' => false))
            ->add('menu', 'entity', array(
                  'class' => 'MRF\MenuBundle\Entity\Menu',
                  'property' => 'nombre',
                  'required'=>false,
                  'expanded' => true,
                  'multiple' => true))  
           

                        
            ->add('save', 'submit', array('label' => 'Guardar MenuRol')) 
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\MenuRolBundle\Entity\MenuRol'
        ));
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'menuRol';
    }
}
