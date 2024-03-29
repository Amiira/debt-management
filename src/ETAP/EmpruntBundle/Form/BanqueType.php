<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BanqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('refbanque')
            ->add('refdemande')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Banque'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_banquetype';
    }
}
