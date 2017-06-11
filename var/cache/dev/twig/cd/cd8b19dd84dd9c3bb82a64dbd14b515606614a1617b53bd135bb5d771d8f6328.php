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
        $__internal_1dcbd3c592177cd3ec35a1b8ad02c1a77c3b6e6aded9577ad961fd9a368b1248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dcbd3c592177cd3ec35a1b8ad02c1a77c3b6e6aded9577ad961fd9a368b1248->enter($__internal_1dcbd3c592177cd3ec35a1b8ad02c1a77c3b6e6aded9577ad961fd9a368b1248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_98ac130f47c5aa49381878088b906a534ac819ee86440344bde898af3f891526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ac130f47c5aa49381878088b906a534ac819ee86440344bde898af3f891526->enter($__internal_98ac130f47c5aa49381878088b906a534ac819ee86440344bde898af3f891526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dcbd3c592177cd3ec35a1b8ad02c1a77c3b6e6aded9577ad961fd9a368b1248->leave($__internal_1dcbd3c592177cd3ec35a1b8ad02c1a77c3b6e6aded9577ad961fd9a368b1248_prof);

        
        $__internal_98ac130f47c5aa49381878088b906a534ac819ee86440344bde898af3f891526->leave($__internal_98ac130f47c5aa49381878088b906a534ac819ee86440344bde898af3f891526_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_760b77ee0b30ab6791832f5b231574031edbe92ccaaa8930b1ee729bb4ac3a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_760b77ee0b30ab6791832f5b231574031edbe92ccaaa8930b1ee729bb4ac3a8c->enter($__internal_760b77ee0b30ab6791832f5b231574031edbe92ccaaa8930b1ee729bb4ac3a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4449125bb2abb5e425e36fc5901f054cab41dddcafb2be81bec94eb359548bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4449125bb2abb5e425e36fc5901f054cab41dddcafb2be81bec94eb359548bf->enter($__internal_e4449125bb2abb5e425e36fc5901f054cab41dddcafb2be81bec94eb359548bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4449125bb2abb5e425e36fc5901f054cab41dddcafb2be81bec94eb359548bf->leave($__internal_e4449125bb2abb5e425e36fc5901f054cab41dddcafb2be81bec94eb359548bf_prof);

        
        $__internal_760b77ee0b30ab6791832f5b231574031edbe92ccaaa8930b1ee729bb4ac3a8c->leave($__internal_760b77ee0b30ab6791832f5b231574031edbe92ccaaa8930b1ee729bb4ac3a8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_316fa3edfbcd6e4ec9e6036afc4a305af9d03f82932f0c87e4601b191b9b25ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_316fa3edfbcd6e4ec9e6036afc4a305af9d03f82932f0c87e4601b191b9b25ca->enter($__internal_316fa3edfbcd6e4ec9e6036afc4a305af9d03f82932f0c87e4601b191b9b25ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8d628a07da4dc32b155b5b36207601857e8fa0b66fe5265970971d6febe07e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d628a07da4dc32b155b5b36207601857e8fa0b66fe5265970971d6febe07e5f->enter($__internal_8d628a07da4dc32b155b5b36207601857e8fa0b66fe5265970971d6febe07e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8d628a07da4dc32b155b5b36207601857e8fa0b66fe5265970971d6febe07e5f->leave($__internal_8d628a07da4dc32b155b5b36207601857e8fa0b66fe5265970971d6febe07e5f_prof);

        
        $__internal_316fa3edfbcd6e4ec9e6036afc4a305af9d03f82932f0c87e4601b191b9b25ca->leave($__internal_316fa3edfbcd6e4ec9e6036afc4a305af9d03f82932f0c87e4601b191b9b25ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d114145d82bf7f2dc587cdaff81a90d72957516a0e4c3a40a104c9b82faad16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d114145d82bf7f2dc587cdaff81a90d72957516a0e4c3a40a104c9b82faad16->enter($__internal_8d114145d82bf7f2dc587cdaff81a90d72957516a0e4c3a40a104c9b82faad16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7d881070d0eccb188d679de2fa1dc50722db580dee7cfc0d069a34988db88cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d881070d0eccb188d679de2fa1dc50722db580dee7cfc0d069a34988db88cfc->enter($__internal_7d881070d0eccb188d679de2fa1dc50722db580dee7cfc0d069a34988db88cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7d881070d0eccb188d679de2fa1dc50722db580dee7cfc0d069a34988db88cfc->leave($__internal_7d881070d0eccb188d679de2fa1dc50722db580dee7cfc0d069a34988db88cfc_prof);

        
        $__internal_8d114145d82bf7f2dc587cdaff81a90d72957516a0e4c3a40a104c9b82faad16->leave($__internal_8d114145d82bf7f2dc587cdaff81a90d72957516a0e4c3a40a104c9b82faad16_prof);

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
