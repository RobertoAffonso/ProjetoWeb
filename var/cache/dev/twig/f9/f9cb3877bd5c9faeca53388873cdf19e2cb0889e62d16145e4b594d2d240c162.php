<?php

/* projetoWeb/meuChamado.html.twig */
class __TwigTemplate_f14793c55cd8267ea45b9d6fc8748e5b4c61e8a1296ac858f1bb2bc30c27867c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/meuChamado.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mainTheme.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_368e1e34f2f8275d4d5b8e8c50d2e4aa3c1f004037ddc7198698b15dc6b1dfbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368e1e34f2f8275d4d5b8e8c50d2e4aa3c1f004037ddc7198698b15dc6b1dfbd->enter($__internal_368e1e34f2f8275d4d5b8e8c50d2e4aa3c1f004037ddc7198698b15dc6b1dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/meuChamado.html.twig"));

        $__internal_e6a5e5f079ec72c431b931e2b270b1101043d53647dba382685c8d94d836023f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6a5e5f079ec72c431b931e2b270b1101043d53647dba382685c8d94d836023f->enter($__internal_e6a5e5f079ec72c431b931e2b270b1101043d53647dba382685c8d94d836023f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/meuChamado.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_368e1e34f2f8275d4d5b8e8c50d2e4aa3c1f004037ddc7198698b15dc6b1dfbd->leave($__internal_368e1e34f2f8275d4d5b8e8c50d2e4aa3c1f004037ddc7198698b15dc6b1dfbd_prof);

        
        $__internal_e6a5e5f079ec72c431b931e2b270b1101043d53647dba382685c8d94d836023f->leave($__internal_e6a5e5f079ec72c431b931e2b270b1101043d53647dba382685c8d94d836023f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_59a7b25932880cc821ad24648d45e643ea11ebd7f0077b45d736214da08b6a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59a7b25932880cc821ad24648d45e643ea11ebd7f0077b45d736214da08b6a96->enter($__internal_59a7b25932880cc821ad24648d45e643ea11ebd7f0077b45d736214da08b6a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52848a5d0abeea378702b6eaaba089233419402476d60a8df49710dc2cb6d141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52848a5d0abeea378702b6eaaba089233419402476d60a8df49710dc2cb6d141->enter($__internal_52848a5d0abeea378702b6eaaba089233419402476d60a8df49710dc2cb6d141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "nome", array()), "html", null, true);
        
        $__internal_52848a5d0abeea378702b6eaaba089233419402476d60a8df49710dc2cb6d141->leave($__internal_52848a5d0abeea378702b6eaaba089233419402476d60a8df49710dc2cb6d141_prof);

        
        $__internal_59a7b25932880cc821ad24648d45e643ea11ebd7f0077b45d736214da08b6a96->leave($__internal_59a7b25932880cc821ad24648d45e643ea11ebd7f0077b45d736214da08b6a96_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29f0b49bfede796620cc6947dd188b94b690d586192aaf4f5b08b65521cdf324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29f0b49bfede796620cc6947dd188b94b690d586192aaf4f5b08b65521cdf324->enter($__internal_29f0b49bfede796620cc6947dd188b94b690d586192aaf4f5b08b65521cdf324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_520a2bf22022fc47886dbea132e34113a20d82d120bb9ff894b0957335636a35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520a2bf22022fc47886dbea132e34113a20d82d120bb9ff894b0957335636a35->enter($__internal_520a2bf22022fc47886dbea132e34113a20d82d120bb9ff894b0957335636a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!-- Main content -->
    <section class=\"content\">
            <!-- /.col -->
            <div class=\"col-md-9\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Visualizar Chamado</h3>

                        <div class=\"box-tools pull-right\">
                            <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Previous\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        <div class=\"mailbox-read-info\">
                            <h3>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "nome", array()), "html", null, true);
        echo "</h3>
                            <h5><strong>Emissor:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "getEmissor", array(), "method"), "html", null, true);
        echo "
                                <span class=\"mailbox-read-time pull-right\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "dataCriacao", array()), "html", null, true);
        echo "</span></h5>
                            <h5><span class=\"mailbox-read-time pull-right\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "numero", array()), "html", null, true);
        echo " </span></h5>
                            <h5><strong>Etapa: </strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "etapa", array()), "html", null, true);
        echo "</h5>

                        </div>
                        <!-- /.mailbox-read-info -->
                        <!-- /.mailbox-controls -->
                        <div class=\"mailbox-read-message\">
                            <p>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "descricao", array()), "html", null, true);
        echo "</p>
                            <p>Data Limite: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["chamado"] ?? $this->getContext($context, "chamado")), "dataLimite", array()), "html", null, true);
        echo "</p>
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-footer -->
                    <div class=\"box-footer\">
                        <div class=\"pull-right\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> Devolver Chamado</button>
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-share\"></i> Finalizar Chamado</button>
                        </div>
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i> Delete</button>
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
";
        
        $__internal_520a2bf22022fc47886dbea132e34113a20d82d120bb9ff894b0957335636a35->leave($__internal_520a2bf22022fc47886dbea132e34113a20d82d120bb9ff894b0957335636a35_prof);

        
        $__internal_29f0b49bfede796620cc6947dd188b94b690d586192aaf4f5b08b65521cdf324->leave($__internal_29f0b49bfede796620cc6947dd188b94b690d586192aaf4f5b08b65521cdf324_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/meuChamado.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  111 => 32,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'mainTheme.html.twig' %}

{% block title %}{{ chamado.nome }}{% endblock %}

{% block body %}
    <!-- Main content -->
    <section class=\"content\">
            <!-- /.col -->
            <div class=\"col-md-9\">
                <div class=\"box box-primary\">
                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">Visualizar Chamado</h3>

                        <div class=\"box-tools pull-right\">
                            <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Previous\"><i class=\"fa fa-chevron-left\"></i></a>
                            <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Next\"><i class=\"fa fa-chevron-right\"></i></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class=\"box-body no-padding\">
                        <div class=\"mailbox-read-info\">
                            <h3>{{ chamado.nome }}</h3>
                            <h5><strong>Emissor:</strong> {{ chamado.getEmissor() }}
                                <span class=\"mailbox-read-time pull-right\">{{ chamado.dataCriacao }}</span></h5>
                            <h5><span class=\"mailbox-read-time pull-right\">{{ chamado.numero }} </span></h5>
                            <h5><strong>Etapa: </strong>{{ chamado.etapa }}</h5>

                        </div>
                        <!-- /.mailbox-read-info -->
                        <!-- /.mailbox-controls -->
                        <div class=\"mailbox-read-message\">
                            <p>{{ chamado.descricao }}</p>
                            <p>Data Limite: {{ chamado.dataLimite }}</p>
                        </div>
                        <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-footer -->
                    <div class=\"box-footer\">
                        <div class=\"pull-right\">
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> Devolver Chamado</button>
                            <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-share\"></i> Finalizar Chamado</button>
                        </div>
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-trash-o\"></i> Delete</button>
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-print\"></i> Print</button>
                    </div>
                    <!-- /.box-footer -->
                </div>
                <!-- /. box -->
            </div>
            <!-- /.col -->
{% endblock %}", "projetoWeb/meuChamado.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/meuChamado.html.twig");
    }
}
