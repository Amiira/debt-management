<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BesoinType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datebesoin')
            ->add('description')
            ->add('nom')
            ->add('valeur')
            ->add('codeconcession')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Besoin'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_besointype';
    }
}
