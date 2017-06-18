<<?php
namespace AppBundle\Form

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novaFilaForm extends AbstractType
{
  public function buildForm(FormBuilderInterface$builder, array $options)
  {
    $builder
          ->add('Nome')
          ->add('Etapa');
  }

  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(['data_class' => "AppBundle\Entity\Fila"]);
  }
}
 ?>
