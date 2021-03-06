<?php

namespace ColombiaAutos\administradorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PropietarioType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nroIdentificacion', 'text', array('label' => 'Nro de Documento'))
            ->add('nombresP', 'text', array('label' => 'Nombres del Propietario'))
            ->add('apellidosP', 'text', array('label' => 'Apellidos del Propietario'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ColombiaAutos\administradorBundle\Entity\Propietario'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'colombiaautos_administradorbundle_propietario';
    }
}
