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
        $__internal_b634a006b9d7899a0aa200d9d3d92813c47f12f591674a47770c1fff96d55a39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b634a006b9d7899a0aa200d9d3d92813c47f12f591674a47770c1fff96d55a39->enter($__internal_b634a006b9d7899a0aa200d9d3d92813c47f12f591674a47770c1fff96d55a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $__internal_e035a2120cc56198272ef1805e328777d6b53e0abe3fa950d027b8e1810b782d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e035a2120cc56198272ef1805e328777d6b53e0abe3fa950d027b8e1810b782d->enter($__internal_e035a2120cc56198272ef1805e328777d6b53e0abe3fa950d027b8e1810b782d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b634a006b9d7899a0aa200d9d3d92813c47f12f591674a47770c1fff96d55a39->leave($__internal_b634a006b9d7899a0aa200d9d3d92813c47f12f591674a47770c1fff96d55a39_prof);

        
        $__internal_e035a2120cc56198272ef1805e328777d6b53e0abe3fa950d027b8e1810b782d->leave($__internal_e035a2120cc56198272ef1805e328777d6b53e0abe3fa950d027b8e1810b782d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4188c3a81e602c819800c664b63d2386a29895a3dc46eb51fe5599a35954fbb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4188c3a81e602c819800c664b63d2386a29895a3dc46eb51fe5599a35954fbb0->enter($__internal_4188c3a81e602c819800c664b63d2386a29895a3dc46eb51fe5599a35954fbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24cb4c7fcffa73c57c47f400793006496c36cbf922be1456ebac4eff8b290a79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cb4c7fcffa73c57c47f400793006496c36cbf922be1456ebac4eff8b290a79->enter($__internal_24cb4c7fcffa73c57c47f400793006496c36cbf922be1456ebac4eff8b290a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Chamado";
        
        $__internal_24cb4c7fcffa73c57c47f400793006496c36cbf922be1456ebac4eff8b290a79->leave($__internal_24cb4c7fcffa73c57c47f400793006496c36cbf922be1456ebac4eff8b290a79_prof);

        
        $__internal_4188c3a81e602c819800c664b63d2386a29895a3dc46eb51fe5599a35954fbb0->leave($__internal_4188c3a81e602c819800c664b63d2386a29895a3dc46eb51fe5599a35954fbb0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6424848dca76bb9b6105cc79b75920dbbd01f13ad27fd3f6d7db17ba7e6ac54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6424848dca76bb9b6105cc79b75920dbbd01f13ad27fd3f6d7db17ba7e6ac54->enter($__internal_d6424848dca76bb9b6105cc79b75920dbbd01f13ad27fd3f6d7db17ba7e6ac54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5c73d96b2ca10579763730189e90c347b782e63351961db8b52da281f3e51f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c73d96b2ca10579763730189e90c347b782e63351961db8b52da281f3e51f30->enter($__internal_5c73d96b2ca10579763730189e90c347b782e63351961db8b52da281f3e51f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.css\" />
";
        
        $__internal_5c73d96b2ca10579763730189e90c347b782e63351961db8b52da281f3e51f30->leave($__internal_5c73d96b2ca10579763730189e90c347b782e63351961db8b52da281f3e51f30_prof);

        
        $__internal_d6424848dca76bb9b6105cc79b75920dbbd01f13ad27fd3f6d7db17ba7e6ac54->leave($__internal_d6424848dca76bb9b6105cc79b75920dbbd01f13ad27fd3f6d7db17ba7e6ac54_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93c9170454876a502ef841704265187b7aed238716a9536414b20827a9b62452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c9170454876a502ef841704265187b7aed238716a9536414b20827a9b62452->enter($__internal_93c9170454876a502ef841704265187b7aed238716a9536414b20827a9b62452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_15195e4b7c60d3036b638c724dbe0a8b791156cf32032af3e5127d6290bac752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15195e4b7c60d3036b638c724dbe0a8b791156cf32032af3e5127d6290bac752->enter($__internal_15195e4b7c60d3036b638c724dbe0a8b791156cf32032af3e5127d6290bac752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
        });
    </script>

";
        
        $__internal_15195e4b7c60d3036b638c724dbe0a8b791156cf32032af3e5127d6290bac752->leave($__internal_15195e4b7c60d3036b638c724dbe0a8b791156cf32032af3e5127d6290bac752_prof);

        
        $__internal_93c9170454876a502ef841704265187b7aed238716a9536414b20827a9b62452->leave($__internal_93c9170454876a502ef841704265187b7aed238716a9536414b20827a9b62452_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d4706a1e6c50c46a4f61d911c6b19b8f06334a7069ae27445020602f0c0aec4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d4706a1e6c50c46a4f61d911c6b19b8f06334a7069ae27445020602f0c0aec4->enter($__internal_4d4706a1e6c50c46a4f61d911c6b19b8f06334a7069ae27445020602f0c0aec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8d1e92e790518444e51d1b5361b73305a22e8c1345eab38afffc626d4a437a4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d1e92e790518444e51d1b5361b73305a22e8c1345eab38afffc626d4a437a4f->enter($__internal_8d1e92e790518444e51d1b5361b73305a22e8c1345eab38afffc626d4a437a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
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
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["NovoChamado"] ?? $this->getContext($context, "NovoChamado")), 'form_start');
        echo "
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["NovoChamado"] ?? $this->getContext($context, "NovoChamado")), 'widget');
        echo "
                                <p>
                                <p>
                                <button type=\"submit\" class=\"btn btn-default\" formnovalidate>Criar Chamado</button>
                                <a href=";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pagina_principal");
        echo " class=\"btn btn-sm btn-info btn-flat pull-left\">Voltar</a>
                            ";
        // line 50
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
        
        $__internal_8d1e92e790518444e51d1b5361b73305a22e8c1345eab38afffc626d4a437a4f->leave($__internal_8d1e92e790518444e51d1b5361b73305a22e8c1345eab38afffc626d4a437a4f_prof);

        
        $__internal_4d4706a1e6c50c46a4f61d911c6b19b8f06334a7069ae27445020602f0c0aec4->leave($__internal_4d4706a1e6c50c46a4f61d911c6b19b8f06334a7069ae27445020602f0c0aec4_prof);

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
        return array (  160 => 50,  156 => 49,  149 => 45,  145 => 44,  126 => 27,  117 => 26,  94 => 12,  85 => 11,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker.css\" />
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js\"></script>

    <script>jQuery(document).ready(function() {
            \$('.js-datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
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
