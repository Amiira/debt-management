<?php

namespace ETAP\EmpruntBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codeoffre')
            ->add('dateoffre')
            ->add('devise')
            ->add('libelle')
            ->add('marge')
            ->add('montantpropose')
            ->add('tauxdirecteur')
            ->add('refbanque')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ETAP\EmpruntBundle\Entity\Offre'
        ));
    }

    public function getName()
    {
        return 'etap_empruntbundle_offretype';
    }
}
