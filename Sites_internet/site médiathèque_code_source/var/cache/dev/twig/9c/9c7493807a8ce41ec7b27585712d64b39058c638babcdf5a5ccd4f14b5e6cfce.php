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

/* articles/show_article_details.html.twig */
class __TwigTemplate_f3103a8193dff8d330c0941d58bf80b2bcbba3f3fe0d3828a9f0e24152754204 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_article_details.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/show_article_details.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "articles/show_article_details.html.twig", 1);
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
        echo "    <div class=\"container-fluid\">
        <div class=\"row p-4\">
            ";
        // line 5
        if ( !twig_test_empty((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "            <div class=\"col-lg-3 float-left\">
                ";
            // line 7
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "vignette", [], "any", false, false, false, 7))) {
                // line 8
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "vignette", [], "any", false, false, false, 8), "html", null, true);
                echo "\" alt=\"image de ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "titre", [], "any", false, false, false, 8), "html", null, true);
                echo "\" width=\"350\" height=\"350\">
                ";
            } else {
                // line 10
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
                echo "\" alt=\"pas d'image\" width=\"350\" height=\"350\">
                ";
            }
            // line 12
            echo "            </div>
            <div class=\"col-lg-6\">
                <div class=\"row\">
                    <div class=\"text-detail-size-title\">
                        <span class=\"text-orange\"> titre : </span>
                        <span class=\"text-bold\">";
            // line 17
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17)), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <div class=\"row pt-4 pb-4\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-detail-size\">
                            ";
            // line 23
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "categorie", [], "any", false, false, false, 23), "libelle", [], "any", false, false, false, 23), "video"))) {
                // line 24
                echo "                                <span class=\"text-orange\">réalisateur : </span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 25
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "categorie", [], "any", false, false, false, 25), "libelle", [], "any", false, false, false, 25), "livre"))) {
                // line 26
                echo "                                <span class=\"text-orange\">auteur : </span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 27
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), "libelle", [], "any", false, false, false, 27), "jeux"))) {
                // line 28
                echo "                                <span class=\"text-orange\">éditeur : </span>
                            ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 29
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "categorie", [], "any", false, false, false, 29), "libelle", [], "any", false, false, false, 29), "musique"))) {
                // line 30
                echo "                                <span class=\"text-orange\">artiste : </span>
                            ";
            }
            // line 32
            echo "                            <!-- changer quand on aura une liste des entités par article, pour l'instant il n'y a qu'une entité par article -->
                            ";
            // line 33
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "entites", [], "any", false, true, false, 33), 0, [], "array", true, true, false, 33)) {
                // line 34
                echo "                                ";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 34, $this->source); })()), "entites", [], "any", false, false, false, 34), 0, [], "array", false, false, false, 34), "prenom", [], "any", false, false, false, 34)), "html", null, true);
                echo "
                                ";
                // line 35
                ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "entites", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35), "nom", [], "any", false, false, false, 35))) ? (print ("inconnu")) : (print (twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "entites", [], "any", false, false, false, 35), 0, [], "array", false, false, false, 35), "nom", [], "any", false, false, false, 35)), "html", null, true))));
                echo "
                            ";
            } else {
                // line 37
                echo "                                inconnu
                            ";
            }
            // line 39
            echo "                        </div>
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">date de publication : </span>
                            ";
            // line 42
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "datePublication", [], "any", false, false, false, 42))) ? (print ("inconnu")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 42, $this->source); })()), "datePublication", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true))));
            echo "
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">genre : </span>
                            ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "genre", [], "any", false, false, false, 48), "libelle", [], "any", false, false, false, 48), "html", null, true);
            echo "
                        </div>
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">rubrique : </span>
                            rubrique
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"text-justify text-detail-size\">
                        ";
            // line 58
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 58, $this->source); })()), "categorie", [], "any", false, false, false, 58), "libelle", [], "any", false, false, false, 58), "video"))) {
                // line 59
                echo "                            <span class=\"text-orange\">synopsis : </span>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 60
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 60, $this->source); })()), "categorie", [], "any", false, false, false, 60), "libelle", [], "any", false, false, false, 60), "livre"))) {
                // line 61
                echo "                            <span class=\"text-orange\">résumé : </span>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 62
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 62, $this->source); })()), "categorie", [], "any", false, false, false, 62), "libelle", [], "any", false, false, false, 62), "jeux"))) {
                // line 63
                echo "                            <span class=\"text-orange\">description : </span>
                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 64
(isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "categorie", [], "any", false, false, false, 64), "libelle", [], "any", false, false, false, 64), "musique"))) {
                // line 65
                echo "                            <span class=\"text-orange\">description : </span>
                        ";
            }
            // line 67
            echo "                        <p class=\"readMore\"> <!--changer description en article.description-->
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae
                            tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus.
                            Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus
                            imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh
                            eget sapien mollis malesuada. Vivamus eget congue sem, id da
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 p-4\">
                <div class=\"row\">
                    <div class=\"row col-lg-4\"></div>
                    <div class=\"col-lg-8\">
                    ";
            // line 81
            if ((0 === twig_compare((isset($context["idNouveaute"]) || array_key_exists("idNouveaute", $context) ? $context["idNouveaute"] : (function () { throw new RuntimeError('Variable "idNouveaute" does not exist.', 81, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)))) {
                // line 82
                echo "                        <span class=\"text-bold text-detail-size-nouveaute\"> nouveau !</span>
                    ";
            }
            // line 84
            echo "                    </div>
                </div>
                <div class=\"row p-4\">
                    <div class=\"row col-lg-5\"></div>
                    <div class=\"col-lg-7\">
                        ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\FavorisController::isFavourite", ["idArticle" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]));
            echo "
                    </div>
                </div>
                <div class=\"row p-4\">
                    <div class=\"row col-lg-4\">
                    ";
            // line 94
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 94, $this->source); })()), "statut", [], "any", false, false, false, 94), "libelle", [], "any", false, false, false, 94), "vendable"))) {
                // line 95
                echo "                        <div class=\"text-detail-size\"><span class=\"text-orange\">prix : </span><br>
                            <span style=\"color: red\">";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 96, $this->source); })()), "montantVente", [], "any", false, false, false, 96), "html", null, true);
                echo "€</span></div>
                    ";
            }
            // line 98
            echo "                    </div>
                    <div class=\"col-lg-8\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\">
                        ";
            // line 101
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 101, $this->source); })()), "statut", [], "any", false, false, false, 101), "libelle", [], "any", false, false, false, 101), "empruntable"))) {
                // line 102
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_panier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
                echo "\" class=\"style-button-article-emprunt-detail\">
                                Emprunter</a>
                        ";
            } else {
                // line 105
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_article_panier", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
                echo "\" class=\"style-button-article-achat-detail\">
                                Acheter</a>
                        ";
            }
            // line 108
            echo "                    </div>
                </div>
            </div>
        </div>
       <div class=\"row\">
           <div class=\"col-lg-3\">
               <div class=\"text-detail-size\"><span class=\"text-orange\">moyenne : </span>nb étoile</div>
           </div>
           <div class=\"col-lg-7\">
               <div class=\"row\">
                   <div class=\"col-lg-6\">
                       <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\">Informations supplémentaires : </span></div>
                       <div class=\"p-2\"> <span class=\"text-orange\">format :</span>
                       ";
            // line 121
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 121, $this->source); })()), "numerique", [], "any", false, false, false, 121), 0))) {
                // line 122
                echo "                           <span>papier</span>
                       ";
            } else {
                // line 124
                echo "                           <span>numérique</span>
                       ";
            }
            // line 126
            echo "                       </div>
                       <div class=\"p-2\"> <span class=\"text-orange\">code ISBN :</span>
                           ";
            // line 128
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 128, $this->source); })()), "genCode", [], "any", false, false, false, 128))) {
                // line 129
                echo "                                aucun
                           ";
            } else {
                // line 131
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 131, $this->source); })()), "genCode", [], "any", false, false, false, 131), "html", null, true);
                echo "
                           ";
            }
            // line 133
            echo "                       </div>
                       <div class=\"p-2\"> <span class=\"text-orange\">entite :</span> entite</div>
                       <div class=\"p-2\"> <span class=\"text-orange\">liens :</span> liens</div>
                   </div>
                   <div class=\"col-lg-6\">
                       <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\"> Vidéo Youtube : </span></div>
                       <div><img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/noImage.jpg"), "html", null, true);
            echo "\" alt=\"pas d'image\" width=\"400\" height=\"400\"></div>
                   </div>
               </div>
           </div>
       </div>
        ";
        }
        // line 145
        echo "    </div>
    <!-- SECTION COMMENTAIRE -->
    ";
        // line 147
        $this->loadTemplate("avis/showAvisArticle.html.twig", "articles/show_article_details.html.twig", 147)->display($context);
        // line 148
        echo "    <!-- FIN SECTION COMMENTAIRE -->
    <div class=\"row container-fluid\">
        <a class=\"edit-btn\">Retour</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/show_article_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 148,  330 => 147,  326 => 145,  317 => 139,  309 => 133,  303 => 131,  299 => 129,  297 => 128,  293 => 126,  289 => 124,  285 => 122,  283 => 121,  268 => 108,  261 => 105,  254 => 102,  252 => 101,  248 => 100,  244 => 98,  239 => 96,  236 => 95,  234 => 94,  226 => 89,  219 => 84,  215 => 82,  213 => 81,  197 => 67,  193 => 65,  191 => 64,  188 => 63,  186 => 62,  183 => 61,  181 => 60,  178 => 59,  176 => 58,  163 => 48,  154 => 42,  149 => 39,  145 => 37,  140 => 35,  135 => 34,  133 => 33,  130 => 32,  126 => 30,  124 => 29,  121 => 28,  119 => 27,  116 => 26,  114 => 25,  111 => 24,  109 => 23,  100 => 17,  93 => 12,  87 => 10,  79 => 8,  77 => 7,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout.html.twig\" %}
{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row p-4\">
            {% if article is not empty %}
            <div class=\"col-lg-3 float-left\">
                {%  if article.vignette is not empty %}
                    <img src=\"{{ article.vignette }}\" alt=\"image de {{ article.titre }}\" width=\"350\" height=\"350\">
                {% else %}
                    <img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"350\" height=\"350\">
                {% endif %}
            </div>
            <div class=\"col-lg-6\">
                <div class=\"row\">
                    <div class=\"text-detail-size-title\">
                        <span class=\"text-orange\"> titre : </span>
                        <span class=\"text-bold\">{{article.titre | capitalize }}</span>
                    </div>
                </div>
                <div class=\"row pt-4 pb-4\">
                    <div class=\"col-lg-6\">
                        <div class=\"text-detail-size\">
                            {% if article.categorie.libelle == 'video' %}
                                <span class=\"text-orange\">réalisateur : </span>
                            {% elseif article.categorie.libelle == 'livre' %}
                                <span class=\"text-orange\">auteur : </span>
                            {% elseif article.categorie.libelle == 'jeux' %}
                                <span class=\"text-orange\">éditeur : </span>
                            {% elseif article.categorie.libelle == 'musique' %}
                                <span class=\"text-orange\">artiste : </span>
                            {% endif %}
                            <!-- changer quand on aura une liste des entités par article, pour l'instant il n'y a qu'une entité par article -->
                            {% if article.entites[0] is defined %}
                                {{ article.entites[0].prenom | capitalize }}
                                {{article.entites[0].nom is empty ? \"inconnu\" : article.entites[0].nom | capitalize }}
                            {% else %}
                                inconnu
                            {% endif %}
                        </div>
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">date de publication : </span>
                            {{article.datePublication is empty ? \"inconnu\" : article.datePublication|date(\"d/m/Y\")}}
                        </div>
                    </div>
                    <div class=\"col-lg-6\">
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">genre : </span>
                            {{article.genre.libelle}}
                        </div>
                        <div class=\"text-detail-size\">
                            <span class=\"text-orange\">rubrique : </span>
                            rubrique
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"text-justify text-detail-size\">
                        {% if article.categorie.libelle == 'video' %}
                            <span class=\"text-orange\">synopsis : </span>
                        {% elseif article.categorie.libelle == 'livre' %}
                            <span class=\"text-orange\">résumé : </span>
                        {% elseif article.categorie.libelle == 'jeux' %}
                            <span class=\"text-orange\">description : </span>
                        {% elseif article.categorie.libelle == 'musique' %}
                            <span class=\"text-orange\">description : </span>
                        {% endif %}
                        <p class=\"readMore\"> <!--changer description en article.description-->
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non metus diam. Nunc placerat ante at iaculis egestas. Pellentesque risus mauris, interdum vitae
                            tellus eu, pellentesque dignissim urna. Nulla mattis enim mauris, quis aliquam nisi placerat imperdiet. Morbi consequat leo vel ante varius finibus.
                            Pellentesque vitae ante vitae turpis maximus volutpat porta vitae orci. Donec tincidunt felis at tortor tincidunt, quis porta ipsum dignissim. Vivamus
                            imperdiet est augue, eu ultricies elit pulvinar ornare. Pellentesque nulla nulla, congue facilisis aliquam id, ultricies id nibh. Pellentesque sed nibh
                            eget sapien mollis malesuada. Vivamus eget congue sem, id da
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 p-4\">
                <div class=\"row\">
                    <div class=\"row col-lg-4\"></div>
                    <div class=\"col-lg-8\">
                    {% if idNouveaute == article.id %}
                        <span class=\"text-bold text-detail-size-nouveaute\"> nouveau !</span>
                    {% endif %}
                    </div>
                </div>
                <div class=\"row p-4\">
                    <div class=\"row col-lg-5\"></div>
                    <div class=\"col-lg-7\">
                        {{ render(controller('App\\\\Controller\\\\FavorisController::isFavourite',{ 'idArticle': article.id })) }}
                    </div>
                </div>
                <div class=\"row p-4\">
                    <div class=\"row col-lg-4\">
                    {%  if article.statut.libelle == \"vendable\" %}
                        <div class=\"text-detail-size\"><span class=\"text-orange\">prix : </span><br>
                            <span style=\"color: red\">{{ article.montantVente }}€</span></div>
                    {% endif %}
                    </div>
                    <div class=\"col-lg-8\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ article.id }}\">
                        {%  if article.statut.libelle == \"empruntable\" %}
                            <a href=\"{{ path('add_article_panier',{id:article.id}) }}\" class=\"style-button-article-emprunt-detail\">
                                Emprunter</a>
                        {% else %}
                            <a href=\"{{ path('add_article_panier',{id:article.id}) }}\" class=\"style-button-article-achat-detail\">
                                Acheter</a>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
       <div class=\"row\">
           <div class=\"col-lg-3\">
               <div class=\"text-detail-size\"><span class=\"text-orange\">moyenne : </span>nb étoile</div>
           </div>
           <div class=\"col-lg-7\">
               <div class=\"row\">
                   <div class=\"col-lg-6\">
                       <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\">Informations supplémentaires : </span></div>
                       <div class=\"p-2\"> <span class=\"text-orange\">format :</span>
                       {% if article.numerique == 0 %}
                           <span>papier</span>
                       {% else %}
                           <span>numérique</span>
                       {% endif %}
                       </div>
                       <div class=\"p-2\"> <span class=\"text-orange\">code ISBN :</span>
                           {% if article.genCode is empty %}
                                aucun
                           {% else %}
                                {{ article.genCode }}
                           {% endif %}
                       </div>
                       <div class=\"p-2\"> <span class=\"text-orange\">entite :</span> entite</div>
                       <div class=\"p-2\"> <span class=\"text-orange\">liens :</span> liens</div>
                   </div>
                   <div class=\"col-lg-6\">
                       <div class=\"text-detail-size-subtitle p-2\"><span class=\"text-bold\"> Vidéo Youtube : </span></div>
                       <div><img src=\"{{asset('assets/images/noImage.jpg')}}\" alt=\"pas d'image\" width=\"400\" height=\"400\"></div>
                   </div>
               </div>
           </div>
       </div>
        {% endif %}
    </div>
    <!-- SECTION COMMENTAIRE -->
    {% include 'avis/showAvisArticle.html.twig' %}
    <!-- FIN SECTION COMMENTAIRE -->
    <div class=\"row container-fluid\">
        <a class=\"edit-btn\">Retour</a>
    </div>
{% endblock %}", "articles/show_article_details.html.twig", "/home/lisa/Documents/test/projet/templates/articles/show_article_details.html.twig");
    }
}
