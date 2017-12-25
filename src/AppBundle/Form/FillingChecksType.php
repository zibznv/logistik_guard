<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FillingChecksType extends AbstractType
{
    /*{@inheritdoc}*/
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('idProvider',ChoiceType::class,array(
            'choices'  => array(
                'AMIC' => 'AMIC',
                'SOCAR' => 'SOCAR',
                'TNK' => 'TNK',
                'Other' => 'Other'
            )))
            ->add('idRecord')
            ->add('numberPaperCheck')
            ->add('dateTimeRefill')
            ->add('placeRefill')
            ->add('typeOffFuel',ChoiceType::class,array(
                'choices'  => array(
                    'DT' => 'DT',
                    'DTimproved' => 'DTimproved',
                    'A95' => 'A95',
                    'A92' => 'A92',
                    'LPG' => 'LPG'
                )))
            ->add('quantityLiters')
            ->add('pricePerLiter')
            ->add('smartCardNumber')
            ->add('loadOffDate')
            ->add('writeOffDate')
            ->add('idStaff')
            ->add('waybillId')
            ->add('save', SubmitType::class, array('label' => 'Сохранить чек'));
    }
    /*{@inheritdoc}*/
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FillingChecks'
        ));
    }
    /*{@inheritdoc}*/
    public function getBlockPrefix()
    {
        return 'appbundle_fillingchecks';
    }


}
