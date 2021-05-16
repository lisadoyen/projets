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

/* genres/_genre_submenu.html.twig */
class __TwigTemplate_ce7d7ec709026342e1aa4a8f2d44dc490b92d4a4bd693e43508f5f5637948f2d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres/_genre_submenu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "genres/_genre_submenu.html.twig"));

        // line 1
        echo "<div class=\"sub-dropdown-content\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 3
            echo "        ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 3), "POUBELLE")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 3), "Inconnu")))) {
                // line 4
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_id_genres_id_articles_show", ["idGenre" => twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 4), "idCategorie" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["genre"], "categories", [], "any", false, false, false, 4), 0, [], "array", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
                echo "\">
            ";
                // line 5
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 5)), "html", null, true);
                echo "
        </a>
        ";
            }
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "genres/_genre_submenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  64 => 8,  58 => 5,  53 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sub-dropdown-content\">
    {% for genre in genres %}
        {% if genre.libelle != 'POUBELLE' and genre.libelle != 'Inconnu' %}
        <a href=\"{{ path('categories_id_genres_id_articles_show', {idGenre : genre.id, idCategorie : genre.categories[0].id}) }}\">
            {{ genre.libelle|capitalize }}
        </a>
        {% endif %}
    {% endfor %}
</div>

", "genres/_genre_submenu.html.twig", "/home/lisa/Documents/test/projet/templates/genres/_genre_submenu.html.twig");
    }
}
