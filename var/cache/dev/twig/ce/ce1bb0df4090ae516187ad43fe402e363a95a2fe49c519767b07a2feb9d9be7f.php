<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_06ea0b59d3dba35debe9668c5d2cede766dd2214812920938df42982b3b2985e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aed1a5c15c561bf651875ec2800c580ecb9bbfb67694f3c6f91be10beedad8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aed1a5c15c561bf651875ec2800c580ecb9bbfb67694f3c6f91be10beedad8f->enter($__internal_8aed1a5c15c561bf651875ec2800c580ecb9bbfb67694f3c6f91be10beedad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_e43da2cf11ba91346a50963c89ee1fe3b14b84088a40d345ed3d421299ba81b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43da2cf11ba91346a50963c89ee1fe3b14b84088a40d345ed3d421299ba81b3->enter($__internal_e43da2cf11ba91346a50963c89ee1fe3b14b84088a40d345ed3d421299ba81b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8aed1a5c15c561bf651875ec2800c580ecb9bbfb67694f3c6f91be10beedad8f->leave($__internal_8aed1a5c15c561bf651875ec2800c580ecb9bbfb67694f3c6f91be10beedad8f_prof);

        
        $__internal_e43da2cf11ba91346a50963c89ee1fe3b14b84088a40d345ed3d421299ba81b3->leave($__internal_e43da2cf11ba91346a50963c89ee1fe3b14b84088a40d345ed3d421299ba81b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/roberto/ProjetoWeb/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
