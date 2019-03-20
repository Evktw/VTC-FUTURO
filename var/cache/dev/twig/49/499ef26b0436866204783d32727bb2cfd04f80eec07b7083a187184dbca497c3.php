<?php

/* Security/login.html.twig */
class __TwigTemplate_dcd25b63bbfdfd62fe590596e93b3a2d9dfb724f419c368f56721727042217d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("Security/base.html.twig", "Security/login.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "Security/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->source); })()), "messageKey", []), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->source); })()), "messageData", []), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "    <div class=\"wrapper fadeInDown\">
        <div id=\"formContent\">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class=\"fadeIn first\">
                <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/Logo_VTC.png"), "html", null, true);
        echo "\" id=\"icon\" alt=\"User Icon\" />
            </div>

            <!-- Login Form -->
            <form action=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_check");
        echo "\" method=\"post\">
                <input type=\"text\" id=\"username\" class=\"fadeIn second\" name=\"_username\" placeholder=\"Identifiant\">
                <input type=\"password\" id=\"password\" class=\"fadeIn third\" name=\"_password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" class=\"fadeIn fourth\" value=\"Connexion\">
            </form>

            <!-- Remind Passowrd -->
            <div>
                <a class=\"underlineHover\" href=\"#\">Mot de passe oublié?</a>
            </div>

        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  70 => 13,  62 => 7,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'Security/base.html.twig' %}

{% block body %}
    {% if error %}
        <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}
    <div class=\"wrapper fadeInDown\">
        <div id=\"formContent\">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class=\"fadeIn first\">
                <img src=\"{{ asset('assets/images/Logo_VTC.png') }}\" id=\"icon\" alt=\"User Icon\" />
            </div>

            <!-- Login Form -->
            <form action=\"{{ path('app_login_check') }}\" method=\"post\">
                <input type=\"text\" id=\"username\" class=\"fadeIn second\" name=\"_username\" placeholder=\"Identifiant\">
                <input type=\"password\" id=\"password\" class=\"fadeIn third\" name=\"_password\" placeholder=\"Mot de passe\">
                <input type=\"submit\" class=\"fadeIn fourth\" value=\"Connexion\">
            </form>

            <!-- Remind Passowrd -->
            <div>
                <a class=\"underlineHover\" href=\"#\">Mot de passe oublié?</a>
            </div>

        </div>
    </div>



{% endblock %}", "Security/login.html.twig", "C:\\Users\\gboisson\\Documents\\Web\\VTC\\VTC-FUTURO\\templates\\Security\\login.html.twig");
    }
}
