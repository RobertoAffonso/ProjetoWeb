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
<<<<<<< HEAD
        $__internal_3927c62ff8b1dcbe0bfc956d65f4b051211883651c1694dcb740c91b1847d382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3927c62ff8b1dcbe0bfc956d65f4b051211883651c1694dcb740c91b1847d382->enter($__internal_3927c62ff8b1dcbe0bfc956d65f4b051211883651c1694dcb740c91b1847d382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        $__internal_17ed1a7d143773fb1e30268433c42921ab98bdf40327fff9a12172548129c0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ed1a7d143773fb1e30268433c42921ab98bdf40327fff9a12172548129c0e4->enter($__internal_17ed1a7d143773fb1e30268433c42921ab98bdf40327fff9a12172548129c0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));
=======
        $__internal_ea20ede99931e1c09a25934e0f9406f0d402ccac1fefed28ba7b04cb3c8587a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea20ede99931e1c09a25934e0f9406f0d402ccac1fefed28ba7b04cb3c8587a5->enter($__internal_ea20ede99931e1c09a25934e0f9406f0d402ccac1fefed28ba7b04cb3c8587a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        $__internal_5cd485701b67771355e5084893917f2e4b3e5a55f94efe6816b13260b96a3445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd485701b67771355e5084893917f2e4b3e5a55f94efe6816b13260b96a3445->enter($__internal_5cd485701b67771355e5084893917f2e4b3e5a55f94efe6816b13260b96a3445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

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
<<<<<<< HEAD
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CriarChamado");
=======
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("criar_chamado");
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
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
<<<<<<< HEAD
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
=======
        // line 129
        $this->displayBlock('body', $context, $blocks);
        // line 130
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
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
<<<<<<< HEAD
        // line 229
        $this->displayBlock('javascripts', $context, $blocks);
        // line 240
=======
        // line 224
        $this->displayBlock('javascripts', $context, $blocks);
        // line 235
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        echo "<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
";
        
<<<<<<< HEAD
        $__internal_3927c62ff8b1dcbe0bfc956d65f4b051211883651c1694dcb740c91b1847d382->leave($__internal_3927c62ff8b1dcbe0bfc956d65f4b051211883651c1694dcb740c91b1847d382_prof);

        
        $__internal_17ed1a7d143773fb1e30268433c42921ab98bdf40327fff9a12172548129c0e4->leave($__internal_17ed1a7d143773fb1e30268433c42921ab98bdf40327fff9a12172548129c0e4_prof);
=======
        $__internal_ea20ede99931e1c09a25934e0f9406f0d402ccac1fefed28ba7b04cb3c8587a5->leave($__internal_ea20ede99931e1c09a25934e0f9406f0d402ccac1fefed28ba7b04cb3c8587a5_prof);

        
        $__internal_5cd485701b67771355e5084893917f2e4b3e5a55f94efe6816b13260b96a3445->leave($__internal_5cd485701b67771355e5084893917f2e4b3e5a55f94efe6816b13260b96a3445_prof);
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_e04217bf8dab482af40412dfa6c48bb971231f554a178e7226762adf0d4007cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04217bf8dab482af40412dfa6c48bb971231f554a178e7226762adf0d4007cf->enter($__internal_e04217bf8dab482af40412dfa6c48bb971231f554a178e7226762adf0d4007cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9f526179776cb0bd3f3960edc9e336e9a177867e67a6faa6e658b7a530f30563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f526179776cb0bd3f3960edc9e336e9a177867e67a6faa6e658b7a530f30563->enter($__internal_9f526179776cb0bd3f3960edc9e336e9a177867e67a6faa6e658b7a530f30563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hau'Hra";
        
        $__internal_9f526179776cb0bd3f3960edc9e336e9a177867e67a6faa6e658b7a530f30563->leave($__internal_9f526179776cb0bd3f3960edc9e336e9a177867e67a6faa6e658b7a530f30563_prof);

        
        $__internal_e04217bf8dab482af40412dfa6c48bb971231f554a178e7226762adf0d4007cf->leave($__internal_e04217bf8dab482af40412dfa6c48bb971231f554a178e7226762adf0d4007cf_prof);
=======
        $__internal_eef3a33ef707b2e2a67ceaada7878b81d22c0b845514438a6c65d4d6b72d4b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef3a33ef707b2e2a67ceaada7878b81d22c0b845514438a6c65d4d6b72d4b39->enter($__internal_eef3a33ef707b2e2a67ceaada7878b81d22c0b845514438a6c65d4d6b72d4b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9000217deee7b17726e0fc1df9e8b0b89ba6affe44f4265a021ee0e25c2ad8d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9000217deee7b17726e0fc1df9e8b0b89ba6affe44f4265a021ee0e25c2ad8d3->enter($__internal_9000217deee7b17726e0fc1df9e8b0b89ba6affe44f4265a021ee0e25c2ad8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hau'Hra";
        
        $__internal_9000217deee7b17726e0fc1df9e8b0b89ba6affe44f4265a021ee0e25c2ad8d3->leave($__internal_9000217deee7b17726e0fc1df9e8b0b89ba6affe44f4265a021ee0e25c2ad8d3_prof);

        
        $__internal_eef3a33ef707b2e2a67ceaada7878b81d22c0b845514438a6c65d4d6b72d4b39->leave($__internal_eef3a33ef707b2e2a67ceaada7878b81d22c0b845514438a6c65d4d6b72d4b39_prof);
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_d0c27cb7eb586f71496fcfbdd444bdf317ef936194b49cff0e1c008198da0caa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0c27cb7eb586f71496fcfbdd444bdf317ef936194b49cff0e1c008198da0caa->enter($__internal_d0c27cb7eb586f71496fcfbdd444bdf317ef936194b49cff0e1c008198da0caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_13e173cac0e84f6566a3e715d9595b1d49d539f1b89b624f8b5c91720cb21652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e173cac0e84f6566a3e715d9595b1d49d539f1b89b624f8b5c91720cb21652->enter($__internal_13e173cac0e84f6566a3e715d9595b1d49d539f1b89b624f8b5c91720cb21652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));
=======
        $__internal_e898d97212ebffa6cc771f8b0d46cdbcdf1cc03f8b12addd9ec8b8064ad8d4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e898d97212ebffa6cc771f8b0d46cdbcdf1cc03f8b12addd9ec8b8064ad8d4e3->enter($__internal_e898d97212ebffa6cc771f8b0d46cdbcdf1cc03f8b12addd9ec8b8064ad8d4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2c5dc14ec6f33ee93946714527e196c07c2f41cf6a88ab94ea4e210822b7856a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c5dc14ec6f33ee93946714527e196c07c2f41cf6a88ab94ea4e210822b7856a->enter($__internal_2c5dc14ec6f33ee93946714527e196c07c2f41cf6a88ab94ea4e210822b7856a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

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
        
<<<<<<< HEAD
        $__internal_13e173cac0e84f6566a3e715d9595b1d49d539f1b89b624f8b5c91720cb21652->leave($__internal_13e173cac0e84f6566a3e715d9595b1d49d539f1b89b624f8b5c91720cb21652_prof);

        
        $__internal_d0c27cb7eb586f71496fcfbdd444bdf317ef936194b49cff0e1c008198da0caa->leave($__internal_d0c27cb7eb586f71496fcfbdd444bdf317ef936194b49cff0e1c008198da0caa_prof);

    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        $__internal_98ca9b9d5605a16d357c2bbda9c309d005294688150523ad861ee5a9a7140003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98ca9b9d5605a16d357c2bbda9c309d005294688150523ad861ee5a9a7140003->enter($__internal_98ca9b9d5605a16d357c2bbda9c309d005294688150523ad861ee5a9a7140003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_947227454ccaff8e1c80528db7190f6d72efc9e7911641e3e8d7ace5186a45f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_947227454ccaff8e1c80528db7190f6d72efc9e7911641e3e8d7ace5186a45f3->enter($__internal_947227454ccaff8e1c80528db7190f6d72efc9e7911641e3e8d7ace5186a45f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_947227454ccaff8e1c80528db7190f6d72efc9e7911641e3e8d7ace5186a45f3->leave($__internal_947227454ccaff8e1c80528db7190f6d72efc9e7911641e3e8d7ace5186a45f3_prof);

        
        $__internal_98ca9b9d5605a16d357c2bbda9c309d005294688150523ad861ee5a9a7140003->leave($__internal_98ca9b9d5605a16d357c2bbda9c309d005294688150523ad861ee5a9a7140003_prof);

    }

    // line 229
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e34f0ba664670635965375d758dee716b34d0fb1c7019f0046c06e6a180a270d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e34f0ba664670635965375d758dee716b34d0fb1c7019f0046c06e6a180a270d->enter($__internal_e34f0ba664670635965375d758dee716b34d0fb1c7019f0046c06e6a180a270d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cb25290397f244329af326a904a1dce085832ea92967a0e1080b54f92106aa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb25290397f244329af326a904a1dce085832ea92967a0e1080b54f92106aa14->enter($__internal_cb25290397f244329af326a904a1dce085832ea92967a0e1080b54f92106aa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 230
=======
        $__internal_2c5dc14ec6f33ee93946714527e196c07c2f41cf6a88ab94ea4e210822b7856a->leave($__internal_2c5dc14ec6f33ee93946714527e196c07c2f41cf6a88ab94ea4e210822b7856a_prof);

        
        $__internal_e898d97212ebffa6cc771f8b0d46cdbcdf1cc03f8b12addd9ec8b8064ad8d4e3->leave($__internal_e898d97212ebffa6cc771f8b0d46cdbcdf1cc03f8b12addd9ec8b8064ad8d4e3_prof);

    }

    // line 129
    public function block_body($context, array $blocks = array())
    {
        $__internal_00dbf4841929952c2e3421b99e37808960bde25c10562540c1301b6f53fa240c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00dbf4841929952c2e3421b99e37808960bde25c10562540c1301b6f53fa240c->enter($__internal_00dbf4841929952c2e3421b99e37808960bde25c10562540c1301b6f53fa240c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8b559a3e79c4c0b23b6a9dc3c1463c2e748ed4c264cdfd2c319d18061b31afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b559a3e79c4c0b23b6a9dc3c1463c2e748ed4c264cdfd2c319d18061b31afb->enter($__internal_c8b559a3e79c4c0b23b6a9dc3c1463c2e748ed4c264cdfd2c319d18061b31afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c8b559a3e79c4c0b23b6a9dc3c1463c2e748ed4c264cdfd2c319d18061b31afb->leave($__internal_c8b559a3e79c4c0b23b6a9dc3c1463c2e748ed4c264cdfd2c319d18061b31afb_prof);

        
        $__internal_00dbf4841929952c2e3421b99e37808960bde25c10562540c1301b6f53fa240c->leave($__internal_00dbf4841929952c2e3421b99e37808960bde25c10562540c1301b6f53fa240c_prof);

    }

    // line 224
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb221b2584cc07107b734efc1986c4e52447a205d81a1a099f1769b71b7b79d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb221b2584cc07107b734efc1986c4e52447a205d81a1a099f1769b71b7b79d5->enter($__internal_bb221b2584cc07107b734efc1986c4e52447a205d81a1a099f1769b71b7b79d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c38b559c22d40d53927c88ac9c2a3954c124e03d92c7c8799e33dc9dc0ae64d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38b559c22d40d53927c88ac9c2a3954c124e03d92c7c8799e33dc9dc0ae64d7->enter($__internal_c38b559c22d40d53927c88ac9c2a3954c124e03d92c7c8799e33dc9dc0ae64d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 225
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src=\"";
<<<<<<< HEAD
        // line 233
=======
        // line 228
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
<<<<<<< HEAD
        // line 235
=======
        // line 230
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
<<<<<<< HEAD
        // line 237
=======
        // line 232
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
        
<<<<<<< HEAD
        $__internal_cb25290397f244329af326a904a1dce085832ea92967a0e1080b54f92106aa14->leave($__internal_cb25290397f244329af326a904a1dce085832ea92967a0e1080b54f92106aa14_prof);

        
        $__internal_e34f0ba664670635965375d758dee716b34d0fb1c7019f0046c06e6a180a270d->leave($__internal_e34f0ba664670635965375d758dee716b34d0fb1c7019f0046c06e6a180a270d_prof);
=======
        $__internal_c38b559c22d40d53927c88ac9c2a3954c124e03d92c7c8799e33dc9dc0ae64d7->leave($__internal_c38b559c22d40d53927c88ac9c2a3954c124e03d92c7c8799e33dc9dc0ae64d7_prof);

        
        $__internal_bb221b2584cc07107b734efc1986c4e52447a205d81a1a099f1769b71b7b79d5->leave($__internal_bb221b2584cc07107b734efc1986c4e52447a205d81a1a099f1769b71b7b79d5_prof);
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83

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
<<<<<<< HEAD
        return array (  433 => 237,  428 => 235,  423 => 233,  418 => 230,  409 => 229,  392 => 134,  380 => 33,  375 => 31,  369 => 28,  361 => 23,  355 => 20,  350 => 18,  345 => 16,  342 => 15,  333 => 14,  315 => 10,  299 => 240,  297 => 229,  201 => 135,  199 => 134,  196 => 133,  187 => 130,  184 => 129,  180 => 128,  164 => 115,  160 => 114,  156 => 113,  143 => 103,  139 => 102,  135 => 101,  122 => 91,  118 => 90,  109 => 84,  98 => 76,  81 => 62,  59 => 43,  49 => 35,  47 => 14,  40 => 10,  29 => 1,);
=======
        return array (  415 => 232,  410 => 230,  405 => 228,  400 => 225,  391 => 224,  374 => 129,  362 => 33,  357 => 31,  351 => 28,  343 => 23,  337 => 20,  332 => 18,  327 => 16,  324 => 15,  315 => 14,  297 => 10,  281 => 235,  279 => 224,  183 => 130,  181 => 129,  164 => 115,  160 => 114,  156 => 113,  143 => 103,  139 => 102,  135 => 101,  122 => 91,  118 => 90,  109 => 84,  98 => 76,  81 => 62,  59 => 43,  49 => 35,  47 => 14,  40 => 10,  29 => 1,);
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
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
<<<<<<< HEAD
                    <li><a href={{ path('CriarChamado') }}>Criar Chamados</a></li>
=======
                    <li><a href={{ path('criar_chamado') }}>Criar Chamados</a></li>
>>>>>>> c9e181b4dae49f329a5425276d5b84fb1a356a83
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
", "mainTheme.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/mainTheme.html.twig");
    }
}
