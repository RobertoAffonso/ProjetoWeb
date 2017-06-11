<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_85b2ccb6e82e3a87665006b7528b56159c640c36cd53ed73c26fdcf33a8718d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97c4e86403e4e3134f0bfbf42a5bfcb4cb5b6c522d9f18c76d20e81b90ba2766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c4e86403e4e3134f0bfbf42a5bfcb4cb5b6c522d9f18c76d20e81b90ba2766->enter($__internal_97c4e86403e4e3134f0bfbf42a5bfcb4cb5b6c522d9f18c76d20e81b90ba2766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4dba379d7954b567edc6e2f2021699f9a700cf61eb491c9f6b7c3e7e8761f948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dba379d7954b567edc6e2f2021699f9a700cf61eb491c9f6b7c3e7e8761f948->enter($__internal_4dba379d7954b567edc6e2f2021699f9a700cf61eb491c9f6b7c3e7e8761f948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97c4e86403e4e3134f0bfbf42a5bfcb4cb5b6c522d9f18c76d20e81b90ba2766->leave($__internal_97c4e86403e4e3134f0bfbf42a5bfcb4cb5b6c522d9f18c76d20e81b90ba2766_prof);

        
        $__internal_4dba379d7954b567edc6e2f2021699f9a700cf61eb491c9f6b7c3e7e8761f948->leave($__internal_4dba379d7954b567edc6e2f2021699f9a700cf61eb491c9f6b7c3e7e8761f948_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a9d2fe1b84c259f0b2c2ff765c43a09efe6a431bbf58288feec5f2bf00030228 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d2fe1b84c259f0b2c2ff765c43a09efe6a431bbf58288feec5f2bf00030228->enter($__internal_a9d2fe1b84c259f0b2c2ff765c43a09efe6a431bbf58288feec5f2bf00030228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e529143550da930adbabd6fdae8afff335100ccb1ea9e13f53ee16235028bdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e529143550da930adbabd6fdae8afff335100ccb1ea9e13f53ee16235028bdf5->enter($__internal_e529143550da930adbabd6fdae8afff335100ccb1ea9e13f53ee16235028bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_e529143550da930adbabd6fdae8afff335100ccb1ea9e13f53ee16235028bdf5->leave($__internal_e529143550da930adbabd6fdae8afff335100ccb1ea9e13f53ee16235028bdf5_prof);

        
        $__internal_a9d2fe1b84c259f0b2c2ff765c43a09efe6a431bbf58288feec5f2bf00030228->leave($__internal_a9d2fe1b84c259f0b2c2ff765c43a09efe6a431bbf58288feec5f2bf00030228_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_861a8099e847552919e9b82e91b0117457e65c9b78d5e0931c14970369c073af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_861a8099e847552919e9b82e91b0117457e65c9b78d5e0931c14970369c073af->enter($__internal_861a8099e847552919e9b82e91b0117457e65c9b78d5e0931c14970369c073af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4980a8de8f1e98444af510f87f26011f764bcdcc211490914d6cf9ad292434a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4980a8de8f1e98444af510f87f26011f764bcdcc211490914d6cf9ad292434a->enter($__internal_c4980a8de8f1e98444af510f87f26011f764bcdcc211490914d6cf9ad292434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c4980a8de8f1e98444af510f87f26011f764bcdcc211490914d6cf9ad292434a->leave($__internal_c4980a8de8f1e98444af510f87f26011f764bcdcc211490914d6cf9ad292434a_prof);

        
        $__internal_861a8099e847552919e9b82e91b0117457e65c9b78d5e0931c14970369c073af->leave($__internal_861a8099e847552919e9b82e91b0117457e65c9b78d5e0931c14970369c073af_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4a05e452b8adf7424a9259975abafa3a6bf6d0feacdcdbe4607e5f54c5afc71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4a05e452b8adf7424a9259975abafa3a6bf6d0feacdcdbe4607e5f54c5afc71->enter($__internal_a4a05e452b8adf7424a9259975abafa3a6bf6d0feacdcdbe4607e5f54c5afc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1ffc748bbb75bd327feb322ea6d8b92668b275f5950b4091ef3462d2f1e1482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ffc748bbb75bd327feb322ea6d8b92668b275f5950b4091ef3462d2f1e1482->enter($__internal_e1ffc748bbb75bd327feb322ea6d8b92668b275f5950b4091ef3462d2f1e1482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e1ffc748bbb75bd327feb322ea6d8b92668b275f5950b4091ef3462d2f1e1482->leave($__internal_e1ffc748bbb75bd327feb322ea6d8b92668b275f5950b4091ef3462d2f1e1482_prof);

        
        $__internal_a4a05e452b8adf7424a9259975abafa3a6bf6d0feacdcdbe4607e5f54c5afc71->leave($__internal_a4a05e452b8adf7424a9259975abafa3a6bf6d0feacdcdbe4607e5f54c5afc71_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/roberto/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
