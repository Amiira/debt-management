<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RemboursementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateecheance')
            ->add('libor')
            ->add('montantinteret')
            ->add('montantprincipal')
            ->add('montantrestantdu')
            ->add('montanttotal')
            ->add('nbrjours')
            ->add('numremboursement')
            ->add('remboursementtotal')
            ->add('tauxinteret')
            ->add('totalinteret')
            ->add('totalprincipal')
            ->add('reftirage')
            ->add('codejf')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Remboursement'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_remboursementtype';
    }
}
