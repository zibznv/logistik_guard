<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
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
            ->add('typeCar')
            ->add('licensePlate')
            ->add('vehicleStatus')
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
