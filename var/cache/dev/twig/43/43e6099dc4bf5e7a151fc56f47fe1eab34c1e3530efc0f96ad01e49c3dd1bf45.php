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
        $__internal_37f8b893b625f7b146c2f84d259ec94844d2c9c98a179e6d65c9ea682e5b0b1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f8b893b625f7b146c2f84d259ec94844d2c9c98a179e6d65c9ea682e5b0b1c->enter($__internal_37f8b893b625f7b146c2f84d259ec94844d2c9c98a179e6d65c9ea682e5b0b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $__internal_6bd41b065647449becca7ae5b473c0829ee69adbaa24690342b7978f7e305f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bd41b065647449becca7ae5b473c0829ee69adbaa24690342b7978f7e305f22->enter($__internal_6bd41b065647449becca7ae5b473c0829ee69adbaa24690342b7978f7e305f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/novoUsuario.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37f8b893b625f7b146c2f84d259ec94844d2c9c98a179e6d65c9ea682e5b0b1c->leave($__internal_37f8b893b625f7b146c2f84d259ec94844d2c9c98a179e6d65c9ea682e5b0b1c_prof);

        
        $__internal_6bd41b065647449becca7ae5b473c0829ee69adbaa24690342b7978f7e305f22->leave($__internal_6bd41b065647449becca7ae5b473c0829ee69adbaa24690342b7978f7e305f22_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4837cf217b4931da2d00baa4ff0eb68dd39c19193d6f1e1969892f1e973a2c87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4837cf217b4931da2d00baa4ff0eb68dd39c19193d6f1e1969892f1e973a2c87->enter($__internal_4837cf217b4931da2d00baa4ff0eb68dd39c19193d6f1e1969892f1e973a2c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cecf24d0509725a29d1aef399021d33be61859006117bdee076cd5a67d09984e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cecf24d0509725a29d1aef399021d33be61859006117bdee076cd5a67d09984e->enter($__internal_cecf24d0509725a29d1aef399021d33be61859006117bdee076cd5a67d09984e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Novo Usuario ";
        
        $__internal_cecf24d0509725a29d1aef399021d33be61859006117bdee076cd5a67d09984e->leave($__internal_cecf24d0509725a29d1aef399021d33be61859006117bdee076cd5a67d09984e_prof);

        
        $__internal_4837cf217b4931da2d00baa4ff0eb68dd39c19193d6f1e1969892f1e973a2c87->leave($__internal_4837cf217b4931da2d00baa4ff0eb68dd39c19193d6f1e1969892f1e973a2c87_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_54146863c7d56da8a740249673df3f3185f1ff30ad861595e834a2836eea5347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54146863c7d56da8a740249673df3f3185f1ff30ad861595e834a2836eea5347->enter($__internal_54146863c7d56da8a740249673df3f3185f1ff30ad861595e834a2836eea5347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8be7de2844aba69de0638a97758d0260a76d4b5382e77342ab3fe698929cbe44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be7de2844aba69de0638a97758d0260a76d4b5382e77342ab3fe698929cbe44->enter($__internal_8be7de2844aba69de0638a97758d0260a76d4b5382e77342ab3fe698929cbe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_8be7de2844aba69de0638a97758d0260a76d4b5382e77342ab3fe698929cbe44->leave($__internal_8be7de2844aba69de0638a97758d0260a76d4b5382e77342ab3fe698929cbe44_prof);

        
        $__internal_54146863c7d56da8a740249673df3f3185f1ff30ad861595e834a2836eea5347->leave($__internal_54146863c7d56da8a740249673df3f3185f1ff30ad861595e834a2836eea5347_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a82ae83882a9bdeb3cf2fb2230a0e312bf2de0f06d8c9b6a7c120bcba00ce5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82ae83882a9bdeb3cf2fb2230a0e312bf2de0f06d8c9b6a7c120bcba00ce5d1->enter($__internal_a82ae83882a9bdeb3cf2fb2230a0e312bf2de0f06d8c9b6a7c120bcba00ce5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d5c5d419f840207f0932689590331fa7ec173e0539ee6f73ed26ad9749fa93b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c5d419f840207f0932689590331fa7ec173e0539ee6f73ed26ad9749fa93b5->enter($__internal_d5c5d419f840207f0932689590331fa7ec173e0539ee6f73ed26ad9749fa93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function ()
        {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-MM-dd',
                html5 => false,
            });
        });
    </script>

";
        
        $__internal_d5c5d419f840207f0932689590331fa7ec173e0539ee6f73ed26ad9749fa93b5->leave($__internal_d5c5d419f840207f0932689590331fa7ec173e0539ee6f73ed26ad9749fa93b5_prof);

        
        $__internal_a82ae83882a9bdeb3cf2fb2230a0e312bf2de0f06d8c9b6a7c120bcba00ce5d1->leave($__internal_a82ae83882a9bdeb3cf2fb2230a0e312bf2de0f06d8c9b6a7c120bcba00ce5d1_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c067927abe0ef0b8f54a3e87142d00ebab801fb1d0c744bf6925e15ad9a079b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c067927abe0ef0b8f54a3e87142d00ebab801fb1d0c744bf6925e15ad9a079b->enter($__internal_9c067927abe0ef0b8f54a3e87142d00ebab801fb1d0c744bf6925e15ad9a079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ed7c357a10f1bcb25460c0ba0e19c3095cc99f57fb1bf505edb5d9ec2e0f06fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7c357a10f1bcb25460c0ba0e19c3095cc99f57fb1bf505edb5d9ec2e0f06fd->enter($__internal_ed7c357a10f1bcb25460c0ba0e19c3095cc99f57fb1bf505edb5d9ec2e0f06fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 28
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
        // line 45
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'form_start');
        echo "
                                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoUsuario"] ?? $this->getContext($context, "NovoUsuario")), 'widget');
        echo "
                                                <p>
                                                <p>
                                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar usuario</button>
                                            ";
        // line 50
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
        
        $__internal_ed7c357a10f1bcb25460c0ba0e19c3095cc99f57fb1bf505edb5d9ec2e0f06fd->leave($__internal_ed7c357a10f1bcb25460c0ba0e19c3095cc99f57fb1bf505edb5d9ec2e0f06fd_prof);

        
        $__internal_9c067927abe0ef0b8f54a3e87142d00ebab801fb1d0c744bf6925e15ad9a079b->leave($__internal_9c067927abe0ef0b8f54a3e87142d00ebab801fb1d0c744bf6925e15ad9a079b_prof);

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
        return array (  158 => 50,  151 => 46,  147 => 45,  128 => 28,  119 => 27,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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
                format: 'yyyy-MM-dd',
                html5 => false,
            });
        });
    </script>

{% endblock %}

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



", "projetoWeb/novoUsuario.html.twig", "/home/uniceub/Desktop/ProjetoWeb/app/Resources/views/projetoWeb/novoUsuario.html.twig");
    }
}
