<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_33d244f06e3597a4611798c3ebdde8e315ef10d0cb27077d0c8e708c948f75a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b87753c95f7427c3a632225e659f5e61855d0df12bb282680fe791b92d24f5f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87753c95f7427c3a632225e659f5e61855d0df12bb282680fe791b92d24f5f6->enter($__internal_b87753c95f7427c3a632225e659f5e61855d0df12bb282680fe791b92d24f5f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_194c435ae4d6a7b4056fe0ad6d708a7241a4247f897df1f49e584b4eb9af5c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_194c435ae4d6a7b4056fe0ad6d708a7241a4247f897df1f49e584b4eb9af5c35->enter($__internal_194c435ae4d6a7b4056fe0ad6d708a7241a4247f897df1f49e584b4eb9af5c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b87753c95f7427c3a632225e659f5e61855d0df12bb282680fe791b92d24f5f6->leave($__internal_b87753c95f7427c3a632225e659f5e61855d0df12bb282680fe791b92d24f5f6_prof);

        
        $__internal_194c435ae4d6a7b4056fe0ad6d708a7241a4247f897df1f49e584b4eb9af5c35->leave($__internal_194c435ae4d6a7b4056fe0ad6d708a7241a4247f897df1f49e584b4eb9af5c35_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_281a76e9a6003e1d6875d9e087894e76f16d4c265bdf803e84a771ca6b04e1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281a76e9a6003e1d6875d9e087894e76f16d4c265bdf803e84a771ca6b04e1ba->enter($__internal_281a76e9a6003e1d6875d9e087894e76f16d4c265bdf803e84a771ca6b04e1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4467f55d5b31e73a1956fa660616bcd5ea1ec205ad51dda9405257793f74dc26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4467f55d5b31e73a1956fa660616bcd5ea1ec205ad51dda9405257793f74dc26->enter($__internal_4467f55d5b31e73a1956fa660616bcd5ea1ec205ad51dda9405257793f74dc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_4467f55d5b31e73a1956fa660616bcd5ea1ec205ad51dda9405257793f74dc26->leave($__internal_4467f55d5b31e73a1956fa660616bcd5ea1ec205ad51dda9405257793f74dc26_prof);

        
        $__internal_281a76e9a6003e1d6875d9e087894e76f16d4c265bdf803e84a771ca6b04e1ba->leave($__internal_281a76e9a6003e1d6875d9e087894e76f16d4c265bdf803e84a771ca6b04e1ba_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/uniceub/Documents/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
