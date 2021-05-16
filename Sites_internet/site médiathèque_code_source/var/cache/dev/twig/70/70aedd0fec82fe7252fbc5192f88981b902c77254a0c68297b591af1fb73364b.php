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

/* users/profil/favoris.html.twig */
class __TwigTemplate_1ed0761dddc9dc8d3a8d64a735ee78681d5d0a15b9d38b1592d79e3d8074fd87 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/favoris.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/favoris.html.twig", 1);
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
    <h1>Vos favoris (";
        // line 5
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 5, $this->source); })())), "html", null, true);
        echo ")</h1><hr>
    ";
        // line 6
        if ( !twig_test_empty((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        <div class=\"row justify-content-end\">
            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteAllFavoris\">
                Vider la liste
            </button>
        </div>

        <div class=\"modal fade\" id=\"deleteAllFavoris\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteAllFavorisTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteAllFavorisTitle\">Supprimer tous les favoris</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        Voulez-vous vraiment supprimer tous vos favoris ?
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-sm\">
                            <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                        </div>
                        <div class=\"col-sm\">
                            <form action=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("vider_favoris");
            echo "\" method=\"POST\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"token\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("favoris_delete"), "html", null, true);
            echo "\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Illustration</th>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Catégorie</th>
                    <th scope=\"col\">Genre</th>
                    <th scope=\"col\">Statut</th>
                    <th colspan=\"2\"></th>
                </tr>
            </thead>
        <tbody>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["favoris"]) || array_key_exists("favoris", $context) ? $context["favoris"] : (function () { throw new RuntimeError('Variable "favoris" does not exist.', 53, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["fav"]) {
                // line 54
                echo "                <tr>
                    <td>
                        ";
                // line 56
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 56), "vignette", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 57), "vignette", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" alt=\"image de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 57), "titre", [], "any", false, false, false, 57), "html", null, true);
                    echo "\" width=\"120\" height=\"120\">
                        ";
                } else {
                    // line 59
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                    echo "\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                        ";
                }
                // line 61
                echo "                    </td>
                    <td>
                        ";
                // line 63
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 63), "titre", [], "any", false, false, false, 63))) {
                    // line 64
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 64), "titre", [], "any", false, false, false, 64)), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 66
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 66), "codeArticle", [], "any", false, false, false, 66), "html", null, true);
                    echo "
                        ";
                }
                // line 68
                echo "                    </td>
                    <td>
                        ";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 70), "categorie", [], "any", false, false, false, 70), "libelle", [], "any", false, false, false, 70), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 73), "genre", [], "any", false, false, false, 73), "libelle", [], "any", false, false, false, 73), "html", null, true);
                echo "
                    </td>
                    <td>
                        ";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 76), "statut", [], "any", false, false, false, 76), "libelle", [], "any", false, false, false, 76), "html", null, true);
                echo "
                    </td>
                    <td>
                        <a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\" class=\"btn edit-btn\">Ajouter au panier</a>
                        <a href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" class=\"btn edit-btn\">Voir plus de détails</a>
                    </td>
                    <td class=\"align-content-center\">
                        <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#deleteOneFavori";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </td>

                    <div class=\"modal fade\" id=\"deleteOneFavori";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteOneFavori";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88), "html", null, true);
                echo "Title\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"deleteOneFavori";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92), "html", null, true);
                echo "Title\">Supprimer un article</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Voulez-vous vraiment supprimer \"";
                // line 98
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 98), "titre", [], "any", false, false, false, 98)), "html", null, true);
                echo "\" de vos favoris ?
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"col-sm\">
                                        <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                                    </div>
                                    <div class=\"col-sm\">
                                        <a href=\"";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favoris", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fav"], "article", [], "any", false, false, false, 105), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" class=\"btn btn-success float-left\">Oui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "        </tbody>
    </table><hr>
    ";
        } else {
            // line 116
            echo "        <div class=\"col-sm m-2\">
            <b>Vous n'avez pas d'article favori</b>
        </div>
    ";
        }
        // line 120
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/favoris.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 120,  261 => 116,  256 => 113,  242 => 105,  232 => 98,  223 => 92,  214 => 88,  206 => 83,  200 => 80,  196 => 79,  190 => 76,  184 => 73,  178 => 70,  174 => 68,  168 => 66,  162 => 64,  160 => 63,  156 => 61,  150 => 59,  142 => 57,  140 => 56,  136 => 54,  132 => 53,  107 => 31,  103 => 30,  78 => 7,  76 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}

<div class=\"container cadre\">
    <h1>Vos favoris ({{ favoris|length }})</h1><hr>
    {% if favoris is not empty %}
        <div class=\"row justify-content-end\">
            <button type=\"button\" class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#deleteAllFavoris\">
                Vider la liste
            </button>
        </div>

        <div class=\"modal fade\" id=\"deleteAllFavoris\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteAllFavorisTitle\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"deleteAllFavorisTitle\">Supprimer tous les favoris</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        Voulez-vous vraiment supprimer tous vos favoris ?
                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"col-sm\">
                            <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                        </div>
                        <div class=\"col-sm\">
                            <form action=\"{{ path('vider_favoris') }}\" method=\"POST\" style=\"display:inline\">
                                <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('favoris_delete') }}\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <button type=\"submit\" class=\"btn btn-success float-left\">Oui</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <table class=\"table\">
            <thead>
                <tr>
                    <th scope=\"col\">Illustration</th>
                    <th scope=\"col\">Titre</th>
                    <th scope=\"col\">Catégorie</th>
                    <th scope=\"col\">Genre</th>
                    <th scope=\"col\">Statut</th>
                    <th colspan=\"2\"></th>
                </tr>
            </thead>
        <tbody>
            {% for fav in favoris %}
                <tr>
                    <td>
                        {%  if fav.article.vignette is not empty %}
                            <img src=\"{{ fav.article.vignette }}\" alt=\"image de {{ fav.article.titre }}\" width=\"120\" height=\"120\">
                        {% else %}
                            <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"120\" height=\"120\">
                        {% endif %}
                    </td>
                    <td>
                        {%  if fav.article.titre is not empty %}
                            {{ fav.article.titre | capitalize }}
                        {% else %}
                            {{ fav.article.codeArticle }}
                        {% endif %}
                    </td>
                    <td>
                        {{ fav.article.categorie.libelle }}
                    </td>
                    <td>
                        {{ fav.article.genre.libelle }}
                    </td>
                    <td>
                        {{ fav.article.statut.libelle }}
                    </td>
                    <td>
                        <a href=\"{{ path('add_article_panier',{id:fav.article.id}) }}\" class=\"btn edit-btn\">Ajouter au panier</a>
                        <a href=\"{{ path('article_details', {id: fav.article.id}) }}\" class=\"btn edit-btn\">Voir plus de détails</a>
                    </td>
                    <td class=\"align-content-center\">
                        <button type=\"button\" class=\"close p-4\" aria-label=\"Close\" data-toggle=\"modal\" data-target=\"#deleteOneFavori{{ fav.article.id }}\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </td>

                    <div class=\"modal fade\" id=\"deleteOneFavori{{ fav.article.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteOneFavori{{ fav.article.id }}Title\" aria-hidden=\"true\">
                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"deleteOneFavori{{ fav.article.id }}Title\">Supprimer un article</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    Voulez-vous vraiment supprimer \"{{ fav.article.titre | capitalize }}\" de vos favoris ?
                                </div>
                                <div class=\"modal-footer\">
                                    <div class=\"col-sm\">
                                        <button type=\"button\" class=\"btn btn-danger float-right\" data-dismiss=\"modal\">Non</button>
                                    </div>
                                    <div class=\"col-sm\">
                                        <a href=\"{{ path('remove_favoris', {id: fav.article.id}) }}\" class=\"btn btn-success float-left\">Oui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </tr>
            {% endfor %}
        </tbody>
    </table><hr>
    {% else %}
        <div class=\"col-sm m-2\">
            <b>Vous n'avez pas d'article favori</b>
        </div>
    {% endif %}
</div>
{% endblock %}
", "users/profil/favoris.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/favoris.html.twig");
    }
}
