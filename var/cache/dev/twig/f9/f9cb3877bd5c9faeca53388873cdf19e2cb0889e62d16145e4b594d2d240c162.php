<?php

/* projetoWeb/meuChamado.html.twig */
class __TwigTemplate_f14793c55cd8267ea45b9d6fc8748e5b4c61e8a1296ac858f1bb2bc30c27867c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/meuChamado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a829e45a183e3e989e8bc6768098322928c541c633233824f282c61d49589928 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a829e45a183e3e989e8bc6768098322928c541c633233824f282c61d49589928->enter($__internal_a829e45a183e3e989e8bc6768098322928c541c633233824f282c61d49589928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/meuChamado.html.twig"));

        $__internal_740036af64b98bcbd99d6d3fb3fb2e3d3bdf7cdd3fdece826c5629e81362b161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740036af64b98bcbd99d6d3fb3fb2e3d3bdf7cdd3fdece826c5629e81362b161->enter($__internal_740036af64b98bcbd99d6d3fb3fb2e3d3bdf7cdd3fdece826c5629e81362b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/meuChamado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a829e45a183e3e989e8bc6768098322928c541c633233824f282c61d49589928->leave($__internal_a829e45a183e3e989e8bc6768098322928c541c633233824f282c61d49589928_prof);

        
        $__internal_740036af64b98bcbd99d6d3fb3fb2e3d3bdf7cdd3fdece826c5629e81362b161->leave($__internal_740036af64b98bcbd99d6d3fb3fb2e3d3bdf7cdd3fdece826c5629e81362b161_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee0b9b2914b1456f8cdedb427abfef3529622abe6c44eb2ade7ca5a9f54dd9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0b9b2914b1456f8cdedb427abfef3529622abe6c44eb2ade7ca5a9f54dd9e6->enter($__internal_ee0b9b2914b1456f8cdedb427abfef3529622abe6c44eb2ade7ca5a9f54dd9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_207e405ef242d832aa38e05db76e7cb18d084fcd494feb76e392330637e8d3c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207e405ef242d832aa38e05db76e7cb18d084fcd494feb76e392330637e8d3c0->enter($__internal_207e405ef242d832aa38e05db76e7cb18d084fcd494feb76e392330637e8d3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Atender Chamado";
        
        $__internal_207e405ef242d832aa38e05db76e7cb18d084fcd494feb76e392330637e8d3c0->leave($__internal_207e405ef242d832aa38e05db76e7cb18d084fcd494feb76e392330637e8d3c0_prof);

        
        $__internal_ee0b9b2914b1456f8cdedb427abfef3529622abe6c44eb2ade7ca5a9f54dd9e6->leave($__internal_ee0b9b2914b1456f8cdedb427abfef3529622abe6c44eb2ade7ca5a9f54dd9e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5cae4690af6cef7c94d76a8f2677fff69658acee12626adcda0e00401db64d93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cae4690af6cef7c94d76a8f2677fff69658acee12626adcda0e00401db64d93->enter($__internal_5cae4690af6cef7c94d76a8f2677fff69658acee12626adcda0e00401db64d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54f852eb67291d43e40c38450df1f1eeeaeeb337c323653ef9f6569ef741c197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f852eb67291d43e40c38450df1f1eeeaeeb337c323653ef9f6569ef741c197->enter($__internal_54f852eb67291d43e40c38450df1f1eeeaeeb337c323653ef9f6569ef741c197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Atender Chamado</h1>
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
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), 'form_start');
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "Nome", array()), 'row');
        echo "
                            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "Descricao", array()), 'row');
        echo "
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "Setor", array()), 'row');
        echo "
                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "Prioridade", array()), 'row');
        echo "
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "Fila", array()), 'row');
        echo "
                            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), "dataLimite", array()), 'row');
        echo "
                            <p>
                            <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Atender Chamado</button>
                                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["MeuChamado"] ?? $this->getContext($context, "MeuChamado")), 'form_end');
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
        
        $__internal_54f852eb67291d43e40c38450df1f1eeeaeeb337c323653ef9f6569ef741c197->leave($__internal_54f852eb67291d43e40c38450df1f1eeeaeeb337c323653ef9f6569ef741c197_prof);

        
        $__internal_5cae4690af6cef7c94d76a8f2677fff69658acee12626adcda0e00401db64d93->leave($__internal_5cae4690af6cef7c94d76a8f2677fff69658acee12626adcda0e00401db64d93_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/meuChamado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  111 => 29,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Atender Chamado{% endblock %}

{% block body %}
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Atender Chamado</h1>
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
                            {{ form_start(MeuChamado) }}
                            {{ form_row(MeuChamado.Nome) }}
                            {{ form_row(MeuChamado.Descricao) }}
                            {{ form_row(MeuChamado.Setor) }}
                            {{ form_row(MeuChamado.Prioridade) }}
                            {{ form_row(MeuChamado.Fila) }}
                            {{ form_row(MeuChamado.dataLimite) }}
                            <p>
                            <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Atender Chamado</button>
                                {{ form_end(MeuChamado) }}
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
{% endblock %}", "projetoWeb/meuChamado.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/meuChamado.html.twig");
    }
}
