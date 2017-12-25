<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DriversType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('id1C8')
            ->add('drShortName')
            ->add('drSurname')
            ->add('drName')
            ->add('drPatronymic')
            ->add('drDocnum')
            ->add('passNumber')
            ->add('drPhone')
            ->add('homeAddress')
            ->add('dateOfBirth')
            ->add('drStatus',ChoiceType::class,array(
                'choices'  => array(
                    'Working' => 'Working',
                    'Dismissed' => 'Dismissed'
                )))
            ->add('dateOfAcceptance')
            ->add('dateOfDismissal')
            ->add('drPhoto')
            ->add('save', SubmitType::class, array('label' => 'Сохранить водителя'));
    }
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Drivers'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_drivers';
    }
}
