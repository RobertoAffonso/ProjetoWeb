<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novoUsuarioForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nome')
            ->add("Email")
            ->add("CPF")
            ->add("Senha")
            ->add("Admin");

    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    /*
    public function getBlockPrefix()
    {
        return 'app_bundlenovo_chamado_form';
    }*/
}

