<?php

/* projetoWeb/criarFilas.html.twig */
class __TwigTemplate_b14470e40d426116741279487e361aeed48001a5384cae2011927f962dbe458c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/criarFilas.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_02b6243ecd6aeb8289d6cd4de02f2be9579ab18214f2395beda0975215e83e2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b6243ecd6aeb8289d6cd4de02f2be9579ab18214f2395beda0975215e83e2b->enter($__internal_02b6243ecd6aeb8289d6cd4de02f2be9579ab18214f2395beda0975215e83e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarFilas.html.twig"));

        $__internal_50e8d054b60822a73ace826b1f0fbb172cc63a3cec8c9c6faec84044dcb3bc67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e8d054b60822a73ace826b1f0fbb172cc63a3cec8c9c6faec84044dcb3bc67->enter($__internal_50e8d054b60822a73ace826b1f0fbb172cc63a3cec8c9c6faec84044dcb3bc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/criarFilas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b6243ecd6aeb8289d6cd4de02f2be9579ab18214f2395beda0975215e83e2b->leave($__internal_02b6243ecd6aeb8289d6cd4de02f2be9579ab18214f2395beda0975215e83e2b_prof);

        
        $__internal_50e8d054b60822a73ace826b1f0fbb172cc63a3cec8c9c6faec84044dcb3bc67->leave($__internal_50e8d054b60822a73ace826b1f0fbb172cc63a3cec8c9c6faec84044dcb3bc67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_586209a6b440e41a5b4a51d60820c072d51747be232539eede826e14918ea8dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_586209a6b440e41a5b4a51d60820c072d51747be232539eede826e14918ea8dd->enter($__internal_586209a6b440e41a5b4a51d60820c072d51747be232539eede826e14918ea8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_13b3d6e9c7c7776e91c0cf03624813a5250829f5ae9ea0ff273ac39f8ac4b669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b3d6e9c7c7776e91c0cf03624813a5250829f5ae9ea0ff273ac39f8ac4b669->enter($__internal_13b3d6e9c7c7776e91c0cf03624813a5250829f5ae9ea0ff273ac39f8ac4b669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Criar Filas";
        
        $__internal_13b3d6e9c7c7776e91c0cf03624813a5250829f5ae9ea0ff273ac39f8ac4b669->leave($__internal_13b3d6e9c7c7776e91c0cf03624813a5250829f5ae9ea0ff273ac39f8ac4b669_prof);

        
        $__internal_586209a6b440e41a5b4a51d60820c072d51747be232539eede826e14918ea8dd->leave($__internal_586209a6b440e41a5b4a51d60820c072d51747be232539eede826e14918ea8dd_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/criarFilas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends'mainTheme.html.twig' %}

{% block title %}Criar Filas{% endblock %}

", "projetoWeb/criarFilas.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/criarFilas.html.twig");
    }
}
