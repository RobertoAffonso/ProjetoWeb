<?php

/* projetoWeb/criarFilas.html.twig */
class __TwigTemplate_b14470e40d426116741279487e361aeed48001a5384cae2011927f962dbe458c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/criarFilas.html.twig", 1);
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
        $__internal_c0fa80eaa79abbf680500d62bb8341168876b198ffec708936cacaf8a46f7f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0fa80eaa79abbf680500d62bb8341168876b198ffec708936cacaf8a46f7f0b->enter($__internal_c0fa80eaa79abbf680500d62bb8341168876b198ffec708936cacaf8a46f7f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarFilas.html.twig"));

        $__internal_d358c9325cd882a44277bdcefd969688cfb2f450c2b9561d2455299d9e2221c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d358c9325cd882a44277bdcefd969688cfb2f450c2b9561d2455299d9e2221c6->enter($__internal_d358c9325cd882a44277bdcefd969688cfb2f450c2b9561d2455299d9e2221c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarFilas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0fa80eaa79abbf680500d62bb8341168876b198ffec708936cacaf8a46f7f0b->leave($__internal_c0fa80eaa79abbf680500d62bb8341168876b198ffec708936cacaf8a46f7f0b_prof);

        
        $__internal_d358c9325cd882a44277bdcefd969688cfb2f450c2b9561d2455299d9e2221c6->leave($__internal_d358c9325cd882a44277bdcefd969688cfb2f450c2b9561d2455299d9e2221c6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a6702fc7b12921c32f39cfd2921dcdf874b2381269e504d57625e3232bb05f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a6702fc7b12921c32f39cfd2921dcdf874b2381269e504d57625e3232bb05f5->enter($__internal_4a6702fc7b12921c32f39cfd2921dcdf874b2381269e504d57625e3232bb05f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83279da4afc325b990e5ceb40d60dcd1d759c44ab65798388b380c448014d6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83279da4afc325b990e5ceb40d60dcd1d759c44ab65798388b380c448014d6d9->enter($__internal_83279da4afc325b990e5ceb40d60dcd1d759c44ab65798388b380c448014d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Filas";
        
        $__internal_83279da4afc325b990e5ceb40d60dcd1d759c44ab65798388b380c448014d6d9->leave($__internal_83279da4afc325b990e5ceb40d60dcd1d759c44ab65798388b380c448014d6d9_prof);

        
        $__internal_4a6702fc7b12921c32f39cfd2921dcdf874b2381269e504d57625e3232bb05f5->leave($__internal_4a6702fc7b12921c32f39cfd2921dcdf874b2381269e504d57625e3232bb05f5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_582b499f2032b181398071c4006d98069cb51b4b8004f4127374ef3f84c77045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582b499f2032b181398071c4006d98069cb51b4b8004f4127374ef3f84c77045->enter($__internal_582b499f2032b181398071c4006d98069cb51b4b8004f4127374ef3f84c77045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_681471ef092ab65aae168bf89821b7b7b8a136a25af175883f966aa1cb776aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681471ef092ab65aae168bf89821b7b7b8a136a25af175883f966aa1cb776aef->enter($__internal_681471ef092ab65aae168bf89821b7b7b8a136a25af175883f966aa1cb776aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Criar Nova Fila</h1>
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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["criar_filas"] ?? $this->getContext($context, "criar_filas")), 'form_start');
        echo "
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["criar_filas"] ?? $this->getContext($context, "criar_filas")), 'widget');
        echo "
                            <p>
                            <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar Fila</button>
                                ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["criar_filas"] ?? $this->getContext($context, "criar_filas")), 'form_end');
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
        
        $__internal_681471ef092ab65aae168bf89821b7b7b8a136a25af175883f966aa1cb776aef->leave($__internal_681471ef092ab65aae168bf89821b7b7b8a136a25af175883f966aa1cb776aef_prof);

        
        $__internal_582b499f2032b181398071c4006d98069cb51b4b8004f4127374ef3f84c77045->leave($__internal_582b499f2032b181398071c4006d98069cb51b4b8004f4127374ef3f84c77045_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/criarFilas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  91 => 24,  87 => 23,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'mainTheme.html.twig' %}

{% block title %}Criar Filas{% endblock %}

{% block body %}
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>Criar Nova Fila</h1>
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
                            {{ form_start(criar_filas) }}
                            {{ form_widget(criar_filas) }}
                            <p>
                            <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar Fila</button>
                                {{ form_end(criar_filas) }}
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
{% endblock %}", "projetoWeb/criarFilas.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/criarFilas.html.twig");
    }
}
