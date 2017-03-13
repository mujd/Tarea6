<?php

namespace MRF\MenuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MRF\MenuBundle\Entity\Menu;

class MenuType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text',array('label'=>'Nombre'))
            ->add('ruta','text',array('label'=>'Ruta'))
            ->add('listar','checkbox', array('required' => false),array('label'=>'Listar'))
            ->add('agregar','checkbox', array('required' => false))
            ->add('editar','checkbox', array('required' => false))
            ->add('eliminar','checkbox', array('required' => false))
            ->add('save', 'submit', array('label' => 'Guardar Menu')) 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\MenuBundle\Entity\Menu'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'menu';
    }
}
