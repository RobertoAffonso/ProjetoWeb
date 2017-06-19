<?php

/* projetoWeb/gerenciarContas.html.twig */
class __TwigTemplate_d91e4ca6e897b2891ef5057b9894b723fa8e5462f3066839c3b8f3c2af983125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mainTheme.html.twig", "projetoWeb/gerenciarContas.html.twig", 1);
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
        $__internal_f4489caa31f95c0806243ffcbe94483cad95540f74b9b85f92e39bcb650934bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4489caa31f95c0806243ffcbe94483cad95540f74b9b85f92e39bcb650934bf->enter($__internal_f4489caa31f95c0806243ffcbe94483cad95540f74b9b85f92e39bcb650934bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $__internal_150d239aeb53ba61bd009fc378d7c96d75e509280743042c76e404a023a5ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d239aeb53ba61bd009fc378d7c96d75e509280743042c76e404a023a5ed5a->enter($__internal_150d239aeb53ba61bd009fc378d7c96d75e509280743042c76e404a023a5ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4489caa31f95c0806243ffcbe94483cad95540f74b9b85f92e39bcb650934bf->leave($__internal_f4489caa31f95c0806243ffcbe94483cad95540f74b9b85f92e39bcb650934bf_prof);

        
        $__internal_150d239aeb53ba61bd009fc378d7c96d75e509280743042c76e404a023a5ed5a->leave($__internal_150d239aeb53ba61bd009fc378d7c96d75e509280743042c76e404a023a5ed5a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6644573d26b2859fe2402963b0311087c30576cca4f30bc15332f0b686734987 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6644573d26b2859fe2402963b0311087c30576cca4f30bc15332f0b686734987->enter($__internal_6644573d26b2859fe2402963b0311087c30576cca4f30bc15332f0b686734987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e325d27077cc8870f0f32fd0c0b42f861485b317e0da9ab793843a58316d1aca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e325d27077cc8870f0f32fd0c0b42f861485b317e0da9ab793843a58316d1aca->enter($__internal_e325d27077cc8870f0f32fd0c0b42f861485b317e0da9ab793843a58316d1aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gerenciar Usuários";
        
        $__internal_e325d27077cc8870f0f32fd0c0b42f861485b317e0da9ab793843a58316d1aca->leave($__internal_e325d27077cc8870f0f32fd0c0b42f861485b317e0da9ab793843a58316d1aca_prof);

        
        $__internal_6644573d26b2859fe2402963b0311087c30576cca4f30bc15332f0b686734987->leave($__internal_6644573d26b2859fe2402963b0311087c30576cca4f30bc15332f0b686734987_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b433234759e43d458fdbe834732155f746431ecd488d0c4fff4f7d9f5b9cb997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b433234759e43d458fdbe834732155f746431ecd488d0c4fff4f7d9f5b9cb997->enter($__internal_b433234759e43d458fdbe834732155f746431ecd488d0c4fff4f7d9f5b9cb997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2f5809b68e26482f05ac9ccf0a336d27c672c5e37c5c660b8fd993e4ef3f592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2f5809b68e26482f05ac9ccf0a336d27c672c5e37c5c660b8fd993e4ef3f592->enter($__internal_e2f5809b68e26482f05ac9ccf0a336d27c672c5e37c5c660b8fd993e4ef3f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>CPF</th>
                                        <th>Senha</th>
                                        <th>Data de Nascimento</th>
                                        <th>Admin</th>
                                    </tr>
                                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 52
            echo "                                        <tr>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nome", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "cpf", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "senha", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "admin", array()), "html", null, true);
            echo "</td>
                                            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("DeletarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn-app\">Deletar</a></td>
                                            <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EditarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("NovoUsuario");
        echo " class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Usuário</a>
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
        
        $__internal_e2f5809b68e26482f05ac9ccf0a336d27c672c5e37c5c660b8fd993e4ef3f592->leave($__internal_e2f5809b68e26482f05ac9ccf0a336d27c672c5e37c5c660b8fd993e4ef3f592_prof);

        
        $__internal_b433234759e43d458fdbe834732155f746431ecd488d0c4fff4f7d9f5b9cb997->leave($__internal_b433234759e43d458fdbe834732155f746431ecd488d0c4fff4f7d9f5b9cb997_prof);

    }

    public function getTemplateName()
    {
        return "projetoWeb/gerenciarContas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 64,  155 => 62,  146 => 59,  142 => 58,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  122 => 53,  119 => 52,  115 => 51,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

{% block title %}Gerenciar Usuários{% endblock %}

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
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>CPF</th>
                                        <th>Senha</th>
                                        <th>Data de Nascimento</th>
                                        <th>Admin</th>
                                    </tr>
                                        {% for usuario in usuarios %}
                                        <tr>
                                            <td>{{ usuario.nome }}</td>
                                            <td>{{ usuario.email }}</td>
                                            <td>{{ usuario.cpf }}</td>
                                            <td>{{ usuario.senha }}</td>
                                            <td>{{ usuario.admin }}</td>
                                            <td><a href=\"{{ path('DeletarUsuario', {'id': usuario.id}) }}\" class=\"btn-app\">Deletar</a></td>
                                            <td><a href=\"{{ path('EditarUsuario', {'id': usuario.id}) }}\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a></td>
                                        </tr>
                                        {% endfor %}
                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href={{ path('NovoUsuario') }} class=\"btn btn-sm btn-info btn-flat pull-left\">Criar novo Usuário</a>
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
{% endblock %}", "projetoWeb/gerenciarContas.html.twig", "/home/roberto/Documents/ProjetoWeb/app/Resources/views/projetoWeb/gerenciarContas.html.twig");
    }
}
