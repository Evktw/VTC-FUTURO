<?php

/* Compta/index.html.twig */
class __TwigTemplate_63209060b9aa709231ac920e7063dcc1a48385e1d3ed847afc217d868eedc3d6 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Compta/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Compta/index.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new Twig_Error_Runtime('Variable "courses" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 2
            echo "    <div class=\"border border-dark\" style=\"background-color: ghostwhite;\">
        <div class=\"row\">
            <div id=\"intitule\" class=\"col border border-light\">
                <p>
                    <a class=\"btn btn-block border border-dark\" style=\"background-color: darkslateblue; color: ghostwhite; font-family:'Freestyle Script'; font-size:32px;\" href=\"/compta/course/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", []), "html", null, true);
            echo "\">Course du";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "getCreatedAt", [], "method"), "m/d/Y"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "client", []), "nom", []), "html", null, true);
            echo "</a>
                </p>
            </div>
            <div id = \"statutFacture\" class=\"col border border-light\">
                ";
            // line 10
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "facture", []), "statut", []) == (isset($context["sent"]) || array_key_exists("sent", $context) ? $context["sent"] : (function () { throw new Twig_Error_Runtime('Variable "sent" does not exist.', 10, $this->source); })()))) {
                // line 11
                echo "                    <p style=\"margin-left: 16px;\"><span><p>Icone Verte</p>
                ";
            } else {
                // line 13
                echo "                    <p style=\"margin-left: 16px;\"><span><p>Icone Rouge</p>
                ";
            }
            // line 15
            echo "            </div>
        </div>
    </div>
    <br><br>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        if (((isset($context["nbTotalPages"]) || array_key_exists("nbTotalPages", $context) ? $context["nbTotalPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbTotalPages" does not exist.', 20, $this->source); })()) > 1)) {
            // line 21
            echo "    <div style=\"color:black; background-color:#e3f2fd;\"> Pages :
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbTotalPages"]) || array_key_exists("nbTotalPages", $context) ? $context["nbTotalPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbTotalPages" does not exist.', 22, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                if (($context["n"] == (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 24, $this->source); })()))) {
                    // line 25
                    echo "                ";
                    if (($context["n"] == (isset($context["nbTotalPages"]) || array_key_exists("nbTotalPages", $context) ? $context["nbTotalPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbTotalPages" does not exist.', 25, $this->source); })()))) {
                        // line 26
                        echo "                    <button class=\"btn\" style =\"color:blue; background-color:#e3f2fd;\">";
                        echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                        echo "</button>
                ";
                    } else {
                        // line 28
                        echo "                    <button class=\"btn\" style =\"color:blue; background-color:#e3f2fd;\"> ";
                        echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                        echo "</button>
                    /
                ";
                    }
                    // line 31
                    echo "            ";
                }
                // line 32
                echo "
            ";
                // line 34
                echo "            ";
                if (($context["n"] != (isset($context["num"]) || array_key_exists("num", $context) ? $context["num"] : (function () { throw new Twig_Error_Runtime('Variable "num" does not exist.', 34, $this->source); })()))) {
                    // line 35
                    echo "                <a class=\"btn\" style =\"color:black; background-color:#e3f2fd;\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Retour aux Courses", ["numpage" => $context["n"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["n"], "html", null, true);
                    echo "</a>
                ";
                    // line 36
                    if (($context["n"] != (isset($context["nbTotalPages"]) || array_key_exists("nbTotalPages", $context) ? $context["nbTotalPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbTotalPages" does not exist.', 36, $this->source); })()))) {
                        // line 37
                        echo "                    /
                ";
                    }
                    // line 39
                    echo "            ";
                }
                // line 40
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Compta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 41,  125 => 40,  122 => 39,  118 => 37,  116 => 36,  109 => 35,  106 => 34,  103 => 32,  100 => 31,  93 => 28,  87 => 26,  84 => 25,  81 => 24,  79 => 23,  75 => 22,  72 => 21,  70 => 20,  60 => 15,  56 => 13,  52 => 11,  50 => 10,  39 => 6,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for course in courses %}
    <div class=\"border border-dark\" style=\"background-color: ghostwhite;\">
        <div class=\"row\">
            <div id=\"intitule\" class=\"col border border-light\">
                <p>
                    <a class=\"btn btn-block border border-dark\" style=\"background-color: darkslateblue; color: ghostwhite; font-family:'Freestyle Script'; font-size:32px;\" href=\"/compta/course/{{ course.id }}\">Course du{{ course.getCreatedAt()|date('m/d/Y') }} - {{ course.client.nom }}</a>
                </p>
            </div>
            <div id = \"statutFacture\" class=\"col border border-light\">
                {% if course.facture.statut == sent %}
                    <p style=\"margin-left: 16px;\"><span><p>Icone Verte</p>
                {% else %}
                    <p style=\"margin-left: 16px;\"><span><p>Icone Rouge</p>
                {% endif %}
            </div>
        </div>
    </div>
    <br><br>
{% endfor %}
{% if nbTotalPages > 1 %}
    <div style=\"color:black; background-color:#e3f2fd;\"> Pages :
        {% for n  in 1..nbTotalPages %}
            {# Si n est la page courante #}
            {%  if n == num %}
                {% if n == nbTotalPages %}
                    <button class=\"btn\" style =\"color:blue; background-color:#e3f2fd;\">{{ n }}</button>
                {% else %}
                    <button class=\"btn\" style =\"color:blue; background-color:#e3f2fd;\"> {{ n }}</button>
                    /
                {% endif %}
            {% endif %}

            {# Si n n'est pas la page courante #}
            {%  if n != num %}
                <a class=\"btn\" style =\"color:black; background-color:#e3f2fd;\" href=\"{{ path('Retour aux Courses', {'numpage' : n}) }}\">{{ n }}</a>
                {%  if n != nbTotalPages %}
                    /
                {% endif %}
            {% endif %}
        {% endfor %}
    </div>
{% endif %}
", "Compta/index.html.twig", "C:\\Users\\gboisson\\Documents\\Web\\VTC\\VTC-FUTURO\\templates\\Compta\\index.html.twig");
    }
}
