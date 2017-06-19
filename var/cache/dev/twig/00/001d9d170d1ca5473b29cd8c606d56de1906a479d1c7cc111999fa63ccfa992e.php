<?php

/* @WebProfiler/Collector/memory.html.twig */
class __TwigTemplate_42c9aed781d74b296b1a2e257d4f77e20f9e8625a873732a64b66c115be5f8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/memory.html.twig", 1);
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
        $__internal_9bbb37ce434d9ecdcc45429c9b9a4527f59b16ab4163db907706fb33db3e7e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bbb37ce434d9ecdcc45429c9b9a4527f59b16ab4163db907706fb33db3e7e2d->enter($__internal_9bbb37ce434d9ecdcc45429c9b9a4527f59b16ab4163db907706fb33db3e7e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $__internal_7a1ba54f48bb7dc580ba5245d7b66b90b292156edb1d540c06f733f7ce9ed7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1ba54f48bb7dc580ba5245d7b66b90b292156edb1d540c06f733f7ce9ed7e5->enter($__internal_7a1ba54f48bb7dc580ba5245d7b66b90b292156edb1d540c06f733f7ce9ed7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/memory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bbb37ce434d9ecdcc45429c9b9a4527f59b16ab4163db907706fb33db3e7e2d->leave($__internal_9bbb37ce434d9ecdcc45429c9b9a4527f59b16ab4163db907706fb33db3e7e2d_prof);

        
        $__internal_7a1ba54f48bb7dc580ba5245d7b66b90b292156edb1d540c06f733f7ce9ed7e5->leave($__internal_7a1ba54f48bb7dc580ba5245d7b66b90b292156edb1d540c06f733f7ce9ed7e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9fc05a8db41aa66a48208130707514449db9d02e3d1698efe57021fac3b7ae57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc05a8db41aa66a48208130707514449db9d02e3d1698efe57021fac3b7ae57->enter($__internal_9fc05a8db41aa66a48208130707514449db9d02e3d1698efe57021fac3b7ae57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4eae4f98723c4ef4e7af8293a7eca3c692a99e0f7ea8500ab7ed9f46233a10d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4eae4f98723c4ef4e7af8293a7eca3c692a99e0f7ea8500ab7ed9f46233a10d->enter($__internal_d4eae4f98723c4ef4e7af8293a7eca3c692a99e0f7ea8500ab7ed9f46233a10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        $context["status_color"] = ((((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024) > 50)) ? ("yellow") : (""));
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/memory.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">MB</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memory", array()) / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) ==  -1)) ? ("Unlimited") : (sprintf("%.0f MB", (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "memoryLimit", array()) / 1024) / 1024)))), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 22
        echo "
    ";
        // line 23
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "name" => "time", "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_d4eae4f98723c4ef4e7af8293a7eca3c692a99e0f7ea8500ab7ed9f46233a10d->leave($__internal_d4eae4f98723c4ef4e7af8293a7eca3c692a99e0f7ea8500ab7ed9f46233a10d_prof);

        
        $__internal_9fc05a8db41aa66a48208130707514449db9d02e3d1698efe57021fac3b7ae57->leave($__internal_9fc05a8db41aa66a48208130707514449db9d02e3d1698efe57021fac3b7ae57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 23,  89 => 22,  83 => 19,  75 => 14,  71 => 12,  69 => 11,  66 => 10,  60 => 7,  55 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
        {% set status_color = (collector.memory / 1024 / 1024) > 50 ? 'yellow' : '' %}
        {{ include('@WebProfiler/Icon/memory.svg') }}
        <span class=\"sf-toolbar-value\">{{ '%.1f'|format(collector.memory / 1024 / 1024) }}</span>
        <span class=\"sf-toolbar-label\">MB</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Peak memory usage</b>
            <span>{{ '%.1f'|format(collector.memory / 1024 / 1024) }} MB</span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <b>PHP memory limit</b>
            <span>{{ collector.memoryLimit == -1 ? 'Unlimited' : '%.0f MB'|format(collector.memoryLimit / 1024 / 1024) }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, name: 'time', status: status_color }) }}
{% endblock %}
", "@WebProfiler/Collector/memory.html.twig", "/home/uniceub/Documents/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/memory.html.twig");
    }
}
