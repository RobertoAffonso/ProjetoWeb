<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 14/05/17
 * Time: 21:31
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Chamados;
use AppBundle\Entity\chamadosConcluidos;
use AppBundle\Entity\meusChamados;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\DevolverChamadoForm;
use AppBundle\Form\novaFilaForm;
use AppBundle\Form\novoChamadoForm;
use AppBundle\Form\novoSetorForm;
use AppBundle\Form\novoUsuarioForm;
use AppBundle\Form\VisualizarChamadoForm;
use AppBundle\Service\MarkdownTransformer;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{

    /**
     * @Route("/", name="pagina_principal")
     */
    public function mostrarChamadoAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chamados = $em->getRepository("AppBundle:Chamados")
            ->findAllChamadosOrderedByDate();

        $meuChamados = $em->getRepository("AppBundle:meusChamados")
            ->findAll();

        return $this->render("projetoWeb/index.html.twig", ["chamados" => $chamados, "meusChamados" => $meuChamados]);
    }

    /**
     * @Route("/GerenciarContas", name="gerenciar_contas")
     */
    public function mostrarUsuariosAction()
    {
        $em = $this->getDoctrine()->getManager();
        $usuarios = $em->getRepository("AppBundle:Usuarios")
            ->findAllUsuariosOrderedByName();

        return $this->render("projetoWeb/gerenciarContas.html.twig", ["usuarios" => $usuarios]);
    }

    /**
     * @Route("/CriarFilas", name="criar_filas")
     */
    public function criarFilasAction(Request $request)
    {
        $form = $this->createForm(novaFilaForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $fila = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($fila);
            $em->flush();

            $this->addFlash('sucesso', "Fila criada com sucesso!");

            return $this->redirectToRoute("pagina_principal");
        }
        return $this->render("projetoWeb/criarFilas.html.twig", array("criar_filas" => $form->createView()));
    }

    /**
     * @Route("/CriarSetores", name="criar_setores")
     */
    public function criarSetoresAction(Request $request)
    {
        $form = $this->createForm(novoSetorForm::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $setor = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($setor);
            $em->flush();

            $this->addFlash('sucesso', "Setor criado com sucesso!");

            return $this->redirectToRoute("pagina_principal");
        }

        return $this->render("projetoWeb/criarSetores.html.twig", array("criar_setores" => $form->createView()));
    }



    /**
     * @Route ("/NovoChamado", name="NovoChamado")
     */
    public function NovoChamadoAction(Request $request)
    {
        $form = $this->createForm(novoChamadoForm::class);

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $chamado = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($chamado);
                $em->flush();

                $this->addFlash('sucesso', "Chamado criado com sucesso!");

                return $this->redirectToRoute("pagina_principal");
            }
        return $this->render("projetoWeb/criarChamados.html.twig", array("NovoChamado" => $form->createView()));
    }

    /**
     * @Route("/{id}", name="meu_chamado")
     */
    public function meuChamadoAction(Request $request, Chamados $chamados)
    {
        $form = $this->createForm(VisualizarChamadoForm::class, $chamados);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $chamados = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->remove($chamados);
            $em->flush();

            $this->addFlash('sucesso', 'Chamado Atendido com Sucesso!');

            return $this->redirectToRoute("pagina_principal");
        }

        return $this->render("projetoWeb/meuChamado.html.twig", ['MeuChamado' => $form->createView()]);
    }

    /**
     * @Route("/{id}/devolver", name="devolver_chamado")
     */
   public function devolverChamadoAction(Request $request, Chamados $chamados)
   {
       $form = $this->createForm(DevolverChamadoForm::class, $chamados);

       $form->handleRequest($request);
       if($form->isSubmitted() && $form->isValid())
       {
           $chamados = $form->getData();

           $em = $this->getDoctrine()->getManager();
           $em->persist($chamados);
           $em->flush();

           $this->addFlash('sucesso', 'Chamado Devolvido com Sucesso!');

           return $this->redirectToRoute('pagina_principal');
       }

       return $this->render("projetoWeb/devolverChamado.html.twig", ['devChamado' => $form->createView()]);
   }

    /**
     * @Route("/GerenciarContas/{id}/Editar", name="EditarUsuario")
     */
    public function EditarUsuarioAction(Request $request, Usuarios $usuario)
    {
        $form = $this->createForm(novoUsuarioForm::class, $usuario);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $usuario = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($usuario);
            $em->flush();

            $this->addFlash('sucesso', 'Usuário Editado com Sucesso!');

            return $this->redirectToRoute("gerenciar_contas");
        }

        return $this->render("projetoWeb/editarUsuario.html.twig", ["NovoUsuario" => $form-> createView()]);
    }

    /**
     * @Route("/{nomeChamado}/", name="DeletarChamadoAberto")
     */
    public function DeletarChamadoAbertoAction(Chamados $chamados)
    {

        if (!$chamados)
        {
            throw $this->createNotFoundException('Chamado não encontrado');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($chamados);
        $em->flush();

        $this->addFlash('sucesso', 'Chamado deletado com sucesso!');

        return $this->redirectToRoute("pagina_principal");

    }


    /**
     * @Route("/{id}", name="atender_chamado")
     */
    public function atenderChamado(Chamados $chamados)
    {
        if (!$chamados)
        {
            throw $this->createNotFoundException('Chamado não encontrado');
        }


        $em = $this->getDoctrine()->getManager();
        $em->persist($chamados);
        $em->flush();

        $this->addFlash('sucesso', 'Chamado Adicionado com Sucesso!');

        return $this->redirectToRoute("pagina_principal");
    }

    /**
     * @Route("/{id}", name="devolver_chamado")
     */
    public function devolverChamado(Chamados $chamados)
    {
        if (!$chamados)
        {
            throw $this->createNotFoundException('Chamado não encontrado');
        }


        $em = $this->getDoctrine()->getManager();
        $em->persist($chamados);
        $em->flush();

        $this->addFlash('sucesso', 'Chamado Adicionado com Sucesso!');

        return $this->redirectToRoute("pagina_principal");
    }

    /**
     * @Route("/GerenciarContas/NovoUsuario", name="NovoUsuario")
     */
    public function NovoUsuarioAction(Request $request)
    {
        $form = $this->createForm(novoUsuarioForm::class);

        $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid())
            {
                $usuario = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();

                $this->addFlash('sucesso', 'Usuário Criado com Sucesso!');

                return $this->redirectToRoute("gerenciar_contas");
            }

        return $this->render("projetoWeb/novoUsuario.html.twig", array("NovoUsuario" => $form ->createView()));
    }


    /**
     * @Route("/GerenciarContas/{id}/Deletar", name="DeletarUsuario")
     */
    public function DeletarUsuarioAction(Usuarios $usuarios)
    {

        if (!$usuarios) {
            throw $this->createNotFoundException('No guest found');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($usuarios);
        $em->flush();

        return $this->redirectToRoute("gerenciar_contas");

    }


    /*

    public function novoChamadoAction()
    {
        $chamado = new Chamados();
        $chamado->setNome("Reparo Computador");
        $chamado->setDataCriacao("21/05/2017");
        $chamado->setEmissor("Jane Doe");
        $chamado->setNumero(rand(0, 999999));
        $chamado->setEtapa("Primeira Etapa");
        $chamado->setDescricao("Preciso de reparos no computador");
        $chamado->setDataLimite("23/05/2017");

        $em = $this->getDoctrine()->getManager();
        $em->persist($chamado);
        $em->flush();

        return new Response("<html><body>Chamado Criado com Sucesso!</body></html>");
    }

    */



}