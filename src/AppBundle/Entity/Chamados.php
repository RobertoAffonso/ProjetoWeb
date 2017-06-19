<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 15/05/17
 * Time: 03:27
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     *
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @ORM\Column(type="string")
     */
    private $Prioridade;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Setores")
     * @ORM\JoinColumn(nullable=false)
     */
    private $setor;

    /**
     * @Assert\NotBlank()
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fila")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fila;


    /**
     * @ORM\Column(type="text")
     */
    private $descricao;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dataLimite;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comentario;

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
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * @param mixed $comentario
     */
    public function setComentario($comentario=null)
    {
        $this->comentario = $comentario;
    }

    /**
     * @return Setores
     */
    public function getSetor()
    {
        return $this->setor;
    }

    /**
     * @param mixed $setor
     */
    public function setSetor(Setores $setor=null)
    {
        $this->setor = $setor;
    }

    /**
     * @return Fila
     */
    public function getFila()
    {
        return $this->fila;
    }

    /**
     * @param mixed $fila
     */
    public function setFila(Fila $fila=null)
    {
        $this->fila = $fila;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
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
    public function getPrioridade()
    {
        return $this->Prioridade;
    }

    /**
     * @param mixed $Prioridade
     */
    public function setPrioridade($Prioridade)
    {
        $this->Prioridade = $Prioridade;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getDataLimite();
    }


}