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
        $__internal_a54dd5a2916e4859f7340386d564deb37c1fc3fcf35103e2758aa2bc081d4d5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54dd5a2916e4859f7340386d564deb37c1fc3fcf35103e2758aa2bc081d4d5b->enter($__internal_a54dd5a2916e4859f7340386d564deb37c1fc3fcf35103e2758aa2bc081d4d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $__internal_83e9e59f7db5e1d56a33ede890ef6f201c230adf65204296d829805dc93f23cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e9e59f7db5e1d56a33ede890ef6f201c230adf65204296d829805dc93f23cd->enter($__internal_83e9e59f7db5e1d56a33ede890ef6f201c230adf65204296d829805dc93f23cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54dd5a2916e4859f7340386d564deb37c1fc3fcf35103e2758aa2bc081d4d5b->leave($__internal_a54dd5a2916e4859f7340386d564deb37c1fc3fcf35103e2758aa2bc081d4d5b_prof);

        
        $__internal_83e9e59f7db5e1d56a33ede890ef6f201c230adf65204296d829805dc93f23cd->leave($__internal_83e9e59f7db5e1d56a33ede890ef6f201c230adf65204296d829805dc93f23cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_585828d32b3c601bb3cf8a9274fbc545f9d8d74a77795dc55db5f9bcb15e8afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585828d32b3c601bb3cf8a9274fbc545f9d8d74a77795dc55db5f9bcb15e8afe->enter($__internal_585828d32b3c601bb3cf8a9274fbc545f9d8d74a77795dc55db5f9bcb15e8afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dda94623eb293c34f2b75011ff900c52e3030e4dd09945f128f4c77a72fd52ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda94623eb293c34f2b75011ff900c52e3030e4dd09945f128f4c77a72fd52ba->enter($__internal_dda94623eb293c34f2b75011ff900c52e3030e4dd09945f128f4c77a72fd52ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_dda94623eb293c34f2b75011ff900c52e3030e4dd09945f128f4c77a72fd52ba->leave($__internal_dda94623eb293c34f2b75011ff900c52e3030e4dd09945f128f4c77a72fd52ba_prof);

        
        $__internal_585828d32b3c601bb3cf8a9274fbc545f9d8d74a77795dc55db5f9bcb15e8afe->leave($__internal_585828d32b3c601bb3cf8a9274fbc545f9d8d74a77795dc55db5f9bcb15e8afe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d7945ed00776c91da6c661101c16ac0c2b8f9f7f86c2b7d2e5f45fd268b9608 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d7945ed00776c91da6c661101c16ac0c2b8f9f7f86c2b7d2e5f45fd268b9608->enter($__internal_7d7945ed00776c91da6c661101c16ac0c2b8f9f7f86c2b7d2e5f45fd268b9608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_acf3ff2d6da3f439f9da4bb156f71ce8295f49119e9fe1cd3bcffcc8f7eac1c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acf3ff2d6da3f439f9da4bb156f71ce8295f49119e9fe1cd3bcffcc8f7eac1c5->enter($__internal_acf3ff2d6da3f439f9da4bb156f71ce8295f49119e9fe1cd3bcffcc8f7eac1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Criar Novo Usuário
            </h1>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-body\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'form_start');
        echo "
                                            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'widget');
        echo "
                                            <p>
                                            <p>
                                            <button type=\"submit\" class=\"btn btn-default\">Criar usuario</button>
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
                <!-- /.col-lg-12 -->
            </div>
            </form>
        </section>
    </div>
";
        
        $__internal_acf3ff2d6da3f439f9da4bb156f71ce8295f49119e9fe1cd3bcffcc8f7eac1c5->leave($__internal_acf3ff2d6da3f439f9da4bb156f71ce8295f49119e9fe1cd3bcffcc8f7eac1c5_prof);

        
        $__internal_7d7945ed00776c91da6c661101c16ac0c2b8f9f7f86c2b7d2e5f45fd268b9608->leave($__internal_7d7945ed00776c91da6c661101c16ac0c2b8f9f7f86c2b7d2e5f45fd268b9608_prof);

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
        return array (  101 => 31,  94 => 27,  90 => 26,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Criar Novo Usuário
            </h1>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">
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
                <!-- /.col-lg-12 -->
            </div>
            </form>
        </section>
    </div>
{% endblock %}", "projetoWeb/novoUsuario.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/novoUsuario.html.twig");
    }
}
