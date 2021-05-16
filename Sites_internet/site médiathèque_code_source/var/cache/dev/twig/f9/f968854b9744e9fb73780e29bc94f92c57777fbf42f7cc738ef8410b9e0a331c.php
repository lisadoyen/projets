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

/* avis/showAvisArticle.html.twig */
class __TwigTemplate_0622613be0e70500df9f45534c6f169c3d08ae08ede2c02d296ff4e66812186b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/showAvisArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avis/showAvisArticle.html.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"row pl-5 pt-5 pr-5\">
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <span style=\"font-size: 4vh;font-weight: bold;color : #aa2222 !important;\"> Commentaires </span>
                </div>
                <div class=\"col-lg-3\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AvisController::getTotalCommentairesByArticle", ["idArticle" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]));
        echo "
                </div>
            </div>
            <hr>
        </div>
        <div class=\"col-lg-4 text-center\">
            <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\">Ajouter un commentaire et/ou attribuer une note</span></div>
        </div>
    </div>
    <div class=\"row pl-5 pr-5\">
        <div class=\"col-lg-8\">
            ";
        // line 20
        if (array_key_exists("avis", $context)) {
            // line 21
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new RuntimeError('Variable "avis" does not exist.', 21, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["av"]) {
                // line 22
                echo "                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col-lg-1\">
                                    ";
                // line 26
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["av"], "utilisateur", [], "any", false, false, false, 26), "avatar", [], "any", false, false, false, 26), null))) {
                    // line 27
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                    echo "\" alt=\"pas d'image\" width=\"40\" height=\"40\">
                                    ";
                } else {
                    // line 29
                    echo "                                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/account/"), "html", null, true);
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["av"], "utilisateur", [], "any", false, false, false, 29), "avatar", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" alt=\"Image ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["av"], "utilisateur", [], "any", false, false, false, 29), "avatar", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" width=\"40\" height=\"40\">
                                    ";
                }
                // line 31
                echo "                                </div>
                                <div class=\"col-lg-11\">
                                    <div class=\"text-size-title\"><span class=\"text-orange text-bold\"> ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["av"], "utilisateur", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
                echo " </span></div>
                                    <div class=\"text-size pt-5\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["av"], "texte", [], "any", false, false, false, 34);
                echo "</div>
                                    <div class=\"text-size pt-3\">Le ";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["av"], "date", [], "any", false, false, false, 35), "d/m/Y"), "html", null, true);
                echo " à ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["av"], "date", [], "any", false, false, false, 35), "H:m"), "html", null, true);
                echo "</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div>
                                ";
                // line 41
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["av"], "note", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "                                    note : ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["av"], "note", [], "any", false, false, false, 42), "html", null, true);
                    echo "
                                    ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 44
                        echo "                                        ";
                        $context["etoilevide"] = 0;
                        // line 45
                        echo "                                        ";
                        if ((0 === twig_compare(0, twig_get_attribute($this->env, $this->source, $context["av"], "note", [], "any", false, false, false, 45)))) {
                            // line 46
                            echo "                                            <a href=\"#\"><i id=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\" class=\"far fa-star fa-2x\"></i></a>
                                        ";
                        } elseif ((0 === twig_compare(5, twig_get_attribute($this->env, $this->source,                         // line 47
$context["av"], "note", [], "any", false, false, false, 47)))) {
                            // line 48
                            echo "                                            <a href=\"#\"><i id=\"";
                            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                            echo "\" class=\"fas fa-star fa-2x\"></i></a>
                                        ";
                        } elseif (((0 === twig_compare(                        // line 49
$context["i"], twig_get_attribute($this->env, $this->source, $context["av"], "note", [], "any", false, false, false, 49))) && (0 !== twig_compare($context["i"], 0)))) {
                            // line 50
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["av"], "note", [], "any", false, false, false, 50)));
                            foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                                // line 51
                                echo "                                                ";
                                $context["etoilevide"] = $context["j"];
                                // line 52
                                echo "                                                <a href=\"#\"><i id=\"";
                                echo twig_escape_filter($this->env, $context["j"], "html", null, true);
                                echo "\" class=\"fas fa-star fa-2x\"></i></a>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 54
                            echo "                                            ";
                            if ((0 !== twig_compare((isset($context["etoilevide"]) || array_key_exists("etoilevide", $context) ? $context["etoilevide"] : (function () { throw new RuntimeError('Variable "etoilevide" does not exist.', 54, $this->source); })()), 5))) {
                                // line 55
                                echo "                                                ";
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range(((isset($context["etoilevide"]) || array_key_exists("etoilevide", $context) ? $context["etoilevide"] : (function () { throw new RuntimeError('Variable "etoilevide" does not exist.', 55, $this->source); })()) + 1), 5));
                                foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                                    // line 56
                                    echo "                                                    <a href=\"#\"><i id=\"";
                                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                                    echo "\" class=\"far fa-star fa-2x\"></i></a>
                                                ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 58
                                echo "                                            ";
                            }
                            // line 59
                            echo "                                        ";
                        }
                        // line 60
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    echo "                                ";
                }
                // line 62
                echo "                            </div>
                        </div>
                    </div>
                    <hr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </div>
        <div class=\"col-lg-4 text-center\">
            ";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_start');
        echo "
            <input type=\"hidden\" name=\"token\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_commentaire"), "html", null, true);
        echo "\">
            <p>Veuillez saisir une note :";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "note", [], "any", false, false, false, 72), 'widget');
        echo "</p>
            <p>Veuillez saisir un commentaire :</p>
            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "texte", [], "any", false, false, false, 74), 'row');
        echo "
            <button type=\"submit\" class=\"edit-btn\">";
        // line 75
        echo twig_escape_filter($this->env, ((array_key_exists("action", $context)) ? (_twig_default_filter((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 75, $this->source); })()), "Valider")) : ("Valider")), "html", null, true);
        echo "</button>
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "avis/showAvisArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 76,  234 => 75,  230 => 74,  225 => 72,  221 => 71,  217 => 70,  213 => 68,  210 => 67,  200 => 62,  197 => 61,  191 => 60,  188 => 59,  185 => 58,  176 => 56,  171 => 55,  168 => 54,  159 => 52,  156 => 51,  151 => 50,  149 => 49,  144 => 48,  142 => 47,  137 => 46,  134 => 45,  131 => 44,  127 => 43,  122 => 42,  120 => 41,  109 => 35,  105 => 34,  101 => 33,  97 => 31,  88 => 29,  82 => 27,  80 => 26,  74 => 22,  69 => 21,  67 => 20,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"row pl-5 pt-5 pr-5\">
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <span style=\"font-size: 4vh;font-weight: bold;color : #aa2222 !important;\"> Commentaires </span>
                </div>
                <div class=\"col-lg-3\">
                    {{ render(controller('App\\\\Controller\\\\AvisController::getTotalCommentairesByArticle',{ 'idArticle': article.id })) }}
                </div>
            </div>
            <hr>
        </div>
        <div class=\"col-lg-4 text-center\">
            <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\">Ajouter un commentaire et/ou attribuer une note</span></div>
        </div>
    </div>
    <div class=\"row pl-5 pr-5\">
        <div class=\"col-lg-8\">
            {% if avis is defined %}
                {% for av in avis %}
                    <div class=\"row\">
                        <div class=\"col-lg-8\">
                            <div class=\"row\">
                                <div class=\"col-lg-1\">
                                    {% if av.utilisateur.avatar == NULL %}
                                        <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"40\" height=\"40\">
                                    {% else  %}
                                        <img src=\"{{asset('assets/images/account/')}}{{av.utilisateur.avatar}}\" alt=\"Image {{av.utilisateur.avatar}}\" width=\"40\" height=\"40\">
                                    {% endif %}
                                </div>
                                <div class=\"col-lg-11\">
                                    <div class=\"text-size-title\"><span class=\"text-orange text-bold\"> {{ av.utilisateur.username }} </span></div>
                                    <div class=\"text-size pt-5\">{{ av.texte | raw }}</div>
                                    <div class=\"text-size pt-3\">Le {{ av.date|date('d/m/Y') }} à {{ av.date|date('H:m') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-4\">
                            <div>
                                {% if av.note is not empty %}
                                    note : {{ av.note }}
                                    {% for i in  1..5 %}
                                        {% set etoilevide = 0 %}
                                        {% if 0 == av.note %}
                                            <a href=\"#\"><i id=\"{{ i }}\" class=\"far fa-star fa-2x\"></i></a>
                                        {% elseif 5 == av.note %}
                                            <a href=\"#\"><i id=\"{{ i }}\" class=\"fas fa-star fa-2x\"></i></a>
                                        {% elseif i == av.note and i != 0 %}
                                            {% for j in 1..av.note %}
                                                {% set etoilevide = j %}
                                                <a href=\"#\"><i id=\"{{ j }}\" class=\"fas fa-star fa-2x\"></i></a>
                                            {% endfor %}
                                            {% if etoilevide != 5 %}
                                                {% for k in etoilevide+1..5 %}
                                                    <a href=\"#\"><i id=\"{{ k }}\" class=\"far fa-star fa-2x\"></i></a>
                                                {% endfor %}
                                            {% endif %}
                                        {% endif %}
                                    {% endfor %}
                                {% endif %}
                            </div>
                        </div>
                    </div>
                    <hr>
                {% endfor %}
            {% endif %}
        </div>
        <div class=\"col-lg-4 text-center\">
            {{ form_start(form) }}
            <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('add_commentaire')}}\">
            <p>Veuillez saisir une note :{{ form_widget(form.note) }}</p>
            <p>Veuillez saisir un commentaire :</p>
            {{ form_row(form.texte) }}
            <button type=\"submit\" class=\"edit-btn\">{{ action|default('Valider') }}</button>
            {{ form_end(form) }}
        </div>
    </div>
</div>", "avis/showAvisArticle.html.twig", "/home/lisa/Documents/test/projet/templates/avis/showAvisArticle.html.twig");
    }
}
