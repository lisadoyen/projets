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

/* users/profil/download_data.html.twig */
class __TwigTemplate_10a079d65d124b099006b8fede511ddaf1ba9e03b6468c120934e0f7cce27e91 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/download_data.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "users/profil/download_data.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Vos données personnelles</title>
</head>

<body>
    <h1>Vos données personnelles</h1>
    
    <div>
       Avatar : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "avatar", [], "any", false, false, false, 12), "html", null, true);
        echo "
    </div>
    <hr>
        
    <div>
        Matricule : ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "matricule", [], "any", false, false, false, 17), "html", null, true);
        echo "
    </div>
    <hr>
    
    <div>
        Identifiant : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "username", [], "any", false, false, false, 22), "html", null, true);
        echo "
    </div>
    <hr>
        
    <div>
        Prénom : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "prenom", [], "any", false, false, false, 27), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Nom : ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32), "nom", [], "any", false, false, false, 32), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Sexe : ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "sexe", [], "any", false, false, false, 37), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Entreprise : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "entreprise", [], "any", false, false, false, 42), "nom", [], "any", false, false, false, 42), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Fonction : ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "fonction", [], "any", false, false, false, 47), "libelle", [], "any", false, false, false, 47), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Email de récupération : ";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "emailRecup", [], "any", false, false, false, 52), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Email personnel : ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "emailPerso", [], "any", false, false, false, 57), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Email Professionnel : ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "emailPro", [], "any", false, false, false, 62), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Télephone personnel principal : ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "telPerso", [], "any", false, false, false, 67), "html", null, true);
        echo "
    </div>
    <hr>
    
    <div>
        Télephone personnel secondaire : ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "telPerso2", [], "any", false, false, false, 72), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Télephone professionnel principal : ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "telPro", [], "any", false, false, false, 77), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Télephone professionnel secondaire : ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "telPro2", [], "any", false, false, false, 82), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Notification personnel :
        ";
        // line 88
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "notificationPerso", [], "any", false, false, false, 88), 1))) {
            // line 89
            echo "            <span class=\"text-success\">Oui</span>
        ";
        } else {
            // line 91
            echo "            <span class=\"text-danger\">Non</span>
        ";
        }
        // line 93
        echo "    </div>

    <div>
        Notification professionnel :
        ";
        // line 97
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "notificationPro", [], "any", false, false, false, 97), 1))) {
            // line 98
            echo "            <span class=\"text-success\">Oui</span>
        ";
        } else {
            // line 100
            echo "            <span class=\"text-danger\">Non</span>
        ";
        }
        // line 102
        echo "    </div>
    <hr>

    <div>
        Adresse de la rue : ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "adresseRue", [], "any", false, false, false, 106), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Compléments : ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "adresseRueComplement", [], "any", false, false, false, 111), "html", null, true);
        echo "
    </div>
    <hr>
    
    <div>
        Ville : ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "ville", [], "any", false, false, false, 116), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Code postal : ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 121, $this->source); })()), "user", [], "any", false, false, false, 121), "codePostal", [], "any", false, false, false, 121), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Droit Emprunt :
        ";
        // line 127
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127), "droitEmprunt", [], "any", false, false, false, 127), 1))) {
            // line 128
            echo "            <span class=\"text-success\">Oui</span>
        ";
        } else {
            // line 130
            echo "            <span class=\"text-danger\">Non</span>
        ";
        }
        // line 132
        echo "    </div>

    <div>
        Droit d'achat :
        ";
        // line 136
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "droitAchat", [], "any", false, false, false, 136), 1))) {
            // line 137
            echo "            <span class=\"text-success\">Oui</span>
        ";
        } else {
            // line 139
            echo "            <span class=\"text-danger\">Non</span>
        ";
        }
        // line 141
        echo "    </div>
    <hr>

    <div>
        Date de création : ";
        // line 145
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145), "dateCreation", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Date de modification : ";
        // line 150
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "dateModification", [], "any", false, false, false, 150), "d/m/Y"), "html", null, true);
        echo "
    </div>
    <hr>

    <div>
        Commentaire : ";
        // line 155
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "commentaireUtilisateur", [], "any", false, false, false, 155), "html", null, true);
        echo "
    </div>
    <hr>

</body>
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "users/profil/download_data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 155,  282 => 150,  274 => 145,  268 => 141,  264 => 139,  260 => 137,  258 => 136,  252 => 132,  248 => 130,  244 => 128,  242 => 127,  233 => 121,  225 => 116,  217 => 111,  209 => 106,  203 => 102,  199 => 100,  195 => 98,  193 => 97,  187 => 93,  183 => 91,  179 => 89,  177 => 88,  168 => 82,  160 => 77,  152 => 72,  144 => 67,  136 => 62,  128 => 57,  120 => 52,  112 => 47,  104 => 42,  96 => 37,  88 => 32,  80 => 27,  72 => 22,  64 => 17,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <title>Vos données personnelles</title>
</head>

<body>
    <h1>Vos données personnelles</h1>
    
    <div>
       Avatar : {{app.user.avatar}}
    </div>
    <hr>
        
    <div>
        Matricule : {{  app.user.matricule  }}
    </div>
    <hr>
    
    <div>
        Identifiant : {{  app.user.username  }}
    </div>
    <hr>
        
    <div>
        Prénom : {{  app.user.prenom  }}
    </div>
    <hr>

    <div>
        Nom : {{  app.user.nom  }}
    </div>
    <hr>

    <div>
        Sexe : {{  app.user.sexe  }}
    </div>
    <hr>

    <div>
        Entreprise : {{  app.user.entreprise.nom  }}
    </div>
    <hr>

    <div>
        Fonction : {{  app.user.fonction.libelle  }}
    </div>
    <hr>

    <div>
        Email de récupération : {{  app.user.emailRecup  }}
    </div>
    <hr>

    <div>
        Email personnel : {{  app.user.emailPerso  }}
    </div>
    <hr>

    <div>
        Email Professionnel : {{  app.user.emailPro  }}
    </div>
    <hr>

    <div>
        Télephone personnel principal : {{  app.user.telPerso  }}
    </div>
    <hr>
    
    <div>
        Télephone personnel secondaire : {{  app.user.telPerso2  }}
    </div>
    <hr>

    <div>
        Télephone professionnel principal : {{  app.user.telPro  }}
    </div>
    <hr>

    <div>
        Télephone professionnel secondaire : {{  app.user.telPro2  }}
    </div>
    <hr>

    <div>
        Notification personnel :
        {% if app.user.notificationPerso == 1 %}
            <span class=\"text-success\">Oui</span>
        {% else %}
            <span class=\"text-danger\">Non</span>
        {% endif %}
    </div>

    <div>
        Notification professionnel :
        {% if app.user.notificationPro == 1 %}
            <span class=\"text-success\">Oui</span>
        {% else %}
            <span class=\"text-danger\">Non</span>
        {% endif %}
    </div>
    <hr>

    <div>
        Adresse de la rue : {{  app.user.adresseRue  }}
    </div>
    <hr>

    <div>
        Compléments : {{  app.user.adresseRueComplement }}
    </div>
    <hr>
    
    <div>
        Ville : {{  app.user.ville }}
    </div>
    <hr>

    <div>
        Code postal : {{  app.user.codePostal }}
    </div>
    <hr>

    <div>
        Droit Emprunt :
        {% if app.user.droitEmprunt == 1 %}
            <span class=\"text-success\">Oui</span>
        {% else %}
            <span class=\"text-danger\">Non</span>
        {% endif %}
    </div>

    <div>
        Droit d'achat :
        {% if app.user.droitAchat == 1 %}
            <span class=\"text-success\">Oui</span>
        {% else %}
            <span class=\"text-danger\">Non</span>
        {% endif %}
    </div>
    <hr>

    <div>
        Date de création : {{  app.user.dateCreation | date('d/m/Y')}}
    </div>
    <hr>

    <div>
        Date de modification : {{  app.user.dateModification | date('d/m/Y')}}
    </div>
    <hr>

    <div>
        Commentaire : {{ app.user.commentaireUtilisateur}}
    </div>
    <hr>

</body>
</html>

", "users/profil/download_data.html.twig", "/home/lisa/Documents/test/projet/templates/users/profil/download_data.html.twig");
    }
}
