<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* annonce/annonces.html.twig */
class __TwigTemplate_e196288032c0568dd939a48b48d9b92595df93282935ba6edd39488ff3fad035 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/annonces.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annonce/annonces.html.twig"));

        // line 1
        echo "<h2 class=\"carousel-title\"><span>Annonces</span></h2>

<div id=\"annonceCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\" >
    ";
        // line 4
        if (((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 4, $this->source); })()) &&  !twig_test_empty((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 4, $this->source); })())))) {
            // line 5
            echo "        ";
            $context["act"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 5, $this->source); })()), 0, [], "array", false, false, false, 5), "id", [], "any", false, false, false, 5);
            // line 6
            echo "        <ol class=\"carousel-indicators\">
            ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 8
                echo "                <li data-target=\"#annonceCarousel\" data-slide-to=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 8), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare((isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 8, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 8)))) {
                    echo " class=\"active\"";
                }
                echo "></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </ol>

        <div class=\"carousel-inner\">
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
                // line 14
                echo "                <div class=\"carousel-item ";
                if ((0 === twig_compare((isset($context["act"]) || array_key_exists("act", $context) ? $context["act"] : (function () { throw new RuntimeError('Variable "act" does not exist.', 14, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["annonce"], "id", [], "any", false, false, false, 14)))) {
                    echo "active";
                }
                echo "\">
                    <h3>";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["annonce"], "titre", [], "any", false, false, false, 15), "html", null, true);
                echo "</h3>
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <p class=\"text-justify\"> ";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["annonce"], "contenu", [], "any", false, false, false, 18);
                echo " </p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        </div>
        <div class=\"col-sm text-center\">
            <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
            echo "\" class=\"edit-btn\">Voir la liste des annonces</a>
        </div>
        <a class=\"carousel-control-prev\" href=\"#annonceCarousel\" data-slide=\"prev\">
            <i class=\"fa fa-chevron-left\"></i>
        </a>
        <a class=\"carousel-control-next\" href=\"#annonceCarousel\" data-slide=\"next\">
            <i class=\"fa fa-chevron-right\"></i>
        </a>

    ";
        } else {
            // line 35
            echo "        <div class=\"alert-secondary\">Aucune annonce</div>
    ";
        }
        // line 37
        echo "</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "annonce/annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 37,  123 => 35,  110 => 25,  106 => 23,  95 => 18,  89 => 15,  82 => 14,  78 => 13,  73 => 10,  60 => 8,  56 => 7,  53 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"carousel-title\"><span>Annonces</span></h2>

<div id=\"annonceCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\" >
    {% if annonces and annonces is not empty %}
        {% set act = annonces[0].id %}
        <ol class=\"carousel-indicators\">
            {% for annonce in annonces %}
                <li data-target=\"#annonceCarousel\" data-slide-to=\"{{ annonce.id }}\" {% if act == annonce.id %} class=\"active\"{% endif %}></li>
            {% endfor %}
        </ol>

        <div class=\"carousel-inner\">
            {% for annonce in annonces %}
                <div class=\"carousel-item {% if act == annonce.id %}active{% endif %}\">
                    <h3>{{ annonce.titre }}</h3>
                    <div class=\"row\">
                        <div class=\"col-sm\">
                            <p class=\"text-justify\"> {{ annonce.contenu|raw }} </p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
        <div class=\"col-sm text-center\">
            <a href=\"{{ path('annonce_index') }}\" class=\"edit-btn\">Voir la liste des annonces</a>
        </div>
        <a class=\"carousel-control-prev\" href=\"#annonceCarousel\" data-slide=\"prev\">
            <i class=\"fa fa-chevron-left\"></i>
        </a>
        <a class=\"carousel-control-next\" href=\"#annonceCarousel\" data-slide=\"next\">
            <i class=\"fa fa-chevron-right\"></i>
        </a>

    {% else %}
        <div class=\"alert-secondary\">Aucune annonce</div>
    {% endif %}
</div>", "annonce/annonces.html.twig", "/home/lisa/Documents/test/projet/templates/annonce/annonces.html.twig");
    }
}
