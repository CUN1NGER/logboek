<?php

namespace App\Form;

use App\Entity\Log;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LogType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('CoverLetter')
            ->add('Date')
            ->add('Driver')
            ->add('TruckID')
            ->add('Size')
            ->add('Location')
            ->add('TimeLeaving')
            ->add('EventLocation')
            ->add('EventName')
            ->add('UserID')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Log::class,
        ]);
    }
}
