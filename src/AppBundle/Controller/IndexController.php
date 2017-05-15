<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 14/05/17
 * Time: 21:31
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Chamado;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{
    /**
     * @Route("/index/novoChamado")
     */
    public function novoChamadoAction()
    {
        $chamado = new Chamado();
        $chamado->setName("Reparo Ar Condicionado");
        $chamado->setDate("10/11/2016");
        $chamado->setEmitter("John Doe");

        $em = $this->getDoctrine()->getManager();
        $em->persist($chamado);
        $em->flush();

        return new Response("<html><body>Chamado Criado com Sucesso!</body></html>");
    }

    /**
     * @Route("/index")
     */
    public function mostrarChamadoAction()
    {
        $em = $this -> getDoctrine() -> getManager();
        $chamados = $em -> getRepository("AppBundle:Chamado")
        -> findAll();
        dump($chamados);die;
    }

    /**
     * @Route("/index/{pagename}")
     */
    public function showAction($pagename)
    {
        return $this->render('projetoWeb/show.html.twig', ['name' => $pagename]);
    }
}