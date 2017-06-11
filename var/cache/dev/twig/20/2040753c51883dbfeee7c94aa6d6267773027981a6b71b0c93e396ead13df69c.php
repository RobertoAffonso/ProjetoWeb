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
        $__internal_b0c3637f741b157fc061072a1859300c24ed899825cfed57d75ffecedc7ae541 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0c3637f741b157fc061072a1859300c24ed899825cfed57d75ffecedc7ae541->enter($__internal_b0c3637f741b157fc061072a1859300c24ed899825cfed57d75ffecedc7ae541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $__internal_78947a663c019b370cb08a5dfe61c4ea263bef60b3243cffe709910a4b61e38f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78947a663c019b370cb08a5dfe61c4ea263bef60b3243cffe709910a4b61e38f->enter($__internal_78947a663c019b370cb08a5dfe61c4ea263bef60b3243cffe709910a4b61e38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarChamados.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0c3637f741b157fc061072a1859300c24ed899825cfed57d75ffecedc7ae541->leave($__internal_b0c3637f741b157fc061072a1859300c24ed899825cfed57d75ffecedc7ae541_prof);

        
        $__internal_78947a663c019b370cb08a5dfe61c4ea263bef60b3243cffe709910a4b61e38f->leave($__internal_78947a663c019b370cb08a5dfe61c4ea263bef60b3243cffe709910a4b61e38f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f8e1e539d6f7afa3c43a0680175ee3d3dab9b2dd603faf8ebb9b8df98f8a2333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8e1e539d6f7afa3c43a0680175ee3d3dab9b2dd603faf8ebb9b8df98f8a2333->enter($__internal_f8e1e539d6f7afa3c43a0680175ee3d3dab9b2dd603faf8ebb9b8df98f8a2333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0074e39b8920c74580b149322e80defd13d3b278e6bbc899405fe516a60df92a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0074e39b8920c74580b149322e80defd13d3b278e6bbc899405fe516a60df92a->enter($__internal_0074e39b8920c74580b149322e80defd13d3b278e6bbc899405fe516a60df92a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Chamado";
        
        $__internal_0074e39b8920c74580b149322e80defd13d3b278e6bbc899405fe516a60df92a->leave($__internal_0074e39b8920c74580b149322e80defd13d3b278e6bbc899405fe516a60df92a_prof);

        
        $__internal_f8e1e539d6f7afa3c43a0680175ee3d3dab9b2dd603faf8ebb9b8df98f8a2333->leave($__internal_f8e1e539d6f7afa3c43a0680175ee3d3dab9b2dd603faf8ebb9b8df98f8a2333_prof);

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

{% block title %}Criar Chamado{% endblock %}

", "projetoWeb/criarChamados.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/criarChamados.html.twig");
    }
}
