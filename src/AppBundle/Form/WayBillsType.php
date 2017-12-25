<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WayBillsType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idCompany')
            ->add('waybillNum')
            ->add('idDriver')
            ->add('idSmcard')
            ->add('season')
            ->add('dateTimeDeparture')
            ->add('dateTimeReturn')
            ->add('travelTime')
            ->add('speedometerDeparture')
            ->add('speedometerReturn')
            ->add('distanceSpd')
            ->add('distanceGps')
            ->add('bingoFuelDeparture')
            ->add('refillLiters')
            ->add('bingoFuelReturn')
            ->add('cargoWeight')
            ->add('returnWeight')
            ->add('parkingTime')
            ->add('fuelConsumption')
            ->add('routeItinerary')
            ->add('writeOffDate')
            ->add('idStaff')
            ->add('commentsWaybill')
            ->add('carDes')
            ->add('save', SubmitType::class, array('label' => 'Сохранить ПЛ'));
    }
    
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\WayBills'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_waybills';
    }


}
