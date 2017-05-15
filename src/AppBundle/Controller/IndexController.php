<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 14/05/17
 * Time: 21:31
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/index/{pagename}")
     */
    public function showAction($pagename)
    {
        $notes = ['caro professor, voce e pessimo', 'suas aulas sao pessimas', 'tudo e pessimo'];

        return $this->render('projetoWeb/show.html.twig', array('name' => $pagename, 'notes' => $notes));

    }
}