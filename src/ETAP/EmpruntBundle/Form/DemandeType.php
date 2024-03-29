<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datedemande')
            ->add('montantemprunt')
            ->add('nom')
            ->add('refdemande')
            ->add('refbanque')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Demande'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_demandetype';
    }
}
