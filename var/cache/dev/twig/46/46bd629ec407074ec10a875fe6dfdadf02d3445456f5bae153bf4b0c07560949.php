<?php

/* base.html.twig */
class __TwigTemplate_f03a4114f3bbc06a5a70f78f5c825420debb072cd257afd9f5197056656666db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a188b07da05241af8c50b4b1c1f989d8256a55b48a3c82c06420b270978c5a8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a188b07da05241af8c50b4b1c1f989d8256a55b48a3c82c06420b270978c5a8b->enter($__internal_a188b07da05241af8c50b4b1c1f989d8256a55b48a3c82c06420b270978c5a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e48cf557ceb0490c594642fb1481de181418e47f6ac1b3b5307f0ad9b4f64cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e48cf557ceb0490c594642fb1481de181418e47f6ac1b3b5307f0ad9b4f64cb8->enter($__internal_e48cf557ceb0490c594642fb1481de181418e47f6ac1b3b5307f0ad9b4f64cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a188b07da05241af8c50b4b1c1f989d8256a55b48a3c82c06420b270978c5a8b->leave($__internal_a188b07da05241af8c50b4b1c1f989d8256a55b48a3c82c06420b270978c5a8b_prof);

        
        $__internal_e48cf557ceb0490c594642fb1481de181418e47f6ac1b3b5307f0ad9b4f64cb8->leave($__internal_e48cf557ceb0490c594642fb1481de181418e47f6ac1b3b5307f0ad9b4f64cb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f30a81c520a81ccdf8531d6d5d77c0a783337162c0aabd253228145095f6813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f30a81c520a81ccdf8531d6d5d77c0a783337162c0aabd253228145095f6813->enter($__internal_5f30a81c520a81ccdf8531d6d5d77c0a783337162c0aabd253228145095f6813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_508014ce38b48b245498d15f6cdde792e8562ce2617bb6d13894d66c8e0f518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508014ce38b48b245498d15f6cdde792e8562ce2617bb6d13894d66c8e0f518d->enter($__internal_508014ce38b48b245498d15f6cdde792e8562ce2617bb6d13894d66c8e0f518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_508014ce38b48b245498d15f6cdde792e8562ce2617bb6d13894d66c8e0f518d->leave($__internal_508014ce38b48b245498d15f6cdde792e8562ce2617bb6d13894d66c8e0f518d_prof);

        
        $__internal_5f30a81c520a81ccdf8531d6d5d77c0a783337162c0aabd253228145095f6813->leave($__internal_5f30a81c520a81ccdf8531d6d5d77c0a783337162c0aabd253228145095f6813_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a31778bf4cd876df865b07fe3d77c4da7fb3a379c9c7968f7125f61cafc29858 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31778bf4cd876df865b07fe3d77c4da7fb3a379c9c7968f7125f61cafc29858->enter($__internal_a31778bf4cd876df865b07fe3d77c4da7fb3a379c9c7968f7125f61cafc29858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_63db2be919b64429057ed39119d1ff72412730cf7d3687932efc9f5ed7a8e503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63db2be919b64429057ed39119d1ff72412730cf7d3687932efc9f5ed7a8e503->enter($__internal_63db2be919b64429057ed39119d1ff72412730cf7d3687932efc9f5ed7a8e503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_63db2be919b64429057ed39119d1ff72412730cf7d3687932efc9f5ed7a8e503->leave($__internal_63db2be919b64429057ed39119d1ff72412730cf7d3687932efc9f5ed7a8e503_prof);

        
        $__internal_a31778bf4cd876df865b07fe3d77c4da7fb3a379c9c7968f7125f61cafc29858->leave($__internal_a31778bf4cd876df865b07fe3d77c4da7fb3a379c9c7968f7125f61cafc29858_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_70b55f64c0c042baa5f75a57c9bb1d3109e8e419e7fbdad8a89adadb01abf7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70b55f64c0c042baa5f75a57c9bb1d3109e8e419e7fbdad8a89adadb01abf7ff->enter($__internal_70b55f64c0c042baa5f75a57c9bb1d3109e8e419e7fbdad8a89adadb01abf7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3af6aa9a298a1e13cfae6f43add8d547b392936a19cac46ed3ca0c31ac9ee5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af6aa9a298a1e13cfae6f43add8d547b392936a19cac46ed3ca0c31ac9ee5e4->enter($__internal_3af6aa9a298a1e13cfae6f43add8d547b392936a19cac46ed3ca0c31ac9ee5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3af6aa9a298a1e13cfae6f43add8d547b392936a19cac46ed3ca0c31ac9ee5e4->leave($__internal_3af6aa9a298a1e13cfae6f43add8d547b392936a19cac46ed3ca0c31ac9ee5e4_prof);

        
        $__internal_70b55f64c0c042baa5f75a57c9bb1d3109e8e419e7fbdad8a89adadb01abf7ff->leave($__internal_70b55f64c0c042baa5f75a57c9bb1d3109e8e419e7fbdad8a89adadb01abf7ff_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a34e7b9f7c50c9041aaa665b40041c2fbfc797ba6d2175bf8d60c7a021ddf66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a34e7b9f7c50c9041aaa665b40041c2fbfc797ba6d2175bf8d60c7a021ddf66a->enter($__internal_a34e7b9f7c50c9041aaa665b40041c2fbfc797ba6d2175bf8d60c7a021ddf66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a6af8443115e7ae319d2079dc0af69938f46f44d966d4ef97ca416e6c0389eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6af8443115e7ae319d2079dc0af69938f46f44d966d4ef97ca416e6c0389eed->enter($__internal_a6af8443115e7ae319d2079dc0af69938f46f44d966d4ef97ca416e6c0389eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6af8443115e7ae319d2079dc0af69938f46f44d966d4ef97ca416e6c0389eed->leave($__internal_a6af8443115e7ae319d2079dc0af69938f46f44d966d4ef97ca416e6c0389eed_prof);

        
        $__internal_a34e7b9f7c50c9041aaa665b40041c2fbfc797ba6d2175bf8d60c7a021ddf66a->leave($__internal_a34e7b9f7c50c9041aaa665b40041c2fbfc797ba6d2175bf8d60c7a021ddf66a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/base.html.twig");
    }
}
