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

/* statistiques/statistiques.html.twig */
class __TwigTemplate_a0c3484e18ae2af865427e3924c1e8cfb7d2da2962bc845134e1634a4bec2ce3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'charts' => [$this, 'block_charts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/statistiques.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "statistiques/statistiques.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "statistiques/statistiques.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container-fluid p-5\">
        <h1>Statistiques</h1>
        <hr>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                    <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                ";
        // line 11
        $this->loadTemplate("data/_filtre_articles.html.twig", "statistiques/statistiques.html.twig", 11)->display($context);
        // line 12
        echo "            </div>
            <div class=\"col-lg-6\">
                <div class=\"row text-center\">
                    <h3 class=\"pb-3\" style=\"font-weight: bold;color : #aa2222 !important;\">Tableau des articles les plus empruntés</h3>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre de l'article</th>
                                <th>Nombre d'emprunts</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 25
            echo "                            ";
            if ((0 === twig_compare($context["article"], twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25)))) {
                // line 26
                echo "                                <tr class=\"table-success\">
                                    <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 27)), "html", null, true);
                echo "</td>
                                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbEmpruntParArticle", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            } elseif ((0 === twig_compare(            // line 30
$context["article"], twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 30, $this->source); })()), 1, [], "array", false, false, false, 30)))) {
                // line 31
                echo "                                    <tr class=\"table-warning\">
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 32)), "html", null, true);
                echo "</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbEmpruntParArticle", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                    </tr>
                            ";
            } elseif ((0 === twig_compare(            // line 35
$context["article"], twig_get_attribute($this->env, $this->source, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 35, $this->source); })()), 2, [], "array", false, false, false, 35)))) {
                // line 36
                echo "                                    <tr class=\"table-info\">
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 37)), "html", null, true);
                echo "</td>
                                        <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbEmpruntParArticle", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                    </tr>
                            ";
            } else {
                // line 41
                echo "                                <tr>
                                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 42)), "html", null, true);
                echo "</td>
                                    <td>";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbEmpruntParArticle", [], "any", false, false, false, 43), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                    <br>
                </div>
                <div class=\"pagination\">
                    ";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 52, $this->source); })()));
        echo "</div>
            </div>
            <div class=\"col-lg-6\">
                <h3 class=\"pb-3\" style=\"font-weight: bold;color : #aa2222 !important;\">Graphique</h3>
                <canvas id=\"myChart\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_charts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "charts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "charts"));

        // line 63
        echo "<script type=\"text/javascript\">
    let ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo "'";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", [], "any", false, false, false, 68)), "html", null, true);
            echo "',";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
            datasets: [{
                backgroundColor: ['rgb(154,205,50)','rgb(241, 196, 15)', 'rgb(52, 152, 219)'],
                data:  [";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbEmpruntParArticle", [], "any", false, false, false, 71), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "statistiques/statistiques.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 71,  204 => 68,  197 => 63,  187 => 62,  168 => 52,  161 => 47,  155 => 46,  149 => 43,  145 => 42,  142 => 41,  136 => 38,  132 => 37,  129 => 36,  127 => 35,  122 => 33,  118 => 32,  115 => 31,  113 => 30,  108 => 28,  104 => 27,  101 => 26,  98 => 25,  94 => 24,  80 => 12,  78 => 11,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}

{% block body %}
    <div class=\"container-fluid p-5\">
        <h1>Statistiques</h1>
        <hr>
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <h2 class=\"center p-4\">Filtre
                    <button class=\"edit-btn\" onclick=\"toggle_visibility(1)\"><i onclick=\"btn_icone(this)\" class=\"fas fa-arrow-up\"></i></button></h2>
                {% include 'data/_filtre_articles.html.twig' %}
            </div>
            <div class=\"col-lg-6\">
                <div class=\"row text-center\">
                    <h3 class=\"pb-3\" style=\"font-weight: bold;color : #aa2222 !important;\">Tableau des articles les plus empruntés</h3>
                    <table class=\"table table-striped\">
                        <thead>
                            <tr>
                                <th>Titre de l'article</th>
                                <th>Nombre d'emprunts</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for article in articles %}
                            {% if article == articles[0] %}
                                <tr class=\"table-success\">
                                    <td>{{ article.titre | capitalize }}</td>
                                    <td>{{ article.nbEmpruntParArticle }}</td>
                                </tr>
                            {% elseif article == articles[1] %}
                                    <tr class=\"table-warning\">
                                        <td>{{ article.titre | capitalize }}</td>
                                        <td>{{ article.nbEmpruntParArticle }}</td>
                                    </tr>
                            {% elseif article == articles[2] %}
                                    <tr class=\"table-info\">
                                        <td>{{ article.titre | capitalize }}</td>
                                        <td>{{ article.nbEmpruntParArticle }}</td>
                                    </tr>
                            {% else %}
                                <tr>
                                    <td>{{ article.titre | capitalize }}</td>
                                    <td>{{ article.nbEmpruntParArticle }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                        </tbody>
                    </table>
                    <br>
                </div>
                <div class=\"pagination\">
                    {{ knp_pagination_render(articles)}}</div>
            </div>
            <div class=\"col-lg-6\">
                <h3 class=\"pb-3\" style=\"font-weight: bold;color : #aa2222 !important;\">Graphique</h3>
                <canvas id=\"myChart\" height=\"200\"></canvas>
            </div>
        </div>
    </div>
{% endblock %}

{% block charts %}
<script type=\"text/javascript\">
    let ctx = document.getElementById('myChart').getContext('2d');
    let chart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: [{% for article in articles %}'{{article.titre | capitalize}}',{% endfor %}],
            datasets: [{
                backgroundColor: ['rgb(154,205,50)','rgb(241, 196, 15)', 'rgb(52, 152, 219)'],
                data:  [{% for article in  articles %}{{article.nbEmpruntParArticle}},{% endfor %}]
            }]
        },
        options: {
            responsive: true
        }
    });
</script>
{% endblock %}", "statistiques/statistiques.html.twig", "/home/lisa/Documents/test/projet/templates/statistiques/statistiques.html.twig");
    }
}
