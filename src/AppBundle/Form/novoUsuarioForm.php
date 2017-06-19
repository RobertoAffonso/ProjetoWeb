<?php

namespace AppBundle\Form;


use AppBundle\Entity\Usuarios;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novoUsuarioForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nome', TextType::class)
            ->add("Email", EmailType::class)
            ->add("CPF", NumberType::class)
            ->add("Senha", PasswordType::class)
            ->add("Admin", ChoiceType::class, array(
                'choices' => array(
                    "Sim" => true,
                    "Não" => false,
                    )
            ));

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => 'AppBundle\Entity\Usuarios']);
    }

    /*
    public function getBlockPrefix()
    {
        return 'app_bundlenovo_chamado_form';
    }*/
}

