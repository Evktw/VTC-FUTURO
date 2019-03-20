<?php

/* form/employe.html.twig */
class __TwigTemplate_79a1387d97a07f1e75eb601c1d4b7ca8130fe6570cc39b7cf0f730037756f315 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/employe.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/employe.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->source); })()), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->source); })()), 'errors');
        echo "
";
        // line 7
        echo "
    <div class=\"form-row\">
        <div class=\"col-6\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "employeNom", []), 'label');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "employeNom", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user\"></i></span>
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "employeNom", []), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-6\">
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "employePrenom", []), 'label');
        echo "
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "employePrenom", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user\"></i></span>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "employePrenom", []), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-6\">
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "employeTelephone", []), 'label');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "employeTelephone", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-phone\"></i></span>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "employeTelephone", []), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-6\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "employeMail", []), 'label');
        echo "
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "employeMail", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-at\"></i></span>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "employeMail", []), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-6\">
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "login", []), 'label');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), "login", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user-circle\"></i></span>
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->source); })()), "login", []), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-6\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "employeMdp", []), 'label');
        echo "
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), "employeMdp", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-lock\"></i></span>
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "employeMdp", []), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-4\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), "employeAdresse", []), 'label');
        echo "
            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 65, $this->source); })()), "employeAdresse", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "employeAdresse", []), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-4\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "employeCp", []), 'label');
        echo "
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "employeCp", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "employeCp", []), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-4\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), "employeVille", []), 'label');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "employeVille", []), 'errors');
        echo "
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "employeVille", []), 'widget');
        echo "
            </div>
        </div>
    </div>
    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "roles", []), 'row');
        echo "
    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "StatutEmploye", []), 'row');
        echo "

";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), 'rest');
        echo "
";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "form/employe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 93,  215 => 91,  210 => 89,  206 => 88,  199 => 84,  193 => 81,  189 => 80,  182 => 76,  176 => 73,  172 => 72,  165 => 68,  159 => 65,  155 => 64,  146 => 58,  140 => 55,  136 => 54,  129 => 50,  123 => 47,  119 => 46,  110 => 40,  104 => 37,  100 => 36,  93 => 32,  87 => 29,  83 => 28,  74 => 22,  68 => 19,  64 => 18,  57 => 14,  51 => 11,  47 => 10,  42 => 7,  38 => 5,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form 'bootstrap_4_layout.html.twig' %}

{{ form_start(form) }}
{# Affiche la balise <form>, définit les attributs action et method + si nécessaire l'attribut enctype #}
{{ form_errors(form) }}
{# Affiche les erreurs globales du formulaire #}

    <div class=\"form-row\">
        <div class=\"col-6\">
            {{ form_label(form.employeNom) }}
            {{ form_errors(form.employeNom) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user\"></i></span>
                {{ form_widget(form.employeNom) }}
            </div>
        </div>
        <div class=\"col-6\">
            {{ form_label(form.employePrenom) }}
            {{ form_errors(form.employePrenom) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user\"></i></span>
                {{ form_widget(form.employePrenom) }}
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-6\">
            {{ form_label(form.employeTelephone) }}
            {{ form_errors(form.employeTelephone) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-phone\"></i></span>
                {{ form_widget(form.employeTelephone) }}
            </div>
        </div>
        <div class=\"col-6\">
            {{ form_label(form.employeMail) }}
            {{ form_errors(form.employeMail) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-at\"></i></span>
                {{ form_widget(form.employeMail) }}
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-6\">
            {{ form_label(form.login) }}
            {{ form_errors(form.login) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-user-circle\"></i></span>
                {{ form_widget(form.login) }}
            </div>
        </div>
        <div class=\"col-6\">
            {{ form_label(form.employeMdp) }}
            {{ form_errors(form.employeMdp) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-lock\"></i></span>
                {{ form_widget(form.employeMdp) }}
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"col-4\">
            {{ form_label(form.employeAdresse) }}
            {{ form_errors(form.employeAdresse) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                {{ form_widget(form.employeAdresse) }}
            </div>
        </div>
        <div class=\"col-4\">
            {{ form_label(form.employeCp) }}
            {{ form_errors(form.employeCp) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                {{ form_widget(form.employeCp) }}
            </div>
        </div>
        <div class=\"col-4\">
            {{ form_label(form.employeVille) }}
            {{ form_errors(form.employeVille) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\"  id=\"inputGroupPrepend\"> <i class=\"fa fa-address-card\"></i></span>
                {{ form_widget(form.employeVille) }}
            </div>
        </div>
    </div>
    {{ form_row(form.roles) }}
    {{ form_row(form.StatutEmploye) }}

{{ form_rest(form) }}
{# Affiche tous les champs non explicitement affichés précédemment #}
{{ form_end(form) }}
{# Affiche la balise fermante </form> et surtout chaque champ qui n'a pas été explicitement affiché (sauf si form_rest()
a déjà été utilisé) ==> Utile notamment pour le champ CSRF qui n'est jamais explicitement affiché #}", "form/employe.html.twig", "C:\\Users\\gboisson\\Documents\\Web\\VTC\\VTC-FUTURO\\templates\\form\\employe.html.twig");
    }
}
