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

/* security/login_2.html.twig */
class __TwigTemplate_9d802fe59e075189697d487593f9ebee96bcba34e9620669bfc22804ee5ca211 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login_2.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/login.css"), "html", null, true);
        echo "\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:600&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/a81368914c.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
    <div class=\"container\">
        <div class=\"login-content\">
            <form action=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                ";
        // line 15
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                    <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageKey", [], "any", false, false, false, 16), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })()), "messageData", [], "any", false, false, false, 16), "security"), "html", null, true);
            echo "</div>
                ";
        }
        // line 18
        echo "                <h2 class=\"title\">Bienvenue</h2>
                <div class=\"input-div one\">
                    <div class=\"i\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <div class=\"div\">
                        <h5>Utilisateur</h5>
                        <input type=\"text\" class=\"input\" required name=\"_username\">
                    </div>
                </div>
                <div class=\"input-div pass\">
                    <div class=\"i\">
                        <i class=\"fas fa-lock\"></i>
                    </div>
                    <div class=\"div\">
                        <h5>Mot de passe</h5>
                        <input type=\"password\" class=\"input\" required name=\"_password\">
                    </div>
                </div>
                <a href=\"#\">Mot de passe oublié ?</a>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                <input type=\"submit\" class=\"btn\" value=\"Connexion\">
            </form>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/login.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/login_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 43,  98 => 38,  76 => 18,  70 => 16,  68 => 15,  64 => 14,  60 => 13,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/login.css') }}\">
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:600&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/a81368914c.js\"></script>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
    <div class=\"container\">
        <div class=\"login-content\">
            <form action=\"{{ path('security_login') }}\" method=\"post\">
                <img src=\"{{ asset('assets/images/logo.png') }}\" alt=\"logo\">
                {% if error %}
                    <div class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                {% endif %}
                <h2 class=\"title\">Bienvenue</h2>
                <div class=\"input-div one\">
                    <div class=\"i\">
                        <i class=\"fas fa-user\"></i>
                    </div>
                    <div class=\"div\">
                        <h5>Utilisateur</h5>
                        <input type=\"text\" class=\"input\" required name=\"_username\">
                    </div>
                </div>
                <div class=\"input-div pass\">
                    <div class=\"i\">
                        <i class=\"fas fa-lock\"></i>
                    </div>
                    <div class=\"div\">
                        <h5>Mot de passe</h5>
                        <input type=\"password\" class=\"input\" required name=\"_password\">
                    </div>
                </div>
                <a href=\"#\">Mot de passe oublié ?</a>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                <input type=\"submit\" class=\"btn\" value=\"Connexion\">
            </form>
        </div>
    </div>
    <script type=\"text/javascript\" src=\"{{ asset('assets/js/login.js') }}\"></script>
</body>
</html>", "security/login_2.html.twig", "/home/lisa/Documents/test/projet/templates/security/login_2.html.twig");
    }
}
