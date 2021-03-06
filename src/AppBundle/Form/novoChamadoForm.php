<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/05/17
 * Time: 17:15
 */

namespace AppBundle\Form;

use AppBundle\Entity\Fila;
use AppBundle\Entity\Setores;
use Doctrine\DBAL\Types\TextType;
use function Sodium\add;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class novoChamadoForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add("Nome", \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add("Descricao", TextareaType::class)
            ->add("Setor", EntityType::class, [
                'class' => Setores::class,
                'placeholder' => 'Escolha o setor de destino'
            ])
            ->add("Prioridade", ChoiceType::class, ['choices' => array(
                'Urgente' => 'urgente',
                'Média Urgencia' => 'mediaUrgencia',
                'Baixa Urgencia' => 'baixaUrgencia'
            )])
            ->add("Fila", EntityType::class, [
                'class' => Fila::class,
                'placeholder' => 'Escolha a fila'
            ])
            ->add('dataLimite', DateType::class, [
                'widget' => 'single_text',
                'attr' => ['class' => 'js-datepicker'],
                'html5' => false,
            ]);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(['data_class' => "AppBundle\Entity\Chamados"]);
    }
}