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

/* users/profil/panier.html.twig */
class __TwigTemplate_e07e20f7cf2ecbd2ebd42ab395dcff74459a8fa3776707ee82e207733dec07b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/panier.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/panier.html.twig", 1);
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
    <div class=\"container cadre\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <h1>Votre Panier (";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["totalPanier"]) || array_key_exists("totalPanier", $context) ? $context["totalPanier"] : (function () { throw new RuntimeError('Variable "totalPanier" does not exist.', 7, $this->source); })()), "html", null, true);
        echo ")</h1>
            </div>
            <div class=\"col-sm\">
                ";
        // line 10
        if (( !twig_test_empty((isset($context["achat"]) || array_key_exists("achat", $context) ? $context["achat"] : (function () { throw new RuntimeError('Variable "achat" does not exist.', 10, $this->source); })())) ||  !twig_test_empty((isset($context["emprunt"]) || array_key_exists("emprunt", $context) ? $context["emprunt"] : (function () { throw new RuntimeError('Variable "emprunt" does not exist.', 10, $this->source); })())))) {
            // line 11
            echo "                    <b class=\"float-right pr-2\">00:00:00 <span class=\"text-danger\">*</span></b>
                ";
        }
        // line 13
        echo "            </div>
        </div><hr>

        ";
        // line 16
        if (( !twig_test_empty((isset($context["achat"]) || array_key_exists("achat", $context) ? $context["achat"] : (function () { throw new RuntimeError('Variable "achat" does not exist.', 16, $this->source); })())) ||  !twig_test_empty((isset($context["emprunt"]) || array_key_exists("emprunt", $context) ? $context["emprunt"] : (function () { throw new RuntimeError('Variable "emprunt" does not exist.', 16, $this->source); })())))) {
            // line 17
            echo "            <div class=\"row justify-content-end\">
                <button type=\"button\" class=\"btn btn-danger mr-6\" data-toggle=\"modal\" data-target=\"#viderPanier\">
                    Vider le panier
                </button>
            </div>

            <div class=\"modal fade\" id=\"viderPanier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"viderPanierTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"viderPanierTitle\">Vider le panier</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            Voulez-vous vraiment vider votre panier ?
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"col-sm\">
                                <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                            </div>
                            <div class=\"col-sm\">
                                <form action=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vider_panier");
            echo "\" method=\"POST\" style=\"display:inline\">
                                    <input type=\"hidden\" name=\"token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("panier_delete"), "html", null, true);
            echo "\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            ";
            // line 50
            if ( !twig_test_empty((isset($context["achat"]) || array_key_exists("achat", $context) ? $context["achat"] : (function () { throw new RuntimeError('Variable "achat" does not exist.', 50, $this->source); })()))) {
                // line 51
                echo "                <div class=\"row mb-5\">
                    <h2>Vos Achats (";
                // line 52
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["achat"]) || array_key_exists("achat", $context) ? $context["achat"] : (function () { throw new RuntimeError('Variable "achat" does not exist.', 52, $this->source); })())), "html", null, true);
                echo ")</h2>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Vignette</th>
                            <th scope=\"col\">Titre</th>
                            <th scope=\"col\">Genre</th>
                            <th scope=\"col\">Catégorie</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Prix</th>
                            <th colspan=\"2\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["achat"]) || array_key_exists("achat", $context) ? $context["achat"] : (function () { throw new RuntimeError('Variable "achat" does not exist.', 66, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pan"]) {
                    // line 67
                    echo "                            <tr>
                                <td>
                                    ";
                    // line 69
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 69), "vignette", [], "any", false, false, false, 69))) {
                        // line 70
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 70), "vignette", [], "any", false, false, false, 70), "html", null, true);
                        echo "\" alt=\"image de ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 70), "titre", [], "any", false, false, false, 70), "html", null, true);
                        echo "\" width=\"120\" height=\"120\">
                                    ";
                    } else {
                        // line 72
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                        echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                                    ";
                    }
                    // line 74
                    echo "                                </td>
                                <td>
                                    ";
                    // line 76
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 76), "titre", [], "any", false, false, false, 76))) {
                        // line 77
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 77), "titre", [], "any", false, false, false, 77)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 79
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 79), "codeArticle", [], "any", false, false, false, 79), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 81
                    echo "                                </td>
                                <td>
                                    ";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 83), "genre", [], "any", false, false, false, 83), "libelle", [], "any", false, false, false, 83), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 86
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 86), "categorie", [], "any", false, false, false, 86), "libelle", [], "any", false, false, false, 86), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 89
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 89), "statut", [], "any", false, false, false, 89), "libelle", [], "any", false, false, false, 89), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 92
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "typeEnregistrement", [], "any", false, false, false, 92), "libelle", [], "any", false, false, false, 92), "achat")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 92), "statut", [], "any", false, false, false, 92), "libelle", [], "any", false, false, false, 92), "vendu")))) {
                        // line 93
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 93), "MontantVente", [], "any", false, false, false, 93), "html", null, true);
                        echo " €
                                    ";
                    } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 94
$context["pan"], "typeEnregistrement", [], "any", false, false, false, 94), "libelle", [], "any", false, false, false, 94), "achat")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 94), "statut", [], "any", false, false, false, 94), "libelle", [], "any", false, false, false, 94), "vendu")))) {
                        // line 95
                        echo "                                        vendu
                                    ";
                    } else {
                        // line 97
                        echo "                                        Gratuit
                                    ";
                    }
                    // line 99
                    echo "                                </td>
                                <td class=\"col-3\">
                                    <a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101)]), "html", null, true);
                    echo "\" class=\"btn edit-btn\">Voir plus de détails</a>
                                </td>

                                <td class=\"align-content-center\">
                                    <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#supprArticlePanier";
                    // line 105
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105), "html", null, true);
                    echo "\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>

                                    <div class=\"modal fade\" id=\"supprArticlePanier";
                    // line 109
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"supprArticlePanier";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 109), "id", [], "any", false, false, false, 109), "html", null, true);
                    echo "Title\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cet article</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous mettre cet article dans vos favoris ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <div class=\"col-sm\">
                                                        <a href=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_article_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 123), "id", [], "any", false, false, false, 123)]), "html", null, true);
                    echo "\" class=\"btn btn-danger float-right\">Non</a>
                                                    </div>
                                                    <div class=\"col-sm\">
                                                        <a href=\"";
                    // line 126
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("move_article_panier_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 126), "id", [], "any", false, false, false, 126)]), "html", null, true);
                    echo "\" class=\"btn btn-success float-left\">Oui</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "                        </tbody>
                    </table>
                <div>Total des articles achetés : <b>";
                // line 137
                echo twig_escape_filter($this->env, (isset($context["totalAchat"]) || array_key_exists("totalAchat", $context) ? $context["totalAchat"] : (function () { throw new RuntimeError('Variable "totalAchat" does not exist.', 137, $this->source); })()), "html", null, true);
                echo "€</b></div>
            </div>
            ";
            }
            // line 140
            echo "            ";
            if ( !twig_test_empty((isset($context["emprunt"]) || array_key_exists("emprunt", $context) ? $context["emprunt"] : (function () { throw new RuntimeError('Variable "emprunt" does not exist.', 140, $this->source); })()))) {
                // line 141
                echo "                <div class=\"row\">
                    <h2>Vos Emprunts (";
                // line 142
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["emprunt"]) || array_key_exists("emprunt", $context) ? $context["emprunt"] : (function () { throw new RuntimeError('Variable "emprunt" does not exist.', 142, $this->source); })())), "html", null, true);
                echo ")</h2>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Vignette</th>
                            <th scope=\"col\">Titre</th>
                            <th scope=\"col\">Genre</th>
                            <th scope=\"col\">Catégorie</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Prix</th>
                            <th colspan=\"2\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
                // line 156
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["emprunt"]) || array_key_exists("emprunt", $context) ? $context["emprunt"] : (function () { throw new RuntimeError('Variable "emprunt" does not exist.', 156, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["pan"]) {
                    // line 157
                    echo "                            <tr>
                                <td>
                                    ";
                    // line 159
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 159), "vignette", [], "any", false, false, false, 159))) {
                        // line 160
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 160), "vignette", [], "any", false, false, false, 160), "html", null, true);
                        echo "\" alt=\"image de ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 160), "titre", [], "any", false, false, false, 160), "html", null, true);
                        echo "\" width=\"120\" height=\"120\">
                                    ";
                    } else {
                        // line 162
                        echo "                                        <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                        echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                                    ";
                    }
                    // line 164
                    echo "                                </td>
                                <td>
                                    ";
                    // line 166
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 166), "titre", [], "any", false, false, false, 166))) {
                        // line 167
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 167), "titre", [], "any", false, false, false, 167)), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 169
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 169), "codeArticle", [], "any", false, false, false, 169), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 171
                    echo "                                </td>
                                <td>
                                    ";
                    // line 173
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 173), "genre", [], "any", false, false, false, 173), "libelle", [], "any", false, false, false, 173), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 176
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 176), "categorie", [], "any", false, false, false, 176), "libelle", [], "any", false, false, false, 176), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 179
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 179), "statut", [], "any", false, false, false, 179), "libelle", [], "any", false, false, false, 179), "html", null, true);
                    echo "
                                </td>
                                <td>
                                    ";
                    // line 182
                    if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "typeEnregistrement", [], "any", false, false, false, 182), "libelle", [], "any", false, false, false, 182), "achat")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 182), "statut", [], "any", false, false, false, 182), "libelle", [], "any", false, false, false, 182), "vendu")))) {
                        // line 183
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 183), "MontantVente", [], "any", false, false, false, 183), "html", null, true);
                        echo " €
                                    ";
                    } elseif (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 184
$context["pan"], "typeEnregistrement", [], "any", false, false, false, 184), "libelle", [], "any", false, false, false, 184), "achat")) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 184), "statut", [], "any", false, false, false, 184), "libelle", [], "any", false, false, false, 184), "vendu")))) {
                        // line 185
                        echo "                                        vendu
                                    ";
                    } else {
                        // line 187
                        echo "                                        Gratuit
                                    ";
                    }
                    // line 189
                    echo "                                </td>
                                <td class=\"col-3\">
                                    <a href=\"";
                    // line 191
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 191), "id", [], "any", false, false, false, 191)]), "html", null, true);
                    echo "\" class=\"btn edit-btn\">Voir plus de détails</a>
                                </td>

                                <td class=\"align-content-center\">
                                    <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#supprArticlePanier";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 195), "id", [], "any", false, false, false, 195), "html", null, true);
                    echo "\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>

                                    <div class=\"modal fade\" id=\"supprArticlePanier";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"supprArticlePanier";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
                    echo "Title\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cet article</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous mettre cet article dans vos favoris ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <div class=\"col-sm\">
                                                        <a href=\"";
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_article_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213)]), "html", null, true);
                    echo "\" class=\"btn btn-danger float-right\">Non</a>
                                                    </div>
                                                    <div class=\"col-sm\">
                                                        <a href=\"";
                    // line 216
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("move_article_panier_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pan"], "article", [], "any", false, false, false, 216), "id", [], "any", false, false, false, 216)]), "html", null, true);
                    echo "\" class=\"btn btn-success float-left\">Oui</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 225
                echo "                        </tbody>
                    </table>
                </div>
            ";
            }
            // line 229
            echo "            <hr>
            <div class=\"row justify-content-end\">
                <div class=\"col-sm\">
                    <button type=\"button\" class=\"btn btn-success float-right\" data-toggle=\"modal\" data-target=\"#validerCommande\">
                        Valider la commande
                    </button>

                    <div class=\"modal fade\" id=\"validerCommande\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"validerCommandeTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"validerCommandeTitle\">Valider la commande</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Voulez-vous vraiment valider votre panier ?
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"col-sm\">
                                        <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                                    </div>
                                    <div class=\"col-sm\">
                                        <form action=\"";
            // line 253
            echo "\" method=\"POST\" style=\"display:inline\">
                                            <input type=\"hidden\" name=\"token\" value=\"";
            // line 254
            echo "\">
                                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                            <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class=\"text-danger\">* Temps restant avant le vidage du panier</small>
        ";
        } else {
            // line 267
            echo "            <div class=\"col-sm m-2\">
                <b>Vous n'avez pas d'article dans votre panier</b>
            </div>
        ";
        }
        // line 271
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 271,  517 => 267,  502 => 254,  499 => 253,  473 => 229,  467 => 225,  452 => 216,  446 => 213,  427 => 199,  420 => 195,  413 => 191,  409 => 189,  405 => 187,  401 => 185,  399 => 184,  394 => 183,  392 => 182,  386 => 179,  380 => 176,  374 => 173,  370 => 171,  364 => 169,  358 => 167,  356 => 166,  352 => 164,  346 => 162,  338 => 160,  336 => 159,  332 => 157,  328 => 156,  311 => 142,  308 => 141,  305 => 140,  299 => 137,  295 => 135,  280 => 126,  274 => 123,  255 => 109,  248 => 105,  241 => 101,  237 => 99,  233 => 97,  229 => 95,  227 => 94,  222 => 93,  220 => 92,  214 => 89,  208 => 86,  202 => 83,  198 => 81,  192 => 79,  186 => 77,  184 => 76,  180 => 74,  174 => 72,  166 => 70,  164 => 69,  160 => 67,  156 => 66,  139 => 52,  136 => 51,  134 => 50,  122 => 41,  118 => 40,  93 => 17,  91 => 16,  86 => 13,  82 => 11,  80 => 10,  74 => 7,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

    <div class=\"container cadre\">
        <div class=\"row\">
            <div class=\"col-sm\">
                <h1>Votre Panier ({{ totalPanier }})</h1>
            </div>
            <div class=\"col-sm\">
                {% if achat is not empty or emprunt is not empty %}
                    <b class=\"float-right pr-2\">00:00:00 <span class=\"text-danger\">*</span></b>
                {% endif %}
            </div>
        </div><hr>

        {% if achat is not empty or emprunt is not empty %}
            <div class=\"row justify-content-end\">
                <button type=\"button\" class=\"btn btn-danger mr-6\" data-toggle=\"modal\" data-target=\"#viderPanier\">
                    Vider le panier
                </button>
            </div>

            <div class=\"modal fade\" id=\"viderPanier\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"viderPanierTitle\" aria-hidden=\"true\">
                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"viderPanierTitle\">Vider le panier</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            Voulez-vous vraiment vider votre panier ?
                        </div>
                        <div class=\"modal-footer\">
                            <div class=\"col-sm\">
                                <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                            </div>
                            <div class=\"col-sm\">
                                <form action=\"{{ path('vider_panier') }}\" method=\"POST\" style=\"display:inline\">
                                    <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('panier_delete') }}\">
                                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                    <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {% if achat is not empty %}
                <div class=\"row mb-5\">
                    <h2>Vos Achats ({{ achat|length }})</h2>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Vignette</th>
                            <th scope=\"col\">Titre</th>
                            <th scope=\"col\">Genre</th>
                            <th scope=\"col\">Catégorie</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Prix</th>
                            <th colspan=\"2\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for pan in achat %}
                            <tr>
                                <td>
                                    {%  if pan.article.vignette is not empty %}
                                        <img src=\"{{ pan.article.vignette }}\" alt=\"image de {{ pan.article.titre }}\" width=\"120\" height=\"120\">
                                    {% else %}
                                        <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                                    {% endif %}
                                </td>
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
                                    {% if pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle !=\"vendu\" %}
                                        {{ pan.article.MontantVente }} €
                                    {% elseif pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle ==\"vendu\" %}
                                        vendu
                                    {% else %}
                                        Gratuit
                                    {% endif %}
                                </td>
                                <td class=\"col-3\">
                                    <a href=\"{{ path('article_details', {id: pan.article.id}) }}\" class=\"btn edit-btn\">Voir plus de détails</a>
                                </td>

                                <td class=\"align-content-center\">
                                    <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#supprArticlePanier{{ pan.article.id }}\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>

                                    <div class=\"modal fade\" id=\"supprArticlePanier{{ pan.article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"supprArticlePanier{{ pan.article.id }}Title\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cet article</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous mettre cet article dans vos favoris ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <div class=\"col-sm\">
                                                        <a href=\"{{ path('remove_article_panier', {id: pan.article.id}) }}\" class=\"btn btn-danger float-right\">Non</a>
                                                    </div>
                                                    <div class=\"col-sm\">
                                                        <a href=\"{{ path('move_article_panier_favoris', {id: pan.article.id}) }}\" class=\"btn btn-success float-left\">Oui</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                <div>Total des articles achetés : <b>{{ totalAchat }}€</b></div>
            </div>
            {% endif %}
            {% if emprunt is not empty %}
                <div class=\"row\">
                    <h2>Vos Emprunts ({{ emprunt|length }})</h2>
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th scope=\"col\">Vignette</th>
                            <th scope=\"col\">Titre</th>
                            <th scope=\"col\">Genre</th>
                            <th scope=\"col\">Catégorie</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Prix</th>
                            <th colspan=\"2\"></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for pan in emprunt %}
                            <tr>
                                <td>
                                    {%  if pan.article.vignette is not empty %}
                                        <img src=\"{{ pan.article.vignette }}\" alt=\"image de {{ pan.article.titre }}\" width=\"120\" height=\"120\">
                                    {% else %}
                                        <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                                    {% endif %}
                                </td>
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
                                    {% if pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle !=\"vendu\" %}
                                        {{ pan.article.MontantVente }} €
                                    {% elseif pan.typeEnregistrement.libelle == \"achat\" and pan.article.statut.libelle ==\"vendu\" %}
                                        vendu
                                    {% else %}
                                        Gratuit
                                    {% endif %}
                                </td>
                                <td class=\"col-3\">
                                    <a href=\"{{ path('article_details', {id: pan.article.id}) }}\" class=\"btn edit-btn\">Voir plus de détails</a>
                                </td>

                                <td class=\"align-content-center\">
                                    <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#supprArticlePanier{{ pan.article.id }}\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>

                                    <div class=\"modal fade\" id=\"supprArticlePanier{{ pan.article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"supprArticlePanier{{ pan.article.id }}Title\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Supprimer cet article</h5>
                                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                        <span aria-hidden=\"true\">&times;</span>
                                                    </button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    Voulez-vous mettre cet article dans vos favoris ?
                                                </div>
                                                <div class=\"modal-footer\">
                                                    <div class=\"col-sm\">
                                                        <a href=\"{{ path('remove_article_panier', {id: pan.article.id}) }}\" class=\"btn btn-danger float-right\">Non</a>
                                                    </div>
                                                    <div class=\"col-sm\">
                                                        <a href=\"{{ path('move_article_panier_favoris', {id: pan.article.id}) }}\" class=\"btn btn-success float-left\">Oui</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}
            <hr>
            <div class=\"row justify-content-end\">
                <div class=\"col-sm\">
                    <button type=\"button\" class=\"btn btn-success float-right\" data-toggle=\"modal\" data-target=\"#validerCommande\">
                        Valider la commande
                    </button>

                    <div class=\"modal fade\" id=\"validerCommande\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"validerCommandeTitle\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"validerCommandeTitle\">Valider la commande</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Voulez-vous vraiment valider votre panier ?
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"col-sm\">
                                        <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                                    </div>
                                    <div class=\"col-sm\">
                                        <form action=\"{#{ path('') }#}\" method=\"POST\" style=\"display:inline\">
                                            <input type=\"hidden\" name=\"token\" value=\"{# { csrf_token('') }#}\">
                                            <input type=\"hidden\" name=\"_method\" value=\"POST\">
                                            <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class=\"text-danger\">* Temps restant avant le vidage du panier</small>
        {% else %}
            <div class=\"col-sm m-2\">
                <b>Vous n'avez pas d'article dans votre panier</b>
            </div>
        {% endif %}
    </div>
{% endblock %}", "users/profil/panier.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/panier.html.twig");
    }
}
