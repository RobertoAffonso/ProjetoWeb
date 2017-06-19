<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/05/17
 * Time: 15:27
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="meus_chamados")
 */
class  meusChamados
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Chamados")
     * @ORM\JoinColumn(nullable=false)
     */
    private $chamados;

    /*
     *
     *
     *
     *
     *
     */

    /**
     * @return Chamados
     */
    public function getChamados()
    {
        return $this->chamados;
    }

    /**
     * @param mixed $chamados
     */
    public function setChamados(Chamados $chamados=null)
    {
        $this->chamados = $chamados;
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