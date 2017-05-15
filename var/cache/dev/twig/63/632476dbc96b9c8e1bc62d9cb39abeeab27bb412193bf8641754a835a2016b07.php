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
        $__internal_c49d9b5c22feb1f0318bd3a43d85da584dee1f6465c4e084cef1625ff2321fbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49d9b5c22feb1f0318bd3a43d85da584dee1f6465c4e084cef1625ff2321fbc->enter($__internal_c49d9b5c22feb1f0318bd3a43d85da584dee1f6465c4e084cef1625ff2321fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

        $__internal_0da736efedb6dfeacd1251c509d766abb723c665601d6ef53a3dd96224d46260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da736efedb6dfeacd1251c509d766abb723c665601d6ef53a3dd96224d46260->enter($__internal_0da736efedb6dfeacd1251c509d766abb723c665601d6ef53a3dd96224d46260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mainTheme.html.twig"));

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
        // line 37
        echo "
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <!-- Main Header -->
    <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\">
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
        // line 64
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
                <a href=\"mailbox.html\">
                    <i class=\"fa fa-envelope\"></i> <span>Chamados</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\">
                        <a href=\"mailbox.html\">Meus Chamados
                            <span class=\"pull-right-container\">
                    <span class=\"label label-primary pull-right\"></span>
                  </span>
                        </a>
                    </li>
                    <li><a href=\"compose.html\">Criar Chamados</a></li>
                    <li><a href=\"read-mail.html\">Visualizar Chamados</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-laptop\"></i> <span>Conta</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Mudar Senha</a></li>
                    <li><a href=\"#\">Mudar Informações</a></li>
                    <li><a href=\"#\">Minha Conta</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-dashboard\"></i> <span>Admin</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Criar Filas</a></li>
                    <li><a href=\"#\">Criar Etapas</a></li>
                    <li><a href=\"#\">Gerenciar Contas</li>
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
        // line 131
        $this->displayBlock('body', $context, $blocks);
        // line 132
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
        // line 226
        $this->displayBlock('javascripts', $context, $blocks);
        // line 237
        echo "<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
";
        
        $__internal_c49d9b5c22feb1f0318bd3a43d85da584dee1f6465c4e084cef1625ff2321fbc->leave($__internal_c49d9b5c22feb1f0318bd3a43d85da584dee1f6465c4e084cef1625ff2321fbc_prof);

        
        $__internal_0da736efedb6dfeacd1251c509d766abb723c665601d6ef53a3dd96224d46260->leave($__internal_0da736efedb6dfeacd1251c509d766abb723c665601d6ef53a3dd96224d46260_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2ad72d9ffe11b53a233401ba1b50f313ef37484a861203743bdb3b3a793bfb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2ad72d9ffe11b53a233401ba1b50f313ef37484a861203743bdb3b3a793bfb2->enter($__internal_a2ad72d9ffe11b53a233401ba1b50f313ef37484a861203743bdb3b3a793bfb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4af3bb2b9a0dad69e35efe6c9e903283d7e98edff834c6816f3c1834b1b56e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af3bb2b9a0dad69e35efe6c9e903283d7e98edff834c6816f3c1834b1b56e3b->enter($__internal_4af3bb2b9a0dad69e35efe6c9e903283d7e98edff834c6816f3c1834b1b56e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hau'Hra";
        
        $__internal_4af3bb2b9a0dad69e35efe6c9e903283d7e98edff834c6816f3c1834b1b56e3b->leave($__internal_4af3bb2b9a0dad69e35efe6c9e903283d7e98edff834c6816f3c1834b1b56e3b_prof);

        
        $__internal_a2ad72d9ffe11b53a233401ba1b50f313ef37484a861203743bdb3b3a793bfb2->leave($__internal_a2ad72d9ffe11b53a233401ba1b50f313ef37484a861203743bdb3b3a793bfb2_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87a11ae6edfa65af2983a131e24a189c8d39057f239a48b1b17cf2874bfa43d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a11ae6edfa65af2983a131e24a189c8d39057f239a48b1b17cf2874bfa43d1->enter($__internal_87a11ae6edfa65af2983a131e24a189c8d39057f239a48b1b17cf2874bfa43d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfea84bcce7010561f8c9e704d8236475f0a02af87c2d76b79cfd50a5556ad58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfea84bcce7010561f8c9e704d8236475f0a02af87c2d76b79cfd50a5556ad58->enter($__internal_dfea84bcce7010561f8c9e704d8236475f0a02af87c2d76b79cfd50a5556ad58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fullcalendar/fullcalendar.min.css\""), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" media=\"print\">
        <!-- Theme style -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/AdminLTE.min.css"), "html", null, true);
        echo "\">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect.
        -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/skins/skin-blue.min.css"), "html", null, true);
        echo "\">

        <!-- bootstrap wysihtml5 - text editor -->
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\">

        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_dfea84bcce7010561f8c9e704d8236475f0a02af87c2d76b79cfd50a5556ad58->leave($__internal_dfea84bcce7010561f8c9e704d8236475f0a02af87c2d76b79cfd50a5556ad58_prof);

        
        $__internal_87a11ae6edfa65af2983a131e24a189c8d39057f239a48b1b17cf2874bfa43d1->leave($__internal_87a11ae6edfa65af2983a131e24a189c8d39057f239a48b1b17cf2874bfa43d1_prof);

    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23beb234540f83f6ffd75912247252e84d6bb60ee46ac6b8d4e16fdbf280e41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23beb234540f83f6ffd75912247252e84d6bb60ee46ac6b8d4e16fdbf280e41->enter($__internal_b23beb234540f83f6ffd75912247252e84d6bb60ee46ac6b8d4e16fdbf280e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6c9478d629d18ee00220043aa7682727d4aa75a5167618f25cf667324948387 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c9478d629d18ee00220043aa7682727d4aa75a5167618f25cf667324948387->enter($__internal_d6c9478d629d18ee00220043aa7682727d4aa75a5167618f25cf667324948387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6c9478d629d18ee00220043aa7682727d4aa75a5167618f25cf667324948387->leave($__internal_d6c9478d629d18ee00220043aa7682727d4aa75a5167618f25cf667324948387_prof);

        
        $__internal_b23beb234540f83f6ffd75912247252e84d6bb60ee46ac6b8d4e16fdbf280e41->leave($__internal_b23beb234540f83f6ffd75912247252e84d6bb60ee46ac6b8d4e16fdbf280e41_prof);

    }

    // line 226
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d22f44c92723e7c299d220df43a92520c44ce29b5bb81f94bb6d9fa5ed7fedd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d22f44c92723e7c299d220df43a92520c44ce29b5bb81f94bb6d9fa5ed7fedd->enter($__internal_1d22f44c92723e7c299d220df43a92520c44ce29b5bb81f94bb6d9fa5ed7fedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b744455f64975bee3c5b70bc18c7b7d15959c31e521a07c825a90c37afaa7edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b744455f64975bee3c5b70bc18c7b7d15959c31e521a07c825a90c37afaa7edc->enter($__internal_b744455f64975bee3c5b70bc18c7b7d15959c31e521a07c825a90c37afaa7edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 227
        echo "    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.2.3 -->
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("plugins/jQuery/jquery-2.2.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_b744455f64975bee3c5b70bc18c7b7d15959c31e521a07c825a90c37afaa7edc->leave($__internal_b744455f64975bee3c5b70bc18c7b7d15959c31e521a07c825a90c37afaa7edc_prof);

        
        $__internal_1d22f44c92723e7c299d220df43a92520c44ce29b5bb81f94bb6d9fa5ed7fedd->leave($__internal_1d22f44c92723e7c299d220df43a92520c44ce29b5bb81f94bb6d9fa5ed7fedd_prof);

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
        return array (  390 => 234,  385 => 232,  380 => 230,  375 => 227,  366 => 226,  349 => 131,  337 => 35,  332 => 33,  326 => 30,  318 => 25,  313 => 23,  309 => 22,  304 => 20,  299 => 18,  294 => 16,  291 => 15,  282 => 14,  264 => 10,  248 => 237,  246 => 226,  150 => 132,  148 => 131,  78 => 64,  49 => 37,  47 => 14,  40 => 10,  29 => 1,);
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
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/fullcalendar/fullcalendar.min.css\"') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('plugins/fullcalendar/fullcalendar.print.css') }}\" media=\"print\">
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
        <a href=\"index2.html\" class=\"logo\">
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
                <a href=\"mailbox.html\">
                    <i class=\"fa fa-envelope\"></i> <span>Chamados</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li class=\"active\">
                        <a href=\"mailbox.html\">Meus Chamados
                            <span class=\"pull-right-container\">
                    <span class=\"label label-primary pull-right\"></span>
                  </span>
                        </a>
                    </li>
                    <li><a href=\"compose.html\">Criar Chamados</a></li>
                    <li><a href=\"read-mail.html\">Visualizar Chamados</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-laptop\"></i> <span>Conta</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Mudar Senha</a></li>
                    <li><a href=\"#\">Mudar Informações</a></li>
                    <li><a href=\"#\">Minha Conta</a></li>
                </ul>
            </li>
            <li class=\"treeview\">
                <a href=\"#\"><i class=\"fa fa-dashboard\"></i> <span>Admin</span>
                    <span class=\"pull-right-container\">
                <i class=\"fa fa-angle-left pull-right\"></i>
              </span>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"#\">Criar Filas</a></li>
                    <li><a href=\"#\">Criar Etapas</a></li>
                    <li><a href=\"#\">Gerenciar Contas</li>
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
