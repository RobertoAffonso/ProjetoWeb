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
        $__internal_1d9a52fdff7281685fdf18e3b8103133bb664129930d76dba01f0a4efb5bfce4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d9a52fdff7281685fdf18e3b8103133bb664129930d76dba01f0a4efb5bfce4->enter($__internal_1d9a52fdff7281685fdf18e3b8103133bb664129930d76dba01f0a4efb5bfce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/index.html.twig"));

        $__internal_4b4bfd60989c1bf208944152965eec402c06b5aacabc322d067b638ea28a8b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4bfd60989c1bf208944152965eec402c06b5aacabc322d067b638ea28a8b0c->enter($__internal_4b4bfd60989c1bf208944152965eec402c06b5aacabc322d067b638ea28a8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d9a52fdff7281685fdf18e3b8103133bb664129930d76dba01f0a4efb5bfce4->leave($__internal_1d9a52fdff7281685fdf18e3b8103133bb664129930d76dba01f0a4efb5bfce4_prof);

        
        $__internal_4b4bfd60989c1bf208944152965eec402c06b5aacabc322d067b638ea28a8b0c->leave($__internal_4b4bfd60989c1bf208944152965eec402c06b5aacabc322d067b638ea28a8b0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e453dd03fb83f54ac8484283f396464d081c382bdaae0e2db57c843e67d0c4b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e453dd03fb83f54ac8484283f396464d081c382bdaae0e2db57c843e67d0c4b4->enter($__internal_e453dd03fb83f54ac8484283f396464d081c382bdaae0e2db57c843e67d0c4b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d769fa74e14829a67e519c9649df77bea858b73806c9b65b77b282d6b10c86e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d769fa74e14829a67e519c9649df77bea858b73806c9b65b77b282d6b10c86e0->enter($__internal_d769fa74e14829a67e519c9649df77bea858b73806c9b65b77b282d6b10c86e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meus Chamados";
        
        $__internal_d769fa74e14829a67e519c9649df77bea858b73806c9b65b77b282d6b10c86e0->leave($__internal_d769fa74e14829a67e519c9649df77bea858b73806c9b65b77b282d6b10c86e0_prof);

        
        $__internal_e453dd03fb83f54ac8484283f396464d081c382bdaae0e2db57c843e67d0c4b4->leave($__internal_e453dd03fb83f54ac8484283f396464d081c382bdaae0e2db57c843e67d0c4b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5cdebab0ae632853e7fbb0efac253480b84154151bc646dbd0d33b4540b08f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cdebab0ae632853e7fbb0efac253480b84154151bc646dbd0d33b4540b08f3->enter($__internal_e5cdebab0ae632853e7fbb0efac253480b84154151bc646dbd0d33b4540b08f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b266e310b42c93a54c0a4242a1198f980e2fae6bb003ac5327554f63e5ecaa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b266e310b42c93a54c0a4242a1198f980e2fae6bb003ac5327554f63e5ecaa1->enter($__internal_2b266e310b42c93a54c0a4242a1198f980e2fae6bb003ac5327554f63e5ecaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <th>Número do Chamado</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Data de Envio</th>
                                <th>Etapa</th>
                                <th>Enviado por:</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
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
                                        <th>Data de Envio</th>
                                        <th>Etapa</th>
                                        <th>Enviado por:</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                    </tr>
                                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["chamados"] ?? $this->getContext($context, "chamados")));
        foreach ($context['_seq'] as $context["_key"] => $context["chamado"]) {
            // line 95
            echo "                                         <tr>
                                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "numero", array()), "html", null, true);
            echo "</td>
                                             <td>
                                                 <a href=";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("meu_chamado", array("nomeChamado" => $this->getAttribute($context["chamado"], "nome", array()))), "html", null, true);
            echo ">
                                                 ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "nome", array()), "html", null, true);
            echo "
                                                 </a>
                                             </td>
                                            <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "descricao", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "dataCriacao", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "etapa", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "emissor", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["chamado"], "dataLimite", array()), "html", null, true);
            echo "</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                         </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chamado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=";
        // line 112
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("CriarChamado");
        echo " class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-default btn-flat pull-right\">Visualizar Todos os Chamados</a>
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
        
        $__internal_2b266e310b42c93a54c0a4242a1198f980e2fae6bb003ac5327554f63e5ecaa1->leave($__internal_2b266e310b42c93a54c0a4242a1198f980e2fae6bb003ac5327554f63e5ecaa1_prof);

        
        $__internal_e5cdebab0ae632853e7fbb0efac253480b84154151bc646dbd0d33b4540b08f3->leave($__internal_e5cdebab0ae632853e7fbb0efac253480b84154151bc646dbd0d33b4540b08f3_prof);

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
        return array (  210 => 112,  206 => 110,  196 => 106,  192 => 105,  188 => 104,  184 => 103,  180 => 102,  174 => 99,  170 => 98,  165 => 96,  162 => 95,  158 => 94,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                <th>Número do Chamado</th>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Data de Envio</th>
                                <th>Etapa</th>
                                <th>Enviado por:</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
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
                                        <th>Data de Envio</th>
                                        <th>Etapa</th>
                                        <th>Enviado por:</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                    </tr>
                                        {% for chamado in chamados %}
                                         <tr>
                                            <td>{{ chamado.numero }}</td>
                                             <td>
                                                 <a href={{ path('meu_chamado', {'nomeChamado' : chamado.nome}) }}>
                                                 {{ chamado.nome }}
                                                 </a>
                                             </td>
                                            <td>{{ chamado.descricao }}</td>
                                            <td>{{ chamado.dataCriacao }}</td>
                                            <td>{{ chamado.etapa }}</td>
                                            <td>{{ chamado.emissor }}</td>
                                            <td>{{ chamado.dataLimite }}</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                         </tr>
                                        {% endfor %}
                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href={{ path('CriarChamado') }} class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-default btn-flat pull-right\">Visualizar Todos os Chamados</a>
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
{% endblock %}", "projetoWeb/index.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/index.html.twig");
    }
}