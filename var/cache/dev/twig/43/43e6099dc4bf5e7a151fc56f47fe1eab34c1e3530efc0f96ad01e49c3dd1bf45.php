<?php

/* projetoWeb/novoUsuario.html.twig */
class __TwigTemplate_7a8887e59ecfdc2063f923e3cb4c68344cd3d77643bcb999bd5855b7466028db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/novoUsuario.html.twig", 1);
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
        $__internal_2e6f0608549a199a3af318ff3027273d20b45e13a5d33947ecfa728369bb90cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e6f0608549a199a3af318ff3027273d20b45e13a5d33947ecfa728369bb90cf->enter($__internal_2e6f0608549a199a3af318ff3027273d20b45e13a5d33947ecfa728369bb90cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $__internal_88e27d080f8d2f2e480df64d44e40184c1895d29e14ce3cdbe6a5bec0dcd104c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88e27d080f8d2f2e480df64d44e40184c1895d29e14ce3cdbe6a5bec0dcd104c->enter($__internal_88e27d080f8d2f2e480df64d44e40184c1895d29e14ce3cdbe6a5bec0dcd104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e6f0608549a199a3af318ff3027273d20b45e13a5d33947ecfa728369bb90cf->leave($__internal_2e6f0608549a199a3af318ff3027273d20b45e13a5d33947ecfa728369bb90cf_prof);

        
        $__internal_88e27d080f8d2f2e480df64d44e40184c1895d29e14ce3cdbe6a5bec0dcd104c->leave($__internal_88e27d080f8d2f2e480df64d44e40184c1895d29e14ce3cdbe6a5bec0dcd104c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_042e45eeab7fefce3f79b01509268587bb923a1caadf495444221998c3a10398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_042e45eeab7fefce3f79b01509268587bb923a1caadf495444221998c3a10398->enter($__internal_042e45eeab7fefce3f79b01509268587bb923a1caadf495444221998c3a10398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d89c0021b2438bea192e299f50db1414c62047a7aaac1d5ba2506277be634310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89c0021b2438bea192e299f50db1414c62047a7aaac1d5ba2506277be634310->enter($__internal_d89c0021b2438bea192e299f50db1414c62047a7aaac1d5ba2506277be634310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_d89c0021b2438bea192e299f50db1414c62047a7aaac1d5ba2506277be634310->leave($__internal_d89c0021b2438bea192e299f50db1414c62047a7aaac1d5ba2506277be634310_prof);

        
        $__internal_042e45eeab7fefce3f79b01509268587bb923a1caadf495444221998c3a10398->leave($__internal_042e45eeab7fefce3f79b01509268587bb923a1caadf495444221998c3a10398_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_202676b88012a436d80216f70112a8b70a13cc639bd1d28031b24c9bc061f39b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202676b88012a436d80216f70112a8b70a13cc639bd1d28031b24c9bc061f39b->enter($__internal_202676b88012a436d80216f70112a8b70a13cc639bd1d28031b24c9bc061f39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ffecd458d17aa2d7243a34c47fca96dfcd5905080b665f3bdb825d04ee91c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ffecd458d17aa2d7243a34c47fca96dfcd5905080b665f3bdb825d04ee91c82->enter($__internal_1ffecd458d17aa2d7243a34c47fca96dfcd5905080b665f3bdb825d04ee91c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->

        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>Criar Novo Usuário</h1>
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
                                                <button type=\"submit\" class=\"btn btn-default\">Criar usuario</button>
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
        
        $__internal_1ffecd458d17aa2d7243a34c47fca96dfcd5905080b665f3bdb825d04ee91c82->leave($__internal_1ffecd458d17aa2d7243a34c47fca96dfcd5905080b665f3bdb825d04ee91c82_prof);

        
        $__internal_202676b88012a436d80216f70112a8b70a13cc639bd1d28031b24c9bc061f39b->leave($__internal_202676b88012a436d80216f70112a8b70a13cc639bd1d28031b24c9bc061f39b_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/novoUsuario.html.twig";
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
            <h1>Criar Novo Usuário</h1>
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
                                                <button type=\"submit\" class=\"btn btn-default\">Criar usuario</button>
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



", "projetoWeb/novoUsuario.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/novoUsuario.html.twig");
    }
}
