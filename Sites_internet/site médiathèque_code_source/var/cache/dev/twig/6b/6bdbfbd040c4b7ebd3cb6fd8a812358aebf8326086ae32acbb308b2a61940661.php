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

/* _nav.html.twig */
class __TwigTemplate_61d0330f61264dda42e6f2e5a084fd1aab802433a19d7c7210d69b2267b56424 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<nav class=\"main-menu\">
    <h1 id=\"main-title\">Médiathèque</h1>
    <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/home.png"), "html", null, true);
        echo "\" class=\"icon home\" alt=\"Accueil\"></a>
    ";
        // line 4
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "request", [], "any", false, false, false, 4), "pathInfo", [], "any", false, false, false, 4), "/accueil"))) {
            // line 5
            echo "    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_show");
            echo "\" id=\"search\" method=\"post\" class=\"search-in-nav\">
        ";
            // line 6
            $this->loadTemplate("_search_bar.html.twig", "_nav.html.twig", 6)->display($context);
            // line 7
            echo "    </form>
    ";
        }
        // line 9
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("panier");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Panier\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/shopping-cart.png"), "html", null, true);
        echo "\" class=\"icon  shopCar\" alt=\"Panier\"></a>
    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("favoris");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Favoris\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/star.png"), "html", null, true);
        echo "\" class=\"icon  fav\" alt=\"Favories\"></a>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", [0 => "notif"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 12
            echo "        <span style=\"position: absolute;height: 2.5vh;width: 2.5vh;top: 5.5vh;right: 28vh;background-color: #dc3545;border-radius: 50px;color: white;overflow: hidden;padding: 0.2vh;font-weight: bold;font-size: 1.3vh;text-align: center\">";
            echo twig_escape_filter($this->env, $context["notif"], "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Profil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/user.png"), "html", null, true);
        echo "\" class=\"icon  account\" alt=\"Profile\"></a>
    <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Déconnexion\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/logout.png"), "html", null, true);
        echo "\" class=\"icon  logout\" alt=\"Déconnexion\"></a>
</nav>
<nav class=\"sub-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_id_articles_show", ["idCategorie" => 1]);
        echo "\" class=\"media-item dropbtn\">Livres</a>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\GenreController::getLivreGenres"));
        echo "
            </div>
            <div class=\"col-sm sub-dropdown container\" >
                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_id_articles_show", ["idCategorie" => 2]);
        echo "\" class=\"media-item dropbtn\">Videos</a>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\GenreController::getVideoGenres"));
        echo "
            </div>
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_id_articles_show", ["idCategorie" => 4]);
        echo "\" class=\"media-item dropbtn\">Musiques</a>
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\GenreController::getMusiqueGenres"));
        echo "
            </div>
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_id_articles_show", ["idCategorie" => 3]);
        echo "\" class=\"media-item dropbtn\">Jeux</a>
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\GenreController::getJeuGenres"));
        echo "
            </div>
        </div>
    </div>
</nav>
";
        // line 39
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE"))) {
            // line 40
            echo "    <input id=\"burger\" type=\"checkbox\"/>
    <label for=\"burger\">
        <span class=\"barre\"></span>
        <span class=\"barre\"></span>
        <span class=\"barre\"></span> 
    </label>
    <nav id=\"lateral-menu\">
        <ul id=\"lateral-menu\">
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_statistiques");
            echo "\">Éditer les statistiques</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_emprunts");
            echo "\">Gestion des emprunts/retours</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des commandes</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annonce_index");
            echo "\">Gestion des annonces</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("operations_articles");
            echo "\">Opérations sur les articles</a></li>
            ";
            // line 53
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_BENEVOLE") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 54
                echo "                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_articles");
                echo "\">Export de la base de données des articles</a></li>";
            }
            // line 55
            echo "            ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 56
                echo "                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_articles");
                echo "\">Import/Export de la base de données des articles</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                // line 57
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_accueil");
                echo "\">Opérations sur les adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                // line 58
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data_base_users");
                echo "\">Import/Export de la base de donnée des adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Définir les paramètres et les règles d'emprunts</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_list");
                echo "\">Maintenance du site</a></li>";
            }
            // line 61
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 61,  205 => 60,  200 => 58,  196 => 57,  191 => 56,  188 => 55,  183 => 54,  181 => 53,  177 => 52,  173 => 51,  168 => 49,  164 => 48,  154 => 40,  152 => 39,  144 => 34,  140 => 33,  134 => 30,  130 => 29,  124 => 26,  120 => 25,  114 => 22,  110 => 21,  99 => 15,  92 => 14,  83 => 12,  79 => 11,  73 => 10,  66 => 9,  62 => 7,  60 => 6,  55 => 5,  53 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"main-menu\">
    <h1 id=\"main-title\">Médiathèque</h1>
    <a href=\"{{ path('accueil') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Accueil\"><img src=\"{{asset('assets/images/yellow/home.png')}}\" class=\"icon home\" alt=\"Accueil\"></a>
    {% if app.request.pathInfo != '/accueil' %}
    <form action=\"{{ path('articles_show') }}\" id=\"search\" method=\"post\" class=\"search-in-nav\">
        {% include '_search_bar.html.twig' %}
    </form>
    {% endif %}
    <a href=\"{{ path('panier') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Panier\"><img src=\"{{asset('assets/images/yellow/shopping-cart.png')}}\" class=\"icon  shopCar\" alt=\"Panier\"></a>
    <a href=\"{{ path('favoris') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Favoris\"><img src=\"{{asset('assets/images/yellow/star.png')}}\" class=\"icon  fav\" alt=\"Favories\"></a>
    {% for notif in app.flashes('notif') %}
        <span style=\"position: absolute;height: 2.5vh;width: 2.5vh;top: 5.5vh;right: 28vh;background-color: #dc3545;border-radius: 50px;color: white;overflow: hidden;padding: 0.2vh;font-weight: bold;font-size: 1.3vh;text-align: center\">{{ notif }}</span>
    {% endfor %}
    <a href=\"{{ path('profil') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Profil\"><img src=\"{{asset('assets/images/yellow/user.png')}}\" class=\"icon  account\" alt=\"Profile\"></a>
    <a href=\"{{ path('security_logout') }}\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Déconnexion\"><img src=\"{{asset('assets/images/yellow/logout.png')}}\" class=\"icon  logout\" alt=\"Déconnexion\"></a>
</nav>
<nav class=\"sub-menu\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"{{ path('categories_id_articles_show', {idCategorie : 1}) }}\" class=\"media-item dropbtn\">Livres</a>
                {{ render(controller('App\\\\Controller\\\\GenreController::getLivreGenres')) }}
            </div>
            <div class=\"col-sm sub-dropdown container\" >
                <a href=\"{{ path('categories_id_articles_show',  {idCategorie : 2}) }}\" class=\"media-item dropbtn\">Videos</a>
                {{ render(controller('App\\\\Controller\\\\GenreController::getVideoGenres')) }}
            </div>
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"{{ path('categories_id_articles_show',  {idCategorie : 4}) }}\" class=\"media-item dropbtn\">Musiques</a>
                {{ render(controller('App\\\\Controller\\\\GenreController::getMusiqueGenres')) }}
            </div>
            <div class=\"col-sm sub-dropdown container\">
                <a href=\"{{ path('categories_id_articles_show',  {idCategorie : 3}) }}\" class=\"media-item dropbtn\">Jeux</a>
                {{ render(controller('App\\\\Controller\\\\GenreController::getJeuGenres')) }}
            </div>
        </div>
    </div>
</nav>
{% if (is_granted('ROLE_ADMIN')) or (is_granted('ROLE_BENEVOLE'))  %}
    <input id=\"burger\" type=\"checkbox\"/>
    <label for=\"burger\">
        <span class=\"barre\"></span>
        <span class=\"barre\"></span>
        <span class=\"barre\"></span> 
    </label>
    <nav id=\"lateral-menu\">
        <ul id=\"lateral-menu\">
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('admin_statistiques')}}\">Éditer les statistiques</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('gestion_emprunts') }}\">Gestion des emprunts/retours</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Gestion des commandes</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('annonce_index') }}\">Gestion des annonces</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('operations_articles') }}\">Opérations sur les articles</a></li>
            {% if is_granted('ROLE_BENEVOLE') and not is_granted('ROLE_ADMIN')%}
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_articles') }}\">Export de la base de données des articles</a></li>{% endif %}
            {% if is_granted('ROLE_ADMIN') %}
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_articles') }}\">Import/Export de la base de données des articles</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('users_accueil') }}\">Opérations sur les adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('data_base_users') }}\">Import/Export de la base de donnée des adhérents</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"#\">Définir les paramètres et les règles d'emprunts</a></li>
                <li class=\"lateral-menu\"><a class=\"lateral-menu\" href=\"{{ path('crud_list') }}\">Maintenance du site</a></li>{% endif %}
        </ul>
    </nav>
{% endif %}", "_nav.html.twig", "/home/lisa/Documents/test/projet/templates/_nav.html.twig");
    }
}
