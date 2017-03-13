<?php

namespace MRF\ProveedorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProveedorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombres','text',array('label'=>'Nombres'))
            ->add('apellidoP','text',array('label'=>'Apellido Paterno'))
            ->add('apellidoM','text',array('label'=>'Apellido Materno'))
            ->add('rut','text')
            ->add('razonSocial','text')
            ->add('email','email')
            ->add('fono')
                ->add('save', 'submit', array('label' => 'Guardar Proveedor')) 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\ProveedorBundle\Entity\Proveedor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'proveedor';
    }
}
