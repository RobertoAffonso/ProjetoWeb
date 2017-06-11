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
        $__internal_728de255ae457a9ad20f7a64d12e4419898075e922e8928c1f62978788d80164 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_728de255ae457a9ad20f7a64d12e4419898075e922e8928c1f62978788d80164->enter($__internal_728de255ae457a9ad20f7a64d12e4419898075e922e8928c1f62978788d80164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_2e48ab5e4e6a1f6dd3f3b62d06464791c0f54795871a3d3dcf0135fab9d80ceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e48ab5e4e6a1f6dd3f3b62d06464791c0f54795871a3d3dcf0135fab9d80ceb->enter($__internal_2e48ab5e4e6a1f6dd3f3b62d06464791c0f54795871a3d3dcf0135fab9d80ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_728de255ae457a9ad20f7a64d12e4419898075e922e8928c1f62978788d80164->leave($__internal_728de255ae457a9ad20f7a64d12e4419898075e922e8928c1f62978788d80164_prof);

        
        $__internal_2e48ab5e4e6a1f6dd3f3b62d06464791c0f54795871a3d3dcf0135fab9d80ceb->leave($__internal_2e48ab5e4e6a1f6dd3f3b62d06464791c0f54795871a3d3dcf0135fab9d80ceb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_624e44ca663985460156f74fb2f15c78d09aa1317b7570e14a28a433a71900ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624e44ca663985460156f74fb2f15c78d09aa1317b7570e14a28a433a71900ed->enter($__internal_624e44ca663985460156f74fb2f15c78d09aa1317b7570e14a28a433a71900ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e95594458dcb1acdf87e64c12667f827dc5d27bce9fe0fb0ade808248c09ee15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e95594458dcb1acdf87e64c12667f827dc5d27bce9fe0fb0ade808248c09ee15->enter($__internal_e95594458dcb1acdf87e64c12667f827dc5d27bce9fe0fb0ade808248c09ee15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e95594458dcb1acdf87e64c12667f827dc5d27bce9fe0fb0ade808248c09ee15->leave($__internal_e95594458dcb1acdf87e64c12667f827dc5d27bce9fe0fb0ade808248c09ee15_prof);

        
        $__internal_624e44ca663985460156f74fb2f15c78d09aa1317b7570e14a28a433a71900ed->leave($__internal_624e44ca663985460156f74fb2f15c78d09aa1317b7570e14a28a433a71900ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e90e446ade6b2835a85630b08010a16635f0dfdc6f748f2490dffc719ed1e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e90e446ade6b2835a85630b08010a16635f0dfdc6f748f2490dffc719ed1e2b->enter($__internal_3e90e446ade6b2835a85630b08010a16635f0dfdc6f748f2490dffc719ed1e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0d14a38c4233c8aebdd0bda741da630639adcd81f9865eae8281743398ce527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d14a38c4233c8aebdd0bda741da630639adcd81f9865eae8281743398ce527->enter($__internal_a0d14a38c4233c8aebdd0bda741da630639adcd81f9865eae8281743398ce527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a0d14a38c4233c8aebdd0bda741da630639adcd81f9865eae8281743398ce527->leave($__internal_a0d14a38c4233c8aebdd0bda741da630639adcd81f9865eae8281743398ce527_prof);

        
        $__internal_3e90e446ade6b2835a85630b08010a16635f0dfdc6f748f2490dffc719ed1e2b->leave($__internal_3e90e446ade6b2835a85630b08010a16635f0dfdc6f748f2490dffc719ed1e2b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_752a72e0527cb1e1fd1957b85a0f22719b2a45cf9e5c66acc2095bb7babd42a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752a72e0527cb1e1fd1957b85a0f22719b2a45cf9e5c66acc2095bb7babd42a0->enter($__internal_752a72e0527cb1e1fd1957b85a0f22719b2a45cf9e5c66acc2095bb7babd42a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a7bacd0e093acfa9258d2d96ec5a38435081a436b70f73af543054a343cfea4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7bacd0e093acfa9258d2d96ec5a38435081a436b70f73af543054a343cfea4d->enter($__internal_a7bacd0e093acfa9258d2d96ec5a38435081a436b70f73af543054a343cfea4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_a7bacd0e093acfa9258d2d96ec5a38435081a436b70f73af543054a343cfea4d->leave($__internal_a7bacd0e093acfa9258d2d96ec5a38435081a436b70f73af543054a343cfea4d_prof);

        
        $__internal_752a72e0527cb1e1fd1957b85a0f22719b2a45cf9e5c66acc2095bb7babd42a0->leave($__internal_752a72e0527cb1e1fd1957b85a0f22719b2a45cf9e5c66acc2095bb7babd42a0_prof);

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
