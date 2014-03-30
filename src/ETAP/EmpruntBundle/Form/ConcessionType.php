<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ConcessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('datecreation')
            ->add('description')
            ->add('nom')
            ->add('valeurrealisation')
            ->add('codebesoin')
            ->add('reftirage')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Concession'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_concessiontype';
    }
}
