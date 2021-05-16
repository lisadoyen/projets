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

/* users/profil/rgpd_data.html.twig */
class __TwigTemplate_a05eac2dda5382058151206f6dec7c2acfbbfb3f4e5d48a89e21e24e04f7496e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/rgpd_data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/rgpd_data.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/rgpd_data.html.twig", 1);
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
        <div class=\"row\">
            <div class=\"col-sm\">
                ";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "avatar", [], "any", false, false, false, 6))) {
            // line 7
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7), "html", null, true);
            echo "\" >
                ";
        } else {
            // line 9
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_yellow.png"), "html", null, true);
            echo "\" alt=\"Aucun avatar\">
                ";
        }
        // line 11
        echo "            </div>
            <div class=\"col-sm\">
                <h1>Vos données personnelles</h1>
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Matricule :
            </div>
            <div class=\"col-sm\">
                ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "matricule", [], "any", false, false, false, 22), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Identifiant :
            </div>
            <div class=\"col-sm\">
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "username", [], "any", false, false, false, 31), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Prenom :
            </div>
            <div class=\"col-sm\">
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "prenom", [], "any", false, false, false, 40), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Nom :
            </div>
            <div class=\"col-sm\">
                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "nom", [], "any", false, false, false, 49), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Sexe :
            </div>
            <div class=\"col-sm\">
                ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "sexe", [], "any", false, false, false, 58), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Entreprise :
            </div>
            <div class=\"col-sm\">
                ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "entreprise", [], "any", false, false, false, 67), "nom", [], "any", false, false, false, 67), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Fonction :
            </div>
            <div class=\"col-sm\">
                ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 76, $this->source); })()), "user", [], "any", false, false, false, 76), "fonction", [], "any", false, false, false, 76), "libelle", [], "any", false, false, false, 76), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email de récupération :
            </div>
            <div class=\"col-sm\">
                ";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "emailRecup", [], "any", false, false, false, 85), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email personnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "emailPerso", [], "any", false, false, false, 94), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email Professionnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "emailPro", [], "any", false, false, false, 103), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone personnel principal :
            </div>
            <div class=\"col-sm\">
                ";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "user", [], "any", false, false, false, 112), "telPerso", [], "any", false, false, false, 112), "html", null, true);
        echo "
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone personnel secondaire :
            </div>
            <div class=\"col-sm\">
                ";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 120, $this->source); })()), "user", [], "any", false, false, false, 120), "telPerso2", [], "any", false, false, false, 120), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone professionnel principal :
            </div>
            <div class=\"col-sm\">
                ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129), "telPro", [], "any", false, false, false, 129), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone professionnel secondaire :
            </div>
            <div class=\"col-sm\">
                ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "telPro2", [], "any", false, false, false, 138), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Notification personnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 147
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "notificationPerso", [], "any", false, false, false, 147), 1))) {
            // line 148
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 150
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 152
        echo "            </div>
            <div class=\"col-sm border-left\">
                Notification professionnel :
            </div>
            <div class=\"col-sm\">
                ";
        // line 157
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "notificationPro", [], "any", false, false, false, 157), 1))) {
            // line 158
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 160
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 162
        echo "            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Adresse de la rue :
            </div>
            <div class=\"col-sm\">
                ";
        // line 170
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "adresseRue", [], "any", false, false, false, 170), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Compléments :
            </div>
            <div class=\"col-sm\">
                ";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "user", [], "any", false, false, false, 179), "adresseRueComplement", [], "any", false, false, false, 179), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Ville :
            </div>
            <div class=\"col-sm\">
                ";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188), "ville", [], "any", false, false, false, 188), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Code postal :
            </div>
            <div class=\"col-sm\">
                ";
        // line 197
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 197, $this->source); })()), "user", [], "any", false, false, false, 197), "codePostal", [], "any", false, false, false, 197), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Droit Emprunt :
            </div>
            <div class=\"col-sm\">
                ";
        // line 206
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 206, $this->source); })()), "user", [], "any", false, false, false, 206), "droitEmprunt", [], "any", false, false, false, 206), 1))) {
            // line 207
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 209
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 211
        echo "            </div>
            <div class=\"col-sm border-left\">
                Droit d'achat :
            </div>
            <div class=\"col-sm\">
                ";
        // line 216
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), "droitAchat", [], "any", false, false, false, 216), 1))) {
            // line 217
            echo "                    <span class=\"text-success\">Oui</span>
                ";
        } else {
            // line 219
            echo "                    <span class=\"text-danger\">Non</span>
                ";
        }
        // line 221
        echo "            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de création :
            </div>
            <div class=\"col-sm\">
                ";
        // line 229
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229), "dateCreation", [], "any", false, false, false, 229), "d/m/Y"), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de modification :
            </div>
            <div class=\"col-sm\">
                ";
        // line 238
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 238, $this->source); })()), "user", [], "any", false, false, false, 238), "dateModification", [], "any", false, false, false, 238), "d/m/Y"), "html", null, true);
        echo "
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Commentaire :
            </div>
            <div class=\"col-sm\">
                ";
        // line 247
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "commentaireUtilisateur", [], "any", false, false, false, 247), "html", null, true);
        echo "
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"";
        // line 252
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\" class=\"edit-btn float-left\">Revenir au profil</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"";
        // line 255
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_donnees_download");
        echo "\" class=\"edit-btn float-right\">Exporter mes données</a>
            </div>
        </div><hr>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/rgpd_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  430 => 255,  424 => 252,  416 => 247,  404 => 238,  392 => 229,  382 => 221,  378 => 219,  374 => 217,  372 => 216,  365 => 211,  361 => 209,  357 => 207,  355 => 206,  343 => 197,  331 => 188,  319 => 179,  307 => 170,  297 => 162,  293 => 160,  289 => 158,  287 => 157,  280 => 152,  276 => 150,  272 => 148,  270 => 147,  258 => 138,  246 => 129,  234 => 120,  223 => 112,  211 => 103,  199 => 94,  187 => 85,  175 => 76,  163 => 67,  151 => 58,  139 => 49,  127 => 40,  115 => 31,  103 => 22,  90 => 11,  84 => 9,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container cadre\">
        <div class=\"row\">
            <div class=\"col-sm\">
                {% if app.user.avatar is not empty %}
                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/')}}{{app.user.avatar}}\" alt=\"Image {{app.user.avatar}}\" >
                {% else %}
                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_yellow.png')}}\" alt=\"Aucun avatar\">
                {% endif %}
            </div>
            <div class=\"col-sm\">
                <h1>Vos données personnelles</h1>
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Matricule :
            </div>
            <div class=\"col-sm\">
                {{  app.user.matricule  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Identifiant :
            </div>
            <div class=\"col-sm\">
                {{  app.user.username  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Prenom :
            </div>
            <div class=\"col-sm\">
                {{  app.user.prenom  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Nom :
            </div>
            <div class=\"col-sm\">
                {{  app.user.nom  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Sexe :
            </div>
            <div class=\"col-sm\">
                {{  app.user.sexe  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Entreprise :
            </div>
            <div class=\"col-sm\">
                {{  app.user.entreprise.nom  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Fonction :
            </div>
            <div class=\"col-sm\">
                {{  app.user.fonction.libelle  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email de récupération :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailRecup  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email personnel :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailPerso  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Email Professionnel :
            </div>
            <div class=\"col-sm\">
                {{  app.user.emailPro  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone personnel principal :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPerso  }}
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone personnel secondaire :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPerso2  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone professionnel principal :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPro  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Télephone professionnel secondaire :
            </div>
            <div class=\"col-sm\">
                {{  app.user.telPro2  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Notification personnel :
            </div>
            <div class=\"col-sm\">
                {% if app.user.notificationPerso == 1 %}
                    <span class=\"text-success\">Oui</span>
                {% else %}
                    <span class=\"text-danger\">Non</span>
                {% endif %}
            </div>
            <div class=\"col-sm border-left\">
                Notification professionnel :
            </div>
            <div class=\"col-sm\">
                {% if app.user.notificationPro == 1 %}
                    <span class=\"text-success\">Oui</span>
                {% else %}
                    <span class=\"text-danger\">Non</span>
                {% endif %}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Adresse de la rue :
            </div>
            <div class=\"col-sm\">
                {{  app.user.adresseRue  }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Compléments :
            </div>
            <div class=\"col-sm\">
                {{  app.user.adresseRueComplement }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Ville :
            </div>
            <div class=\"col-sm\">
                {{  app.user.ville }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Code postal :
            </div>
            <div class=\"col-sm\">
                {{  app.user.codePostal }}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Droit Emprunt :
            </div>
            <div class=\"col-sm\">
                {% if app.user.droitEmprunt == 1 %}
                    <span class=\"text-success\">Oui</span>
                {% else %}
                    <span class=\"text-danger\">Non</span>
                {% endif %}
            </div>
            <div class=\"col-sm border-left\">
                Droit d'achat :
            </div>
            <div class=\"col-sm\">
                {% if app.user.droitAchat == 1 %}
                    <span class=\"text-success\">Oui</span>
                {% else %}
                    <span class=\"text-danger\">Non</span>
                {% endif %}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de création :
            </div>
            <div class=\"col-sm\">
                {{  app.user.dateCreation | date('d/m/Y')}}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Date de modification :
            </div>
            <div class=\"col-sm\">
                {{  app.user.dateModification | date('d/m/Y')}}
            </div>
        </div><hr>

        <div class=\"row\">
            <div class=\"col-sm\">
                Commentaire :
            </div>
            <div class=\"col-sm\">
                {{  app.user.commentaireUtilisateur}}
            </div>
        </div><hr>
        <div class=\"row\">
            <div class=\"col-sm\">
                <a href=\"{{ path('profil') }}\" class=\"edit-btn float-left\">Revenir au profil</a>
            </div>
            <div class=\"col-sm\">
                <a href=\"{{ path('mes_donnees_download') }}\" class=\"edit-btn float-right\">Exporter mes données</a>
            </div>
        </div><hr>
    </div>
{% endblock %}
", "users/profil/rgpd_data.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/rgpd_data.html.twig");
    }
}
