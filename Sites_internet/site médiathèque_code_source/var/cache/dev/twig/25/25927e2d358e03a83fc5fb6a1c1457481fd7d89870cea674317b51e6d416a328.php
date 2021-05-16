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

/* articles/get_ISBN.html.twig */
class __TwigTemplate_9fffb20c716dc87d5fc8a8f5af934d321bfbfbbbc0a5cb5991bdc8651c6f4d1e extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/get_ISBN.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "articles/get_ISBN.html.twig"));

        $this->parent = $this->loadTemplate("layout.html.twig", "articles/get_ISBN.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-0 col-md-2 col-lg-3\"></div>
            <div class=\"col-sm-12 col-md-8 col-lg-6\">
                <h1>Barre de recherche</h1>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"search-isbn\" value=\"\" placeholder=\"Rechercher un isbn\"/>
                </div>
                <div id=\"result-isbn\" style=\"margin-top: 5em;\"></div>
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.1.1.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search-isbn').keyup(function(){
                \$(\"#result-isbn\").html('');
                let isbn = \$(this).val();
                if(isbn !== \"\"){
                    console.log(isbn);
                    axios.get('/articles/get/'+isbn)
                        .then(function (response) {
                            var livre = response.data;
                            console.log(livre.titre)
                            let ligne = 'Titre : ' + livre.titre +'<br>';
                            ligne += 'Sous Titre : ' + livre.sous_titre +'<br>';
                            ligne += 'Auteur : ' + livre.auteur +'<br>';
                            ligne += 'Editeur : ' + livre.editeur +'<br>';
                            ligne += 'Date de publication : ' + livre.dateDePublication +'<br>';
                            ligne += 'Description : ' + livre.description +'<br>';
                            ligne += 'ISBN : ' + livre.isbn +'<br>';
                            ligne += 'Image  : ' +'<img src=\"'+livre.image+'\">' +'<br>';
                            let data = [livre.titre,livre.sous_titre,livre.auteur,livre.editeur,livre.dateDePublication,livre.description,livre.isbn,livre.image];
                            let url = \"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_livre");
        echo "\"
                            ligne += '<form class=\"d-lg-inline-block\" action=\"'+url+'\" method=\"POST\">';
                            ligne += '<input type=\"hidden\" name=\"titre\" value=\"'+data[0]+'\">';
                            ligne += '<input type=\"hidden\" name=\"sous_titre\" value=\"'+data[1]+'\">';
                            ligne += '<input type=\"hidden\" name=\"auteur\" value=\"'+data[2]+'\">';
                            ligne += '<input type=\"hidden\" name=\"editeur\" value=\"'+data[3]+'\">';
                            ligne += '<input type=\"hidden\" name=\"dateDePublication\" value=\"'+data[4]+'\">';
                            ligne += '<input type=\"hidden\" name=\"description\" value=\"'+data[5]+'\">';
                            ligne += '<input type=\"hidden\" name=\"isbn\" value=\"'+data[6]+'\">';
                            ligne += '<input type=\"hidden\" name=\"image\" value=\"'+data[7]+'\">';
                            ligne += '<button type=\"submit\" class=\"btn btn-success btn-sm\"</i>Créer un livre</button>'
                            ligne += '</form>';
                            document.getElementById(\"result-isbn\").innerHTML=ligne;
                        })
                        .catch(function (error) {
                            console.log(\"La recherche a rencontré un problème\");
                        });
                }
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "articles/get_ISBN.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  85 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html.twig' %}
{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-0 col-md-2 col-lg-3\"></div>
            <div class=\"col-sm-12 col-md-8 col-lg-6\">
                <h1>Barre de recherche</h1>
                <div class=\"form-group\">
                    <input class=\"form-control\" type=\"text\" id=\"search-isbn\" value=\"\" placeholder=\"Rechercher un isbn\"/>
                </div>
                <div id=\"result-isbn\" style=\"margin-top: 5em;\"></div>
            </div>
        </div>
    </div>
    <script src=\"https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js\"></script>
    <script src=\"https://code.jquery.com/jquery-3.1.1.js\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"{{asset('assets/js/bootstrap.js')}}\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search-isbn').keyup(function(){
                \$(\"#result-isbn\").html('');
                let isbn = \$(this).val();
                if(isbn !== \"\"){
                    console.log(isbn);
                    axios.get('/articles/get/'+isbn)
                        .then(function (response) {
                            var livre = response.data;
                            console.log(livre.titre)
                            let ligne = 'Titre : ' + livre.titre +'<br>';
                            ligne += 'Sous Titre : ' + livre.sous_titre +'<br>';
                            ligne += 'Auteur : ' + livre.auteur +'<br>';
                            ligne += 'Editeur : ' + livre.editeur +'<br>';
                            ligne += 'Date de publication : ' + livre.dateDePublication +'<br>';
                            ligne += 'Description : ' + livre.description +'<br>';
                            ligne += 'ISBN : ' + livre.isbn +'<br>';
                            ligne += 'Image  : ' +'<img src=\"'+livre.image+'\">' +'<br>';
                            let data = [livre.titre,livre.sous_titre,livre.auteur,livre.editeur,livre.dateDePublication,livre.description,livre.isbn,livre.image];
                            let url = \"{{ path('add_livre') }}\"
                            ligne += '<form class=\"d-lg-inline-block\" action=\"'+url+'\" method=\"POST\">';
                            ligne += '<input type=\"hidden\" name=\"titre\" value=\"'+data[0]+'\">';
                            ligne += '<input type=\"hidden\" name=\"sous_titre\" value=\"'+data[1]+'\">';
                            ligne += '<input type=\"hidden\" name=\"auteur\" value=\"'+data[2]+'\">';
                            ligne += '<input type=\"hidden\" name=\"editeur\" value=\"'+data[3]+'\">';
                            ligne += '<input type=\"hidden\" name=\"dateDePublication\" value=\"'+data[4]+'\">';
                            ligne += '<input type=\"hidden\" name=\"description\" value=\"'+data[5]+'\">';
                            ligne += '<input type=\"hidden\" name=\"isbn\" value=\"'+data[6]+'\">';
                            ligne += '<input type=\"hidden\" name=\"image\" value=\"'+data[7]+'\">';
                            ligne += '<button type=\"submit\" class=\"btn btn-success btn-sm\"</i>Créer un livre</button>'
                            ligne += '</form>';
                            document.getElementById(\"result-isbn\").innerHTML=ligne;
                        })
                        .catch(function (error) {
                            console.log(\"La recherche a rencontré un problème\");
                        });
                }
            });
        });
    </script>
{% endblock %}", "articles/get_ISBN.html.twig", "/home/lisa/Documents/test/projet/templates/articles/get_ISBN.html.twig");
    }
}
