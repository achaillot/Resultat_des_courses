<?php

namespace App\Form;

use App\Entity\Race;
use App\Entity\Event;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RaceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('date')
            ->add('total_distance')
            ->add('swim_distance')
            ->add('bike_distance')
            ->add('run_distance')
            ->add('total_time')
            ->add('swim_time')
            ->add('bike_time')
            ->add('run_time')
            ->add('vertical_gain')
            ->add('price')
            ->add('total_finisher')
            ->add('ranking')
            ->remove('percent_finisher')
            ->add('comment')
            ->add('event', EntityType::class, [
                'class' => Event::class,
            ])
            // ->add('user')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Race::class,
        ]);
    }
}
