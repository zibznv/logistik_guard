<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SmartType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('provider',ChoiceType::class,array(
                'choices'  => array(
                    'AMIC' => 'AMIC',
                    'SOCAR' => 'SOCAR',
                    'TNK' => 'TNK'
                    )))
            ->add('cardNumber')
            ->add('idFixedCar')
            ->add('cardStatus',ChoiceType::class,array(
                'choices'  => array(
                    'Used' => 'Used',
                    'Locked' => 'Locked',
                    'Lost' => 'Lost',
                    'NotUsed' => 'NotUsed'
                )))
            ->add('cardComments')
            ->add('save', SubmitType::class, array('label' => 'Параметры авто'));
    }
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Smart'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_smart';
    }


}
