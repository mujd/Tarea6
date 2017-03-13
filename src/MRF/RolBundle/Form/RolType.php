<?php

namespace MRF\RolBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MRF\RolBundle\Entity\Rol;

class RolType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre','text')
            ->add('listar','checkbox', array('required' => false))
            ->add('agregar','checkbox', array('required' => false))
            ->add('editar','checkbox', array('required' => false))
            ->add('eliminar','checkbox', array('required' => false))
            ->add('save', 'submit', array('label' => 'Guardar Rol')) 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\RolBundle\Entity\Rol'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rol';
    }
}
