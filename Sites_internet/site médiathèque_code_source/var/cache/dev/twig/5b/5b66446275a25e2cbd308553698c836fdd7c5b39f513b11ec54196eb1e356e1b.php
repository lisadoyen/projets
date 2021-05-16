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

/* crud_list.html.twig */
class __TwigTemplate_d965b3d885739c919d6348cdd5d18fe0c41f2f82e1189c044a7854368edfed79 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "crud_list.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "crud_list.html.twig", 1);
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
        <h1>Ajouter, modifier, supprimer des éléments</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Article</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entite</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entite_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entite_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TypeEntite</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_entite_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("type_entite_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Annonce</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Categorie</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categorie_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Genre</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("genre_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Rubrique</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rubrique_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Tag</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Lien</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lien_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("lien_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TrancheAge</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tranche_age_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tranche_age_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entreprise</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entreprise_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Fonction</div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_index");
        echo "\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 110
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fonction_new");
        echo "\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "crud_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 110,  240 => 107,  231 => 101,  225 => 98,  216 => 92,  210 => 89,  201 => 83,  195 => 80,  186 => 74,  180 => 71,  171 => 65,  165 => 62,  156 => 56,  150 => 53,  141 => 47,  135 => 44,  126 => 38,  120 => 35,  111 => 29,  105 => 26,  96 => 20,  90 => 17,  81 => 11,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container cadre\">
        <h1>Ajouter, modifier, supprimer des éléments</h1><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Article</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('article_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('article_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entite</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entite_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entite_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TypeEntite</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('type_entite_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('type_entite_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Annonce</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('annonce_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('annonce_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Categorie</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('categorie_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('categorie_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Genre</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('genre_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('genre_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Rubrique</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('rubrique_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('rubrique_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Tag</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tag_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tag_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Lien</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('lien_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('lien_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">TrancheAge</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tranche_age_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('tranche_age_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Entreprise</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entreprise_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('entreprise_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">Fonction</div>
            <div class=\"col-sm\">
                <a href=\"{{ path('fonction_index') }}\" class=\"edit-btn\">Menu</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('fonction_new') }}\" class=\"edit-btn\">Ajouter</a>
            </div>
        </div>
    </div>
{% endblock %}
", "crud_list.html.twig", "/home/lisa/Documents/test/projet/templates/crud_list.html.twig");
    }
}
