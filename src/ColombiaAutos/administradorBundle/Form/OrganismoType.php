<?php

namespace ColombiaAutos\administradorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OrganismoType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codOrganismo')
            ->add('nombreOrganismo')
            ->add('telefonoOrganismo')
            ->add('codCiudad')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ColombiaAutos\administradorBundle\Entity\Organismo'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'colombiaautos_administradorbundle_organismo';
    }
}
