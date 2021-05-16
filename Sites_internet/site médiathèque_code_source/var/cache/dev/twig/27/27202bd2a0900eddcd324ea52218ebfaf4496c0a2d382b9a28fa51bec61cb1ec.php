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

/* users/profil/profil.html.twig */
class __TwigTemplate_906ff6a566158f010c1bece4c740c3bc6b4faf20c741821a833811d8c12a103e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/profil.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "users/profil/profil.html.twig", 1);
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
        echo "<div class=\"container cadre\">
    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("emprunts");
        echo "\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                ";
        // line 17
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "avatar", [], "any", false, false, false, 17))) {
            // line 18
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18), "html", null, true);
            echo "\" >
                ";
        } else {
            // line 20
            echo "                    <img style=\"width:100px;height:100px\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_yellow.png"), "html", null, true);
            echo "\" alt=\"Aucun avatar\">
                ";
        }
        // line 22
        echo "            </button>
        </div>
        <div class=\"col-sm\">
            <h1>Votre profil</h1>
        </div>
    </div><hr>
    
    <div class=\"modal fade\" id=\"imgProfil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"imgProfilTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">Changer l'avatar</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-sm\">
                                <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_color_avatar_profil", ["color" => "dark"]);
        echo "\" class=\"btn\" style=\"";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "avatar", [], "any", false, false, false, 42), "account_dark.png"))) {
            echo " border: 1px solid lightgray ";
        }
        echo "\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_dark.png"), "html", null, true);
        echo "\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_color_avatar_profil", ["color" => "blue"]);
        echo "\" class=\"btn\" style=\"";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "avatar", [], "any", false, false, false, 47), "account_blue.png"))) {
            echo " border: 1px solid lightgray ";
        }
        echo "\"  data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_blue.png"), "html", null, true);
        echo "\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_color_avatar_profil", ["color" => "green"]);
        echo "\" class=\"btn\" style=\"";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "avatar", [], "any", false, false, false, 52), "account_green.png"))) {
            echo " border: 1px solid lightgray ";
        }
        echo "\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_green.png"), "html", null, true);
        echo "\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_color_avatar_profil", ["color" => "red"]);
        echo "\" class=\"btn\" style=\"";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "avatar", [], "any", false, false, false, 57), "account_red.png"))) {
            echo " border: 1px solid lightgray ";
        }
        echo "\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/account_red.png"), "html", null, true);
        echo "\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                        </div>
                        <hr>
                        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start');
        echo "
                        <h3>Importer une image depuis votre ordinateur :</h3><br>
                        <div class=\"row\">
                            ";
        // line 66
        if ((((((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66), "account_dark.png")) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66), "account_blue.png"))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66), "account_green.png"))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66), "account_red.png"))) && (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "avatar", [], "any", false, false, false, 66), "account_yellow.png")))) {
            // line 67
            echo "                            <div class=\"col-2\">
                                    <img style=\"width:100px;height:100px;\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "avatar", [], "any", false, false, false, 68), "html", null, true);
            echo "\" alt=\"Image ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "avatar", [], "any", false, false, false, 68), "html", null, true);
            echo "\" >
                            </div>
                            ";
        }
        // line 71
        echo "                            <div class=\"col-6\">
                            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "avatar", [], "any", false, false, false, 72), 'row', ["label" => "Choisir un ficher"]);
        echo "
                            </div>
                            <div class=\"col-4\">
                                <button type=\"submit\" class=\"edit-btn\" style=\"margin-top: 1.4em;\">Choisir cette image</button>
                            </div>
                        </div>
                        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_color_avatar_profil", ["color" => "yellow"]);
        echo "\" class=\"btn btn-secondary\">Rétablir l'avatar par défaut</a>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm\">
            Matricule :
        </div>
        <div class=\"col-sm\">
            ";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "matricule", [], "any", false, false, false, 94), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Identifiant :
        </div>
        <div class=\"col-sm\">
            ";
        // line 103
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "username", [], "any", false, false, false, 103), "html", null, true);
        echo "
        </div>
    </div><hr>


    <div class=\"row\">
        <div class=\"col-sm\">
            Prenom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "prenom", [], "any", false, false, false, 113), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Nom :
        </div>
        <div class=\"col-sm\">
            ";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "nom", [], "any", false, false, false, 122), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Entreprise :
        </div>
        <div class=\"col-sm\">
            ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "entreprise", [], "any", false, false, false, 131), "nom", [], "any", false, false, false, 131), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Fonction :
        </div>
        <div class=\"col-sm\">
            ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "user", [], "any", false, false, false, 140), "fonction", [], "any", false, false, false, 140), "libelle", [], "any", false, false, false, 140), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Email de récupération:
        </div>
        <div class=\"col-sm\">
            ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "emailRecup", [], "any", false, false, false, 149), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Droit Emprunt :
        </div>
        <div class=\"col-sm\">
            ";
        // line 158
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "droitEmprunt", [], "any", false, false, false, 158), 1))) {
            // line 159
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 161
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 163
        echo "        </div>
        <div class=\"col-sm border-left\">
            Droit d'achat :
        </div>
        <div class=\"col-sm\">
            ";
        // line 168
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 168, $this->source); })()), "user", [], "any", false, false, false, 168), "droitAchat", [], "any", false, false, false, 168), 1))) {
            // line 169
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 171
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 173
        echo "        </div>
    </div><hr>
    <div class=\"row\">
        <div class=\"col-sm\">
            Notification personnel :
        </div>
        <div class=\"col-sm\">
            ";
        // line 180
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 180, $this->source); })()), "user", [], "any", false, false, false, 180), "notificationPerso", [], "any", false, false, false, 180), 1))) {
            // line 181
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 183
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 185
        echo "        </div>
        <div class=\"col-sm border-left\">
            Notification professionnel :
        </div>
        <div class=\"col-sm\">
            ";
        // line 190
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190), "notificationPro", [], "any", false, false, false, 190), 1))) {
            // line 191
            echo "                <span class=\"text-success\">Oui</span>
            ";
        } else {
            // line 193
            echo "                <span class=\"text-danger\">Non</span>
            ";
        }
        // line 195
        echo "        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de création :
        </div>
        <div class=\"col-sm\">
            ";
        // line 203
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "dateCreation", [], "any", false, false, false, 203), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            Date de modification :
        </div>
        <div class=\"col-sm\">
            ";
        // line 212
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212), "dateModification", [], "any", false, false, false, 212), "d/m/Y"), "html", null, true);
        echo "
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"";
        // line 218
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mes_donnees");
        echo "\" class=\"edit-btn float-left\">Mes données personnelles</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_password_profil");
        echo "\" class=\"edit-btn float-center\">Modifier mon mot de passe</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"";
        // line 224
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_profil");
        echo "\" class=\"edit-btn float-right\">Modifier les paramètres secondaire</a>
        </div>
    </div><hr>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 224,  428 => 221,  422 => 218,  413 => 212,  401 => 203,  391 => 195,  387 => 193,  383 => 191,  381 => 190,  374 => 185,  370 => 183,  366 => 181,  364 => 180,  355 => 173,  351 => 171,  347 => 169,  345 => 168,  338 => 163,  334 => 161,  330 => 159,  328 => 158,  316 => 149,  304 => 140,  292 => 131,  280 => 122,  268 => 113,  255 => 103,  243 => 94,  228 => 82,  221 => 78,  212 => 72,  209 => 71,  200 => 68,  197 => 67,  195 => 66,  189 => 63,  181 => 58,  173 => 57,  166 => 53,  158 => 52,  151 => 48,  143 => 47,  136 => 43,  128 => 42,  106 => 22,  100 => 20,  91 => 18,  89 => 17,  76 => 7,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% form_theme form 'bootstrap_4_layout.html.twig' %}
{% block body %}
<div class=\"container cadre\">
    <div class=\"row\">
        <div class=\"col-sm\">
            <a href=\"{{ path('emprunts') }}\" class=\"edit-btn float-left\">Voir les emprunts / achat en cours</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"\" class=\"edit-btn float-right\">Voir l'historique des activités</a>
        </div>
    </div><hr>

    <div class=\"row\">
        <div class=\"col-sm\">
            <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                {% if app.user.avatar is not null %}
                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/')}}{{app.user.avatar}}\" alt=\"Image {{app.user.avatar}}\" >
                {% else %}
                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_yellow.png')}}\" alt=\"Aucun avatar\">
                {% endif %}
            </button>
        </div>
        <div class=\"col-sm\">
            <h1>Votre profil</h1>
        </div>
    </div><hr>
    
    <div class=\"modal fade\" id=\"imgProfil\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"imgProfilTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2 class=\"modal-title\" id=\"exampleModalLongTitle\">Changer l'avatar</h2>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-sm\">
                                <a href=\"{{ path('edit_color_avatar_profil', {color:\"dark\"}) }}\" class=\"btn\" style=\"{% if app.user.avatar == \"account_dark.png\" %} border: 1px solid lightgray {% endif %}\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_dark.png')}}\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"{{ path('edit_color_avatar_profil', {color:\"blue\"}) }}\" class=\"btn\" style=\"{% if app.user.avatar == \"account_blue.png\" %} border: 1px solid lightgray {% endif %}\"  data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_blue.png')}}\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"{{ path('edit_color_avatar_profil', {color:\"green\"}) }}\" class=\"btn\" style=\"{% if app.user.avatar == \"account_green.png\" %} border: 1px solid lightgray {% endif %}\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_green.png')}}\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                            <div class=\"col-sm\">
                                <a href=\"{{ path('edit_color_avatar_profil', {color:\"red\"}) }}\" class=\"btn\" style=\"{% if app.user.avatar == \"account_red.png\" %} border: 1px solid lightgray {% endif %}\" data-target=\"#imgProfil\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Changer l'avatar\">
                                    <img style=\"width:100px;height:100px\" src=\"{{asset('assets/images/account/account_red.png')}}\" alt=\"Aucun avatar\">
                                </a>
                            </div>
                        </div>
                        <hr>
                        {{ form_start(form) }}
                        <h3>Importer une image depuis votre ordinateur :</h3><br>
                        <div class=\"row\">
                            {% if app.user.avatar != \"account_dark.png\" and app.user.avatar != \"account_blue.png\" and app.user.avatar != \"account_green.png\" and app.user.avatar != \"account_red.png\" and app.user.avatar != \"account_yellow.png\" %}
                            <div class=\"col-2\">
                                    <img style=\"width:100px;height:100px;\" src=\"{{asset('assets/images/account/')}}{{app.user.avatar}}\" alt=\"Image {{app.user.avatar}}\" >
                            </div>
                            {% endif %}
                            <div class=\"col-6\">
                            {{ form_row(form.avatar, {'label' : 'Choisir un ficher'}) }}
                            </div>
                            <div class=\"col-4\">
                                <button type=\"submit\" class=\"edit-btn\" style=\"margin-top: 1.4em;\">Choisir cette image</button>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <a href=\"{{ path('edit_color_avatar_profil', {color:\"yellow\"}) }}\" class=\"btn btn-secondary\">Rétablir l'avatar par défaut</a>
                    <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Annuler</button>
                </div>
            </div>
        </div>
    </div>

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
            Email de récupération:
        </div>
        <div class=\"col-sm\">
            {{  app.user.emailRecup  }}
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
            <a href=\"{{path('mes_donnees')}}\" class=\"edit-btn float-left\">Mes données personnelles</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"{{path('edit_password_profil')}}\" class=\"edit-btn float-center\">Modifier mon mot de passe</a>
        </div>
        <div class=\"col-sm\">
            <a href=\"{{path('edit_profil')}}\" class=\"edit-btn float-right\">Modifier les paramètres secondaire</a>
        </div>
    </div><hr>
</div>
{% endblock %}
", "users/profil/profil.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/profil.html.twig");
    }
}
