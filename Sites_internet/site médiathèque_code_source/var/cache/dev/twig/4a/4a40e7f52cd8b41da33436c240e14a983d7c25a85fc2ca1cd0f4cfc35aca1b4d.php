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

/* users/profil/panier_recap_pdf.html.twig */
class __TwigTemplate_06b7a2d36c32b1c7e089843e803eaf0f347ca89db915fa3aea0d9b7fc231c9ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/panier_recap_pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/panier_recap_pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Confirmation de votre commande</title>
</head>

<body>
<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

</style>

<h1>Confirmation de votre commande</h1>

<h2>Votre panier du ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 23, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        echo "</h2>
<table style=\"border: 1px solid black;border-collapse: collapse;width: 100%;\">
    <thead>
    <tr>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Genre</th>
        <th scope=\"col\">Catégorie</th>
        <th scope=\"col\">Statut</th>
        <th scope=\"col\">Date de rendu</th>
        <th scope=\"col\">Numéro de commande</th>
        <th scope=\"col\">Prix</th>
    </tr>
    </thead>

    <tbody>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new RuntimeError('Variable "panier" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pan"]) {
            // line 39
            echo "        <tr>
            <td>
                ";
            // line 41
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 41), "titre", [], "any", false, false, false, 41))) {
                // line 42
                echo "                    ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 42), "titre", [], "any", false, false, false, 42)), "html", null, true);
                echo "
                ";
            } else {
                // line 44
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 44), "codeArticle", [], "any", false, false, false, 44), "html", null, true);
                echo "
                ";
            }
            // line 46
            echo "            </td>
            <td>
                ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 48), "genre", [], "any", false, false, false, 48), "libelle", [], "any", false, false, false, 48), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 51), "categorie", [], "any", false, false, false, 51), "libelle", [], "any", false, false, false, 51), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 54), "statut", [], "any", false, false, false, 54), "libelle", [], "any", false, false, false, 54), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 57, $this->source); })()), "d/m/Y"), "html", null, true);
            echo " <!--récup la date de rendu-->
            </td>
            <td>
                ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "
            </td>
            <td>
                ";
            // line 63
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "typeEnregistrement", [], "any", false, false, false, 63), "libelle", [], "any", false, false, false, 63), "achat")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 63), "statut", [], "any", false, false, false, 63), "libelle", [], "any", false, false, false, 63), "vendu")))) {
                // line 64
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 64), "MontantVente", [], "any", false, false, false, 64), "html", null, true);
                echo " €
                ";
            } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 65
$context["pan"], "typeEnregistrement", [], "any", false, false, false, 65), "libelle", [], "any", false, false, false, 65), "achat")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 65), "statut", [], "any", false, false, false, 65), "libelle", [], "any", false, false, false, 65), "vendu")))) {
                // line 66
                echo "                    vendu
                ";
            } else {
                // line 68
                echo "                    Gratuit
                ";
            }
            // line 70
            echo "            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </tbody>
</table>
<br>
Total : ";
        // line 76
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 76, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €
</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/panier_recap_pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 76,  166 => 73,  158 => 70,  154 => 68,  150 => 66,  148 => 65,  143 => 64,  141 => 63,  135 => 60,  129 => 57,  123 => 54,  117 => 51,  111 => 48,  107 => 46,  101 => 44,  95 => 42,  93 => 41,  89 => 39,  85 => 38,  67 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Confirmation de votre commande</title>
</head>

<body>
<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

</style>

<h1>Confirmation de votre commande</h1>

<h2>Votre panier du {{ date | date('d/m/Y H:i') }}</h2>
<table style=\"border: 1px solid black;border-collapse: collapse;width: 100%;\">
    <thead>
    <tr>
        <th scope=\"col\">Titre</th>
        <th scope=\"col\">Genre</th>
        <th scope=\"col\">Catégorie</th>
        <th scope=\"col\">Statut</th>
        <th scope=\"col\">Date de rendu</th>
        <th scope=\"col\">Numéro de commande</th>
        <th scope=\"col\">Prix</th>
    </tr>
    </thead>

    <tbody>
    {% for pan in panier %}
        <tr>
            <td>
                {%  if pan.article.titre is not empty %}
                    {{ pan.article.titre | capitalize }}
                {% else %}
                    {{ pan.article.codeArticle }}
                {% endif %}
            </td>
            <td>
                {{ pan.article.genre.libelle }}
            </td>
            <td>
                {{ pan.article.categorie.libelle }}
            </td>
            <td>
                {{ pan.article.statut.libelle }}
            </td>
            <td>
                {{ date | date('d/m/Y') }} <!--récup la date de rendu-->
            </td>
            <td>
                {{ commande }}
            </td>
            <td>
                {% if pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle !=\"vendu\" %}
                    {{ pan.article.MontantVente }} €
                {% elseif pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle ==\"vendu\" %}
                    vendu
                {% else %}
                    Gratuit
                {% endif %}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
<br>
Total : {{ total |number_format(2, ',', ' ')}} €
</body>
</html>

", "users/profil/panier_recap_pdf.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/panier_recap_pdf.html.twig");
    }
}
