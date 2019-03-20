<?php

/* RH/listEmploye.html.twig */
class __TwigTemplate_5fb9eed405dc10c660001626f82e47951cce5c7c4f6aa0aab8ea52d01fc9c3d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RH/listEmploye.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RH/listEmploye.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RH/listEmploye.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
        </br>

            <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("addEmploye");
        echo "\"><button type=\"button\" class=\"btn btn-outline-dark pull-right\"><i class=\"fa fa-plus\"></i></button></a>

        </br>
        <table class=\"table table-hover\">
            <thead>
                <tr class=\"table-active\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Employes"]) || array_key_exists("Employes", $context) ? $context["Employes"] : (function () { throw new Twig_Error_Runtime('Variable "Employes" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Employe"]) {
            // line 21
            echo "                <tr>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "employeNom", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "employePrenom", []), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("viewEmploye", ["id" => twig_get_attribute($this->env, $this->source, $context["Employe"], "idEmploye", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-eye\"></i></a></td>
                    <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("editEmploye", ["id" => twig_get_attribute($this->env, $this->source, $context["Employe"], "idEmploye", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i></a></td>
                    <td><a data-toggle=\"modal\" data-target=\"#exampleModal\" data-id=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Employe"], "idEmploye", []), "html", null, true);
            echo "\" class=\"modalTest\"><i class=\"fa fa-times\"></i></a></td></tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Employe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
        </table>
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Supprimer l'employé ?
                </div>
                <div class=\"modal-footer\" id=\"footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                    <a id=\"aTest\"><button type=\"button\" class=\"btn btn-primary\">Oui</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$(document).on(\"click\", \".modalTest\", function () {
            var myBookId = \$(this).data('id');
            \$(\"#footer #aTest\").attr(\"href\",\"deleteEmploye/\"+myBookId );
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "RH/listEmploye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 28,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  79 => 21,  75 => 20,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}

        </br>

            <a href=\"{{ url('addEmploye') }}\"><button type=\"button\" class=\"btn btn-outline-dark pull-right\"><i class=\"fa fa-plus\"></i></button></a>

        </br>
        <table class=\"table table-hover\">
            <thead>
                <tr class=\"table-active\">
                    <th scope=\"col\">Nom</th>
                    <th scope=\"col\">Prenom</th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
            {% for Employe in Employes%}
                <tr>
                    <td>{{ Employe.employeNom }}</td>
                    <td>{{ Employe.employePrenom }}</td>
                    <td><a href=\"{{ url('viewEmploye', { 'id': Employe.idEmploye }) }}\"><i class=\"fa fa-eye\"></i></a></td>
                    <td><a href=\"{{ url('editEmploye', { 'id': Employe.idEmploye }) }}\"><i class=\"fa fa-pencil\"></i></a></td>
                    <td><a data-toggle=\"modal\" data-target=\"#exampleModal\" data-id=\"{{ Employe.idEmploye }}\" class=\"modalTest\"><i class=\"fa fa-times\"></i></a></td></tr>
            {% endfor %}
            </tbody>
        </table>
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Supprimer l'employé ?
                </div>
                <div class=\"modal-footer\" id=\"footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Non</button>
                    <a id=\"aTest\"><button type=\"button\" class=\"btn btn-primary\">Oui</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        \$(document).on(\"click\", \".modalTest\", function () {
            var myBookId = \$(this).data('id');
            \$(\"#footer #aTest\").attr(\"href\",\"deleteEmploye/\"+myBookId );
        });

    </script>
{% endblock %}", "RH/listEmploye.html.twig", "C:\\Users\\gboisson\\Documents\\Web\\VTC\\VTC-FUTURO\\templates\\RH\\listEmploye.html.twig");
    }
}
