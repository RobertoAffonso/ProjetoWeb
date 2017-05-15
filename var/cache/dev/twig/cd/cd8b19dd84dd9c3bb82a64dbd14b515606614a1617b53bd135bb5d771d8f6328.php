<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f5e276029df096f60f1d55e16bb79f27bb0e261287257bb8e74c790056fba810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1f13f1ef3c545c003ed8fa800d583b37abf5039d03245a8e6bb8ff97b58aad32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f13f1ef3c545c003ed8fa800d583b37abf5039d03245a8e6bb8ff97b58aad32->enter($__internal_1f13f1ef3c545c003ed8fa800d583b37abf5039d03245a8e6bb8ff97b58aad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_9e398f034257a0ca1fc8c72473239f74733ecf5ab833871fb88d51a79d8db8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e398f034257a0ca1fc8c72473239f74733ecf5ab833871fb88d51a79d8db8e5->enter($__internal_9e398f034257a0ca1fc8c72473239f74733ecf5ab833871fb88d51a79d8db8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f13f1ef3c545c003ed8fa800d583b37abf5039d03245a8e6bb8ff97b58aad32->leave($__internal_1f13f1ef3c545c003ed8fa800d583b37abf5039d03245a8e6bb8ff97b58aad32_prof);

        
        $__internal_9e398f034257a0ca1fc8c72473239f74733ecf5ab833871fb88d51a79d8db8e5->leave($__internal_9e398f034257a0ca1fc8c72473239f74733ecf5ab833871fb88d51a79d8db8e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_921a1a9d568868dcd05a366843931453589f624d7f2a7ed2b14956f7e419fbc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921a1a9d568868dcd05a366843931453589f624d7f2a7ed2b14956f7e419fbc0->enter($__internal_921a1a9d568868dcd05a366843931453589f624d7f2a7ed2b14956f7e419fbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_370db19a9afdbafb4a400dd84fc243136bf9c5189593183d3f2d034f5c3c5846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370db19a9afdbafb4a400dd84fc243136bf9c5189593183d3f2d034f5c3c5846->enter($__internal_370db19a9afdbafb4a400dd84fc243136bf9c5189593183d3f2d034f5c3c5846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_370db19a9afdbafb4a400dd84fc243136bf9c5189593183d3f2d034f5c3c5846->leave($__internal_370db19a9afdbafb4a400dd84fc243136bf9c5189593183d3f2d034f5c3c5846_prof);

        
        $__internal_921a1a9d568868dcd05a366843931453589f624d7f2a7ed2b14956f7e419fbc0->leave($__internal_921a1a9d568868dcd05a366843931453589f624d7f2a7ed2b14956f7e419fbc0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_476ac764fb9042f09e996a9a68b27a94923e7854d24691bfbb23ed43e86ab1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476ac764fb9042f09e996a9a68b27a94923e7854d24691bfbb23ed43e86ab1c0->enter($__internal_476ac764fb9042f09e996a9a68b27a94923e7854d24691bfbb23ed43e86ab1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_89f1b3baf20c1c9798cbc52928c340f5135c49fae9636a774768154c8953065e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89f1b3baf20c1c9798cbc52928c340f5135c49fae9636a774768154c8953065e->enter($__internal_89f1b3baf20c1c9798cbc52928c340f5135c49fae9636a774768154c8953065e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_89f1b3baf20c1c9798cbc52928c340f5135c49fae9636a774768154c8953065e->leave($__internal_89f1b3baf20c1c9798cbc52928c340f5135c49fae9636a774768154c8953065e_prof);

        
        $__internal_476ac764fb9042f09e996a9a68b27a94923e7854d24691bfbb23ed43e86ab1c0->leave($__internal_476ac764fb9042f09e996a9a68b27a94923e7854d24691bfbb23ed43e86ab1c0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8febb937d4e08af479645cda84f92f499850b255abde49fc16b0dc71325e049b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8febb937d4e08af479645cda84f92f499850b255abde49fc16b0dc71325e049b->enter($__internal_8febb937d4e08af479645cda84f92f499850b255abde49fc16b0dc71325e049b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_279cafd7ae778837cfec3aaad833d63ac5d8d114d392ac395654ad40f055c4cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279cafd7ae778837cfec3aaad833d63ac5d8d114d392ac395654ad40f055c4cf->enter($__internal_279cafd7ae778837cfec3aaad833d63ac5d8d114d392ac395654ad40f055c4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_279cafd7ae778837cfec3aaad833d63ac5d8d114d392ac395654ad40f055c4cf->leave($__internal_279cafd7ae778837cfec3aaad833d63ac5d8d114d392ac395654ad40f055c4cf_prof);

        
        $__internal_8febb937d4e08af479645cda84f92f499850b255abde49fc16b0dc71325e049b->leave($__internal_8febb937d4e08af479645cda84f92f499850b255abde49fc16b0dc71325e049b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/roberto/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
