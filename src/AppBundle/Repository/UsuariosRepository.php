<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 04/06/17
 * Time: 18:45
 */

namespace AppBundle\Repository;


use AppBundle\Entity\Usuarios;
use Doctrine\ORM\EntityRepository;

class UsuariosRepository extends EntityRepository
{
    /**
     * @return Usuarios[]
     */
    public function findAllUsuariosOrderedByName()
    {
        return $this->createQueryBuilder('usuarios')
            ->orderBy('usuarios.nome', 'ASC')
            ->getQuery()
            ->execute();
    }

    /**
     * @return Usuarios[]
     */
    public function findAllAdmins()
    {
        return $this->createQueryBuilder('admins')
<<<<<<< HEAD
            ->andWhere('admins.admin = :admin')
            ->setParameter('admin', true)
=======
            ->andWhere('admins.isAdmin = :isAdmin')
            ->setParameter('isAdmin', true)
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
            ->getQuery()
            ->execute();
    }
}