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
        $__internal_248aaaa0b60c152d6028c4a766a5bdf6a8e1d9e24b9c24297c00ad56c592fd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248aaaa0b60c152d6028c4a766a5bdf6a8e1d9e24b9c24297c00ad56c592fd14->enter($__internal_248aaaa0b60c152d6028c4a766a5bdf6a8e1d9e24b9c24297c00ad56c592fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_33c57502478c80f40c04e62aeb823a58d352aa47b2724c7d95ed036916b0b2a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c57502478c80f40c04e62aeb823a58d352aa47b2724c7d95ed036916b0b2a1->enter($__internal_33c57502478c80f40c04e62aeb823a58d352aa47b2724c7d95ed036916b0b2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_248aaaa0b60c152d6028c4a766a5bdf6a8e1d9e24b9c24297c00ad56c592fd14->leave($__internal_248aaaa0b60c152d6028c4a766a5bdf6a8e1d9e24b9c24297c00ad56c592fd14_prof);

        
        $__internal_33c57502478c80f40c04e62aeb823a58d352aa47b2724c7d95ed036916b0b2a1->leave($__internal_33c57502478c80f40c04e62aeb823a58d352aa47b2724c7d95ed036916b0b2a1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bdefc5f3463499998a768b07597814e3de71b6b80a0f8706814814b17fe356d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdefc5f3463499998a768b07597814e3de71b6b80a0f8706814814b17fe356d5->enter($__internal_bdefc5f3463499998a768b07597814e3de71b6b80a0f8706814814b17fe356d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c990c55dfc52bcd9f5b37698c33f80fe51648fdf5bbd605f577d19b45531acdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c990c55dfc52bcd9f5b37698c33f80fe51648fdf5bbd605f577d19b45531acdf->enter($__internal_c990c55dfc52bcd9f5b37698c33f80fe51648fdf5bbd605f577d19b45531acdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c990c55dfc52bcd9f5b37698c33f80fe51648fdf5bbd605f577d19b45531acdf->leave($__internal_c990c55dfc52bcd9f5b37698c33f80fe51648fdf5bbd605f577d19b45531acdf_prof);

        
        $__internal_bdefc5f3463499998a768b07597814e3de71b6b80a0f8706814814b17fe356d5->leave($__internal_bdefc5f3463499998a768b07597814e3de71b6b80a0f8706814814b17fe356d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9be8aa4f80172651fa5f473132549bc734f3258f3b2741ecc9bd7f88ee98e94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be8aa4f80172651fa5f473132549bc734f3258f3b2741ecc9bd7f88ee98e94a->enter($__internal_9be8aa4f80172651fa5f473132549bc734f3258f3b2741ecc9bd7f88ee98e94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8e2254b898f386f8e9c95401f6e72952790cee1f6d12e7983c6147e3ed929622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2254b898f386f8e9c95401f6e72952790cee1f6d12e7983c6147e3ed929622->enter($__internal_8e2254b898f386f8e9c95401f6e72952790cee1f6d12e7983c6147e3ed929622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8e2254b898f386f8e9c95401f6e72952790cee1f6d12e7983c6147e3ed929622->leave($__internal_8e2254b898f386f8e9c95401f6e72952790cee1f6d12e7983c6147e3ed929622_prof);

        
        $__internal_9be8aa4f80172651fa5f473132549bc734f3258f3b2741ecc9bd7f88ee98e94a->leave($__internal_9be8aa4f80172651fa5f473132549bc734f3258f3b2741ecc9bd7f88ee98e94a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb773ce5111a616c3f8013951ebf8b3977ba93d77f70278014ba78db0a14cada = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb773ce5111a616c3f8013951ebf8b3977ba93d77f70278014ba78db0a14cada->enter($__internal_eb773ce5111a616c3f8013951ebf8b3977ba93d77f70278014ba78db0a14cada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bbb7646235f31435e20a764f5dce503b069428ccb4656113b871977e5ebcdff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb7646235f31435e20a764f5dce503b069428ccb4656113b871977e5ebcdff3->enter($__internal_bbb7646235f31435e20a764f5dce503b069428ccb4656113b871977e5ebcdff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bbb7646235f31435e20a764f5dce503b069428ccb4656113b871977e5ebcdff3->leave($__internal_bbb7646235f31435e20a764f5dce503b069428ccb4656113b871977e5ebcdff3_prof);

        
        $__internal_eb773ce5111a616c3f8013951ebf8b3977ba93d77f70278014ba78db0a14cada->leave($__internal_eb773ce5111a616c3f8013951ebf8b3977ba93d77f70278014ba78db0a14cada_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/uniceub/Desktop/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
