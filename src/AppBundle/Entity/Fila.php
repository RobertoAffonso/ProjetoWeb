<?php
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

   public function __toString()
   {
       // TODO: Implement __toString() method.
       return $this->getNome();
   }
 
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
