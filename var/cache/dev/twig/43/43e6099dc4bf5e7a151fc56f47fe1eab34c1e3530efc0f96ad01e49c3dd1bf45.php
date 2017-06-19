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
        $__internal_7d666c7173243e189eb746598e50c9ad48e21c0e11ce9b27ab4edd7e36692871 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d666c7173243e189eb746598e50c9ad48e21c0e11ce9b27ab4edd7e36692871->enter($__internal_7d666c7173243e189eb746598e50c9ad48e21c0e11ce9b27ab4edd7e36692871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $__internal_2d116af4187bc94b1808bea2cd843e2746ec2c1ee37be4015a21c678b8157e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d116af4187bc94b1808bea2cd843e2746ec2c1ee37be4015a21c678b8157e2a->enter($__internal_2d116af4187bc94b1808bea2cd843e2746ec2c1ee37be4015a21c678b8157e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d666c7173243e189eb746598e50c9ad48e21c0e11ce9b27ab4edd7e36692871->leave($__internal_7d666c7173243e189eb746598e50c9ad48e21c0e11ce9b27ab4edd7e36692871_prof);

        
        $__internal_2d116af4187bc94b1808bea2cd843e2746ec2c1ee37be4015a21c678b8157e2a->leave($__internal_2d116af4187bc94b1808bea2cd843e2746ec2c1ee37be4015a21c678b8157e2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7538f0e98a6418b7b30e50e30ab895250e31964ae0412717eaff6848f968b56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7538f0e98a6418b7b30e50e30ab895250e31964ae0412717eaff6848f968b56->enter($__internal_b7538f0e98a6418b7b30e50e30ab895250e31964ae0412717eaff6848f968b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5864a01122bc946f10d903d5c2b3af2f2116a1f11bcf26ae01adb3bac6f40325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5864a01122bc946f10d903d5c2b3af2f2116a1f11bcf26ae01adb3bac6f40325->enter($__internal_5864a01122bc946f10d903d5c2b3af2f2116a1f11bcf26ae01adb3bac6f40325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_5864a01122bc946f10d903d5c2b3af2f2116a1f11bcf26ae01adb3bac6f40325->leave($__internal_5864a01122bc946f10d903d5c2b3af2f2116a1f11bcf26ae01adb3bac6f40325_prof);

        
        $__internal_b7538f0e98a6418b7b30e50e30ab895250e31964ae0412717eaff6848f968b56->leave($__internal_b7538f0e98a6418b7b30e50e30ab895250e31964ae0412717eaff6848f968b56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb6632f5738f5f25bfd97057c453b87662951125526e3d1baf38174f4cf720b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb6632f5738f5f25bfd97057c453b87662951125526e3d1baf38174f4cf720b->enter($__internal_7bb6632f5738f5f25bfd97057c453b87662951125526e3d1baf38174f4cf720b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4280f971f08c39ad1369ddb86aa051f8c8e1f52e16ad3076f8f20afb71fae035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4280f971f08c39ad1369ddb86aa051f8c8e1f52e16ad3076f8f20afb71fae035->enter($__internal_4280f971f08c39ad1369ddb86aa051f8c8e1f52e16ad3076f8f20afb71fae035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), "Nome", array()), 'row');
        echo "
                                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), "Email", array()), 'row');
        echo "
                                                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), "CPF", array()), 'row', array("label" => "CPF"));
        echo "
                                                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), "Senha", array()), 'row');
        echo "
                                                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), "Admin", array()), 'row');
        echo "

                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar usuario</button>
                                            ";
        // line 31
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
        
        $__internal_4280f971f08c39ad1369ddb86aa051f8c8e1f52e16ad3076f8f20afb71fae035->leave($__internal_4280f971f08c39ad1369ddb86aa051f8c8e1f52e16ad3076f8f20afb71fae035_prof);

        
        $__internal_7bb6632f5738f5f25bfd97057c453b87662951125526e3d1baf38174f4cf720b->leave($__internal_7bb6632f5738f5f25bfd97057c453b87662951125526e3d1baf38174f4cf720b_prof);

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
        return array (  113 => 31,  107 => 28,  103 => 27,  99 => 26,  95 => 25,  91 => 24,  87 => 23,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                                {{ form_row(NovoUsuario.Nome) }}
                                                {{ form_row(NovoUsuario.Email) }}
                                                {{ form_row(NovoUsuario.CPF, {'label': 'CPF'}) }}
                                                {{ form_row(NovoUsuario.Senha) }}
                                                {{ form_row(NovoUsuario.Admin) }}

                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar usuario</button>
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



", "projetoWeb/novoUsuario.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/novoUsuario.html.twig");
    }
}
