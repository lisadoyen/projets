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

/* _search_bar.html.twig */
class __TwigTemplate_9a29e224648aceb0284cfe32ccd9982fd1eaa1bacef8379d541d5cba609d0162 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search_bar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search_bar.html.twig"));

        // line 1
        echo "<div class=\"searchbar form-group\">
    ";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 2) && twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["donnees"]) || array_key_exists("donnees", $context) ? $context["donnees"] : (function () { throw new RuntimeError('Variable "donnees" does not exist.', 2, $this->source); })()), "search", [], "any", false, false, false, 2)))) {
            // line 3
            echo "        <input value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 3), "")) : ("")), "html", null, true);
            echo "\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
    ";
        } else {
            // line 5
            echo "        ";
            if ( !twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 5)) {
                // line 6
                echo "            <input value=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 6)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 6), "")) : ("")), "html", null, true);
                echo "\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
        ";
            } else {
                // line 8
                echo "            <input value=\"";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 8), "")) : ("")), "html", null, true);
                echo "\" style=\"
            color:white;
            border: 0;
            outline: 0;
            background: none;
            width:50vh;
            caret-color:white;
            line-height: 4vh;
            transition: width 0.4s linear;
            font-size: 3vh!important;
            height: 3.2vh;
            \" type=\"text\" name=\"search\" placeholder=\"Search...\">
        ";
            }
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <a type=\"submit\" value=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["donnees"] ?? null), "search", [], "any", false, false, false, 22), "")) : ("")), "html", null, true);
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_show");
        echo "\" class=\"search_icon\">
        <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/yellow/search.png"), "html", null, true);
        echo "\" class=\"search-icon\">
    </a>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_search_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 23,  83 => 22,  80 => 21,  63 => 8,  57 => 6,  54 => 5,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"searchbar form-group\">
    {% if donnees.search is defined and donnees.search is empty %}
        <input value=\"{{donnees.search|default('')}}\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
    {% else %}
        {% if donnees.search is not defined %}
            <input value=\"{{donnees.search|default('')}}\" class=\"search_input\" type=\"text\" name=\"search\" placeholder=\"Search...\">
        {% else %}
            <input value=\"{{donnees.search|default('')}}\" style=\"
            color:white;
            border: 0;
            outline: 0;
            background: none;
            width:50vh;
            caret-color:white;
            line-height: 4vh;
            transition: width 0.4s linear;
            font-size: 3vh!important;
            height: 3.2vh;
            \" type=\"text\" name=\"search\" placeholder=\"Search...\">
        {% endif %}
    {% endif %}
    <a type=\"submit\" value=\"{{donnees.search|default('')}}\" href=\"{{ path('articles_show') }}\" class=\"search_icon\">
        <img src=\"{{asset('assets/images/yellow/search.png')}}\" class=\"search-icon\">
    </a>
</div>
", "_search_bar.html.twig", "/home/lisa/Documents/test/projet/templates/_search_bar.html.twig");
    }
}
