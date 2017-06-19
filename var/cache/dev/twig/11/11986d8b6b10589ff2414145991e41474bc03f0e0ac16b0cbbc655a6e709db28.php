<?php

/* projetoWeb/editarUsuario.html.twig */
class __TwigTemplate_e325a6f1357072145ee0d09d731763a5fddf5ba64361095a32dfadf75d0df4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/editarUsuario.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc92d01da9c665e4f630d84400784d8b17db384f0d6d91461e5b50539c8d5f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc92d01da9c665e4f630d84400784d8b17db384f0d6d91461e5b50539c8d5f37->enter($__internal_cc92d01da9c665e4f630d84400784d8b17db384f0d6d91461e5b50539c8d5f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/editarUsuario.html.twig"));

        $__internal_e17616d40e3461c3f2b62db96607ac2ad7cef1f2ae05e4cd9630f92e6e9ed00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17616d40e3461c3f2b62db96607ac2ad7cef1f2ae05e4cd9630f92e6e9ed00e->enter($__internal_e17616d40e3461c3f2b62db96607ac2ad7cef1f2ae05e4cd9630f92e6e9ed00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/editarUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc92d01da9c665e4f630d84400784d8b17db384f0d6d91461e5b50539c8d5f37->leave($__internal_cc92d01da9c665e4f630d84400784d8b17db384f0d6d91461e5b50539c8d5f37_prof);

        
        $__internal_e17616d40e3461c3f2b62db96607ac2ad7cef1f2ae05e4cd9630f92e6e9ed00e->leave($__internal_e17616d40e3461c3f2b62db96607ac2ad7cef1f2ae05e4cd9630f92e6e9ed00e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bf22280f77d67dd5929201c52a8c38edeb907cfdfdbcb6a9439961b84b2eaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bf22280f77d67dd5929201c52a8c38edeb907cfdfdbcb6a9439961b84b2eaee->enter($__internal_7bf22280f77d67dd5929201c52a8c38edeb907cfdfdbcb6a9439961b84b2eaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6616a0f87c0f27a8d810a3c0cf3c455cefadc6f4588a789b19168eb2aefe3e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6616a0f87c0f27a8d810a3c0cf3c455cefadc6f4588a789b19168eb2aefe3e15->enter($__internal_6616a0f87c0f27a8d810a3c0cf3c455cefadc6f4588a789b19168eb2aefe3e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_6616a0f87c0f27a8d810a3c0cf3c455cefadc6f4588a789b19168eb2aefe3e15->leave($__internal_6616a0f87c0f27a8d810a3c0cf3c455cefadc6f4588a789b19168eb2aefe3e15_prof);

        
        $__internal_7bf22280f77d67dd5929201c52a8c38edeb907cfdfdbcb6a9439961b84b2eaee->leave($__internal_7bf22280f77d67dd5929201c52a8c38edeb907cfdfdbcb6a9439961b84b2eaee_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f132c0fecd8d985d8173b3e8e2a1e435c5aa8767e9febeaf6899c062d113153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f132c0fecd8d985d8173b3e8e2a1e435c5aa8767e9febeaf6899c062d113153->enter($__internal_8f132c0fecd8d985d8173b3e8e2a1e435c5aa8767e9febeaf6899c062d113153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_54d415a960ad078a0aa52225b220eb67f88a9c57c6ed1954228ea84adf3a24c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d415a960ad078a0aa52225b220eb67f88a9c57c6ed1954228ea84adf3a24c9->enter($__internal_54d415a960ad078a0aa52225b220eb67f88a9c57c6ed1954228ea84adf3a24c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_54d415a960ad078a0aa52225b220eb67f88a9c57c6ed1954228ea84adf3a24c9->leave($__internal_54d415a960ad078a0aa52225b220eb67f88a9c57c6ed1954228ea84adf3a24c9_prof);

        
        $__internal_8f132c0fecd8d985d8173b3e8e2a1e435c5aa8767e9febeaf6899c062d113153->leave($__internal_8f132c0fecd8d985d8173b3e8e2a1e435c5aa8767e9febeaf6899c062d113153_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e4cd2e3799b01f6ed146ffaaf6de0befb9aed3525c44df4f78efe7ba9f0fa957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4cd2e3799b01f6ed146ffaaf6de0befb9aed3525c44df4f78efe7ba9f0fa957->enter($__internal_e4cd2e3799b01f6ed146ffaaf6de0befb9aed3525c44df4f78efe7ba9f0fa957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a509558795c584eb201ab5df8f3d461b3bc02245e6794f41254de714b75fd902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a509558795c584eb201ab5df8f3d461b3bc02245e6794f41254de714b75fd902->enter($__internal_a509558795c584eb201ab5df8f3d461b3bc02245e6794f41254de714b75fd902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function ()
        {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-MM-dd'
            });
        });
    </script>

";
        
        $__internal_a509558795c584eb201ab5df8f3d461b3bc02245e6794f41254de714b75fd902->leave($__internal_a509558795c584eb201ab5df8f3d461b3bc02245e6794f41254de714b75fd902_prof);

        
        $__internal_e4cd2e3799b01f6ed146ffaaf6de0befb9aed3525c44df4f78efe7ba9f0fa957->leave($__internal_e4cd2e3799b01f6ed146ffaaf6de0befb9aed3525c44df4f78efe7ba9f0fa957_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_2dde977b3aa1ebafbcf639fcf274bfb1fdd4866fe768578ec226d967693dc6c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dde977b3aa1ebafbcf639fcf274bfb1fdd4866fe768578ec226d967693dc6c8->enter($__internal_2dde977b3aa1ebafbcf639fcf274bfb1fdd4866fe768578ec226d967693dc6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8e2b2f50192eb8d2877e45e452df09654cce617bc316c68c69b20492dc8645e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e2b2f50192eb8d2877e45e452df09654cce617bc316c68c69b20492dc8645e->enter($__internal_b8e2b2f50192eb8d2877e45e452df09654cce617bc316c68c69b20492dc8645e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>Editar Usuário</h1>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                            ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'form_start');
        echo "
                                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'widget');
        echo "
                                                <p>
                                                <p>
                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Editar usuario</button>
                                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'form_end');
        echo "
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- /.panel -->
            </div>
        </section>
";
        
        $__internal_b8e2b2f50192eb8d2877e45e452df09654cce617bc316c68c69b20492dc8645e->leave($__internal_b8e2b2f50192eb8d2877e45e452df09654cce617bc316c68c69b20492dc8645e_prof);

        
        $__internal_2dde977b3aa1ebafbcf639fcf274bfb1fdd4866fe768578ec226d967693dc6c8->leave($__internal_2dde977b3aa1ebafbcf639fcf274bfb1fdd4866fe768578ec226d967693dc6c8_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/editarUsuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 49,  150 => 45,  146 => 44,  127 => 27,  118 => 26,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'mainTheme.html.twig' %}

{% block title %}Criar Novo Usuario {% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function ()
        {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-MM-dd'
            });
        });
    </script>

{% endblock %}

{% block body %}
    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>Editar Usuário</h1>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                                <div class=\"row\">
                                    <div class=\"col-lg-6\">
                                            {{ form_start(NovoUsuario) }}
                                                {{ form_widget(NovoUsuario) }}
                                                <p>
                                                <p>
                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Editar usuario</button>
                                            {{ form_end(NovoUsuario) }}
                                    </div>
                                    <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                <!-- /.panel -->
            </div>
        </section>
{% endblock %}



", "projetoWeb/editarUsuario.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/editarUsuario.html.twig");
    }
}
