<?php

namespace App\Form;

use App\Entity\Race;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class RaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date', DateType::class, [
                'widget' => 'single_text',
                'format' =>'dd-MM-yyyy',
                'html5' => false,
            ])
            ->add('total_distance')
            ->add('swim_distance')
            ->add('bike_distance')
            ->add('run_distance')
            ->add('total_time', TimeType::class, [
                'with_seconds' => true,
            ])
            ->add('swim_time', TimeType::class, [
                'with_seconds' => true,
            ])
            ->add('bike_time', TimeType::class, [
                'with_seconds' => true,
            ])
            ->add('run_time', TimeType::class, [
                'with_seconds' => true,
            ])
            ->add('vertical_gain')
            ->add('price')
            ->add('total_finisher')
            ->add('ranking')
            ->remove('percent_finisher')
            ->add('comment')
            ->add('event', EntityType::class, [
                'class' => Event::class,
                'placeholder' => 'Choisissez dans la liste',
            ])
            ->remove('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Race::class,
        ]);
    }
}
