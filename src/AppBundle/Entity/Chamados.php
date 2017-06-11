<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 15/05/17
 * Time: 03:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChamadosRepository")
 * @ORM\Table(name="chamados")
 */
class Chamados
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $dataCriacao;

    /**
     * @ORM\Column(type="string")
     */
    private $emissor;

    /**
     * @ORM\Column(type="string")
     */
    private $numero;

    /**
     * @ORM\Column(type="string")
     */
    private $etapa;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="string")
     */
    private $dataLimite;


    /*
     *
     *
     *
     *
     *
     */

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getEtapa()
    {
        return $this->etapa;
    }

    /**
     * @param mixed $etapa
     */
    public function setEtapa($etapa)
    {
        $this->etapa = $etapa;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return mixed
     */
    public function getDataLimite()
    {
        return $this->dataLimite;
    }

    /**
     * @param mixed $dataLimite
     */
    public function setDataLimite($dataLimite)
    {
        $this->dataLimite = $dataLimite;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    /**
     * @param mixed $dataCriacao
     */
    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
    }

    /**
     * @return mixed
     */
    public function getEmissor()
    {
        return $this->emissor;
    }

    /**
     * @param mixed $emissor
     */
    public function setEmissor($emissor)
    {
        $this->emissor = $emissor;
    }

}