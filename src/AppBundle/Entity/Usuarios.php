<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 15/05/17
 * Time: 13:52
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

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
<<<<<<< HEAD

=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    /**
     * @ORM\Column(type="string")
     */
    private $nome;
<<<<<<< HEAD

=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    /**
     * @ORM\Column(type="string")
     */
    private $senha;
<<<<<<< HEAD

=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    /**
     * @ORM\Column(type="string")
     */
    private $email;
<<<<<<< HEAD

=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    /**
     * @ORM\Column(type="string")
     */
    private $cpf;
<<<<<<< HEAD

    /**
     * @ORM\Column(type="boolean")
     */
    private $admin = true;
=======
    /**
     * @ORM\Column(type="boolean")
     */
    private $isAdmin;
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

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
<<<<<<< HEAD
    public function getAdmin()
    {
        return $this->admin;
=======
    public function getisAdmin()
    {
        return $this->isAdmin;
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    }


    /**
<<<<<<< HEAD
     * @param mixed $admin
     */
    public function setAdmin($admin)
    {
        $this->admin = $admin;
=======
     * @param mixed $isAdmin
     */
    public function setIsAdmin($isAdmin)
    {
        $this->isAdmin = $isAdmin;
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
    }
}