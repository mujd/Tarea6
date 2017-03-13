<?php

namespace MRF\UsuarioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsuarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('rut','text')
            ->add('rol', 'entity', array(
                  'class' => 'MRF\RolBundle\Entity\Rol',
                  'property' => 'nombre',
                  'expanded' => false,
                  'multiple' => false))      
            ->add('nombres','text')
            ->add('apellidoP','text',array('label'=>'Apellido Paterno'))
            ->add('apellidoM','text',array('label'=>'Apellido Materno'))
            ->add('username','text',array('label'=>'Nombre Usuario'))
            ->add('password','password')
            ->add('email','email')
                ->add('save', 'submit', array('label' => 'Guardar Usuario')) 
        ;
    }
    
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\UsuarioBundle\Entity\Usuario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'usuario';
    }
}
