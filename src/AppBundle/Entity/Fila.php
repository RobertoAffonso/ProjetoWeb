<<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fila")
 */

 class Fila
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
    private $cliente;

   /**
    * @ORM\Column(type="integer")
    */
   private $etapa;

   /**
    * @return mixed
    */
   public function getNome()
   {
     return $this->nome;
   }

   /**
    * @return mixed
    */
    public function getCliente()
    {
      return $this->cliente;
    }

   /**
    * @return mixed
    */
   public function getEtapa()
   {
     return $this->etapa;
   }

   /**
    * @param mixed $nome
    */
   public function setNome($nome)
   {
     $this->nome = $nome;
   }

   /**
    * @param mixed $cliente
    */
   public function setCliente($cliente)
   {
     $this->cliente = $cliente;
   }

   /**
    * @param mixed $etapa
    */
   public function setEtapa($etapa)
   {
     $this->etapa = $etapa;
   }
 }
 ?>
