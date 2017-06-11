<?php

/* projetoWeb/minhaConta.html.twig */
class __TwigTemplate_613eea56c915ca95559734f3a8de383d962750691aa2db3b810279867b2f1fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/minhaConta.html.twig", 1);
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
        $__internal_9e654abf7b9270fe82ae1889c720614c493233974cfe76e6d3e427fe09dc707e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e654abf7b9270fe82ae1889c720614c493233974cfe76e6d3e427fe09dc707e->enter($__internal_9e654abf7b9270fe82ae1889c720614c493233974cfe76e6d3e427fe09dc707e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/minhaConta.html.twig"));

        $__internal_8b9706e1264387f39817e1029d131ea4ad1aa91635ac8bfbfd04159d98e77002 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b9706e1264387f39817e1029d131ea4ad1aa91635ac8bfbfd04159d98e77002->enter($__internal_8b9706e1264387f39817e1029d131ea4ad1aa91635ac8bfbfd04159d98e77002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/minhaConta.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e654abf7b9270fe82ae1889c720614c493233974cfe76e6d3e427fe09dc707e->leave($__internal_9e654abf7b9270fe82ae1889c720614c493233974cfe76e6d3e427fe09dc707e_prof);

        
        $__internal_8b9706e1264387f39817e1029d131ea4ad1aa91635ac8bfbfd04159d98e77002->leave($__internal_8b9706e1264387f39817e1029d131ea4ad1aa91635ac8bfbfd04159d98e77002_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_84ddc21dee0672674d20b90387e7718e5c00caeae695300bc9b1a1c3ac26f23c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84ddc21dee0672674d20b90387e7718e5c00caeae695300bc9b1a1c3ac26f23c->enter($__internal_84ddc21dee0672674d20b90387e7718e5c00caeae695300bc9b1a1c3ac26f23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4af842a7cd60e43c344c64ccfda59836c40a1c20700a40073ef939646183bd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4af842a7cd60e43c344c64ccfda59836c40a1c20700a40073ef939646183bd7d->enter($__internal_4af842a7cd60e43c344c64ccfda59836c40a1c20700a40073ef939646183bd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Minha Conta";
        
        $__internal_4af842a7cd60e43c344c64ccfda59836c40a1c20700a40073ef939646183bd7d->leave($__internal_4af842a7cd60e43c344c64ccfda59836c40a1c20700a40073ef939646183bd7d_prof);

        
        $__internal_84ddc21dee0672674d20b90387e7718e5c00caeae695300bc9b1a1c3ac26f23c->leave($__internal_84ddc21dee0672674d20b90387e7718e5c00caeae695300bc9b1a1c3ac26f23c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfbb4853e9d6ab235c4f5e92366d61285c44e18a46e7328cf934b4d8aabcaa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfbb4853e9d6ab235c4f5e92366d61285c44e18a46e7328cf934b4d8aabcaa17->enter($__internal_dfbb4853e9d6ab235c4f5e92366d61285c44e18a46e7328cf934b4d8aabcaa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_869758eb323c715538b977df48ed053ee3c615744f3719c8583acf9a159f5a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_869758eb323c715538b977df48ed053ee3c615744f3719c8583acf9a159f5a2b->enter($__internal_869758eb323c715538b977df48ed053ee3c615744f3719c8583acf9a159f5a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_869758eb323c715538b977df48ed053ee3c615744f3719c8583acf9a159f5a2b->leave($__internal_869758eb323c715538b977df48ed053ee3c615744f3719c8583acf9a159f5a2b_prof);

        
        $__internal_dfbb4853e9d6ab235c4f5e92366d61285c44e18a46e7328cf934b4d8aabcaa17->leave($__internal_dfbb4853e9d6ab235c4f5e92366d61285c44e18a46e7328cf934b4d8aabcaa17_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/minhaConta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Minha Conta{% endblock %}

{% block body %}
{% endblock %}", "projetoWeb/minhaConta.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/minhaConta.html.twig");
    }
}
