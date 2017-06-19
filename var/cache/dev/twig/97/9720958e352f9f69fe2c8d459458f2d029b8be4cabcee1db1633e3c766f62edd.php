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
        $__internal_9bf587d8ea984cc3725b46e58df65a112f1acb61600d82e1e413739d11e8f851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf587d8ea984cc3725b46e58df65a112f1acb61600d82e1e413739d11e8f851->enter($__internal_9bf587d8ea984cc3725b46e58df65a112f1acb61600d82e1e413739d11e8f851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d3bd2638c47ca175300f6307e349d75799bbc861ccb5ef8f2e02d0c9bac6cafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bd2638c47ca175300f6307e349d75799bbc861ccb5ef8f2e02d0c9bac6cafc->enter($__internal_d3bd2638c47ca175300f6307e349d75799bbc861ccb5ef8f2e02d0c9bac6cafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bf587d8ea984cc3725b46e58df65a112f1acb61600d82e1e413739d11e8f851->leave($__internal_9bf587d8ea984cc3725b46e58df65a112f1acb61600d82e1e413739d11e8f851_prof);

        
        $__internal_d3bd2638c47ca175300f6307e349d75799bbc861ccb5ef8f2e02d0c9bac6cafc->leave($__internal_d3bd2638c47ca175300f6307e349d75799bbc861ccb5ef8f2e02d0c9bac6cafc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_18a792e38209e4afbc11a00d775b7a6876902941910630914c69e3a5aea8ce0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a792e38209e4afbc11a00d775b7a6876902941910630914c69e3a5aea8ce0e->enter($__internal_18a792e38209e4afbc11a00d775b7a6876902941910630914c69e3a5aea8ce0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8dc1d0e0d181af3416207a5756a383348c01051ea16b91513471ca6051b841c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc1d0e0d181af3416207a5756a383348c01051ea16b91513471ca6051b841c3->enter($__internal_8dc1d0e0d181af3416207a5756a383348c01051ea16b91513471ca6051b841c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8dc1d0e0d181af3416207a5756a383348c01051ea16b91513471ca6051b841c3->leave($__internal_8dc1d0e0d181af3416207a5756a383348c01051ea16b91513471ca6051b841c3_prof);

        
        $__internal_18a792e38209e4afbc11a00d775b7a6876902941910630914c69e3a5aea8ce0e->leave($__internal_18a792e38209e4afbc11a00d775b7a6876902941910630914c69e3a5aea8ce0e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e85c76959059f82f035ee5b18d0239f2b731e25208fe3377d3615fc6f9a439c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e85c76959059f82f035ee5b18d0239f2b731e25208fe3377d3615fc6f9a439c->enter($__internal_9e85c76959059f82f035ee5b18d0239f2b731e25208fe3377d3615fc6f9a439c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ac305957a3f2d31b23c0c18e6a9768e220157a9f3b123ed3432dc460adf7abba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac305957a3f2d31b23c0c18e6a9768e220157a9f3b123ed3432dc460adf7abba->enter($__internal_ac305957a3f2d31b23c0c18e6a9768e220157a9f3b123ed3432dc460adf7abba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ac305957a3f2d31b23c0c18e6a9768e220157a9f3b123ed3432dc460adf7abba->leave($__internal_ac305957a3f2d31b23c0c18e6a9768e220157a9f3b123ed3432dc460adf7abba_prof);

        
        $__internal_9e85c76959059f82f035ee5b18d0239f2b731e25208fe3377d3615fc6f9a439c->leave($__internal_9e85c76959059f82f035ee5b18d0239f2b731e25208fe3377d3615fc6f9a439c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c6c3399dc3ca2d72e664ba7effc81f35d8f3864c603bcd42c71f95fe74ccaa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c3399dc3ca2d72e664ba7effc81f35d8f3864c603bcd42c71f95fe74ccaa9e->enter($__internal_c6c3399dc3ca2d72e664ba7effc81f35d8f3864c603bcd42c71f95fe74ccaa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8755d646a1f0e304a21970ea2bf50440ed4c4fcd542eb62ba5a323e52c2b331b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8755d646a1f0e304a21970ea2bf50440ed4c4fcd542eb62ba5a323e52c2b331b->enter($__internal_8755d646a1f0e304a21970ea2bf50440ed4c4fcd542eb62ba5a323e52c2b331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8755d646a1f0e304a21970ea2bf50440ed4c4fcd542eb62ba5a323e52c2b331b->leave($__internal_8755d646a1f0e304a21970ea2bf50440ed4c4fcd542eb62ba5a323e52c2b331b_prof);

        
        $__internal_c6c3399dc3ca2d72e664ba7effc81f35d8f3864c603bcd42c71f95fe74ccaa9e->leave($__internal_c6c3399dc3ca2d72e664ba7effc81f35d8f3864c603bcd42c71f95fe74ccaa9e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/uniceub/Documents/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
