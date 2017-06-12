<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 14/05/17
 * Time: 21:31
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Chamados;
use AppBundle\Entity\meusChamados;
use AppBundle\Entity\Usuarios;
use AppBundle\Form\novoChamadoForm;
use AppBundle\Form\novoUsuarioForm;
use AppBundle\Service\MarkdownTransformer;
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

        return $this->render("projetoWeb/index.html.twig", ["chamados" => $chamados]);
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
     * @Route("/MudarSenha", name="mudar_senha")
     */
    public function mudarSenhaAction()
    {
        return $this->render("projetoWeb/mudarSenha.html.twig");
    }

    /**
     * @Route("/MudarInformacoes", name="mudar_informacoes")
     */
    public function mudarInformacoesAction()
    {
        return $this->render("projetoWeb/mudarInformacoes.html.twig");
    }

    /**
     * @Route("/MinhaConta", name="minha_conta")
     */
    public function minhaContaAction()
    {
        return $this->render("projetoWeb/minhaConta.html.twig");
    }

    /**
     * @Route("/CriarFilas", name="criar_filas")
     */
    public function criarFilasAction()
    {
        return $this->render("projetoWeb/criarFilas.html.twig");
    }

    /**
     * @Route("/CriarEtapas", name="criar_etapas")
     */
    public function criarEtapasAction()
    {
        return $this->render("projetoWeb/criarEtapas.html.twig");
    }

    /**
     * @Route ("/NovoChamado", name="NovoChamado")
     */
    public function NovoChamadoAction(Request $request)
    {
        $form = $this->createForm(novoChamadoForm::class);

        $form->handleRequest($request);
            if($form->isValid() && $form->isSubmitted())
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
     * @Route("/{nomeChamado}", name="meu_chamado")
     */
    public function meuChamadoAction($nomeChamado)
    {
        $em = $this -> getDoctrine() -> getManager();
        $chamado = $em->getRepository("AppBundle:Chamados")
            ->findOneBy(['nome' => $nomeChamado]);

        if (!$chamado)
        {
            throw $this->createNotFoundException("Error 404");
        }

        $markdownParser = new MarkdownTransformer();
        $desc = $markdownParser->parse($chamado->getDescricao());

        return $this->render("projetoWeb/meuChamado.html.twig", ['chamado' => $chamado]);
    }

    /**
     * @Route("/GerenciarContas/NovoUsuario", name="NovoUsuario")
     */
    public function NovoUsuarioAction(Request $request)
    {
        $form = $this->createForm(novoUsuarioForm::class);

        $form->handleRequest($request);
            if($form->isValid() && $form->isSubmitted())
            {
                $usuario = $form->getData();

                $em = $this->getDoctrine()->getManager();
                $em->persist($usuario);
                $em->flush();

                $this->addFlash('sucesso', 'Usuário Criado com Sucesso!');

                return $this->redirectToRoute("gerenciar_contas");
            }

        return $this->render("projetoWeb/novoUsuario.html.twig", ["NovoUsuario" => $form-> createView()]);
    }

    /**
     * @Route("/GerenciarContas/{id}/Editar", name="EditarUsuario")
     */
    public function EditarUsuarioAction(Request $request, Usuarios $usuario)
    {
        $form = $this->createForm(novoUsuarioForm::class, $usuario);

        $form->handleRequest($request);
        if($form->isValid() && $form->isSubmitted())
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

    /*
     *
     /**
     * @Route("/novoChamado" name="NovoChamado")

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
    }*/

}