<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d7e6cce490cf57ea2009fe76aa05ae8cfdb5dae41cedf16f66f00ec05608b804 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23fdd8b6adebcdd87edf5da421263a591d5a9375d96dd0f1c1bf73894a05dca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fdd8b6adebcdd87edf5da421263a591d5a9375d96dd0f1c1bf73894a05dca3->enter($__internal_23fdd8b6adebcdd87edf5da421263a591d5a9375d96dd0f1c1bf73894a05dca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_28b45349b25ba0cfdd024fb7391c1d1e4b51740ff324237e8dff9f90b8d8368a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28b45349b25ba0cfdd024fb7391c1d1e4b51740ff324237e8dff9f90b8d8368a->enter($__internal_28b45349b25ba0cfdd024fb7391c1d1e4b51740ff324237e8dff9f90b8d8368a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23fdd8b6adebcdd87edf5da421263a591d5a9375d96dd0f1c1bf73894a05dca3->leave($__internal_23fdd8b6adebcdd87edf5da421263a591d5a9375d96dd0f1c1bf73894a05dca3_prof);

        
        $__internal_28b45349b25ba0cfdd024fb7391c1d1e4b51740ff324237e8dff9f90b8d8368a->leave($__internal_28b45349b25ba0cfdd024fb7391c1d1e4b51740ff324237e8dff9f90b8d8368a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04d28d7bd5abf21408c662b50766556249ef022fea64d5c031dd871b81cdf90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d28d7bd5abf21408c662b50766556249ef022fea64d5c031dd871b81cdf90e->enter($__internal_04d28d7bd5abf21408c662b50766556249ef022fea64d5c031dd871b81cdf90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2982eaf364aac8bc80a6e13806aa67bd606ccfc34a41eb36d0a2752797f1f3af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2982eaf364aac8bc80a6e13806aa67bd606ccfc34a41eb36d0a2752797f1f3af->enter($__internal_2982eaf364aac8bc80a6e13806aa67bd606ccfc34a41eb36d0a2752797f1f3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2982eaf364aac8bc80a6e13806aa67bd606ccfc34a41eb36d0a2752797f1f3af->leave($__internal_2982eaf364aac8bc80a6e13806aa67bd606ccfc34a41eb36d0a2752797f1f3af_prof);

        
        $__internal_04d28d7bd5abf21408c662b50766556249ef022fea64d5c031dd871b81cdf90e->leave($__internal_04d28d7bd5abf21408c662b50766556249ef022fea64d5c031dd871b81cdf90e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1656e7f1b47ab4f8a4101abb9506d3eb39e658016e5e846e1593c313d9e7201b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1656e7f1b47ab4f8a4101abb9506d3eb39e658016e5e846e1593c313d9e7201b->enter($__internal_1656e7f1b47ab4f8a4101abb9506d3eb39e658016e5e846e1593c313d9e7201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_81fef7a2866bcb3bb67f1e7d005ac217a9c96c3f54ba89328e534576fd957c0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81fef7a2866bcb3bb67f1e7d005ac217a9c96c3f54ba89328e534576fd957c0d->enter($__internal_81fef7a2866bcb3bb67f1e7d005ac217a9c96c3f54ba89328e534576fd957c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_81fef7a2866bcb3bb67f1e7d005ac217a9c96c3f54ba89328e534576fd957c0d->leave($__internal_81fef7a2866bcb3bb67f1e7d005ac217a9c96c3f54ba89328e534576fd957c0d_prof);

        
        $__internal_1656e7f1b47ab4f8a4101abb9506d3eb39e658016e5e846e1593c313d9e7201b->leave($__internal_1656e7f1b47ab4f8a4101abb9506d3eb39e658016e5e846e1593c313d9e7201b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9cf8b85c9ee072ec8e7acebc942db9972053065723e81789339bf33260e00179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cf8b85c9ee072ec8e7acebc942db9972053065723e81789339bf33260e00179->enter($__internal_9cf8b85c9ee072ec8e7acebc942db9972053065723e81789339bf33260e00179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_79ea018ac5dc4c96512ecc40ec203182e5eb7ac10773c48629387fc160a850b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79ea018ac5dc4c96512ecc40ec203182e5eb7ac10773c48629387fc160a850b2->enter($__internal_79ea018ac5dc4c96512ecc40ec203182e5eb7ac10773c48629387fc160a850b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_79ea018ac5dc4c96512ecc40ec203182e5eb7ac10773c48629387fc160a850b2->leave($__internal_79ea018ac5dc4c96512ecc40ec203182e5eb7ac10773c48629387fc160a850b2_prof);

        
        $__internal_9cf8b85c9ee072ec8e7acebc942db9972053065723e81789339bf33260e00179->leave($__internal_9cf8b85c9ee072ec8e7acebc942db9972053065723e81789339bf33260e00179_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/roberto/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
