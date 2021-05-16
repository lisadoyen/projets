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

/* accueil.html.twig */
class __TwigTemplate_3149a03f5eecb567bb26251944a180d1ce617a1cfba76845035e0582265ff488 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "accueil.html.twig", 1);
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
        echo "    ";
        $this->loadTemplate("_search_home.html.twig", "accueil.html.twig", 3)->display($context);
        // line 4
        echo "    <div class=\"container-carousel\">

        <div class=\"row\">

            <div class=\"col-sm \">
                ";
        // line 9
        $this->loadTemplate("annonce/annonces.html.twig", "accueil.html.twig", 9)->display($context);
        // line 10
        echo "            </div>

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Nouveautés</span></h2>
                <div id=\"newsCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#newsCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["nouveaute"]) || array_key_exists("nouveaute", $context) ? $context["nouveaute"] : (function () { throw new RuntimeError('Variable "nouveaute" does not exist.', 23, $this->source); })()), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 24
            echo "                                    <div class=\"carousel-item active\">
                                        <div class=\"row\">
                                            <div class=\"col-sm\">
                                                <div class=\"img-box h-100 w-100 d-inline-block\">
                                                    <h2 class=\"text-center\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "titre", [], "any", false, false, false, 28), "html", null, true);
            echo "</h2>
                                                    ";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["new"], "vignette", [], "any", false, false, false, 29), null))) {
                // line 30
                echo "                                                        <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 30), "html", null, true);
                echo "\">
                                                        <a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                echo "\" alt=\"pas d'image\" width=\"500\" height=\"500\"></a>
                                                    ";
            } else {
                // line 34
                echo "                                                        <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                                                        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_details", ["id" => twig_get_attribute($this->env, $this->source, $context["new"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                echo "\">
                                                            <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "vignette", [], "any", false, false, false, 36), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "vignette", [], "any", false, false, false, 36), "html", null, true);
                echo "\" width=\"500\" height=\"500\"></a>
                                                    ";
            }
            // line 38
            echo "                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des nouveautés disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#newsCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#newsCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"separtor\"></div>

    <h2 class=\"carousel-title\"><span>E-braderie</span></h2>

    <div class=\"container-carousel\">
        <div class=\"row\">
            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Le Concept</h3>
                <div class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Articles à vendre</h3>
                <div id=\"eBraderieCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP5.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/tmp/HP7.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des achats disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#eBraderieCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#eBraderieCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 130,  246 => 124,  234 => 115,  226 => 110,  214 => 101,  206 => 96,  151 => 43,  141 => 38,  134 => 36,  130 => 35,  125 => 34,  120 => 32,  116 => 31,  111 => 30,  109 => 29,  105 => 28,  99 => 24,  95 => 23,  80 => 10,  78 => 9,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    {% include \"_search_home.html.twig\" %}
    <div class=\"container-carousel\">

        <div class=\"row\">

            <div class=\"col-sm \">
                {% include 'annonce/annonces.html.twig' %}
            </div>

            <div class=\"col-sm \">
                <h2 class=\"carousel-title\"><span>Nouveautés</span></h2>
                <div id=\"newsCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#newsCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#newsCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                            {% for new in nouveaute | slice(0, 3) %}
                                    <div class=\"carousel-item active\">
                                        <div class=\"row\">
                                            <div class=\"col-sm\">
                                                <div class=\"img-box h-100 w-100 d-inline-block\">
                                                    <h2 class=\"text-center\">{{ new.titre}}</h2>
                                                    {% if new.vignette == NULL %}
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ new.id }}\">
                                                        <a href=\"{{ path('article_details', {id: new.id}) }}\">
                                                            <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"500\" height=\"500\"></a>
                                                    {% else %}
                                                        <input type=\"hidden\" name=\"id\" value=\"{{ new.id }}\">
                                                        <a href=\"{{ path('article_details', {id: new.id}) }}\">
                                                            <img src=\"{{ new.vignette }}\" alt=\"{{ new.vignette }}\" width=\"500\" height=\"500\"></a>
                                                    {% endif %}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            {% endfor %}
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des nouveautés disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#newsCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#newsCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class=\"separtor\"></div>

    <h2 class=\"carousel-title\"><span>E-braderie</span></h2>

    <div class=\"container-carousel\">
        <div class=\"row\">
            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Le Concept</h3>
                <div class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">
                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <p class=\"text-justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus. Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh eget sapien mollis malesuada. Vivamus eget congue sem, id dapibus dui. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class=\"col-sm \">
                <h3 class=\"carousel-title\">Articles à vendre</h3>
                <div id=\"eBraderieCarousel\" class=\"carousel slide h-100 w-100 d-inline-block\" data-ride=\"carousel\" data-interval=\"0\">

                    <ol class=\"carousel-indicators\">
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"1\"></li>
                        <li data-target=\"#eBraderieCarousel\" data-slide-to=\"2\"></li>
                    </ol>

                    <div class=\"carousel-inner\">
                        <div class=\"carousel-item active\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP1.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP2.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP3.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP4.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"carousel-item\">
                            <div class=\"row\">
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP5.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>

                                    </div>
                                </div>
                                <div class=\"col-sm\">
                                    <div class=\"img-box h-100 w-100 d-inline-block\">
                                        <a href=\"#\"><img src=\"{{ asset('assets/images/tmp/HP7.jpg') }}\" class=\"img-fluid\" alt=\"\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"Voir plus de détails\"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm text-center m-3\">
                        <a href=\"#\" class=\"edit-btn\">Voir la liste des achats disponibles</a>
                    </div>
                    <a class=\"carousel-control-prev\" href=\"#eBraderieCarousel\" data-slide=\"prev\">
                        <i class=\"fa fa-chevron-left\"></i>
                    </a>
                    <a class=\"carousel-control-next\" href=\"#eBraderieCarousel\" data-slide=\"next\">
                        <i class=\"fa fa-chevron-right\"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>
{% endblock %}", "accueil.html.twig", "/home/lisa/Documents/test/projet/templates/accueil.html.twig");
    }
}
