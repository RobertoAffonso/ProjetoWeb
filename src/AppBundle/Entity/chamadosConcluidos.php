<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 18/06/17
 * Time: 03:25
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="chamados_concluidos")
 */
class chamadosConcluidos
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Setores")
     * @ORM\JoinColumn(nullable=false)
     */
    private $setor;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fila")
     * @ORM\Column(type="string")
     */
    private $fila;

    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="string")
     */
    private $dataLimite;

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
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor($setor)
    {
        $this->setor = $setor;
    }

    /**
     * @return mixed
     */
    public function getFila()
    {
        return $this->fila;
    }

    /**
     * @param mixed $fila
     */
    public function setFila($fila)
    {
        $this->fila = $fila;
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

}
