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
        $__internal_556c88f3040e16da9329bded75ee889ba1a802b0ebc79f30328e46efda806a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556c88f3040e16da9329bded75ee889ba1a802b0ebc79f30328e46efda806a4c->enter($__internal_556c88f3040e16da9329bded75ee889ba1a802b0ebc79f30328e46efda806a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f3e6a50ac9bf73ca4090db26e6b34132f0665752e3a0049605ae349eceee040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3e6a50ac9bf73ca4090db26e6b34132f0665752e3a0049605ae349eceee040->enter($__internal_5f3e6a50ac9bf73ca4090db26e6b34132f0665752e3a0049605ae349eceee040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_556c88f3040e16da9329bded75ee889ba1a802b0ebc79f30328e46efda806a4c->leave($__internal_556c88f3040e16da9329bded75ee889ba1a802b0ebc79f30328e46efda806a4c_prof);

        
        $__internal_5f3e6a50ac9bf73ca4090db26e6b34132f0665752e3a0049605ae349eceee040->leave($__internal_5f3e6a50ac9bf73ca4090db26e6b34132f0665752e3a0049605ae349eceee040_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed37c4f26089206ddd190fb19b3fc70752de9866c5f861b3d746b067128feea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed37c4f26089206ddd190fb19b3fc70752de9866c5f861b3d746b067128feea2->enter($__internal_ed37c4f26089206ddd190fb19b3fc70752de9866c5f861b3d746b067128feea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b6cfeb406eeb8ef016ef80386689270a5b1faa4b6e41ecc12c41e43f0c7e2003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cfeb406eeb8ef016ef80386689270a5b1faa4b6e41ecc12c41e43f0c7e2003->enter($__internal_b6cfeb406eeb8ef016ef80386689270a5b1faa4b6e41ecc12c41e43f0c7e2003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b6cfeb406eeb8ef016ef80386689270a5b1faa4b6e41ecc12c41e43f0c7e2003->leave($__internal_b6cfeb406eeb8ef016ef80386689270a5b1faa4b6e41ecc12c41e43f0c7e2003_prof);

        
        $__internal_ed37c4f26089206ddd190fb19b3fc70752de9866c5f861b3d746b067128feea2->leave($__internal_ed37c4f26089206ddd190fb19b3fc70752de9866c5f861b3d746b067128feea2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f0b1338c7ea20c382f5d8ced47764f6cb120c0c9867e4b71f7d22825dc77ba82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0b1338c7ea20c382f5d8ced47764f6cb120c0c9867e4b71f7d22825dc77ba82->enter($__internal_f0b1338c7ea20c382f5d8ced47764f6cb120c0c9867e4b71f7d22825dc77ba82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0b90bd34e98ab7c2ca39234ed8116d42eb5f30cb54da27913d85c0c6e9ec6666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b90bd34e98ab7c2ca39234ed8116d42eb5f30cb54da27913d85c0c6e9ec6666->enter($__internal_0b90bd34e98ab7c2ca39234ed8116d42eb5f30cb54da27913d85c0c6e9ec6666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_0b90bd34e98ab7c2ca39234ed8116d42eb5f30cb54da27913d85c0c6e9ec6666->leave($__internal_0b90bd34e98ab7c2ca39234ed8116d42eb5f30cb54da27913d85c0c6e9ec6666_prof);

        
        $__internal_f0b1338c7ea20c382f5d8ced47764f6cb120c0c9867e4b71f7d22825dc77ba82->leave($__internal_f0b1338c7ea20c382f5d8ced47764f6cb120c0c9867e4b71f7d22825dc77ba82_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b9a18654cba8f7b50f3fcaf3b44ffd8c62de6be84640299ceb3a9438b867720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9a18654cba8f7b50f3fcaf3b44ffd8c62de6be84640299ceb3a9438b867720->enter($__internal_9b9a18654cba8f7b50f3fcaf3b44ffd8c62de6be84640299ceb3a9438b867720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a93dc56d820dcd519206d02f58a805d33163e523f0c9f0000283fb428101bfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93dc56d820dcd519206d02f58a805d33163e523f0c9f0000283fb428101bfc9->enter($__internal_a93dc56d820dcd519206d02f58a805d33163e523f0c9f0000283fb428101bfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a93dc56d820dcd519206d02f58a805d33163e523f0c9f0000283fb428101bfc9->leave($__internal_a93dc56d820dcd519206d02f58a805d33163e523f0c9f0000283fb428101bfc9_prof);

        
        $__internal_9b9a18654cba8f7b50f3fcaf3b44ffd8c62de6be84640299ceb3a9438b867720->leave($__internal_9b9a18654cba8f7b50f3fcaf3b44ffd8c62de6be84640299ceb3a9438b867720_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/uniceub/Desktop/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
