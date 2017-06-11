<?php

/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 04/06/17
 * Time: 18:26
 */

namespace AppBundle\Repository;

use \Doctrine\ORM\EntityRepository;

class ChamadosRepository extends EntityRepository
{
    /**
     * @return Chamados[]
     */
    public function findAllChamadosOrderedByDate()
    {
        return $this->createQueryBuilder('chamados')
            ->orderBy('chamados.dataLimite', 'DESC')
            ->getQuery()
            ->execute();
    }
}