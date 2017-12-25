<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Cars_descriptionType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idFirm')
            ->add('modelCars')
            ->add('typeCar',ChoiceType::class,array(
                'choices'  => array(
                    'AVL' => 'AVL',
                    'AVP' => 'AVP',
                    'AVLG' => 'AVLG',
                    'AVSG' => 'AVSG',
                    'AVG' => 'AVG',
                    'AVBG' => 'AVBG',
                    'LD' => 'LD',
                    'WL' => 'WL'
                )))
            ->add('licensePlate')
            ->add('vehicleStatus',ChoiceType::class,array(
                'choices'  => array(
                    'Working' => 'Working',
                    'Repairs' => 'Repairs',
                    'Destroyed' => 'Destroyed',
                    'Sold' => 'Sold',
                    'InRent' => 'InRent',
                    'Other' => 'Other'
                )))
            ->add('trailerModel')
            ->add('licensePlateTrailer')
            ->add('yearOfManufacture')
            ->add('engineNumber')
            ->add('chassisNumber')
            ->add('engineCapacity')
            ->add('numberRegistrationCertificate')
            ->add('numberTrailerRegistrationCertificate')
            ->add('carTireSize')
            ->add('save', SubmitType::class, array('label' => 'Добавить авто'));
    }
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Cars_description'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_cars_description';
    }


}
