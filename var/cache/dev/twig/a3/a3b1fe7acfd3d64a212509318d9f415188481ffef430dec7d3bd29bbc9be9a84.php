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
        $__internal_6b16e67d0140696d23039801d16bd6fba2fe5983cfeec3b47af5026a3b7ca366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b16e67d0140696d23039801d16bd6fba2fe5983cfeec3b47af5026a3b7ca366->enter($__internal_6b16e67d0140696d23039801d16bd6fba2fe5983cfeec3b47af5026a3b7ca366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $__internal_ea29496af65af2e5359e72b10d459dbb5aba340f5d5e34e27281569b2f34d79e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea29496af65af2e5359e72b10d459dbb5aba340f5d5e34e27281569b2f34d79e->enter($__internal_ea29496af65af2e5359e72b10d459dbb5aba340f5d5e34e27281569b2f34d79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "projetoWeb/gerenciarContas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b16e67d0140696d23039801d16bd6fba2fe5983cfeec3b47af5026a3b7ca366->leave($__internal_6b16e67d0140696d23039801d16bd6fba2fe5983cfeec3b47af5026a3b7ca366_prof);

        
        $__internal_ea29496af65af2e5359e72b10d459dbb5aba340f5d5e34e27281569b2f34d79e->leave($__internal_ea29496af65af2e5359e72b10d459dbb5aba340f5d5e34e27281569b2f34d79e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3e699aa2e70871d49bb58817cfbf9c19b6a2842cc025119eb4c902d6e314f29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e699aa2e70871d49bb58817cfbf9c19b6a2842cc025119eb4c902d6e314f29->enter($__internal_c3e699aa2e70871d49bb58817cfbf9c19b6a2842cc025119eb4c902d6e314f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77c61d9cf76ed4710ea04df835760a72defceb2f950c33fa786d2176b87ce712 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c61d9cf76ed4710ea04df835760a72defceb2f950c33fa786d2176b87ce712->enter($__internal_77c61d9cf76ed4710ea04df835760a72defceb2f950c33fa786d2176b87ce712_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Gerenciar Usuários";
        
        $__internal_77c61d9cf76ed4710ea04df835760a72defceb2f950c33fa786d2176b87ce712->leave($__internal_77c61d9cf76ed4710ea04df835760a72defceb2f950c33fa786d2176b87ce712_prof);

        
        $__internal_c3e699aa2e70871d49bb58817cfbf9c19b6a2842cc025119eb4c902d6e314f29->leave($__internal_c3e699aa2e70871d49bb58817cfbf9c19b6a2842cc025119eb4c902d6e314f29_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c442768f67c54d8d9dad1738aacd4d856c79ab50ca551a8a8e391a7146d4e411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c442768f67c54d8d9dad1738aacd4d856c79ab50ca551a8a8e391a7146d4e411->enter($__internal_c442768f67c54d8d9dad1738aacd4d856c79ab50ca551a8a8e391a7146d4e411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d2ce8f47e3f98704aa34fa3da734065d24a3c83778b62377c49f5a0a92d2a86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2ce8f47e3f98704aa34fa3da734065d24a3c83778b62377c49f5a0a92d2a86->enter($__internal_0d2ce8f47e3f98704aa34fa3da734065d24a3c83778b62377c49f5a0a92d2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                        <th>Admin</th>
                                    </tr>
                                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["usuarios"] ?? $this->getContext($context, "usuarios")));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 51
            echo "                                        <tr>
                                            <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "nome", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "email", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "cpf", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "senha", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["usuario"], "isAdmin", array()), "html", null, true);
            echo "</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"Deletar\"></td>
                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                                </table>
                                <div class=\"box-footer clearfix\">
                                    <a href=";
        // line 62
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
        
        $__internal_0d2ce8f47e3f98704aa34fa3da734065d24a3c83778b62377c49f5a0a92d2a86->leave($__internal_0d2ce8f47e3f98704aa34fa3da734065d24a3c83778b62377c49f5a0a92d2a86_prof);

        
        $__internal_c442768f67c54d8d9dad1738aacd4d856c79ab50ca551a8a8e391a7146d4e411->leave($__internal_c442768f67c54d8d9dad1738aacd4d856c79ab50ca551a8a8e391a7146d4e411_prof);

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
        return array (  151 => 62,  147 => 60,  137 => 56,  133 => 55,  129 => 54,  125 => 53,  121 => 52,  118 => 51,  114 => 50,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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
                                        <th>Admin</th>
                                    </tr>
                                        {% for usuario in usuarios %}
                                        <tr>
                                            <td>{{ usuario.nome }}</td>
                                            <td>{{ usuario.email }}</td>
                                            <td>{{ usuario.cpf }}</td>
                                            <td>{{ usuario.senha }}</td>
                                            <td>{{ usuario.isAdmin }}</td>
                                            <td><input type=\"submit\" name=\"adicionar\" value=\"Deletar\"></td>
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
{% endblock %}", "projetoWeb/gerenciarContas.html.twig", "/home/roberto/ProjetoWeb/app/Resources/views/projetoWeb/gerenciarContas.html.twig");
    }
}
