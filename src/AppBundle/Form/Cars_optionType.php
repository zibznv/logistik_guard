<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cars_optionType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idCars')
            ->add('tankVolume')
            ->add('fuelType',ChoiceType::class,array(
                'choices'  => array(
                    'DT' => 'DT',
                    'DTimproved' => 'DTimproved',
                    'A95' => 'A95',
                    'A92' => 'A92',
                    'LPG' => 'LPG'
                )))
            ->add('idSmartCard')
            ->add('idDriver')
            ->add('cmcAllowed')
            ->add('baseRateSummer')
            ->add('baseRateWinter')
            ->add('tonneKilometerRatio')
            ->add('normOnWarmup')
            ->add('standAloneHeaterRate')
            ->add('maintenanceIntervals')
            ->add('speedometerLastMaintenance')
            ->add('numberCheckupCoupon')
            ->add('numberInsurancePolicy')
            ->add('maintenanceCouponDate')
            ->add('insurancePolicyCouponDate')
            ->add('save', SubmitType::class, array('label' => 'Параметры авто'));
    }
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cars_option'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_cars_option';
    }
}
