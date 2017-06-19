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
        $__internal_697c438feaf0ac2c54dd49043aa6915807e61d3ed1f94c283de8eaa826bf9ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c438feaf0ac2c54dd49043aa6915807e61d3ed1f94c283de8eaa826bf9ea8->enter($__internal_697c438feaf0ac2c54dd49043aa6915807e61d3ed1f94c283de8eaa826bf9ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3727b0702f942327410d71b7cc4d73855c5d0dbf68e51c3286b5488b5ba6dbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3727b0702f942327410d71b7cc4d73855c5d0dbf68e51c3286b5488b5ba6dbd4->enter($__internal_3727b0702f942327410d71b7cc4d73855c5d0dbf68e51c3286b5488b5ba6dbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697c438feaf0ac2c54dd49043aa6915807e61d3ed1f94c283de8eaa826bf9ea8->leave($__internal_697c438feaf0ac2c54dd49043aa6915807e61d3ed1f94c283de8eaa826bf9ea8_prof);

        
        $__internal_3727b0702f942327410d71b7cc4d73855c5d0dbf68e51c3286b5488b5ba6dbd4->leave($__internal_3727b0702f942327410d71b7cc4d73855c5d0dbf68e51c3286b5488b5ba6dbd4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9616bee9f6ea3652762fbf8e366353c3dc0252a32a74cae8295c0380ef348544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9616bee9f6ea3652762fbf8e366353c3dc0252a32a74cae8295c0380ef348544->enter($__internal_9616bee9f6ea3652762fbf8e366353c3dc0252a32a74cae8295c0380ef348544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_43521e2200fb3bf4ac08ab407a92b60cbebad192937c82fc1b194ace591ff277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43521e2200fb3bf4ac08ab407a92b60cbebad192937c82fc1b194ace591ff277->enter($__internal_43521e2200fb3bf4ac08ab407a92b60cbebad192937c82fc1b194ace591ff277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_43521e2200fb3bf4ac08ab407a92b60cbebad192937c82fc1b194ace591ff277->leave($__internal_43521e2200fb3bf4ac08ab407a92b60cbebad192937c82fc1b194ace591ff277_prof);

        
        $__internal_9616bee9f6ea3652762fbf8e366353c3dc0252a32a74cae8295c0380ef348544->leave($__internal_9616bee9f6ea3652762fbf8e366353c3dc0252a32a74cae8295c0380ef348544_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aacfdf7c8faf8f9ed74738dc1b68abc0186cb40dffcdb002a8a01a522a567082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacfdf7c8faf8f9ed74738dc1b68abc0186cb40dffcdb002a8a01a522a567082->enter($__internal_aacfdf7c8faf8f9ed74738dc1b68abc0186cb40dffcdb002a8a01a522a567082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ee396adaee5fb1f0efc56d99c5fd85461bbadfc7b6e8deff5ba199300bc9b260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee396adaee5fb1f0efc56d99c5fd85461bbadfc7b6e8deff5ba199300bc9b260->enter($__internal_ee396adaee5fb1f0efc56d99c5fd85461bbadfc7b6e8deff5ba199300bc9b260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee396adaee5fb1f0efc56d99c5fd85461bbadfc7b6e8deff5ba199300bc9b260->leave($__internal_ee396adaee5fb1f0efc56d99c5fd85461bbadfc7b6e8deff5ba199300bc9b260_prof);

        
        $__internal_aacfdf7c8faf8f9ed74738dc1b68abc0186cb40dffcdb002a8a01a522a567082->leave($__internal_aacfdf7c8faf8f9ed74738dc1b68abc0186cb40dffcdb002a8a01a522a567082_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_794298b208ab3010df1c0aa49be4f91a2dfe91b53768a4fc11e6b3b605d36fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794298b208ab3010df1c0aa49be4f91a2dfe91b53768a4fc11e6b3b605d36fde->enter($__internal_794298b208ab3010df1c0aa49be4f91a2dfe91b53768a4fc11e6b3b605d36fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c8af1397a61a5be143fd55eef6e055f6a1aa6182a4a5d2187dc7c34771a3e823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8af1397a61a5be143fd55eef6e055f6a1aa6182a4a5d2187dc7c34771a3e823->enter($__internal_c8af1397a61a5be143fd55eef6e055f6a1aa6182a4a5d2187dc7c34771a3e823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c8af1397a61a5be143fd55eef6e055f6a1aa6182a4a5d2187dc7c34771a3e823->leave($__internal_c8af1397a61a5be143fd55eef6e055f6a1aa6182a4a5d2187dc7c34771a3e823_prof);

        
        $__internal_794298b208ab3010df1c0aa49be4f91a2dfe91b53768a4fc11e6b3b605d36fde->leave($__internal_794298b208ab3010df1c0aa49be4f91a2dfe91b53768a4fc11e6b3b605d36fde_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/uniceub/Documents/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
