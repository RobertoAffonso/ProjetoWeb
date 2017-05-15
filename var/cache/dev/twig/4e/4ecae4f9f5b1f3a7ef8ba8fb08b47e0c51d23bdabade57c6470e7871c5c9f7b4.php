<?php

/* projetoWeb/show.html.twig */
class __TwigTemplate_98b9ed896ff9bdf311b28657a94141cbbdf3adc6f86fdf1d01cce0f88347cb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/show.html.twig", 1);
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
        $__internal_ba7d9bbc51fdd85146c928f05ae2a80517b70d6b7eb6a4a7716e132f6178d4a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7d9bbc51fdd85146c928f05ae2a80517b70d6b7eb6a4a7716e132f6178d4a7->enter($__internal_ba7d9bbc51fdd85146c928f05ae2a80517b70d6b7eb6a4a7716e132f6178d4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/show.html.twig"));

        $__internal_78e7e32cfaf734cd709743b5edbc624bc0442e991e937870f733bf456d637e75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e7e32cfaf734cd709743b5edbc624bc0442e991e937870f733bf456d637e75->enter($__internal_78e7e32cfaf734cd709743b5edbc624bc0442e991e937870f733bf456d637e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba7d9bbc51fdd85146c928f05ae2a80517b70d6b7eb6a4a7716e132f6178d4a7->leave($__internal_ba7d9bbc51fdd85146c928f05ae2a80517b70d6b7eb6a4a7716e132f6178d4a7_prof);

        
        $__internal_78e7e32cfaf734cd709743b5edbc624bc0442e991e937870f733bf456d637e75->leave($__internal_78e7e32cfaf734cd709743b5edbc624bc0442e991e937870f733bf456d637e75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0afcecf26a7aa37b5496e224fc218c65da43c12ee7319a505ad9fffa5bcacf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afcecf26a7aa37b5496e224fc218c65da43c12ee7319a505ad9fffa5bcacf19->enter($__internal_0afcecf26a7aa37b5496e224fc218c65da43c12ee7319a505ad9fffa5bcacf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e6632e908096c184c2176d615a50422a496a98c6da94bd6970690c350a44f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6632e908096c184c2176d615a50422a496a98c6da94bd6970690c350a44f79->enter($__internal_2e6632e908096c184c2176d615a50422a496a98c6da94bd6970690c350a44f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Meus Chamados";
        
        $__internal_2e6632e908096c184c2176d615a50422a496a98c6da94bd6970690c350a44f79->leave($__internal_2e6632e908096c184c2176d615a50422a496a98c6da94bd6970690c350a44f79_prof);

        
        $__internal_0afcecf26a7aa37b5496e224fc218c65da43c12ee7319a505ad9fffa5bcacf19->leave($__internal_0afcecf26a7aa37b5496e224fc218c65da43c12ee7319a505ad9fffa5bcacf19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5d4944d712f7629c91b01e81a0f4ed9392e30cb14ae7fbfa387edb704ee77a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5d4944d712f7629c91b01e81a0f4ed9392e30cb14ae7fbfa387edb704ee77a6->enter($__internal_a5d4944d712f7629c91b01e81a0f4ed9392e30cb14ae7fbfa387edb704ee77a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e030e4523c1f354ca4b733d2b7209b46e801fb14c08fca2a13702dfd006c9ff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e030e4523c1f354ca4b733d2b7209b46e801fb14c08fca2a13702dfd006c9ff2->enter($__internal_e030e4523c1f354ca4b733d2b7209b46e801fb14c08fca2a13702dfd006c9ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                <th>Estado</th>
                                <th>Fila</th>
                                <th>Enviado por:</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OR9842</a></td>
                                <td>Chamado 1</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Verificação de Atestado Médico</bold</td>
                                <td>02-04-2017</td>
                                <td>Primeira Etapa</td>
                                <td><span class=\"label label-success\">Concluido</span></td>
                                <td>Atestado Médico</td>
                                <td>João Ninguém</td>
                                <td>25-04-2017</td>
                            </tr>
                            <tr>
                                <td>OR1848</a></td>
                                <td>Chamado 2</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Curto circuito</bold></td>
                                <td>01-05-2017</td>
                                <td>Primeira Etapa</td>
                                <td><span class=\"label label-warning\">Pendente</span></td>
                                <td>Manutenção</td>
                                <td>Morgan Yu</td>
                                <td>25-05-2017</td>
                            </tr>
                            <tr>
                                <td>OR7429</a></td>
                                <td>Chamado 3</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Reunião Geral</bold</td>
                                <td>10-04-2017</td>
                                <td>Segunda Etapa</td>
                                <td><span class=\"label label-danger\">Atrasado</span></td>
                                <td>Reunião</td>
                                <td>Erick Rennan</td>
                                <td>30-04-2017</td>
                            </tr>
                            <tr>
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
                                        <th>Estado</th>
                                        <th>Fila</th>
                                        <th>Enviado por:</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=\"pages/Chamados/criarChamado.html\" class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
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
        
        $__internal_e030e4523c1f354ca4b733d2b7209b46e801fb14c08fca2a13702dfd006c9ff2->leave($__internal_e030e4523c1f354ca4b733d2b7209b46e801fb14c08fca2a13702dfd006c9ff2_prof);

        
        $__internal_a5d4944d712f7629c91b01e81a0f4ed9392e30cb14ae7fbfa387edb704ee77a6->leave($__internal_a5d4944d712f7629c91b01e81a0f4ed9392e30cb14ae7fbfa387edb704ee77a6_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                <th>Estado</th>
                                <th>Fila</th>
                                <th>Enviado por:</th>
                                <th>Previsão de Término</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>OR9842</a></td>
                                <td>Chamado 1</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Verificação de Atestado Médico</bold</td>
                                <td>02-04-2017</td>
                                <td>Primeira Etapa</td>
                                <td><span class=\"label label-success\">Concluido</span></td>
                                <td>Atestado Médico</td>
                                <td>João Ninguém</td>
                                <td>25-04-2017</td>
                            </tr>
                            <tr>
                                <td>OR1848</a></td>
                                <td>Chamado 2</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Curto circuito</bold></td>
                                <td>01-05-2017</td>
                                <td>Primeira Etapa</td>
                                <td><span class=\"label label-warning\">Pendente</span></td>
                                <td>Manutenção</td>
                                <td>Morgan Yu</td>
                                <td>25-05-2017</td>
                            </tr>
                            <tr>
                                <td>OR7429</a></td>
                                <td>Chamado 3</td>
                                <td><a href=\"pages/Chamados/VisualizarChamados.html\"><bold>Reunião Geral</bold</td>
                                <td>10-04-2017</td>
                                <td>Segunda Etapa</td>
                                <td><span class=\"label label-danger\">Atrasado</span></td>
                                <td>Reunião</td>
                                <td>Erick Rennan</td>
                                <td>30-04-2017</td>
                            </tr>
                            <tr>
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
                                        <th>Estado</th>
                                        <th>Fila</th>
                                        <th>Enviado por:</th>
                                        <th>Previsão de Término</th>
                                        <th>Atender</th>
                                    </tr>
                                    <tr>
                                        <td>183</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>219</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>657</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                    <tr>
                                        <td>175</td>
                                        <td>Troca de Computador</td>
                                        <td>Necessário uma troca de Computador na sala 611</td>
                                        <td>11-7-2014</td>
                                        <td>primeira etapa</td>
                                        <td><span class=\"label label-warning\">Esperando Atendimento</span></td>
                                        <td>Logística</td>
                                        <td>Maria Ninguém</td>
                                        <td>10/05/2017</td>
                                        <td><input type=\"submit\" name=\"adicionar\" value=\"atender\"></td>
                                    </tr>
                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=\"pages/Chamados/criarChamado.html\" class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
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
{% endblock %}", "projetoWeb/show.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/show.html.twig");
    }
}
