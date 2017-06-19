<?php
namespace AppBundle\Entity;

use Doctrine \ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="etapa")
*/

class Etapa
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
  Private $nome;

  /**
  * @ORM\Column(type="integer")
  */
  private $fila;

  /**
  * @ORM\Column(type="integer")
  */
  private $ordem;

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
  public function getFila()
  {
    return $this->fila;
  }

  /**
  * @return mixed
  */
  public function getOrdem()
  {
    return $this->ordem;
  }

  /**
   * @param mixed $nome
   */
  public function setNome($nome)
  {
    $this->nome = $nome;
  }

  /**
   * @param mixed $fila
   */
  public function setFila($fila)
  {
    $this->fila = $fila;
  }

  /**
   * @param mixed $ordem
   */
  public function setOrdem($ordem)
  {
    $this->ordem = $ordem;
  }

