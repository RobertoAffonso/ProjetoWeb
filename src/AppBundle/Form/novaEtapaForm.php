<<?php
namespace AppBundle\Form

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novaEtapaForm extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add("Nome")
        ->add("Fila")
        ->add("Ordem");
  }
}

public function configureOptions(OptionsResolver $resolver)
{
  $resolver->setDefaults(['data_class' => "AppBundle\Entity\Etapa"]);
}
 ?>
