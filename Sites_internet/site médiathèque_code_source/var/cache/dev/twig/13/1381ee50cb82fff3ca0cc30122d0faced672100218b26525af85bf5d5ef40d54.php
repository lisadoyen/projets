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

/* emprunt/gestion_emprunts.html.twig */
class __TwigTemplate_601dc72b32a41fb5e6244999c8ec1e5aeac7905dd372c94ea829e6ffc9ed2d54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emprunt/gestion_emprunts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emprunt/gestion_emprunts.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "emprunt/gestion_emprunts.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <div class=\"container mt-5\">
        <h1 class=\"mt-2\">Les emprunts (";
        // line 5
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["nbEmprunt"]) || array_key_exists("nbEmprunt", $context) ? $context["nbEmprunt"] : (function () { throw new RuntimeError('Variable "nbEmprunt" does not exist.', 5, $this->source); })()), 0, "", " "), "html", null, true);
        echo ")</h1>

        ";
        // line 7
        if ( !twig_test_empty((isset($context["emprunts"]) || array_key_exists("emprunts", $context) ? $context["emprunts"] : (function () { throw new RuntimeError('Variable "emprunts" does not exist.', 7, $this->source); })()))) {
            // line 8
            echo "            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Vignette article</th>
                    <th scope=\"col\">Titre article</th>
                    <th scope=\"col\">Catégorie article</th>
                    <th scope=\"col\">no Commande</th>
                    <th scope=\"col\">Date d'enregitrement</th>
                    <th scope=\"col\">Date de préparation</th>
                    <th scope=\"col\">Date de rendu</th>
                    <th scope=\"col\">Date de rendu théorique</th>
                    <th scope=\"col\">Type</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Opération</th>
                </tr>
                </thead>
                <tbody>
                ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["emprunts"]) || array_key_exists("emprunts", $context) ? $context["emprunts"] : (function () { throw new RuntimeError('Variable "emprunts" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["emprunt"]) {
                // line 26
                echo "                    <tr>
                        <td>
                            ";
                // line 28
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 28), "vignette", [], "any", false, false, false, 28))) {
                    // line 29
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 29), "vignette", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" alt=\"image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 29), "titre", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
                            ";
                } else {
                    // line 31
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                    echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                            ";
                }
                // line 33
                echo "                        </td>
                        <td>
                            ";
                // line 35
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 35), "titre", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 36), "titre", [], "any", false, false, false, 36)), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 38
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 38), "codeArticle", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                            ";
                }
                // line 40
                echo "                        </td>
                        <td>
                            ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 42), "categorie", [], "any", false, false, false, 42), "libelle", [], "any", false, false, false, 42), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emprunt"], "noCommande", [], "any", false, false, false, 45), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emprunt"], "dateEnregistrement", [], "any", false, false, false, 48), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emprunt"], "datePreparationFini", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emprunt"], "dateRendu", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["emprunt"], "dateRenduTheorique", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "typeEnregistrement", [], "any", false, false, false, 60), "libelle", [], "any", false, false, false, 60), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "statutEnregistrement", [], "any", false, false, false, 63), "libelle", [], "any", false, false, false, 63), "html", null, true);
                echo "
                        </td>
                        <td>
                            <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["emprunt"], "article", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"btn edit-btn\">Modifier</a>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emprunt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 73
            echo "            <div class=\"col-sm m-2\">
                <b>Aucun Emprunt</b>
            </div>
        ";
        }
        // line 77
        echo "        <hr class=\"mb-5\">
        <div class=\"pagination\">
            ";
        // line 79
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["emprunts"]) || array_key_exists("emprunts", $context) ? $context["emprunts"] : (function () { throw new RuntimeError('Variable "emprunts" does not exist.', 79, $this->source); })()));
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "emprunt/gestion_emprunts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 79,  213 => 77,  207 => 73,  202 => 70,  192 => 66,  186 => 63,  180 => 60,  174 => 57,  168 => 54,  162 => 51,  156 => 48,  150 => 45,  144 => 42,  140 => 40,  134 => 38,  128 => 36,  126 => 35,  122 => 33,  116 => 31,  108 => 29,  106 => 28,  102 => 26,  98 => 25,  79 => 8,  77 => 7,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

    <div class=\"container mt-5\">
        <h1 class=\"mt-2\">Les emprunts ({{ nbEmprunt |number_format(0, '', ' ') }})</h1>

        {% if emprunts is not empty %}
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Vignette article</th>
                    <th scope=\"col\">Titre article</th>
                    <th scope=\"col\">Catégorie article</th>
                    <th scope=\"col\">no Commande</th>
                    <th scope=\"col\">Date d'enregitrement</th>
                    <th scope=\"col\">Date de préparation</th>
                    <th scope=\"col\">Date de rendu</th>
                    <th scope=\"col\">Date de rendu théorique</th>
                    <th scope=\"col\">Type</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Opération</th>
                </tr>
                </thead>
                <tbody>
                {% for emprunt in emprunts %}
                    <tr>
                        <td>
                            {%  if emprunt.article.vignette is not empty %}
                                <img src=\"{{ emprunt.article.vignette }}\" alt=\"image de {{ emprunt.article.titre }}\" width=\"120\" height=\"120\">
                            {% else %}
                                <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                            {% endif %}
                        </td>
                        <td>
                            {%  if emprunt.article.titre is not empty %}
                                {{ emprunt.article.titre | capitalize }}
                            {% else %}
                                {{ emprunt.article.codeArticle }}
                            {% endif %}
                        </td>
                        <td>
                            {{ emprunt.article.categorie.libelle }}
                        </td>
                        <td>
                            {{ emprunt.noCommande }}
                        </td>
                        <td>
                            {{ emprunt.dateEnregistrement | date('d/m/Y') }}
                        </td>
                        <td>
                            {{ emprunt.datePreparationFini | date('d/m/Y') }}
                        </td>
                        <td>
                            {{ emprunt.dateRendu | date('d/m/Y') }}
                        </td>
                        <td>
                            {{ emprunt.dateRenduTheorique | date('d/m/Y') }}
                        </td>
                        <td>
                            {{ emprunt.typeEnregistrement.libelle }}
                        </td>
                        <td>
                            {{ emprunt.statutEnregistrement.libelle }}
                        </td>
                        <td>
                            <a href=\"{{ path('article_details', {id: emprunt.article.id}) }}\" class=\"btn edit-btn\">Modifier</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% else %}
            <div class=\"col-sm m-2\">
                <b>Aucun Emprunt</b>
            </div>
        {% endif %}
        <hr class=\"mb-5\">
        <div class=\"pagination\">
            {{ knp_pagination_render(emprunts)}}
        </div>
    </div>
{% endblock %}", "emprunt/gestion_emprunts.html.twig", "/home/lisa/Documents/test/projet/templates/emprunt/gestion_emprunts.html.twig");
    }
}
