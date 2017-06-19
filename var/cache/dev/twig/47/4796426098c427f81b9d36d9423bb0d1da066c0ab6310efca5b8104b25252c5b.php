<?php

/* projetoWeb/index.html.twig */
class __TwigTemplate_7e102e78d16ae54e6a8cc047d75f0d24bf5f58538df3ab83a1f6fca5cbee63a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/index.html.twig", 1);
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
        $__internal_28f42a90eaa858e34378f9ecc84bcc009528de69cd119c914ae9b0d6e0facd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f42a90eaa858e34378f9ecc84bcc009528de69cd119c914ae9b0d6e0facd14->enter($__internal_28f42a90eaa858e34378f9ecc84bcc009528de69cd119c914ae9b0d6e0facd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/index.html.twig"));

        $__internal_3b32a014a1e57a6bc89331ec682a3c7ec424d0b87fc89e7db42b0b07adcf78e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b32a014a1e57a6bc89331ec682a3c7ec424d0b87fc89e7db42b0b07adcf78e3->enter($__internal_3b32a014a1e57a6bc89331ec682a3c7ec424d0b87fc89e7db42b0b07adcf78e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f42a90eaa858e34378f9ecc84bcc009528de69cd119c914ae9b0d6e0facd14->leave($__internal_28f42a90eaa858e34378f9ecc84bcc009528de69cd119c914ae9b0d6e0facd14_prof);

        
        $__internal_3b32a014a1e57a6bc89331ec682a3c7ec424d0b87fc89e7db42b0b07adcf78e3->leave($__internal_3b32a014a1e57a6bc89331ec682a3c7ec424d0b87fc89e7db42b0b07adcf78e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_06f928e89ce138c0ccf32da9ae6f7cffe8089936b6fbedcc5c769d4b298c15bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06f928e89ce138c0ccf32da9ae6f7cffe8089936b6fbedcc5c769d4b298c15bd->enter($__internal_06f928e89ce138c0ccf32da9ae6f7cffe8089936b6fbedcc5c769d4b298c15bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7d684d096f4702443302bb1d490d28a89983b4a57d893bc853607aa850efd427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d684d096f4702443302bb1d490d28a89983b4a57d893bc853607aa850efd427->enter($__internal_7d684d096f4702443302bb1d490d28a89983b4a57d893bc853607aa850efd427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meus Chamados";
        
        $__internal_7d684d096f4702443302bb1d490d28a89983b4a57d893bc853607aa850efd427->leave($__internal_7d684d096f4702443302bb1d490d28a89983b4a57d893bc853607aa850efd427_prof);

        
        $__internal_06f928e89ce138c0ccf32da9ae6f7cffe8089936b6fbedcc5c769d4b298c15bd->leave($__internal_06f928e89ce138c0ccf32da9ae6f7cffe8089936b6fbedcc5c769d4b298c15bd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4376c806e1f952287fdf5d3cd5e7e966078be1e5254bbcedf24fcf32e230bab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4376c806e1f952287fdf5d3cd5e7e966078be1e5254bbcedf24fcf32e230bab4->enter($__internal_4376c806e1f952287fdf5d3cd5e7e966078be1e5254bbcedf24fcf32e230bab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4fe4ea223eacfafed8258f1e9609c97d9579b5e2a8d6cb7476add7378883f6fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe4ea223eacfafed8258f1e9609c97d9579b5e2a8d6cb7476add7378883f6fa->enter($__internal_4fe4ea223eacfafed8258f1e9609c97d9579b5e2a8d6cb7476add7378883f6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Bem Vindo!
                <small>Sistema de Chamados</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- TABLE: LATEST ORDERS -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Meus Chamados</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table no-margin\">
                            <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Setor</th>
                                <th>Fila</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["meusChamados"] ?? $this->getContext($context, "meusChamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["mChamados"]) {
            // line 49
            echo "                                <tr>
                                    <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["mChamados"], "id", array()), "html", null, true);
            echo "</td>
                                    <td></td>
                                </tr>
                           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mChamados'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>
            <div>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Chamados Abertos</h3>

                                <div class=\"box-tools pull-right\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body table-responsive no-padding\">
                                <table class=\"table table-hover\">
                                    <tr>
                                        <th>Número</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Setor</th>
                                        <th>Fila</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                        <th>Devolver</th>
                                    </tr>
                                        ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chamados"] ?? $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            // line 97
            echo "                                         <tr>
                                            <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "id", array()), "html", null, true);
            echo "</td>
                                             <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "nome", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "descricao", array()), "html", null, true);
            echo "</td>
                                             <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "setor", array()), "html", null, true);
            echo "</td>
                                             <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "fila", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["chamado"], "dataLimite", array()), "m/d/Y"), "html", null, true);
            echo "</td>
                                             <td><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meu_chamado", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info btn-flat pull-left\">Atender</a></td>
                                             <td><a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("devolver_chamado", array("id" => $this->getAttribute($context["chamado"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info btn-flat pull-left\">Devolver</a></td>
                                         </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("NovoChamado");
        echo "\" class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
            <!-- /.box -->
    </div>
    <!-- /.col -->
";
        
        $__internal_4fe4ea223eacfafed8258f1e9609c97d9579b5e2a8d6cb7476add7378883f6fa->leave($__internal_4fe4ea223eacfafed8258f1e9609c97d9579b5e2a8d6cb7476add7378883f6fa_prof);

        
        $__internal_4376c806e1f952287fdf5d3cd5e7e966078be1e5254bbcedf24fcf32e230bab4->leave($__internal_4376c806e1f952287fdf5d3cd5e7e966078be1e5254bbcedf24fcf32e230bab4_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 110,  217 => 108,  208 => 105,  204 => 104,  200 => 103,  196 => 102,  192 => 101,  188 => 100,  184 => 99,  180 => 98,  177 => 97,  173 => 96,  129 => 54,  119 => 50,  116 => 49,  112 => 48,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Meus Chamados{% endblock %}

{% block body %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Bem Vindo!
                <small>Sistema de Chamados</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Level</a></li>
                <li class=\"active\">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">

            <!-- TABLE: LATEST ORDERS -->
            <div class=\"box box-info\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Meus Chamados</h3>

                    <div class=\"box-tools pull-right\">
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                        </button>
                        <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"table-responsive\">
                        <table class=\"table no-margin\">
                            <thead>
                            <tr>
                                <th>Número</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Setor</th>
                                <th>Fila</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for mChamados in meusChamados %}
                                <tr>
                                    <td>{{ mChamados.id }}</td>
                                    <td></td>
                                </tr>
                           {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    <div>
                    </div>
                </div>
                <!-- /.box-body -->

            </div>
            <div>
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"box\">
                            <div class=\"box-header\">
                                <h3 class=\"box-title\">Chamados Abertos</h3>

                                <div class=\"box-tools pull-right\">
                                    <div class=\"input-group input-group-sm\" style=\"width: 150px;\">
                                        <input type=\"text\" name=\"table_search\" class=\"form-control pull-right\" placeholder=\"Search\">
                                        <div class=\"input-group-btn\">
                                            <button type=\"submit\" class=\"btn btn-default\"><i class=\"fa fa-search\"></i></button>
                                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i>
                                            </button>
                                            <button type=\"button\" class=\"btn btn-box-tool\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class=\"box-body table-responsive no-padding\">
                                <table class=\"table table-hover\">
                                    <tr>
                                        <th>Número</th>
                                        <th>Nome</th>
                                        <th>Descrição</th>
                                        <th>Setor</th>
                                        <th>Fila</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                        <th>Devolver</th>
                                    </tr>
                                        {% for chamado in chamados %}
                                         <tr>
                                            <td>{{ chamado.id }}</td>
                                             <td>{{ chamado.nome }}</td>
                                            <td>{{ chamado.descricao }}</td>
                                             <td>{{ chamado.setor }}</td>
                                             <td>{{ chamado.fila }}</td>
                                            <td>{{ chamado.dataLimite|date(\"m/d/Y\") }}</td>
                                             <td><a href=\"{{ path('meu_chamado', {'id' : chamado.id}) }}\" class=\"btn btn-sm btn-info btn-flat pull-left\">Atender</a></td>
                                             <td><a href=\"{{ path('devolver_chamado', {'id' : chamado.id}) }}\" class=\"btn btn-sm btn-info btn-flat pull-left\">Devolver</a></td>
                                         </tr>
                                        {% endfor %}
                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=\"{{ path('NovoChamado') }}\" class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
            <!-- /.box -->
    </div>
    <!-- /.col -->
{% endblock %}", "projetoWeb/index.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/index.html.twig");
    }
}
