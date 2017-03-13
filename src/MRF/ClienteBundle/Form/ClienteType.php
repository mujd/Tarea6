<?php

namespace MRF\ClienteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClienteType extends AbstractType
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
            ->add('rut','text',array('label'=>'Rut'))
            ->add('direccion','text',array('label'=>'Dirección'))
            ->add('email','email',array('label'=>'Email'))
            ->add('fono')
                ->add('save', 'submit', array('label' => 'Guardar Cliente')) 
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MRF\ClienteBundle\Entity\Cliente'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cliente';
    }
}
