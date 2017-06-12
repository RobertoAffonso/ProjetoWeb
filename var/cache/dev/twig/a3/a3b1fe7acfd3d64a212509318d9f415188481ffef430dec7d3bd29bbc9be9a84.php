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
        $__internal_bc9a463ed6e8d7bda2b206b0733a5de5f446191a1b0fc5094d8ab3eece402507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9a463ed6e8d7bda2b206b0733a5de5f446191a1b0fc5094d8ab3eece402507->enter($__internal_bc9a463ed6e8d7bda2b206b0733a5de5f446191a1b0fc5094d8ab3eece402507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $__internal_13ac2eeddc5a142f4e279e62b9c89f003026d8384fa380798bf460dc9d557d06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ac2eeddc5a142f4e279e62b9c89f003026d8384fa380798bf460dc9d557d06->enter($__internal_13ac2eeddc5a142f4e279e62b9c89f003026d8384fa380798bf460dc9d557d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc9a463ed6e8d7bda2b206b0733a5de5f446191a1b0fc5094d8ab3eece402507->leave($__internal_bc9a463ed6e8d7bda2b206b0733a5de5f446191a1b0fc5094d8ab3eece402507_prof);

        
        $__internal_13ac2eeddc5a142f4e279e62b9c89f003026d8384fa380798bf460dc9d557d06->leave($__internal_13ac2eeddc5a142f4e279e62b9c89f003026d8384fa380798bf460dc9d557d06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1de61b301f45c79f26754ed91a793e04b7a5340f1625893f41cccaa4a9a60ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de61b301f45c79f26754ed91a793e04b7a5340f1625893f41cccaa4a9a60ec7->enter($__internal_1de61b301f45c79f26754ed91a793e04b7a5340f1625893f41cccaa4a9a60ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3342420f212cd19d5690a63acf06b28ef3d2ac361f8675f134f134280eff8589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3342420f212cd19d5690a63acf06b28ef3d2ac361f8675f134f134280eff8589->enter($__internal_3342420f212cd19d5690a63acf06b28ef3d2ac361f8675f134f134280eff8589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gerenciar Usuários";
        
        $__internal_3342420f212cd19d5690a63acf06b28ef3d2ac361f8675f134f134280eff8589->leave($__internal_3342420f212cd19d5690a63acf06b28ef3d2ac361f8675f134f134280eff8589_prof);

        
        $__internal_1de61b301f45c79f26754ed91a793e04b7a5340f1625893f41cccaa4a9a60ec7->leave($__internal_1de61b301f45c79f26754ed91a793e04b7a5340f1625893f41cccaa4a9a60ec7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e60d31f5a08205294010d049c135e9d1d635f321c3302a471d12a60142c138b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e60d31f5a08205294010d049c135e9d1d635f321c3302a471d12a60142c138b->enter($__internal_8e60d31f5a08205294010d049c135e9d1d635f321c3302a471d12a60142c138b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d040775461ff0fe0dd5b0372684aae244632f109262b6cfc7781fab9ce716ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d040775461ff0fe0dd5b0372684aae244632f109262b6cfc7781fab9ce716ca->enter($__internal_5d040775461ff0fe0dd5b0372684aae244632f109262b6cfc7781fab9ce716ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "dataNascimento", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "admin", array()), "html", null, true);
            echo "</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"Deletar\"></td>
                                            <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("EditarUsuario", array("id" => $this->getAttribute($context["usuario"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs btn-success\"><span class=\"fa fa-pencil\"></span></a></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=";
        // line 65
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
        
        $__internal_5d040775461ff0fe0dd5b0372684aae244632f109262b6cfc7781fab9ce716ca->leave($__internal_5d040775461ff0fe0dd5b0372684aae244632f109262b6cfc7781fab9ce716ca_prof);

        
        $__internal_8e60d31f5a08205294010d049c135e9d1d635f321c3302a471d12a60142c138b->leave($__internal_8e60d31f5a08205294010d049c135e9d1d635f321c3302a471d12a60142c138b_prof);

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
        return array (  160 => 65,  156 => 63,  147 => 60,  142 => 58,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  122 => 53,  119 => 52,  115 => 51,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                            <td>{{ usuario.dataNascimento }}</td>
                                            <td>{{ usuario.admin }}</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"Deletar\"></td>
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
{% endblock %}", "projetoWeb/gerenciarContas.html.twig", "/home/uniceub/Desktop/ProjetoWeb/app/Resources/views/projetoWeb/gerenciarContas.html.twig");
    }
}
