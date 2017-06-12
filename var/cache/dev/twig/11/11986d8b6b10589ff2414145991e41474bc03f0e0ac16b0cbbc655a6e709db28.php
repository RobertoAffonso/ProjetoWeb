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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_452dc3c9a997ad34ed1c346ff4632b06c7f69d826f6eafa26ef76f084cdca276 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452dc3c9a997ad34ed1c346ff4632b06c7f69d826f6eafa26ef76f084cdca276->enter($__internal_452dc3c9a997ad34ed1c346ff4632b06c7f69d826f6eafa26ef76f084cdca276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/editarUsuario.html.twig"));

        $__internal_f709369bc6b5443779175901071f18e80d5473c085d69296330251d9533ce98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f709369bc6b5443779175901071f18e80d5473c085d69296330251d9533ce98e->enter($__internal_f709369bc6b5443779175901071f18e80d5473c085d69296330251d9533ce98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/editarUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452dc3c9a997ad34ed1c346ff4632b06c7f69d826f6eafa26ef76f084cdca276->leave($__internal_452dc3c9a997ad34ed1c346ff4632b06c7f69d826f6eafa26ef76f084cdca276_prof);

        
        $__internal_f709369bc6b5443779175901071f18e80d5473c085d69296330251d9533ce98e->leave($__internal_f709369bc6b5443779175901071f18e80d5473c085d69296330251d9533ce98e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_26b037acce39acc3d96812d3455ead27324c4bd2c92f0a262c92f2e92979ac96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26b037acce39acc3d96812d3455ead27324c4bd2c92f0a262c92f2e92979ac96->enter($__internal_26b037acce39acc3d96812d3455ead27324c4bd2c92f0a262c92f2e92979ac96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fbf5555bf8a959afcaf366264c5840b115f65ad6f8a1d9c8ebf9bc85f3c32571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf5555bf8a959afcaf366264c5840b115f65ad6f8a1d9c8ebf9bc85f3c32571->enter($__internal_fbf5555bf8a959afcaf366264c5840b115f65ad6f8a1d9c8ebf9bc85f3c32571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_fbf5555bf8a959afcaf366264c5840b115f65ad6f8a1d9c8ebf9bc85f3c32571->leave($__internal_fbf5555bf8a959afcaf366264c5840b115f65ad6f8a1d9c8ebf9bc85f3c32571_prof);

        
        $__internal_26b037acce39acc3d96812d3455ead27324c4bd2c92f0a262c92f2e92979ac96->leave($__internal_26b037acce39acc3d96812d3455ead27324c4bd2c92f0a262c92f2e92979ac96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_318468f5d256b9dbe5d2196887914846f5e7acf34bd0bbe219eb6376f116c9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_318468f5d256b9dbe5d2196887914846f5e7acf34bd0bbe219eb6376f116c9da->enter($__internal_318468f5d256b9dbe5d2196887914846f5e7acf34bd0bbe219eb6376f116c9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39673128a4e98727156158f9ffb41fdbf8cf5d19e3c77bca2684308d757cb3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39673128a4e98727156158f9ffb41fdbf8cf5d19e3c77bca2684308d757cb3be->enter($__internal_39673128a4e98727156158f9ffb41fdbf8cf5d19e3c77bca2684308d757cb3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
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
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'form_start');
        echo "
                                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'widget');
        echo "
                                                <p>
                                                <p>
                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Editar usuario</button>
                                            ";
        // line 28
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
        
        $__internal_39673128a4e98727156158f9ffb41fdbf8cf5d19e3c77bca2684308d757cb3be->leave($__internal_39673128a4e98727156158f9ffb41fdbf8cf5d19e3c77bca2684308d757cb3be_prof);

        
        $__internal_318468f5d256b9dbe5d2196887914846f5e7acf34bd0bbe219eb6376f116c9da->leave($__internal_318468f5d256b9dbe5d2196887914846f5e7acf34bd0bbe219eb6376f116c9da_prof);

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
        return new Twig_Source("{% extends 'mainTheme.html.twig' %}

{% block title %}Criar Novo Usuario {% endblock %}

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
