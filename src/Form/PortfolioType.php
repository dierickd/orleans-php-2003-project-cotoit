<?php

namespace App\Form;

use App\Entity\Portfolio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PortfolioType extends AbstractType
{
    const PLACEHOLDER = 'Aucun fichier sélectionné';

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('portfolioFileName', FileType::class, [
                'label' => 'Mon portefeuille de copropriété',
                'attr' => [
                    'placeholder' => self::PLACEHOLDER,
                ],
                'required' => true,
                ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Portfolio::class,
        ]);
    }
}
