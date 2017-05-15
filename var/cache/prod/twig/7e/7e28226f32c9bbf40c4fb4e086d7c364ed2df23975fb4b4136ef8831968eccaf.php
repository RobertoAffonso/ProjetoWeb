<?php

/* projetoWeb/show.html.twig */
class __TwigTemplate_05f7ead7f0af41d7e46a9872a6d35e89124e153af5c2bb44e0bb2d0a28169bb1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Meus Chamado";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <h1>
                Bem Vindo!
                <small>Sistema de Chamado</small>
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
                    <h3 class=\"box-title\">Meus Chamado</h3>

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
                                <td><a href=\"pages/Chamado/VisualizarChamados.html\"><bold>Verificação de Atestado Médico</bold</td>
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
                                <td><a href=\"pages/Chamado/VisualizarChamados.html\"><bold>Curto circuito</bold></td>
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
                                <td><a href=\"pages/Chamado/VisualizarChamados.html\"><bold>Reunião Geral</bold</td>
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
                                <h3 class=\"box-title\">Chamado Abertos</h3>

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
                                    <a href=\"pages/Chamado/criarChamado.html\" class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Chamado</a>
                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-default btn-flat pull-right\">Visualizar Todos os Chamado</a>
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "projetoWeb/show.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/show.html.twig");
    }
}
