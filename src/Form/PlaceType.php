<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class PlaceType extends AbstractType {

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'placeholder' => 'placeholder.select',
            ])
            ->add('latitude', TextType::class, [
                'placeholder' => 'placeholder.select',
            ])
            ->add('longitude', TextType::class, [
                'placeholder' => 'placeholder.select',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => RolePerson::class,
            'translation_domain' => 'forms',
        ]);
    }
    
}