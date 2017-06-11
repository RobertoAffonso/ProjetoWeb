<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // pagina_principal
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina_principal');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::mostrarChamadoAction',  '_route' => 'pagina_principal',);
        }

        // gerenciar_contas
        if ($pathinfo === '/GerenciarContas') {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::mostrarUsuariosAction',  '_route' => 'gerenciar_contas',);
        }

        if (0 === strpos($pathinfo, '/M')) {
            if (0 === strpos($pathinfo, '/Mudar')) {
                // mudar_senha
                if ($pathinfo === '/MudarSenha') {
                    return array (  '_controller' => 'AppBundle\\Controller\\IndexController::mudarSenhaAction',  '_route' => 'mudar_senha',);
                }

                // mudar_informacoes
                if ($pathinfo === '/MudarInformacoes') {
                    return array (  '_controller' => 'AppBundle\\Controller\\IndexController::mudarInformacoesAction',  '_route' => 'mudar_informacoes',);
                }

            }

            // minha_conta
            if ($pathinfo === '/MinhaConta') {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::minhaContaAction',  '_route' => 'minha_conta',);
            }

        }

        if (0 === strpos($pathinfo, '/Criar')) {
            // criar_filas
            if ($pathinfo === '/CriarFilas') {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::criarFilasAction',  '_route' => 'criar_filas',);
            }

            // criar_etapas
            if ($pathinfo === '/CriarEtapas') {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::criarEtapasAction',  '_route' => 'criar_etapas',);
            }

<<<<<<< HEAD
            // CriarChamado
            if ($pathinfo === '/CriarChamado') {
                return array (  '_controller' => 'AppBundle\\Controller\\IndexController::criarChamadoAction',  '_route' => 'CriarChamado',);
            }

=======
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        }

        // meu_chamado
        if (preg_match('#^/(?P<nomeChamado>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'meu_chamado')), array (  '_controller' => 'AppBundle\\Controller\\IndexController::meuChamadoAction',));
        }

        // NovoUsuario
        if ($pathinfo === '/GerenciarContas/NovoUsuario') {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::NovoUsuarioAction',  '_route' => 'NovoUsuario',);
<<<<<<< HEAD
=======
        }

        // NovoChamado
        if ($pathinfo === '/CriarChamado') {
            return array (  '_controller' => 'AppBundle\\Controller\\IndexController::criarChamadoAction',  '_route' => 'NovoChamado',);
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
