<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 15/05/17
 * Time: 13:52
 */

namespace AppBundle\Entity;



use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UsuariosRepository")
 * @ORM\Table(name="usuarios")
 */
class Usuarios
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $senha;

    /**
     * @Assert\Email()
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $cpf;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="boolean")
     */
    private $admin = true;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $dataNascimento;

    /**
     * @return mixed
     */
    public function getDataNascimento()
    {
        return $this->dataNascimento;
    }

    /**
     * @param mixed $dataNascimento
     */
    public function setDataNascimento($dataNascimento)
    {
        $this->dataNascimento = $dataNascimento;
    }

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
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
    }
}