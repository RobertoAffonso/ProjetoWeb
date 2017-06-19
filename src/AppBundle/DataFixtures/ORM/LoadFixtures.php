<?php

/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 28/05/17
 * Time: 20:35
 */
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Chamados;
use Nelmio\Alice\Fixtures;

class LoadFixtures implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        Fixtures::load
        (
            __DIR__.'/fixtures.yml',
            $manager,
            [
                'providers' => [$this]
            ]
        );
    }

    public function etapas()
    {
        $etapas = ['Primeira Etapa', 'Segunda Etapa', 'Terceira Etapa', 'Quarta Etapa', 'Quinta Etapa'];

        $key = array_rand($etapas);

        return $etapas[$key];
    }

    public function nomesChamados()
    {
        $nomes = [
                    'Reparo de Computador',
                    'Troca de Equipamento',
                    'Atestado Médico',
                    'Novo Usuário',
                    'Tornar Admin',
                    'Aprovar Ordem 66',
                    'Consertar Ar Condicionado',
                    'Requisição de Equipamento',
                    'Manutenção',
                    'Pedido de Demissão'
                ];

        $key = array_rand($nomes);

        return $nomes[$key];
    }

    public function setores()
    {
        $setores = ['Almoxarifado',
            'Finanças',
            'Recursos Humanos',
            'Diretoria',
            'Logística',
            'Administração Geral',
            'Tecnologia da Informação'];

        $key = array_rand($setores);

        return $setores[$key];
    }
}