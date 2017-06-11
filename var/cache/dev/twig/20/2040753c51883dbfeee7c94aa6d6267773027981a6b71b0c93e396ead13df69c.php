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
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d062c6b6939abe01132796e544bff3eeba1c442d9ba95dd3d55c94f251aa77f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d062c6b6939abe01132796e544bff3eeba1c442d9ba95dd3d55c94f251aa77f->enter($__internal_3d062c6b6939abe01132796e544bff3eeba1c442d9ba95dd3d55c94f251aa77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $__internal_442d081781fc3e33fe39b09bf93dfa94317ec3824bc164a4a4d187a731ef825f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_442d081781fc3e33fe39b09bf93dfa94317ec3824bc164a4a4d187a731ef825f->enter($__internal_442d081781fc3e33fe39b09bf93dfa94317ec3824bc164a4a4d187a731ef825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d062c6b6939abe01132796e544bff3eeba1c442d9ba95dd3d55c94f251aa77f->leave($__internal_3d062c6b6939abe01132796e544bff3eeba1c442d9ba95dd3d55c94f251aa77f_prof);

        
        $__internal_442d081781fc3e33fe39b09bf93dfa94317ec3824bc164a4a4d187a731ef825f->leave($__internal_442d081781fc3e33fe39b09bf93dfa94317ec3824bc164a4a4d187a731ef825f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bcc0c3d4bd2c1f7f92d22d8dd9ae643cbf53fb54035940681b256408a5129bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bcc0c3d4bd2c1f7f92d22d8dd9ae643cbf53fb54035940681b256408a5129bf->enter($__internal_0bcc0c3d4bd2c1f7f92d22d8dd9ae643cbf53fb54035940681b256408a5129bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b10a5863f8aaea6925ddb6d265efd4edcf939f626ec08790e4f142acd560706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b10a5863f8aaea6925ddb6d265efd4edcf939f626ec08790e4f142acd560706->enter($__internal_5b10a5863f8aaea6925ddb6d265efd4edcf939f626ec08790e4f142acd560706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Chamado";
        
        $__internal_5b10a5863f8aaea6925ddb6d265efd4edcf939f626ec08790e4f142acd560706->leave($__internal_5b10a5863f8aaea6925ddb6d265efd4edcf939f626ec08790e4f142acd560706_prof);

        
        $__internal_0bcc0c3d4bd2c1f7f92d22d8dd9ae643cbf53fb54035940681b256408a5129bf->leave($__internal_0bcc0c3d4bd2c1f7f92d22d8dd9ae643cbf53fb54035940681b256408a5129bf_prof);

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
        return array (  40 => 3,  11 => 1,);
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

{% block title %}Criar Chamado{% endblock %}", "projetoWeb/criarChamados.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/criarChamados.html.twig");
    }
}
