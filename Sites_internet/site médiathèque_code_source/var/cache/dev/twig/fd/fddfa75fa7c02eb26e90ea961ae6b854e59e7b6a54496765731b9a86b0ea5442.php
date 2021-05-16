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

/* data_base/data_base_articles.html.twig */
class __TwigTemplate_cbd2aeed227613a64e362906274af828c002f1024fa0ee8d18a2221964584f38 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data_base/data_base_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data_base/data_base_articles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "data_base/data_base_articles.html.twig", 1);
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
        echo "    <div class=\"container cadre\">
        <h1>Opérations sur les articles</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Livres
            </div>
            <div class=\"col-sm\">
                <form action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_file", ["table" => "bibliotheque"]);
        echo "\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les livres</button>
                </form>
            </div>
            ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les livres</a>
                </div>
            ";
        }
        // line 19
        echo "        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Films</button>
                </form>
            </div>
            ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les films</a>
                </div>
            ";
        }
        // line 34
        echo "        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Musiques
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Musiques</button>
                </form>
            </div>
            ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 45
            echo "                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les musiques</a>
                </div>
            ";
        }
        // line 49
        echo "        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Jeux
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Jeux</button>
                </form>
            </div>
            ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 60
            echo "                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les jeux</a>
                </div>
            ";
        }
        // line 64
        echo "        </div><hr>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data_base/data_base_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 64,  146 => 60,  144 => 59,  132 => 49,  126 => 45,  124 => 44,  112 => 34,  106 => 30,  104 => 29,  92 => 19,  86 => 15,  84 => 14,  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container cadre\">
        <h1>Opérations sur les articles</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Livres
            </div>
            <div class=\"col-sm\">
                <form action=\"{{ path('data_base_file', {table:'bibliotheque'}) }}\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les livres</button>
                </form>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les livres</a>
                </div>
            {% endif %}
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Films</button>
                </form>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les films</a>
                </div>
            {% endif %}
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Musiques
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Musiques</button>
                </form>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les musiques</a>
                </div>
            {% endif %}
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Jeux
            </div>
            <div class=\"col-sm\">
                <form action=\"\" method=\"POST\" style=\"display:inline\">
                    <button type=\"submit\" class=\"edit-btn\">Exporter les Jeux</button>
                </form>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"col-sm\">
                    <a href=\"\" class=\"edit-btn\">Importer les jeux</a>
                </div>
            {% endif %}
        </div><hr>
    </div>
{% endblock %}
", "data_base/data_base_articles.html.twig", "/home/lisa/Documents/test/projet/templates/data_base/data_base_articles.html.twig");
    }
}
