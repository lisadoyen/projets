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

/* articles/show_byGenre_livres.html.twig */
class __TwigTemplate_4daf85035626f2869c4f93dd1cf59f3a3e8e48abf8bf3ba23ce21d5dd7041649 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_byGenre_livres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_byGenre_livres.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "articles/show_byGenre_livres.html.twig", 1);
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
        echo "    <form id=\"search\" action=\"POST\" class=\"content-mobile\">
        <div class=\"searchbar\" style=\"margin-top: 2rem\">
            <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
            <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
        </div>
    </form>
    <div class=\"container-fluid\">
        <h1 style=\"text-align: center\">Récapitulatifs des livres ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 10, $this->source); })()), "libelleGenre", [], "any", false, false, false, 10), "html", null, true);
        echo "</h1><br>
        ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE")) {
            // line 12
            echo "            <div class=\"row\">
                <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_ISBN");
            echo "\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
        ";
        }
        // line 16
        echo "        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des livres ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["genre"]) || array_key_exists("genre", $context) ? $context["genre"] : (function () { throw new RuntimeError('Variable "genre" does not exist.', 18, $this->source); })()), "libelleGenre", [], "any", false, false, false, 18), "html", null, true);
        echo "</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Format</th>
                    <th>Typologie</th>
                    <th>Disponible</th>
                    <th>Inactif</th>
                    <th>Nb sortie</th>
                    <th>Lien</th>
                    <!--
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>
                    -->

                </tr>
                </thead>
                <tbody>
                ";
        // line 45
        if ( !twig_test_empty((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 45, $this->source); })()))) {
            // line 46
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["livre"]) {
                // line 47
                echo "                        <tr>
                            <td>";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeLivre", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                            <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "codeISBN", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "titreDesignation", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "descriptionArticle", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "photo", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "format", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "typologie", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 56
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "disponible", [], "any", false, false, false, 56), 0))) {
                    // line 57
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 59
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 61
                echo "                            </td>
                            <td>
                                ";
                // line 63
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["livre"], "inactif", [], "any", false, false, false, 63), 0))) {
                    // line 64
                    echo "                                    <span style=\"color:red\">Non</span>
                                ";
                } else {
                    // line 66
                    echo "                                    <span style=\"color:green\">Oui</span>
                                ";
                }
                // line 68
                echo "                            </td>
                            <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "nombreDeSorties", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                            <td>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "Lien", [], "any", false, false, false, 70), "html", null, true);
                echo "</td>
                            <!--
                            <td>";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateDeRetrait", [], "any", false, false, false, 72), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateAchat", [], "any", false, false, false, 73), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livre"], "dateCreation", [], "any", false, false, false, 74), "d/m/Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 75), "nom", [], "any", false, false, false, 75), "html", null, true);
                echo "</td>
                            <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdAuteur", [], "any", false, false, false, 76), "prenom", [], "any", false, false, false, 76), "html", null, true);
                echo "</td>
                            <td>";
                // line 77
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livre"], "fkIdGenre", [], "any", false, false, false, 77), "libelleGenre", [], "any", false, false, false, 77), "html", null, true);
                echo "</td>
                            <td>
                                <a href=\"";
                // line 79
                echo "\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                            -->
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                ";
        } else {
            // line 85
            echo "                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                ";
        }
        // line 87
        echo "                </tbody>
            </table>
            <div class=\"pagination\">
                ";
        // line 90
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["livres"]) || array_key_exists("livres", $context) ? $context["livres"] : (function () { throw new RuntimeError('Variable "livres" does not exist.', 90, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/show_byGenre_livres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 90,  243 => 87,  239 => 85,  236 => 84,  226 => 79,  221 => 77,  217 => 76,  213 => 75,  209 => 74,  205 => 73,  201 => 72,  196 => 70,  192 => 69,  189 => 68,  185 => 66,  181 => 64,  179 => 63,  175 => 61,  171 => 59,  167 => 57,  165 => 56,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  140 => 49,  136 => 48,  133 => 47,  128 => 46,  126 => 45,  96 => 18,  92 => 16,  86 => 13,  83 => 12,  81 => 11,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <form id=\"search\" action=\"POST\" class=\"content-mobile\">
        <div class=\"searchbar\" style=\"margin-top: 2rem\">
            <input class=\"search_input\" type=\"text\" name=\"\" placeholder=\"Search...\">
            <a href=\"#\" class=\"search_icon\" onclick=\"this.closest('form').submit();return false;\"><i class=\"fas fa-search\"></i></a>
        </div>
    </form>
    <div class=\"container-fluid\">
        <h1 style=\"text-align: center\">Récapitulatifs des livres {{ genre.libelleGenre }}</h1><br>
        {% if is_granted('ROLE_BENEVOLE') %}
            <div class=\"row\">
                <a href=\"{{ path('get_ISBN') }}\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
        {% endif %}
        <div>
            <table class=\"table table-striped table-bordered\">
                <caption>Récapitulatifs des livres {{ genre.libelleGenre }}</caption>
                <thead class=\"thead-dark\">
                <tr>
                    <th>Code Livre</th>
                    <th>Code ISBN</th>
                    <th>Titre / Designation</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Format</th>
                    <th>Typologie</th>
                    <th>Disponible</th>
                    <th>Inactif</th>
                    <th>Nb sortie</th>
                    <th>Lien</th>
                    <!--
                    <th>Date de retrait</th>
                    <th>Date achat</th>
                    <th>Date de création</th>
                    <th>Nom auteur</th>
                    <th>Prenom auteur</th>
                    <th>Libelle genre</th>
                    <th>Opérations</th>
                    -->

                </tr>
                </thead>
                <tbody>
                {% if livres is not empty %}
                    {% for livre in livres %}
                        <tr>
                            <td>{{livre.codeLivre}}</td>
                            <td>{{livre.codeISBN}}</td>
                            <td>{{livre.titreDesignation}}</td>
                            <td>{{livre.descriptionArticle}}</td>
                            <td>{{livre.photo}}</td>
                            <td>{{livre.format}}</td>
                            <td>{{livre.typologie}}</td>
                            <td>
                                {% if livre.disponible == 0 %}
                                    <span style=\"color:red\">Non</span>
                                {% else %}
                                    <span style=\"color:green\">Oui</span>
                                {% endif %}
                            </td>
                            <td>
                                {% if livre.inactif == 0 %}
                                    <span style=\"color:red\">Non</span>
                                {% else %}
                                    <span style=\"color:green\">Oui</span>
                                {% endif %}
                            </td>
                            <td>{{livre.nombreDeSorties}}</td>
                            <td>{{livre.Lien}}</td>
                            <!--
                            <td>{{livre.dateDeRetrait | date('d/m/Y')}}</td>
                            <td>{{livre.dateAchat | date('d/m/Y')}}</td>
                            <td>{{livre.dateCreation | date('d/m/Y')}}</td>
                            <td>{{livre.fkIdAuteur.nom}}</td>
                            <td>{{livre.fkIdAuteur.prenom}}</td>
                            <td>{{livre.fkIdGenre.libelleGenre}}</td>
                            <td>
                                <a href=\"{#{ path('livre_reverve', {id: livre.id}) }#}\" class=\"btn btn-primary\">Réserver</a>
                            </td>
                            -->
                        </tr>
                    {% endfor %}
                {% else %}
                    <tr class=\"table-warning\"><td>Pas de livre</td></tr>
                {% endif %}
                </tbody>
            </table>
            <div class=\"pagination\">
                {{ knp_pagination_render(livres)}}
            </div>
        </div>
    </div>
{% endblock %}", "articles/show_byGenre_livres.html.twig", "/home/lisa/Documents/test/projet/templates/articles/show_byGenre_livres.html.twig");
    }
}
