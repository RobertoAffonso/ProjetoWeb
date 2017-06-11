<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/05/17
 * Time: 15:27
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="meus_chamados")
 */
class meusChamados
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
    private $descricao;

    /**
     * @ORM\Column(type="string")
     */
    private $dataFinal;

    /**********************************************************************************
     *
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
    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    /**
     * @param mixed $dataFinal
     */
    public function setDataFinal($dataFinal)
    {
        $this->dataFinal = $dataFinal;
    }


}