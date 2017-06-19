<?php

/* mainTheme.html.twig */
class __TwigTemplate_7fbc5e7f6ecb03f56b66ee40aa559312b674c0b9bdddca61160afca17631a82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d92beec5f221eb800aae54dcf93ba0173a21b82cc9bc0eeeaf2facb306bd8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d92beec5f221eb800aae54dcf93ba0173a21b82cc9bc0eeeaf2facb306bd8ca->enter($__internal_1d92beec5f221eb800aae54dcf93ba0173a21b82cc9bc0eeeaf2facb306bd8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        $__internal_b577ff3fb3d2274309fbac72ad94a49e3c7894122c2aa48cf608e4dec94ffa63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b577ff3fb3d2274309fbac72ad94a49e3c7894122c2aa48cf608e4dec94ffa63->enter($__internal_b577ff3fb3d2274309fbac72ad94a49e3c7894122c2aa48cf608e4dec94ffa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    ";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">
        <!-- Logo -->
        <a href=";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo " class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>P</b>W</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Projeto</b>Web</span>
        </a>
    </header>
</div>


<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/profilepicture.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Roberto Affonso</p>
                <!-- Status -->
                <p><small>Project Director</small></p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">Mapa</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"treeview active\">
                <a href=";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo ">
                    <i class=\"fa fa-envelope\"></i> <span>Chamados</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\">
                        <a href=";
        // line 84
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo ">Meus Chamados
                            <span class=\"pull-right-container\">
                    <span class=\"label label-primary pull-right\"></span>
                  </span>
                        </a>
                    </li>
                    <li><a href=";
        // line 90
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("NovoChamado");
        echo ">Criar Chamados</a></li>
                    <li><a href=";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo ">Visualizar Chamados</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-dashboard\"></i> <span>Admin</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("criar_filas");
        echo ">Criar Filas</a></li>
                    <li><a href=";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerenciar_contas");
        echo ">Gerenciar Contas</a></li>
                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("criar_setores");
        echo "\">Criar Setores</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Main content -->
    <section class=\"content\">
        ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "sucesso"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 117
            echo "            <div class=\"alert alert-success\">
                ";
            // line 118
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
        ";
        // line 122
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
                <li>
                    <a href=\"javascript:;\">
                        <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                        <div class=\"menu-info\">
                            <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
                <li>
                    <a href=\"javascript:;\">
                        <h4 class=\"control-sidebar-subheading\">
                            Custom Template Design
                            <span class=\"pull-right-container\">
                    <span class=\"label label-danger pull-right\">70%</span>
                  </span>
                        </h4>

                        <div class=\"progress progress-xxs\">
                            <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
                <h3 class=\"control-sidebar-heading\">General Settings</h3>

                <div class=\"form-group\">
                    <label class=\"control-sidebar-subheading\">
                        Report panel usage
                        <input type=\"checkbox\" class=\"pull-right\" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->
";
        // line 217
        $this->displayBlock('javascripts', $context, $blocks);
        // line 227
        echo "<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
";
        
        $__internal_1d92beec5f221eb800aae54dcf93ba0173a21b82cc9bc0eeeaf2facb306bd8ca->leave($__internal_1d92beec5f221eb800aae54dcf93ba0173a21b82cc9bc0eeeaf2facb306bd8ca_prof);

        
        $__internal_b577ff3fb3d2274309fbac72ad94a49e3c7894122c2aa48cf608e4dec94ffa63->leave($__internal_b577ff3fb3d2274309fbac72ad94a49e3c7894122c2aa48cf608e4dec94ffa63_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_996d35b67fd3f6787e258f3406295ca6f5801ad3a4722e92603331ac474b7946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_996d35b67fd3f6787e258f3406295ca6f5801ad3a4722e92603331ac474b7946->enter($__internal_996d35b67fd3f6787e258f3406295ca6f5801ad3a4722e92603331ac474b7946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8fbf09130a2b5099238737270cc2e80a5f868ed5f863ecd201b59bcc729bfa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fbf09130a2b5099238737270cc2e80a5f868ed5f863ecd201b59bcc729bfa8a->enter($__internal_8fbf09130a2b5099238737270cc2e80a5f868ed5f863ecd201b59bcc729bfa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hau'Hra";
        
        $__internal_8fbf09130a2b5099238737270cc2e80a5f868ed5f863ecd201b59bcc729bfa8a->leave($__internal_8fbf09130a2b5099238737270cc2e80a5f868ed5f863ecd201b59bcc729bfa8a_prof);

        
        $__internal_996d35b67fd3f6787e258f3406295ca6f5801ad3a4722e92603331ac474b7946->leave($__internal_996d35b67fd3f6787e258f3406295ca6f5801ad3a4722e92603331ac474b7946_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_31026225982316949ce92ff42fb643f915b639c0aa8f3b330930dfcfb4cef466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31026225982316949ce92ff42fb643f915b639c0aa8f3b330930dfcfb4cef466->enter($__internal_31026225982316949ce92ff42fb643f915b639c0aa8f3b330930dfcfb4cef466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_41e86be2b6ddc2a9bc9a84ba875d31bf508e69a0668fd17207e6ae0e85e81827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e86be2b6ddc2a9bc9a84ba875d31bf508e69a0668fd17207e6ae0e85e81827->enter($__internal_41e86be2b6ddc2a9bc9a84ba875d31bf508e69a0668fd17207e6ae0e85e81827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"), "html", null, true);
        echo "\">

        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_41e86be2b6ddc2a9bc9a84ba875d31bf508e69a0668fd17207e6ae0e85e81827->leave($__internal_41e86be2b6ddc2a9bc9a84ba875d31bf508e69a0668fd17207e6ae0e85e81827_prof);

        
        $__internal_31026225982316949ce92ff42fb643f915b639c0aa8f3b330930dfcfb4cef466->leave($__internal_31026225982316949ce92ff42fb643f915b639c0aa8f3b330930dfcfb4cef466_prof);

    }

    // line 122
    public function block_body($context, array $blocks = array())
    {
        $__internal_108521c74e3961c878c3581ddef5118315b98f3a089f9143de47592c9b0af3bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_108521c74e3961c878c3581ddef5118315b98f3a089f9143de47592c9b0af3bd->enter($__internal_108521c74e3961c878c3581ddef5118315b98f3a089f9143de47592c9b0af3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b167b7d13dde3b39ea1be927a4967b8c366791a905e6ea82b7eb4026da5ee6e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b167b7d13dde3b39ea1be927a4967b8c366791a905e6ea82b7eb4026da5ee6e4->enter($__internal_b167b7d13dde3b39ea1be927a4967b8c366791a905e6ea82b7eb4026da5ee6e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b167b7d13dde3b39ea1be927a4967b8c366791a905e6ea82b7eb4026da5ee6e4->leave($__internal_b167b7d13dde3b39ea1be927a4967b8c366791a905e6ea82b7eb4026da5ee6e4_prof);

        
        $__internal_108521c74e3961c878c3581ddef5118315b98f3a089f9143de47592c9b0af3bd->leave($__internal_108521c74e3961c878c3581ddef5118315b98f3a089f9143de47592c9b0af3bd_prof);

    }

    // line 217
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6fe7d6e0e2f558ed2352a889547e9e6aba832665dc462e7f8a1ab797b4e3915e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fe7d6e0e2f558ed2352a889547e9e6aba832665dc462e7f8a1ab797b4e3915e->enter($__internal_6fe7d6e0e2f558ed2352a889547e9e6aba832665dc462e7f8a1ab797b4e3915e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_26a74ae32bf6eae6e5e70b38764438b9a884616372f6d0af9b18800e8b24e24d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a74ae32bf6eae6e5e70b38764438b9a884616372f6d0af9b18800e8b24e24d->enter($__internal_26a74ae32bf6eae6e5e70b38764438b9a884616372f6d0af9b18800e8b24e24d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 218
        echo "    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_26a74ae32bf6eae6e5e70b38764438b9a884616372f6d0af9b18800e8b24e24d->leave($__internal_26a74ae32bf6eae6e5e70b38764438b9a884616372f6d0af9b18800e8b24e24d_prof);

        
        $__internal_6fe7d6e0e2f558ed2352a889547e9e6aba832665dc462e7f8a1ab797b4e3915e->leave($__internal_6fe7d6e0e2f558ed2352a889547e9e6aba832665dc462e7f8a1ab797b4e3915e_prof);

    }

    public function getTemplateName()
    {
        return "mainTheme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 224,  406 => 222,  401 => 220,  397 => 218,  388 => 217,  371 => 122,  359 => 33,  354 => 31,  348 => 28,  340 => 23,  334 => 20,  329 => 18,  324 => 16,  321 => 15,  312 => 14,  294 => 10,  278 => 227,  276 => 217,  180 => 123,  178 => 122,  175 => 121,  166 => 118,  163 => 117,  159 => 116,  143 => 103,  139 => 102,  135 => 101,  122 => 91,  118 => 90,  109 => 84,  98 => 76,  81 => 62,  59 => 43,  49 => 35,  47 => 14,  40 => 10,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>{% block title %}Hau'Hra{% endblock %}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">

    {% block stylesheets %}
        <!-- Bootstrap 3.3.6 -->
        <link rel=\"stylesheet\" href=\"{{ asset('bootstrap/css/bootstrap.min.css') }}\">
        <!-- Font Awesome -->
        <link rel=\"stylesheet\" href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css') }}\">
        <!-- Ionicons -->
        <link rel=\"stylesheet\" href=\"{{ asset('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css') }}\">

        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/AdminLTE.min.css') }}\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/skins/skin-blue.min.css') }}\">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}\">

        <link rel=\"stylesheet\" href=\"{{ asset('plugins/iCheck/flat/blue.css') }}\">
    {% endblock %}

</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">
        <!-- Logo -->
        <a href={{ path('pagina_principal') }} class=\"logo\">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class=\"logo-mini\"><b>P</b>W</span>
            <!-- logo for regular state and mobile devices -->
            <span class=\"logo-lg\"><b>Projeto</b>Web</span>
        </a>
    </header>
</div>


<!-- Left side column. contains the logo and sidebar -->
<aside class=\"main-sidebar\">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class=\"sidebar\">

        <!-- Sidebar user panel (optional) -->
        <div class=\"user-panel\">
            <div class=\"pull-left image\">
                <img src=\"{{ asset('img/profilepicture.jpg') }}\" class=\"img-circle\" alt=\"User Image\">
            </div>
            <div class=\"pull-left info\">
                <p>Roberto Affonso</p>
                <!-- Status -->
                <p><small>Project Director</small></p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class=\"sidebar-menu\">
            <li class=\"header\">Mapa</li>
            <!-- Optionally, you can add icons to the links -->
            <li class=\"treeview active\">
                <a href={{ path('pagina_principal') }}>
                    <i class=\"fa fa-envelope\"></i> <span>Chamados</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\">
                        <a href={{ path('pagina_principal') }}>Meus Chamados
                            <span class=\"pull-right-container\">
                    <span class=\"label label-primary pull-right\"></span>
                  </span>
                        </a>
                    </li>
                    <li><a href={{ path('NovoChamado') }}>Criar Chamados</a></li>
                    <li><a href={{ path('pagina_principal') }}>Visualizar Chamados</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-dashboard\"></i> <span>Admin</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href={{ path('criar_filas') }}>Criar Filas</a></li>
                    <li><a href={{ path('gerenciar_contas') }}>Gerenciar Contas</a></li>
                    <li><a href=\"{{ path('criar_setores') }}\">Criar Setores</a></li>
                </ul>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Main content -->
    <section class=\"content\">
        {% for msg in app.session.flashBag.get('sucesso')%}
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
        {% endfor %}

        {% block body %}{% endblock %}
        <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class=\"main-footer\">
    <!-- To the right -->
    <div class=\"pull-right hidden-xs\">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href=\"#\">Company</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class=\"control-sidebar control-sidebar-dark\">
    <!-- Create the tabs -->
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
        <li class=\"active\"><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
        <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class=\"tab-content\">
        <!-- Home tab content -->
        <div class=\"tab-pane active\" id=\"control-sidebar-home-tab\">
            <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
            <ul class=\"control-sidebar-menu\">
                <li>
                    <a href=\"javascript:;\">
                        <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>

                        <div class=\"menu-info\">
                            <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>

                            <p>Will be 23 on April 24th</p>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

            <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
            <ul class=\"control-sidebar-menu\">
                <li>
                    <a href=\"javascript:;\">
                        <h4 class=\"control-sidebar-subheading\">
                            Custom Template Design
                            <span class=\"pull-right-container\">
                    <span class=\"label label-danger pull-right\">70%</span>
                  </span>
                        </h4>

                        <div class=\"progress progress-xxs\">
                            <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
            <form method=\"post\">
                <h3 class=\"control-sidebar-heading\">General Settings</h3>

                <div class=\"form-group\">
                    <label class=\"control-sidebar-subheading\">
                        Report panel usage
                        <input type=\"checkbox\" class=\"pull-right\" checked>
                    </label>

                    <p>
                        Some information about this general settings option
                    </p>
                </div>
                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.tab-pane -->
    </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class=\"control-sidebar-bg\"></div>
</div>
<!-- ./wrapper -->
{% block javascripts %}
    <!-- REQUIRED JS SCRIPTS -->
    <!-- jQuery 2.2.3 -->
    <script src=\"{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"{{ asset('bootstrap/js/bootstrap.min.js') }}\"></script>
    <!-- AdminLTE App -->
    <script src=\"{{ asset('js/app.js') }}\"></script>

{% endblock %}
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
", "mainTheme.html.twig", "/home/uniceub/Documents/ProjetoWeb/app/Resources/views/mainTheme.html.twig");
    }
}
