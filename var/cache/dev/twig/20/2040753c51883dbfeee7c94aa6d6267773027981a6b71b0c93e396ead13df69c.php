<?php

/* projetoWeb/criarChamados.html.twig */
class __TwigTemplate_f8a2a023473315cdcf26a48ecbdf2295f20a60985f306a1a3605e8ed1762e4a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/criarChamados.html.twig", 1);
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
        $__internal_bfcf78fa87a886b52b6824e69310f70df6d04f46d2bc4a165dac04beda2c31d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfcf78fa87a886b52b6824e69310f70df6d04f46d2bc4a165dac04beda2c31d2->enter($__internal_bfcf78fa87a886b52b6824e69310f70df6d04f46d2bc4a165dac04beda2c31d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $__internal_c4493d8790f1fe1aae31dfecce37ca0559321d41dad12d4558e43e1fa8054ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4493d8790f1fe1aae31dfecce37ca0559321d41dad12d4558e43e1fa8054ee7->enter($__internal_c4493d8790f1fe1aae31dfecce37ca0559321d41dad12d4558e43e1fa8054ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfcf78fa87a886b52b6824e69310f70df6d04f46d2bc4a165dac04beda2c31d2->leave($__internal_bfcf78fa87a886b52b6824e69310f70df6d04f46d2bc4a165dac04beda2c31d2_prof);

        
        $__internal_c4493d8790f1fe1aae31dfecce37ca0559321d41dad12d4558e43e1fa8054ee7->leave($__internal_c4493d8790f1fe1aae31dfecce37ca0559321d41dad12d4558e43e1fa8054ee7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9df95ed2975ea52ff6b9594710d426432edb0c36676e893645920acedaa1a0d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df95ed2975ea52ff6b9594710d426432edb0c36676e893645920acedaa1a0d6->enter($__internal_9df95ed2975ea52ff6b9594710d426432edb0c36676e893645920acedaa1a0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a08ee00ace972fe1ffc4cb9290c2fb3158d075954058084aa24a6833774e0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a08ee00ace972fe1ffc4cb9290c2fb3158d075954058084aa24a6833774e0ee->enter($__internal_9a08ee00ace972fe1ffc4cb9290c2fb3158d075954058084aa24a6833774e0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Chamado";
        
        $__internal_9a08ee00ace972fe1ffc4cb9290c2fb3158d075954058084aa24a6833774e0ee->leave($__internal_9a08ee00ace972fe1ffc4cb9290c2fb3158d075954058084aa24a6833774e0ee_prof);

        
        $__internal_9df95ed2975ea52ff6b9594710d426432edb0c36676e893645920acedaa1a0d6->leave($__internal_9df95ed2975ea52ff6b9594710d426432edb0c36676e893645920acedaa1a0d6_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0dff2bad6636632a556ed8d15fc19db0b23d5c031c6ed9dab0ade8091f2693f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dff2bad6636632a556ed8d15fc19db0b23d5c031c6ed9dab0ade8091f2693f2->enter($__internal_0dff2bad6636632a556ed8d15fc19db0b23d5c031c6ed9dab0ade8091f2693f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8ceacfdccde4096f7c51f07f7b47194bae72307e87f0d73c0f322a9184efdb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ceacfdccde4096f7c51f07f7b47194bae72307e87f0d73c0f322a9184efdb6f->enter($__internal_8ceacfdccde4096f7c51f07f7b47194bae72307e87f0d73c0f322a9184efdb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_8ceacfdccde4096f7c51f07f7b47194bae72307e87f0d73c0f322a9184efdb6f->leave($__internal_8ceacfdccde4096f7c51f07f7b47194bae72307e87f0d73c0f322a9184efdb6f_prof);

        
        $__internal_0dff2bad6636632a556ed8d15fc19db0b23d5c031c6ed9dab0ade8091f2693f2->leave($__internal_0dff2bad6636632a556ed8d15fc19db0b23d5c031c6ed9dab0ade8091f2693f2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0a5e62dc66c8ccfa13d7c9b49a3e0c574584f1ab3057b913e501f9b7c552c711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5e62dc66c8ccfa13d7c9b49a3e0c574584f1ab3057b913e501f9b7c552c711->enter($__internal_0a5e62dc66c8ccfa13d7c9b49a3e0c574584f1ab3057b913e501f9b7c552c711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4e4e28701d7ecb263c39e50cea34bff24fc3c701d6043d9e8f7ca9b763ca68be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4e28701d7ecb263c39e50cea34bff24fc3c701d6043d9e8f7ca9b763ca68be->enter($__internal_4e4e28701d7ecb263c39e50cea34bff24fc3c701d6043d9e8f7ca9b763ca68be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function ()
        {
           \$('.js-datepicker').datepicker();
        });
    </script>

";
        
        $__internal_4e4e28701d7ecb263c39e50cea34bff24fc3c701d6043d9e8f7ca9b763ca68be->leave($__internal_4e4e28701d7ecb263c39e50cea34bff24fc3c701d6043d9e8f7ca9b763ca68be_prof);

        
        $__internal_0a5e62dc66c8ccfa13d7c9b49a3e0c574584f1ab3057b913e501f9b7c552c711->leave($__internal_0a5e62dc66c8ccfa13d7c9b49a3e0c574584f1ab3057b913e501f9b7c552c711_prof);

    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        $__internal_a42c427109c07c3f19dbf8d2ead086c4624214161b1957db7c44e03e0e16958b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42c427109c07c3f19dbf8d2ead086c4624214161b1957db7c44e03e0e16958b->enter($__internal_a42c427109c07c3f19dbf8d2ead086c4624214161b1957db7c44e03e0e16958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b8b63457439947c606d06d49e1f20298e9ab54fd5adc02d80668c90fe50a831 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b8b63457439947c606d06d49e1f20298e9ab54fd5adc02d80668c90fe50a831->enter($__internal_7b8b63457439947c606d06d49e1f20298e9ab54fd5adc02d80668c90fe50a831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Criar Novo Chamado</h1>
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
        // line 43
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoChamado"] ?? $this->getContext($context, "NovoChamado")), 'form_start');
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoChamado"] ?? $this->getContext($context, "NovoChamado")), 'widget');
        echo "
                                <p>
                                <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar Chamado</button>
                                <a href=";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo " class=\"btn btn-sm btn-info btn-flat pull-left\">Voltar</a>
                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoChamado"] ?? $this->getContext($context, "NovoChamado")), 'form_end');
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
        
        $__internal_7b8b63457439947c606d06d49e1f20298e9ab54fd5adc02d80668c90fe50a831->leave($__internal_7b8b63457439947c606d06d49e1f20298e9ab54fd5adc02d80668c90fe50a831_prof);

        
        $__internal_a42c427109c07c3f19dbf8d2ead086c4624214161b1957db7c44e03e0e16958b->leave($__internal_a42c427109c07c3f19dbf8d2ead086c4624214161b1957db7c44e03e0e16958b_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/criarChamados.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 49,  155 => 48,  148 => 44,  144 => 43,  125 => 26,  116 => 25,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Criar Chamado{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function ()
        {
           \$('.js-datepicker').datepicker();
        });
    </script>

{% endblock %}


{% block body %}
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Criar Novo Chamado</h1>
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
                            {{ form_start(NovoChamado) }}
                                {{ form_widget(NovoChamado) }}
                                <p>
                                <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar Chamado</button>
                                <a href={{ path('pagina_principal') }} class=\"btn btn-sm btn-info btn-flat pull-left\">Voltar</a>
                            {{ form_end(NovoChamado) }}
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
{% endblock %}", "projetoWeb/criarChamados.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/criarChamados.html.twig");
    }
}
