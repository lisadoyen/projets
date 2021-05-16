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

/* data/_filtre_articles.html.twig */
class __TwigTemplate_9bf209f61df36d1eeb9e052fc1e32d75f3b478e242146de7917383077f1feef7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data/_filtre_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data/_filtre_articles.html.twig"));

        // line 1
        echo "<div id=\"1\" style=\"visibility: visible\">
    <form action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter_clear");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn float-left\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
    </form>

    <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_show");
        echo "\" >
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("form_articles"), "html", null, true);
        echo "\">
        <button type=\"submit\" class=\"edit-btn \">Filtrer</button>

        ";
        // line 11
        if ( !((((((((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 11, $this->source); })()), "min", [], "any", false, false, false, 11), "")) ||  !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "min", [], "any", true, true, false, 11)) && ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 11, $this->source); })()), "max", [], "any", false, false, false, 11), "")) ||  !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "max", [], "any", true, true, false, 11))) &&  !twig_get_attribute($this->env, $this->source,         // line 12
($context["donnees"] ?? null), "search", [], "any", true, true, false, 12)) &&  !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "categories", [], "any", true, true, false, 12)) &&  !twig_get_attribute($this->env, $this->source,         // line 13
($context["donnees"] ?? null), "genres", [], "any", true, true, false, 13)) &&  !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "statuts", [], "any", true, true, false, 13)) &&  !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "ages", [], "any", true, true, false, 13))) {
            // line 14
            echo "            <hr>
            <div>Filtre activé :</div><br>
            <div class=\"container\" style=\"color: grey\">
                <u style=\"text-decoration: none\">
                    ";
            // line 18
            if (twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 18)) {
                // line 19
                echo "                        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 19, $this->source); })()), "search", [], "any", false, false, false, 19))) {
                    // line 20
                    echo "                        <li> recherche : <strong>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 20, $this->source); })()), "search", [], "any", false, false, false, 20), "html", null, true);
                    echo "</strong></li>
                        ";
                }
                // line 22
                echo "                    ";
            }
            // line 23
            echo "                    ";
            if ( !twig_test_empty((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 23, $this->source); })()))) {
                // line 24
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                    // line 25
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "categories", [], "any", false, true, false, 25), twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 25), [], "array", true, true, false, 25)) {
                        // line 26
                        echo "                                <li> categorie : <strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 26)), "html", null, true);
                        echo "</strong></li>
                            ";
                    }
                    // line 28
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "                    ";
            }
            // line 30
            echo "                    ";
            if ( !twig_test_empty((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 31, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                    // line 32
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 32), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 32), [], "array", true, true, false, 32)) {
                        // line 33
                        echo "                                <li> genre : <strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 33)), "html", null, true);
                        echo "</strong></li>
                            ";
                    }
                    // line 35
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                    ";
            }
            // line 37
            echo "                    ";
            if ( !twig_test_empty((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 37, $this->source); })()))) {
                // line 38
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 38, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
                    // line 39
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "statuts", [], "any", false, true, false, 39), twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 39), [], "array", true, true, false, 39)) {
                        // line 40
                        echo "                                ";
                        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 40), "vendable")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 40), "empruntable")))) {
                            // line 41
                            echo "                                    <li> statut : <strong>";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 41)), "html", null, true);
                            echo "</strong></li>
                                ";
                        }
                        // line 43
                        echo "                            ";
                    }
                    // line 44
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "                    ";
            }
            // line 46
            echo "                    ";
            if ( !twig_test_empty((isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 46, $this->source); })()))) {
                // line 47
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 47, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
                    // line 48
                    echo "                            ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "ages", [], "any", false, true, false, 48), twig_get_attribute($this->env, $this->source, $context["age"], "id", [], "any", false, false, false, 48), [], "array", true, true, false, 48)) {
                        // line 49
                        echo "                                <li> age : <strong>";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "libelle", [], "any", false, false, false, 49)), "html", null, true);
                        echo "</strong></li>
                            ";
                    }
                    // line 51
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                    ";
            }
            // line 53
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 53, $this->source); })()), "date", [], "any", false, false, false, 53))) {
                // line 54
                echo "                        <li> date : <strong>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 54, $this->source); })()), "date", [], "any", false, false, false, 54), "d/m/Y"), "html", null, true);
                echo "</strong></li>
                    ";
            }
            // line 56
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 56, $this->source); })()), "min", [], "any", false, false, false, 56))) {
                // line 57
                echo "                        <li> prix min : <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 57, $this->source); })()), "min", [], "any", false, false, false, 57), "html", null, true);
                echo "</strong></li>
                    ";
            }
            // line 59
            echo "                    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 59, $this->source); })()), "max", [], "any", false, false, false, 59))) {
                // line 60
                echo "                        <li> prix max : <strong>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 60, $this->source); })()), "max", [], "any", false, false, false, 60), "html", null, true);
                echo "</strong></li>
                    ";
            }
            // line 62
            echo "                </u>
           </div>
        ";
        }
        // line 65
        echo "
        <hr>
        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-1\" data-js=\"hide\"><h5>Catégories</h5></a>
            </div>
            <div id=\"mon-bloc-1\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 73, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 74
            echo "                        <input  type=\"checkbox\" name=\"categories[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "categories", [], "any", false, true, false, 74), twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 74), [], "array", true, true, false, 74)) {
                echo " checked ";
            }
            echo ">
                        ";
            // line 75
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 75)), "html", null, true);
            echo "
                        <br/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                </div>
                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 79, $this->source); })()), (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 79, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 79, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 80
            echo "                    <input type=\"checkbox\" name=\"categories[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 80), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "categories", [], "any", false, true, false, 80), twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 80), [], "array", true, true, false, 80)) {
                echo " checked ";
            }
            echo ">
                    ";
            // line 81
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "libelle", [], "any", false, false, false, 81)), "html", null, true);
            echo "
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-2\" data-js=\"hide\"><h5>Genres</h5></a>
            </div>
            <div id=\"mon-bloc-2\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 93, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 93, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 94
            echo "                    <input  type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 94), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 94), [], "array", true, true, false, 94)) {
                echo " checked ";
            }
            echo ">
                    ";
            // line 95
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 95)), "html", null, true);
            echo "
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                </div>
                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 99, $this->source); })()), (twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 99, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["genres"]) || array_key_exists("genres", $context) ? $context["genres"] : (function () { throw new RuntimeError('Variable "genres" does not exist.', 99, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
            // line 100
            echo "                    <input type=\"checkbox\" name=\"genres[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "genres", [], "any", false, true, false, 100), twig_get_attribute($this->env, $this->source, $context["genre"], "id", [], "any", false, false, false, 100), [], "array", true, true, false, 100)) {
                echo " checked ";
            }
            echo ">
                    ";
            // line 101
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "libelle", [], "any", false, false, false, 101)), "html", null, true);
            echo "
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-3\" data-js=\"hide\"><h5>Rubriques</h5></a>
            </div>
            <div id=\"mon-bloc-3\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    filtre à ajouter
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-5\" data-js=\"hide\"><h5>Tranche d'âge</h5></a>
            </div>
            <div id=\"mon-bloc-5\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 124, $this->source); })()), 0, (twig_length_filter($this->env, (isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 124, $this->source); })())) / 2)));
        foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
            // line 125
            echo "                        <input  type=\"checkbox\" name=\"ages[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "id", [], "any", false, false, false, 125), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "ages", [], "any", false, true, false, 125), twig_get_attribute($this->env, $this->source, $context["age"], "id", [], "any", false, false, false, 125), [], "array", true, true, false, 125)) {
                echo " checked ";
            }
            echo ">
                        ";
            // line 126
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "libelle", [], "any", false, false, false, 126)), "html", null, true);
            echo "
                        <br/>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </div>
                ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 130, $this->source); })()), (twig_length_filter($this->env, (isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 130, $this->source); })())) / 2), twig_length_filter($this->env, (isset($context["ages"]) || array_key_exists("ages", $context) ? $context["ages"] : (function () { throw new RuntimeError('Variable "ages" does not exist.', 130, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["age"]) {
            // line 131
            echo "                    <input type=\"checkbox\" name=\"ages[]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "\"";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "ages", [], "any", false, true, false, 131), twig_get_attribute($this->env, $this->source, $context["age"], "id", [], "any", false, false, false, 131), [], "array", true, true, false, 131)) {
                echo " checked ";
            }
            echo ">
                    ";
            // line 132
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["age"], "libelle", [], "any", false, false, false, 132)), "html", null, true);
            echo "
                    <br/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['age'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        echo "                </div>
            </div>

        <div class=\"form-group\">
            <label> Date de publication :</label>
            <input type=\"date\" name=\"date\" value=\"";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 140, $this->source); })()), "date", [], "any", false, false, false, 140), "html", null, true);
        echo "\"/>
        </div>
        <hr>

        <div class=\"form-group\">
            <input type=\"checkbox\" name=\"nouveaute\" ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "nouveaute", [], "any", true, true, false, 145)) {
            echo " checked ";
        }
        echo "/>
            <label>Nouveauté</label>
        </div>

        <hr>
        <div class=\"form-group\">
            <div class=\"filtre\">
                ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 153
            echo "                    ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 153), "empruntable"))) {
                // line 154
                echo "                        <input type=\"checkbox\" name=\"statuts[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 154), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "statuts", [], "any", false, true, false, 154), twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 154), [], "array", true, true, false, 154)) {
                    echo " checked ";
                }
                echo ">
                        ";
                // line 155
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 155)), "html", null, true);
                echo "
                        <br/>
                    ";
            }
            // line 158
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            </div>
            ";
        // line 160
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 160, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 161
            echo "                ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 161), "vendable"))) {
                // line 162
                echo "                        <input type=\"checkbox\" name=\"statuts[]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 162), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "statuts", [], "any", false, true, false, 162), twig_get_attribute($this->env, $this->source, $context["statut"], "id", [], "any", false, false, false, 162), [], "array", true, true, false, 162)) {
                    echo " checked ";
                }
                echo ">
                    ";
                // line 163
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["statut"], "libelle", [], "any", false, false, false, 163)), "html", null, true);
                echo "
                    <br/>
                ";
            }
            // line 166
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statut'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "        </div>

        <div class=\"form-group\">
            <label>Prix :</label>
            <input name=\"min\"  type=\"text\"  size=\"15\" placeholder=\"min\" value=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 171, $this->source); })()), "min", [], "any", false, false, false, 171), "html", null, true);
        echo "\" class=\"vente ";
        if (twig_get_attribute($this->env, $this->source, ($context["erreurs"] ?? null), "min", [], "any", true, true, false, 171)) {
            echo "is-invalid";
        }
        echo "\">
            ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["erreurs"] ?? null), "min", [], "any", true, true, false, 172)) {
            // line 173
            echo "                <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["erreurs"]) || array_key_exists("erreurs", $context) ? $context["erreurs"] : (function () { throw new RuntimeError('Variable "erreurs" does not exist.', 173, $this->source); })()), "min", [], "any", false, false, false, 173), "html", null, true);
            echo "</div>
            ";
        }
        // line 175
        echo "            <input name=\"max\"  type=\"text\"  size=\"15\" placeholder=\"max\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 175, $this->source); })()), "max", [], "any", false, false, false, 175), "html", null, true);
        echo "\" class=\"vente ";
        if (twig_get_attribute($this->env, $this->source, ($context["erreurs"] ?? null), "max", [], "any", true, true, false, 175)) {
            echo "is-invalid";
        }
        echo "\">
            <i class=\"pl-5\" style=\"font-size: 1vh;\">ce champs s'applique uniquement sur les produits en vente</i>
            ";
        // line 177
        if (twig_get_attribute($this->env, $this->source, ($context["erreurs"] ?? null), "max", [], "any", true, true, false, 177)) {
            // line 178
            echo "                <div class=\"invalid-feedback\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["erreurs"]) || array_key_exists("erreurs", $context) ? $context["erreurs"] : (function () { throw new RuntimeError('Variable "erreurs" does not exist.', 178, $this->source); })()), "max", [], "any", false, false, false, 178), "html", null, true);
            echo "</div>
            ";
        }
        // line 180
        echo "            <br>
        </div>

        <style>
            .vente::placeholder{
                color: grey;
            }
        </style>
    </form>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "data/_filtre_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  540 => 180,  534 => 178,  532 => 177,  522 => 175,  516 => 173,  514 => 172,  506 => 171,  500 => 167,  494 => 166,  488 => 163,  479 => 162,  476 => 161,  472 => 160,  469 => 159,  463 => 158,  457 => 155,  448 => 154,  445 => 153,  441 => 152,  429 => 145,  421 => 140,  414 => 135,  405 => 132,  396 => 131,  392 => 130,  389 => 129,  380 => 126,  371 => 125,  367 => 124,  345 => 104,  336 => 101,  327 => 100,  323 => 99,  320 => 98,  311 => 95,  302 => 94,  298 => 93,  287 => 84,  278 => 81,  269 => 80,  265 => 79,  262 => 78,  253 => 75,  244 => 74,  240 => 73,  230 => 65,  225 => 62,  219 => 60,  216 => 59,  210 => 57,  207 => 56,  201 => 54,  198 => 53,  195 => 52,  189 => 51,  183 => 49,  180 => 48,  175 => 47,  172 => 46,  169 => 45,  163 => 44,  160 => 43,  154 => 41,  151 => 40,  148 => 39,  143 => 38,  140 => 37,  137 => 36,  131 => 35,  125 => 33,  122 => 32,  117 => 31,  114 => 30,  111 => 29,  105 => 28,  99 => 26,  96 => 25,  91 => 24,  88 => 23,  85 => 22,  79 => 20,  76 => 19,  74 => 18,  68 => 14,  66 => 13,  65 => 12,  64 => 11,  58 => 8,  54 => 7,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"1\" style=\"visibility: visible\">
    <form action=\"{{ path('filter_clear') }}\" method=\"post\">
        <input type=\"hidden\" name=\"_method\" value=\"GET\">
        <button type=\"submit\" class=\"edit-btn float-left\" onclick=\"return confirm('Voulez-vous vraiment vider le filtre ?')\">Vider</button>
    </form>

    <form method=\"post\" action=\"{{ path('articles_show') }}\" >
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('form_articles') }}\">
        <button type=\"submit\" class=\"edit-btn \">Filtrer</button>

        {% if not ((donnees.min == \"\" or donnees.min is not defined) and (donnees.max == \"\" or donnees.max is not defined) and
            donnees.search is not defined and donnees.categories is not defined and
            donnees.genres is not defined and donnees.statuts is not defined and donnees.ages is not defined) %}
            <hr>
            <div>Filtre activé :</div><br>
            <div class=\"container\" style=\"color: grey\">
                <u style=\"text-decoration: none\">
                    {% if donnees.search is defined %}
                        {% if donnees.search is not empty %}
                        <li> recherche : <strong>{{ donnees.search }}</strong></li>
                        {% endif %}
                    {% endif %}
                    {% if categories is not empty %}
                        {% for categorie in categories %}
                            {% if donnees.categories[categorie.id] is defined %}
                                <li> categorie : <strong>{{ categorie.libelle|capitalize }}</strong></li>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                    {% if genres is not empty %}
                        {% for genre in genres %}
                            {% if donnees.genres[genre.id] is defined %}
                                <li> genre : <strong>{{ genre.libelle|capitalize }}</strong></li>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                    {% if statuts is not empty %}
                        {% for statut in statuts %}
                            {% if donnees.statuts[statut.id] is defined %}
                                {% if statut.libelle == 'vendable' or statut.libelle == 'empruntable' %}
                                    <li> statut : <strong>{{ statut.libelle|capitalize }}</strong></li>
                                {% endif %}
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                    {% if ages is not empty %}
                        {% for age in ages %}
                            {% if donnees.ages[age.id] is defined %}
                                <li> age : <strong>{{ age.libelle|capitalize }}</strong></li>
                            {% endif %}
                        {% endfor %}
                    {% endif %}
                    {% if donnees.date is not empty %}
                        <li> date : <strong>{{ donnees.date| date('d/m/Y') }}</strong></li>
                    {% endif %}
                    {% if donnees.min is not empty %}
                        <li> prix min : <strong>{{ donnees.min }}</strong></li>
                    {% endif %}
                    {% if donnees.max is not empty %}
                        <li> prix max : <strong>{{ donnees.max }}</strong></li>
                    {% endif %}
                </u>
           </div>
        {% endif %}

        <hr>
        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-1\" data-js=\"hide\"><h5>Catégories</h5></a>
            </div>
            <div id=\"mon-bloc-1\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    {% for categorie in categories|slice(0, categories|length/2) %}
                        <input  type=\"checkbox\" name=\"categories[]\" value=\"{{ categorie.id }}\"{% if donnees.categories[categorie.id] is defined %} checked {% endif %}>
                        {{ categorie.libelle|capitalize }}
                        <br/>
                    {% endfor %}
                </div>
                {% for categorie in categories|slice(categories|length/2, categories|length) %}
                    <input type=\"checkbox\" name=\"categories[]\" value=\"{{ categorie.id}}\"{% if donnees.categories[categorie.id] is defined %} checked {% endif %}>
                    {{ categorie.libelle|capitalize }}
                    <br/>
                {% endfor %}
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-2\" data-js=\"hide\"><h5>Genres</h5></a>
            </div>
            <div id=\"mon-bloc-2\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                {% for genre in genres|slice(0, genres|length/2) %}
                    <input  type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.id }}\"{% if donnees.genres[genre.id] is defined %} checked {% endif %}>
                    {{ genre.libelle|capitalize }}
                    <br/>
                {% endfor %}
                </div>
                {% for genre in genres|slice(genres|length/2, genres|length) %}
                    <input type=\"checkbox\" name=\"genres[]\" value=\"{{ genre.id}}\"{% if donnees.genres[genre.id] is defined %} checked {% endif %}>
                    {{ genre.libelle|capitalize }}
                    <br/>
                {% endfor %}
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-3\" data-js=\"hide\"><h5>Rubriques</h5></a>
            </div>
            <div id=\"mon-bloc-3\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    filtre à ajouter
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"sub-menu-filtre\">
                <a href=\"#mon-bloc-5\" data-js=\"hide\"><h5>Tranche d'âge</h5></a>
            </div>
            <div id=\"mon-bloc-5\" class=\"hide-box p-2\">
                <div class=\"filtre\">
                    {% for age in ages|slice(0, ages|length/2) %}
                        <input  type=\"checkbox\" name=\"ages[]\" value=\"{{ age.id }}\"{% if donnees.ages[age.id] is defined %} checked {% endif %}>
                        {{ age.libelle|capitalize }}
                        <br/>
                    {% endfor %}
                </div>
                {% for age in ages|slice(ages|length/2, ages|length) %}
                    <input type=\"checkbox\" name=\"ages[]\" value=\"{{ age.id}}\"{% if donnees.ages[age.id] is defined %} checked {% endif %}>
                    {{ age.libelle|capitalize }}
                    <br/>
                {% endfor %}
                </div>
            </div>

        <div class=\"form-group\">
            <label> Date de publication :</label>
            <input type=\"date\" name=\"date\" value=\"{{ donnees.date }}\"/>
        </div>
        <hr>

        <div class=\"form-group\">
            <input type=\"checkbox\" name=\"nouveaute\" {% if donnees.nouveaute is defined %} checked {% endif %}/>
            <label>Nouveauté</label>
        </div>

        <hr>
        <div class=\"form-group\">
            <div class=\"filtre\">
                {% for statut in statuts %}
                    {% if statut.libelle == 'empruntable' %}
                        <input type=\"checkbox\" name=\"statuts[]\" value=\"{{statut.id}}\"{% if donnees.statuts[statut.id] is defined %} checked {% endif %}>
                        {{ statut.libelle|capitalize }}
                        <br/>
                    {% endif %}
                {% endfor %}
            </div>
            {% for statut in statuts %}
                {% if statut.libelle == 'vendable'%}
                        <input type=\"checkbox\" name=\"statuts[]\" value=\"{{statut.id}}\"{% if donnees.statuts[statut.id] is defined %} checked {% endif %}>
                    {{ statut.libelle|capitalize }}
                    <br/>
                {% endif %}
            {% endfor %}
        </div>

        <div class=\"form-group\">
            <label>Prix :</label>
            <input name=\"min\"  type=\"text\"  size=\"15\" placeholder=\"min\" value=\"{{donnees.min}}\" class=\"vente {% if erreurs.min is defined %}is-invalid{% endif %}\">
            {% if erreurs.min is defined %}
                <div class=\"invalid-feedback\">{{erreurs.min}}</div>
            {% endif %}
            <input name=\"max\"  type=\"text\"  size=\"15\" placeholder=\"max\" value=\"{{donnees.max}}\" class=\"vente {% if erreurs.max is defined %}is-invalid{% endif %}\">
            <i class=\"pl-5\" style=\"font-size: 1vh;\">ce champs s'applique uniquement sur les produits en vente</i>
            {% if erreurs.max is defined %}
                <div class=\"invalid-feedback\">{{erreurs.max}}</div>
            {% endif %}
            <br>
        </div>

        <style>
            .vente::placeholder{
                color: grey;
            }
        </style>
    </form>
</div>


", "data/_filtre_articles.html.twig", "/home/lisa/Documents/test/projet/templates/data/_filtre_articles.html.twig");
    }
}
