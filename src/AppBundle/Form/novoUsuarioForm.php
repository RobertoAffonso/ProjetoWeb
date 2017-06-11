<?php

namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novoUsuarioForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nome')
<<<<<<< HEAD
            ->add("Email", EmailType::class)
            ->add("CPF")
            ->add("Senha", PasswordType::class)
            ->add("Admin", ChoiceType::class, array(
                'choices' => array(
                    "Sim" => true,
                    "Não" => false,
                    )
            ));
=======
            ->add("Email")
            ->add("CPF")
            ->add("Senha")
            ->add("Admin");
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

    }

    public function configureOptions(OptionsResolver $resolver)
    {
<<<<<<< HEAD
        $resolver->setDefaults(['data_class' => 'AppBundle\Entity\Usuarios']);
=======

>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    }

    /*
    public function getBlockPrefix()
    {
        return 'app_bundlenovo_chamado_form';
    }*/
}

