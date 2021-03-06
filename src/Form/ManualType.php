<?php

namespace App\Form;

use App\Entity\Manual;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManualType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('instruction', TextareaType::class, [
            'attr' => [
                'class' => 'tinymce',
                'data-theme' => 'advanced',
            ],
        ]);
        $builder->add('calculation', TextareaType::class, [
            'attr' => [
                'class' => 'tinymce',
                'data-theme' => 'advanced',
            ],
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Manual::class,
        ]);
    }
}
