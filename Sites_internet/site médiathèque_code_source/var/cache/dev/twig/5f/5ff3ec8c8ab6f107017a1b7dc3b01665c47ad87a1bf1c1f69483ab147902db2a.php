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

/* users/profil/_profil_form_reset_password.html.twig */
class __TwigTemplate_f768dbbbd2842a064665f31d0b93610e5cae55d175b9f0d03065e2c5b246eae5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/_profil_form_reset_password.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/_profil_form_reset_password.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/_profil_form_reset_password.html.twig", 1);
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
        echo "<div class=\"container cadre\">
    <h1>Modification du mot de passe</h1><hr>
    <form action=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_password_profil");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"password\">Nouveau mot de passe : </label>
            <input required id=\"password\" name=\"password\" type=\"password\" class=\"form-control\" min=\"8\">
        </div>
        <div class=\"form-group\">
            <label for=\"password_confirm\">Confirmer le mot de passe : </label>
            <input required id=\"password_confirm\" name=\"password_confirm\" type=\"password\" class=\"form-control\">
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\" class=\"edit-btn\">Annuler</a>
            </div>    
            <div class=\"col-sm\">
                <button type=\"submit\" class=\"edit-btn\">Valider</button>
            </div>
        </div>
        
    </form>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/_profil_form_reset_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 17,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
<div class=\"container cadre\">
    <h1>Modification du mot de passe</h1><hr>
    <form action=\"{{ path('edit_password_profil') }}\" method=\"post\">
        <div class=\"form-group\">
            <label for=\"password\">Nouveau mot de passe : </label>
            <input required id=\"password\" name=\"password\" type=\"password\" class=\"form-control\" min=\"8\">
        </div>
        <div class=\"form-group\">
            <label for=\"password_confirm\">Confirmer le mot de passe : </label>
            <input required id=\"password_confirm\" name=\"password_confirm\" type=\"password\" class=\"form-control\">
        </div>
        <hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"{{path('profil')}}\" class=\"edit-btn\">Annuler</a>
            </div>    
            <div class=\"col-sm\">
                <button type=\"submit\" class=\"edit-btn\">Valider</button>
            </div>
        </div>
        
    </form>
</div>
{% endblock %}
", "users/profil/_profil_form_reset_password.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/_profil_form_reset_password.html.twig");
    }
}
