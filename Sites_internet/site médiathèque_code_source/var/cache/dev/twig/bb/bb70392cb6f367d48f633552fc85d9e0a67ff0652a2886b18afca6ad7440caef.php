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

/* _search.html.twig */
class __TwigTemplate_9348f65fac370f1aee2fc482eb54376538f1719c24f705c8b72b6dd6a6ff9384 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_search.html.twig"));

        // line 1
        echo "<div style=\"height: 60.5vh;padding-top:0px; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg.jpg"), "html", null, true);
        echo "')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_show");
        echo "\" id=\"search\" method=\"post\" style=\"margin-top: 25.75vh;\">
            ";
        // line 4
        $this->loadTemplate("_search_bar.html.twig", "_search.html.twig", 4)->display($context);
        // line 5
        echo "        </form>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 5,  53 => 4,  49 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"height: 60.5vh;padding-top:0px; background:linear-gradient(rgba(0,0,0,0.5), rgba(0, 0, 0, 0.5)), url('{{ asset('assets/images/bg.jpg') }}')\">
    <div class=\"d-flex justify-content-center h-100\">
        <form action=\"{{ path('articles_show') }}\" id=\"search\" method=\"post\" style=\"margin-top: 25.75vh;\">
            {% include '_search_bar.html.twig' %}
        </form>
    </div>
</div>
", "_search.html.twig", "/home/lisa/Documents/test/projet/templates/_search.html.twig");
    }
}
