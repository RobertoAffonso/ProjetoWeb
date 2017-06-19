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
        $__internal_d8303bf5af9361b34b40c7339a109668ae5a37709d8ab0561f9d9abb0836434e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8303bf5af9361b34b40c7339a109668ae5a37709d8ab0561f9d9abb0836434e->enter($__internal_d8303bf5af9361b34b40c7339a109668ae5a37709d8ab0561f9d9abb0836434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_9cc617463055aa331b50163f0e5f3a27ea8c0f9a72d0f2b1310e4399c01853bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc617463055aa331b50163f0e5f3a27ea8c0f9a72d0f2b1310e4399c01853bc->enter($__internal_9cc617463055aa331b50163f0e5f3a27ea8c0f9a72d0f2b1310e4399c01853bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8303bf5af9361b34b40c7339a109668ae5a37709d8ab0561f9d9abb0836434e->leave($__internal_d8303bf5af9361b34b40c7339a109668ae5a37709d8ab0561f9d9abb0836434e_prof);

        
        $__internal_9cc617463055aa331b50163f0e5f3a27ea8c0f9a72d0f2b1310e4399c01853bc->leave($__internal_9cc617463055aa331b50163f0e5f3a27ea8c0f9a72d0f2b1310e4399c01853bc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd1766adf3ecbd47b8b665d86cf13a7ca9ce95a813ea0a0bb8aa5ef13b2d2128 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd1766adf3ecbd47b8b665d86cf13a7ca9ce95a813ea0a0bb8aa5ef13b2d2128->enter($__internal_fd1766adf3ecbd47b8b665d86cf13a7ca9ce95a813ea0a0bb8aa5ef13b2d2128_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_377c2e962ae0122d539c38fce12800004f8be39c93ebb3090cbdf30b86f53751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_377c2e962ae0122d539c38fce12800004f8be39c93ebb3090cbdf30b86f53751->enter($__internal_377c2e962ae0122d539c38fce12800004f8be39c93ebb3090cbdf30b86f53751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_377c2e962ae0122d539c38fce12800004f8be39c93ebb3090cbdf30b86f53751->leave($__internal_377c2e962ae0122d539c38fce12800004f8be39c93ebb3090cbdf30b86f53751_prof);

        
        $__internal_fd1766adf3ecbd47b8b665d86cf13a7ca9ce95a813ea0a0bb8aa5ef13b2d2128->leave($__internal_fd1766adf3ecbd47b8b665d86cf13a7ca9ce95a813ea0a0bb8aa5ef13b2d2128_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_cec1fc6fd2b703288e8c8c8998308b3c93d62bed616273ab7ef4300c440dfb7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cec1fc6fd2b703288e8c8c8998308b3c93d62bed616273ab7ef4300c440dfb7c->enter($__internal_cec1fc6fd2b703288e8c8c8998308b3c93d62bed616273ab7ef4300c440dfb7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c5647f254484ff0b76032b481d496ac2c79b5af5694c4dc5b9fc9b97d63c4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5647f254484ff0b76032b481d496ac2c79b5af5694c4dc5b9fc9b97d63c4bb->enter($__internal_4c5647f254484ff0b76032b481d496ac2c79b5af5694c4dc5b9fc9b97d63c4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4c5647f254484ff0b76032b481d496ac2c79b5af5694c4dc5b9fc9b97d63c4bb->leave($__internal_4c5647f254484ff0b76032b481d496ac2c79b5af5694c4dc5b9fc9b97d63c4bb_prof);

        
        $__internal_cec1fc6fd2b703288e8c8c8998308b3c93d62bed616273ab7ef4300c440dfb7c->leave($__internal_cec1fc6fd2b703288e8c8c8998308b3c93d62bed616273ab7ef4300c440dfb7c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_8265077d8150516fcf153babd63edf555d4f7b9f8c1176d20826d096bfd7745a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8265077d8150516fcf153babd63edf555d4f7b9f8c1176d20826d096bfd7745a->enter($__internal_8265077d8150516fcf153babd63edf555d4f7b9f8c1176d20826d096bfd7745a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_08fad7536971aaaae8514f4f05f43be86664a42398b31ad67ce76aafc85d6cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fad7536971aaaae8514f4f05f43be86664a42398b31ad67ce76aafc85d6cb4->enter($__internal_08fad7536971aaaae8514f4f05f43be86664a42398b31ad67ce76aafc85d6cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_08fad7536971aaaae8514f4f05f43be86664a42398b31ad67ce76aafc85d6cb4->leave($__internal_08fad7536971aaaae8514f4f05f43be86664a42398b31ad67ce76aafc85d6cb4_prof);

        
        $__internal_8265077d8150516fcf153babd63edf555d4f7b9f8c1176d20826d096bfd7745a->leave($__internal_8265077d8150516fcf153babd63edf555d4f7b9f8c1176d20826d096bfd7745a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/home/uniceub/Documents/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
