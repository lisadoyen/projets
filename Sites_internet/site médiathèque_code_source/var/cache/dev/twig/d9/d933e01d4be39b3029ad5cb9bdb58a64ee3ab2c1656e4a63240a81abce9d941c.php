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

/* articles/show_all_articles.html.twig */
class __TwigTemplate_d2842c1a83155f9317b2868828930a5aff10bd2d63d999daeee50df58a642aeb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_all_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_all_articles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "articles/show_all_articles.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                ";
        // line 8
        $this->loadTemplate("data/_filtre_articles.html.twig", "articles/show_all_articles.html.twig", 8)->display($context);
        // line 9
        echo "            </div>
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-lg-9 p-4\">
                <div class=\"row\">
                    <div class=\"col-lg-6 float-left\">
                        <button onclick=\"test(3)\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/article/icone.jpg"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"mode affichage en icone\" alt=\"mode affichage en icones\" width=\"20\" height=\"20\"></button>
                        <button onclick=\"test(4)\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/article/list.png"), "html", null, true);
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"mode affichage liste détaillée\" alt=\"mode affichage liste détaillée\" width=\"20\" height=\"20\"></button>
                        <span class=\"pl-4 pt-4 text-trier\">trier par</span>
                        <button id=\"navbarDropdown\" data-toggle=\"dropdown\" class=\"edit-btn\">
                            <i class=\"fas fa-arrow-up\"></i></button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">titre</a>
                                <a class=\"dropdown-item\" href=\"#\">date d'aquisition</a>
                                <a class=\"dropdown-item\" href=\"#\">prix</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">popularité</a>
                            </div>
                    </div>
                    <div class=\"col-md-6\"></div>
                </div>
                ";
        // line 31
        if (array_key_exists("articles", $context)) {
            // line 32
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 32, $this->source); })()), 0, 30));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 33
                echo "                        <div class=\"col-4 pt-4 pb-4 float-left\">
                            <div class=\"pl-2\">
                                ";
                // line 35
                if (array_key_exists("nouveaute", $context)) {
                    // line 36
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["nouveaute"]) || array_key_exists("nouveaute", $context) ? $context["nouveaute"] : (function () { throw new RuntimeError('Variable "nouveaute" does not exist.', 36, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                        // line 37
                        echo "                                        ";
                        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)))) {
                            // line 38
                            echo "                                            <span class=\"text-size text-bold text-size-title text-nouveaute\"> nouveau !</span>
                                        ";
                        }
                        // line 40
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                                ";
                }
                // line 42
                echo "                            </div>
                            <div class=\"row p-2\">
                                <div class=\"col-lg-4\">
                                ";
                // line 45
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["article"], "vignette", [], "any", false, false, false, 45), null))) {
                    // line 46
                    echo "                                    <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 46), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                    echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\"></a>
                                ";
                } else {
                    // line 50
                    echo "                                    <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">
                                    <a href=\"";
                    // line 51
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    echo "\">
                                        <img src=\"";
                    // line 52
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "vignette", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "vignette", [], "any", false, false, false, 52), "html", null, true);
                    echo "\" width=\"120\" height=\"120\"></a>
                                ";
                }
                // line 54
                echo "                                    <div class=\"p-4\">
                                        <input type=\"hidden\" name=\"id\" value=\"";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\">
                                        ";
                // line 56
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 56), "libelle", [], "any", false, false, false, 56), "empruntable"))) {
                    // line 57
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                    echo "\" class=\"style-button-article-emprunt\">
                                                Emprunter</a>
                                        ";
                } else {
                    // line 60
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_panier", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    echo "\" class=\"style-button-article-achat\">
                                                Acheter</a>
                                        ";
                }
                // line 63
                echo "                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                        <div class=\"text-size-title\"><span class=\"text-bold\">";
                // line 66
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 66)), "html", null, true);
                echo "</span></div>
                                        <div class=\"text-size pt-2\">
                                            ";
                // line 68
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "categorie", [], "any", false, false, false, 68), "libelle", [], "any", false, false, false, 68), "video"))) {
                    // line 69
                    echo "                                            <span class=\"text-orange\">réalisateur : </span>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 70
$context["article"], "categorie", [], "any", false, false, false, 70), "libelle", [], "any", false, false, false, 70), "livre"))) {
                    // line 71
                    echo "                                                <span class=\"text-orange\">auteur : </span>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 72
$context["article"], "categorie", [], "any", false, false, false, 72), "libelle", [], "any", false, false, false, 72), "jeux"))) {
                    // line 73
                    echo "                                                <span class=\"text-orange\">éditeur : </span>
                                            ";
                } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 74
$context["article"], "categorie", [], "any", false, false, false, 74), "libelle", [], "any", false, false, false, 74), "musique"))) {
                    // line 75
                    echo "                                                <span class=\"text-orange\">artiste : </span>
                                            ";
                }
                // line 77
                echo "                                            <!-- changer quand on aura une liste des entités par article, pour l'instant il n'y a qu'une entité par article -->
                                            ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "entites", [], "any", false, true, false, 78), 0, [], "array", true, true, false, 78)) {
                    // line 79
                    echo "                                                ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "entites", [], "any", false, false, false, 79), 0, [], "array", false, false, false, 79), "prenom", [], "any", false, false, false, 79)), "html", null, true);
                    echo "
                                                ";
                    // line 80
                    ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "entites", [], "any", false, false, false, 80), 0, [], "array", false, false, false, 80), "nom", [], "any", false, false, false, 80))) ? (print ("inconnu")) : (print (twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "entites", [], "any", false, false, false, 80), 0, [], "array", false, false, false, 80), "nom", [], "any", false, false, false, 80)), "html", null, true))));
                    echo "
                                            ";
                } else {
                    // line 82
                    echo "                                                inconnu
                                            ";
                }
                // line 84
                echo "                                        </div>
                                        <div class=\"text-size pt-1\"><span class=\"text-orange\">date de publication : </span>";
                // line 85
                ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["article"], "datePublication", [], "any", false, false, false, 85))) ? (print ("inconnu")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "datePublication", [], "any", false, false, false, 85), "d/m/Y"), "html", null, true))));
                echo "</div>
                                    <div class=\"text-size pt-3\"><span class=\"text-orange\">moyenne : </span>moyenne (étoile)</div>
                                        ";
                // line 87
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "statut", [], "any", false, false, false, 87), "libelle", [], "any", false, false, false, 87), "vendable"))) {
                    // line 88
                    echo "                                            <hr>
                                            <div class=\"text-size\"><span class=\"text-orange\">prix : </span><span style=\"color: red\">";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "montantVente", [], "any", false, false, false, 89), "html", null, true);
                    echo "€</span></div>
                                        ";
                }
                // line 91
                echo "                                </div>
                                <div class=\"col-lg-1\"> <!-- pour tablette : p-4-->
                                    ";
                // line 93
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["article"], "favoris", [], "any", false, false, false, 93))) {
                    // line 94
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_favoris", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 94), "page" => "list"]), "html", null, true);
                    echo "\"><i class=\"far fa-star text-danger fa-2x\"></i></a>
                                    ";
                } else {
                    // line 96
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_article_favoris", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 96), "page" => "list"]), "html", null, true);
                    echo "\"><i class=\"fas fa-star text-danger fa-2x\"></i></a>
                                    ";
                }
                // line 98
                echo "                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                ";
        }
        // line 103
        echo "            </div>
            <div class=\"pagination\">
                ";
        // line 105
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 105, $this->source); })()));
        echo "</div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/show_all_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 105,  299 => 103,  296 => 102,  287 => 98,  281 => 96,  275 => 94,  273 => 93,  269 => 91,  264 => 89,  261 => 88,  259 => 87,  254 => 85,  251 => 84,  247 => 82,  242 => 80,  237 => 79,  235 => 78,  232 => 77,  228 => 75,  226 => 74,  223 => 73,  221 => 72,  218 => 71,  216 => 70,  213 => 69,  211 => 68,  206 => 66,  201 => 63,  194 => 60,  187 => 57,  185 => 56,  181 => 55,  178 => 54,  171 => 52,  167 => 51,  162 => 50,  157 => 48,  153 => 47,  148 => 46,  146 => 45,  141 => 42,  138 => 41,  132 => 40,  128 => 38,  125 => 37,  120 => 36,  118 => 35,  114 => 33,  109 => 32,  107 => 31,  90 => 17,  86 => 16,  77 => 9,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                {% include 'data/_filtre_articles.html.twig' %}
            </div>
            <!--
                Récup les infos dans entite via article_entite
            -->
            <div class=\"col-lg-9 p-4\">
                <div class=\"row\">
                    <div class=\"col-lg-6 float-left\">
                        <button onclick=\"test(3)\"><img src=\"{{asset('assets/images/article/icone.jpg')}}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"mode affichage en icone\" alt=\"mode affichage en icones\" width=\"20\" height=\"20\"></button>
                        <button onclick=\"test(4)\"><img src=\"{{asset('assets/images/article/list.png')}}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"mode affichage liste détaillée\" alt=\"mode affichage liste détaillée\" width=\"20\" height=\"20\"></button>
                        <span class=\"pl-4 pt-4 text-trier\">trier par</span>
                        <button id=\"navbarDropdown\" data-toggle=\"dropdown\" class=\"edit-btn\">
                            <i class=\"fas fa-arrow-up\"></i></button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                <a class=\"dropdown-item\" href=\"#\">titre</a>
                                <a class=\"dropdown-item\" href=\"#\">date d'aquisition</a>
                                <a class=\"dropdown-item\" href=\"#\">prix</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"#\">popularité</a>
                            </div>
                    </div>
                    <div class=\"col-md-6\"></div>
                </div>
                {% if articles is defined %}
                    {% for article in articles | slice(0, 30) %}
                        <div class=\"col-4 pt-4 pb-4 float-left\">
                            <div class=\"pl-2\">
                                {% if nouveaute is defined %}
                                    {% for new in nouveaute %}
                                        {% if new.id == article.id %}
                                            <span class=\"text-size text-bold text-size-title text-nouveaute\"> nouveau !</span>
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                            <div class=\"row p-2\">
                                <div class=\"col-lg-4\">
                                {% if article.vignette == NULL %}
                                    <input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
                                    <a href=\"{{ path('article_details', {id: article.id}) }}\">
                                        <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\"></a>
                                {% else %}
                                    <input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
                                    <a href=\"{{ path('article_details', {id: article.id}) }}\">
                                        <img src=\"{{ article.vignette }}\" alt=\"{{ article.vignette }}\" width=\"120\" height=\"120\"></a>
                                {% endif %}
                                    <div class=\"p-4\">
                                        <input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
                                        {%  if article.statut.libelle == \"empruntable\" %}
                                            <a href=\"{{ path('add_article_panier',{id:article.id}) }}\" class=\"style-button-article-emprunt\">
                                                Emprunter</a>
                                        {% else %}
                                            <a href=\"{{ path('add_article_panier',{id:article.id}) }}\" class=\"style-button-article-achat\">
                                                Acheter</a>
                                        {% endif %}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                        <div class=\"text-size-title\"><span class=\"text-bold\">{{article.titre | capitalize }}</span></div>
                                        <div class=\"text-size pt-2\">
                                            {% if article.categorie.libelle == 'video' %}
                                            <span class=\"text-orange\">réalisateur : </span>
                                            {% elseif article.categorie.libelle == 'livre' %}
                                                <span class=\"text-orange\">auteur : </span>
                                            {% elseif article.categorie.libelle == 'jeux' %}
                                                <span class=\"text-orange\">éditeur : </span>
                                            {% elseif article.categorie.libelle == 'musique' %}
                                                <span class=\"text-orange\">artiste : </span>
                                            {% endif %}
                                            <!-- changer quand on aura une liste des entités par article, pour l'instant il n'y a qu'une entité par article -->
                                            {% if article.entites[0] is defined %}
                                                {{ article.entites[0].prenom | capitalize }}
                                                {{article.entites[0].nom is empty ? \"inconnu\" : article.entites[0].nom | capitalize }}
                                            {% else %}
                                                inconnu
                                            {% endif %}
                                        </div>
                                        <div class=\"text-size pt-1\"><span class=\"text-orange\">date de publication : </span>{{article.datePublication is empty ? \"inconnu\" : article.datePublication|date(\"d/m/Y\")}}</div>
                                    <div class=\"text-size pt-3\"><span class=\"text-orange\">moyenne : </span>moyenne (étoile)</div>
                                        {%  if article.statut.libelle == \"vendable\" %}
                                            <hr>
                                            <div class=\"text-size\"><span class=\"text-orange\">prix : </span><span style=\"color: red\">{{ article.montantVente }}€</span></div>
                                        {% endif %}
                                </div>
                                <div class=\"col-lg-1\"> <!-- pour tablette : p-4-->
                                    {% if article.favoris is empty %}
                                        <a href=\"{{ path('add_article_favoris', {id: article.id, page: \"list\"}) }}\"><i class=\"far fa-star text-danger fa-2x\"></i></a>
                                    {% else %}
                                        <a href=\"{{ path('remove_article_favoris', {id: article.id, page: \"list\"}) }}\"><i class=\"fas fa-star text-danger fa-2x\"></i></a>
                                    {% endif %}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
            <div class=\"pagination\">
                {{ knp_pagination_render(articles)}}</div>
        </div>
    </div>
{% endblock %}", "articles/show_all_articles.html.twig", "/home/lisa/Documents/test/projet/templates/articles/show_all_articles.html.twig");
    }
}
