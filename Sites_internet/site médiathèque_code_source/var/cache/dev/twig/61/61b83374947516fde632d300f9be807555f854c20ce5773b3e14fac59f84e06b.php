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

/* data_base/operation_articles.html.twig */
class __TwigTemplate_06bf00cb4791051dee788f69db548f6352d0bfa3dc0602bee2f0b296f4ff03dd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data_base/operation_articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data_base/operation_articles.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "data_base/operation_articles.html.twig", 1);
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
                <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("get_ISBN");
        echo "\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un livre</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter un film</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un film</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter une musique</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier une musique</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Jeux
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter un jeu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un jeu</a>
            </div>
        </div><hr>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data_base/operation_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  68 => 3,  58 => 2,  35 => 1,);
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
                <a href=\"{{ path('get_ISBN') }}\" class=\"edit-btn\">Ajouter un livre</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un livre</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter un film</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un film</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Films
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter une musique</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier une musique</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Jeux
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Ajouter un jeu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"\" class=\"edit-btn\">Modifier un jeu</a>
            </div>
        </div><hr>
    </div>
{% endblock %}
", "data_base/operation_articles.html.twig", "/home/lisa/Documents/test/projet/templates/data_base/operation_articles.html.twig");
    }
}
