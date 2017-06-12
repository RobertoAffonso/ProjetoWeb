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
        $__internal_3b63cc2b899882d70a73ac070c351ff10b2f04688bfe23226979047d0b7540cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b63cc2b899882d70a73ac070c351ff10b2f04688bfe23226979047d0b7540cc->enter($__internal_3b63cc2b899882d70a73ac070c351ff10b2f04688bfe23226979047d0b7540cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        $__internal_cff330b1e5fd2d81380730a3168b26676284ba5b5f2b37bfabb287505d12b55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff330b1e5fd2d81380730a3168b26676284ba5b5f2b37bfabb287505d12b55b->enter($__internal_cff330b1e5fd2d81380730a3168b26676284ba5b5f2b37bfabb287505d12b55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

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
                <a href=\"#\"><i class=\"fa fa-laptop\"></i> <span>Conta</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mudar_senha");
        echo ">Mudar Senha</a></li>
                    <li><a href=";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mudar_informacoes");
        echo ">Mudar Informações</a></li>
                    <li><a href=";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("minha_conta");
        echo ">Minha Conta</a></li>
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
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("criar_filas");
        echo ">Criar Filas</a></li>
                    <li><a href=";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("criar_etapas");
        echo ">Criar Etapas</a></li>
                    <li><a href=";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gerenciar_contas");
        echo ">Gerenciar Contas</a></li>
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
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "sucesso"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 129
            echo "            <div class=\"alert alert-success\">
                ";
            // line 130
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
        ";
        // line 134
        $this->displayBlock('body', $context, $blocks);
        // line 135
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
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 240
        echo "<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
";
        
        $__internal_3b63cc2b899882d70a73ac070c351ff10b2f04688bfe23226979047d0b7540cc->leave($__internal_3b63cc2b899882d70a73ac070c351ff10b2f04688bfe23226979047d0b7540cc_prof);

        
        $__internal_cff330b1e5fd2d81380730a3168b26676284ba5b5f2b37bfabb287505d12b55b->leave($__internal_cff330b1e5fd2d81380730a3168b26676284ba5b5f2b37bfabb287505d12b55b_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_617be415bcce8e2bd94bda01a94b529a4a46de47c930bc5123b7421769b155b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617be415bcce8e2bd94bda01a94b529a4a46de47c930bc5123b7421769b155b1->enter($__internal_617be415bcce8e2bd94bda01a94b529a4a46de47c930bc5123b7421769b155b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_177af1b4bae733dfd7416152247bc49a7952cc52951c67c751924ddd4af66b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177af1b4bae733dfd7416152247bc49a7952cc52951c67c751924ddd4af66b42->enter($__internal_177af1b4bae733dfd7416152247bc49a7952cc52951c67c751924ddd4af66b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hau'Hra";
        
        $__internal_177af1b4bae733dfd7416152247bc49a7952cc52951c67c751924ddd4af66b42->leave($__internal_177af1b4bae733dfd7416152247bc49a7952cc52951c67c751924ddd4af66b42_prof);

        
        $__internal_617be415bcce8e2bd94bda01a94b529a4a46de47c930bc5123b7421769b155b1->leave($__internal_617be415bcce8e2bd94bda01a94b529a4a46de47c930bc5123b7421769b155b1_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_975d0afaa0e918e5c0116d9a30c23151f4debd641e4aa40875ac7c52058c7881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_975d0afaa0e918e5c0116d9a30c23151f4debd641e4aa40875ac7c52058c7881->enter($__internal_975d0afaa0e918e5c0116d9a30c23151f4debd641e4aa40875ac7c52058c7881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_77b9de3e09d95695833706fbf3525979209ea733dc6027a3275e5ae09abb4459 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b9de3e09d95695833706fbf3525979209ea733dc6027a3275e5ae09abb4459->enter($__internal_77b9de3e09d95695833706fbf3525979209ea733dc6027a3275e5ae09abb4459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_77b9de3e09d95695833706fbf3525979209ea733dc6027a3275e5ae09abb4459->leave($__internal_77b9de3e09d95695833706fbf3525979209ea733dc6027a3275e5ae09abb4459_prof);

        
        $__internal_975d0afaa0e918e5c0116d9a30c23151f4debd641e4aa40875ac7c52058c7881->leave($__internal_975d0afaa0e918e5c0116d9a30c23151f4debd641e4aa40875ac7c52058c7881_prof);

    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        $__internal_e862b33f240856543230d2ae71066ba41adf6d2daf6245b1255b8a2a5e05bc2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e862b33f240856543230d2ae71066ba41adf6d2daf6245b1255b8a2a5e05bc2b->enter($__internal_e862b33f240856543230d2ae71066ba41adf6d2daf6245b1255b8a2a5e05bc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_87500cf99bf3b9a2f24a168650d1c79031c5b828d217e4d94b1b95337c2a61f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87500cf99bf3b9a2f24a168650d1c79031c5b828d217e4d94b1b95337c2a61f4->enter($__internal_87500cf99bf3b9a2f24a168650d1c79031c5b828d217e4d94b1b95337c2a61f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_87500cf99bf3b9a2f24a168650d1c79031c5b828d217e4d94b1b95337c2a61f4->leave($__internal_87500cf99bf3b9a2f24a168650d1c79031c5b828d217e4d94b1b95337c2a61f4_prof);

        
        $__internal_e862b33f240856543230d2ae71066ba41adf6d2daf6245b1255b8a2a5e05bc2b->leave($__internal_e862b33f240856543230d2ae71066ba41adf6d2daf6245b1255b8a2a5e05bc2b_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_105bdda278d0ad857807dd57531dcebe446a33fd64239520bf325805b2e0b331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105bdda278d0ad857807dd57531dcebe446a33fd64239520bf325805b2e0b331->enter($__internal_105bdda278d0ad857807dd57531dcebe446a33fd64239520bf325805b2e0b331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_923e8003db788012f3d4bc559bac435b2ce8f3a5dbeace488451f2b7ad40d807 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923e8003db788012f3d4bc559bac435b2ce8f3a5dbeace488451f2b7ad40d807->enter($__internal_923e8003db788012f3d4bc559bac435b2ce8f3a5dbeace488451f2b7ad40d807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_923e8003db788012f3d4bc559bac435b2ce8f3a5dbeace488451f2b7ad40d807->leave($__internal_923e8003db788012f3d4bc559bac435b2ce8f3a5dbeace488451f2b7ad40d807_prof);

        
        $__internal_105bdda278d0ad857807dd57531dcebe446a33fd64239520bf325805b2e0b331->leave($__internal_105bdda278d0ad857807dd57531dcebe446a33fd64239520bf325805b2e0b331_prof);

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
        return array (  433 => 237,  428 => 235,  423 => 233,  418 => 230,  409 => 229,  392 => 134,  380 => 33,  375 => 31,  369 => 28,  361 => 23,  355 => 20,  350 => 18,  345 => 16,  342 => 15,  333 => 14,  315 => 10,  299 => 240,  297 => 229,  201 => 135,  199 => 134,  196 => 133,  187 => 130,  184 => 129,  180 => 128,  164 => 115,  160 => 114,  156 => 113,  143 => 103,  139 => 102,  135 => 101,  122 => 91,  118 => 90,  109 => 84,  98 => 76,  81 => 62,  59 => 43,  49 => 35,  47 => 14,  40 => 10,  29 => 1,);
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
                <a href=\"#\"><i class=\"fa fa-laptop\"></i> <span>Conta</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href={{ path('mudar_senha') }}>Mudar Senha</a></li>
                    <li><a href={{ path('mudar_informacoes') }}>Mudar Informações</a></li>
                    <li><a href={{ path('minha_conta') }}>Minha Conta</a></li>
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
                    <li><a href={{ path('criar_etapas') }}>Criar Etapas</a></li>
                    <li><a href={{ path('gerenciar_contas') }}>Gerenciar Contas</a></li>
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
", "mainTheme.html.twig", "/home/uniceub/Desktop/ProjetoWeb/app/Resources/views/mainTheme.html.twig");
    }
}
