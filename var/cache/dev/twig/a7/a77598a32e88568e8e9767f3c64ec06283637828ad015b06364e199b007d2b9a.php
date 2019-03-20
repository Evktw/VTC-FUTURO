<?php

/* RH/viewEmploye.html.twig */
class __TwigTemplate_8b304bc260f31fae41e45df3de0c1632c2a4d48b3287da60c877cc436ecde4ca extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RH/viewEmploye.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RH/viewEmploye.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RH/viewEmploye.html.twig"));

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
        echo "    </br>
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("listEmploye");
        echo "\">Liste des employés</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Voir</li>
        </ol>
    </nav>
    </br>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <img height=\"100\" width=\"100\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/User_icon.png"), "html", null, true);
        echo "\">
                </div>
                <div>
                    ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 18, $this->source); })()), "employeNom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 18, $this->source); })()), "employePrenom", []), "html", null, true);
        echo " </br>
                    ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 19, $this->source); })()), "employeTelephone", []), "html", null, true);
        echo "</br>
                    ";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 20, $this->source); })()), "employeMail", []), "html", null, true);
        echo "</br>
                    ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 21, $this->source); })()), "employeAdresse", []), "html", null, true);
        echo "</br>
                    ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 22, $this->source); })()), "employeCp", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Employe"]) || array_key_exists("Employe", $context) ? $context["Employe"] : (function () { throw new Twig_Error_Runtime('Variable "Employe" does not exist.', 22, $this->source); })()), "employeVille", []), "html", null, true);
        echo "</br>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "RH/viewEmploye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  90 => 21,  86 => 20,  82 => 19,  76 => 18,  70 => 15,  58 => 6,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    </br>
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ url('listEmploye') }}\">Liste des employés</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Voir</li>
        </ol>
    </nav>
    </br>
    <div class=\"card\">
        <div class=\"card-body\">
            <div class=\"row\">
                <div class=\"col-1\">
                    <img height=\"100\" width=\"100\" src=\"{{ asset('assets/images/User_icon.png') }}\">
                </div>
                <div>
                    {{ Employe.employeNom }} {{ Employe.employePrenom }} </br>
                    {{ Employe.employeTelephone }}</br>
                    {{ Employe.employeMail }}</br>
                    {{ Employe.employeAdresse }}</br>
                    {{ Employe.employeCp }} {{ Employe.employeVille }}</br>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "RH/viewEmploye.html.twig", "C:\\Users\\gboisson\\Documents\\Web\\VTC\\VTC-FUTURO\\templates\\RH\\viewEmploye.html.twig");
    }
}
