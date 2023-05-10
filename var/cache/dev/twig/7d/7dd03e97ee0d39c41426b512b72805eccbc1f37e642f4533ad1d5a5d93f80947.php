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

/* Pages/homePage.html.twig */
class __TwigTemplate_5db1b7507320884f77ba08c3b93f52d6dc540c8d13ea53724d17ca8235be7d2e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/homePage.html.twig"));

        // line 1
        echo "<title>
\t";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "</title>
";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 10
        $this->displayBlock('body', $context, $blocks);
<<<<<<< HEAD
        // line 111
        echo "
";
        // line 112
=======
        // line 108
        echo "
";
        // line 109
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Accueil
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Homepage.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
\t<div class=\"home_content\">
\t\t<div class=\"text\">Stock matériel</div>
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" placeholder=\"Rechercher\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t</select>

\t\t\t<button>
\t\t\t\tSort
\t\t\t</button>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 31
            echo "\t\t\t\t<div class=\"modal fade\" id=\"model";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel \">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 35), "marque", [], "any", false, false, false, 35), "getMarqueName", [], "method", false, false, false, 35), "html", null, true);
            echo "</h5>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"pop_picture\">


\t\t\t\t\t\t\t\t\t";
            // line 44
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 44))) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                echo "\" style=\"width:180px;\" alt=\"\">

\t\t\t\t\t\t\t\t\t";
            } else {
                // line 48
                echo "\t\t\t\t\t\t\t\t\t<img src=\"/CIRCET-STOCK/public";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 48), "html", null, true);
                echo "\" style=\"width:200px; max-height:200px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModèle :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 54), "getModelName", [], "method", false, false, false, 54), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 57), "getType", [], "method", false, false, false, 57), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tNuméro de série :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSerialNum", [], "method", false, false, false, 59), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tÉtat :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "state", [], "any", false, false, false, 61), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tDisponibilité :
\t\t\t\t\t\t\t\t\t<label for=\"name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 64
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "available", [], "any", false, false, false, 64) == 1)) {
                // line 65
                echo "\t\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t\t</label><br>
<<<<<<< HEAD
\t\t\t\t\t\t\t\t\t";
            // line 70
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 70), "getType", [], "method", false, false, false, 70) == "Desktop") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 70), "getType", [], "method", false, false, false, 70) == "Laptop"))) {
                // line 71
                echo "\t\t\t\t\t\t\t\t\tmac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacEthernet", [], "method", false, false, false, 72), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\tmac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacWifi", [], "method", false, false, false, 74), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t\t\t\t\t\tdescription :
=======
\t\t\t\t\t\t\t\t\tMac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacEthernet", [], "method", false, false, false, 71), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tMac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacWifi", [], "method", false, false, false, 73), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tDéscription :
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 77), "html", null, true);
            echo "</label><br>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t";
            // line 89
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 89))) {
                // line 90
                echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                echo "\" style=\"width:150px;\" alt=\"\">

\t\t\t\t\t\t\t\t";
            } else {
                // line 93
                echo "\t\t\t\t\t\t\t\t\t<img src=\"/CIRCET-STOCK/public";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 93), "html", null, true);
                echo "\" style=\"width:150px; max-height:150px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t";
            }
            // line 95
            echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<label for=\"name\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 98), "marque", [], "any", false, false, false, 98), "getMarqueName", [], "method", false, false, false, 98), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 99), "getModelName", [], "method", false, false, false, 99), "html", null, true);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" class=\"start\" data-target=\"#model";
<<<<<<< HEAD
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 103), "html", null, true);
            echo "\">details</button>

=======
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
            echo "\">Détails</button>
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
        // line 108
=======
        // line 105
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

<<<<<<< HEAD
    // line 112
=======
    // line 109
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

<<<<<<< HEAD
        // line 113
=======
        // line 110
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/HomePage.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
<<<<<<< HEAD
        // line 114
=======
        // line 111
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/homePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  306 => 114,  301 => 113,  294 => 112,  285 => 108,  274 => 103,  267 => 99,  263 => 98,  258 => 95,  252 => 93,  245 => 90,  243 => 89,  228 => 77,  225 => 76,  220 => 74,  215 => 72,  212 => 71,  210 => 70,  207 => 69,  203 => 67,  199 => 65,  197 => 64,  191 => 61,  186 => 59,  181 => 57,  175 => 54,  169 => 50,  163 => 48,  156 => 45,  154 => 44,  142 => 35,  134 => 31,  130 => 30,  109 => 11,  102 => 10,  91 => 6,  84 => 5,  70 => 2,  63 => 112,  60 => 111,  58 => 10,  54 => 9,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
=======
        return array (  298 => 111,  293 => 110,  286 => 109,  277 => 105,  267 => 101,  260 => 97,  256 => 96,  251 => 93,  245 => 91,  238 => 88,  236 => 87,  221 => 75,  216 => 73,  211 => 71,  207 => 69,  203 => 67,  199 => 65,  197 => 64,  191 => 61,  186 => 59,  181 => 57,  175 => 54,  169 => 50,  163 => 48,  156 => 45,  154 => 44,  142 => 35,  134 => 31,  130 => 30,  109 => 11,  102 => 10,  91 => 6,  84 => 5,  70 => 2,  63 => 109,  60 => 108,  58 => 10,  54 => 9,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Accueil
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Homepage.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}

\t<div class=\"home_content\">
\t\t<div class=\"text\">Stock matériel</div>
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" placeholder=\"Rechercher\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t</select>

\t\t\t<button>
\t\t\t\tSort
\t\t\t</button>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t{% for  item in data %}
\t\t\t\t<div class=\"modal fade\" id=\"model{{item.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel \">{{item.model.marque.getMarqueName()}}</h5>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"pop_picture\">


\t\t\t\t\t\t\t\t\t{% if item.getImgSrc() is empty   %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/laptop.png')}}\" style=\"width:180px;\" alt=\"\">

\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"/CIRCET-STOCK/public{{item.getImgSrc()}}\" style=\"width:200px; max-height:200px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModèle :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">{{item.model.getModelName()}}</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
<<<<<<< HEAD
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.model.getType()}}</label><br>
\t\t\t\t\t\t\t\t\tSerial number :
=======
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.type}}</label><br>
\t\t\t\t\t\t\t\t\tNuméro de série :
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getSerialNum()}}</label><br>
\t\t\t\t\t\t\t\t\tÉtat :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.state}}</label><br>
\t\t\t\t\t\t\t\t\tDisponibilité :
\t\t\t\t\t\t\t\t\t<label for=\"name\">
\t\t\t\t\t\t\t\t\t\t{% if item.available == 1 %}
\t\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label><br>
<<<<<<< HEAD
\t\t\t\t\t\t\t\t\t{% if item.model.getType() == \"Desktop\" or item.model.getType() == \"Laptop\" %}
\t\t\t\t\t\t\t\t\tmac_ethernet :
=======
\t\t\t\t\t\t\t\t\tMac_ethernet :
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacEthernet()}}</label><br>
\t\t\t\t\t\t\t\t\tMac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacWifi()}}</label><br>
<<<<<<< HEAD
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\tdescription :
=======
\t\t\t\t\t\t\t\t\tDéscription :
>>>>>>> eb4021e168635ff0ff4744f1eb6eb0aca54670df
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.description}}</label><br>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t{% if item.getImgSrc() is empty   %}
\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/laptop.png')}}\" style=\"width:150px;\" alt=\"\">

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<img src=\"/CIRCET-STOCK/public{{item.getImgSrc()}}\" style=\"width:150px; max-height:150px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<label for=\"name\">{{item.model.marque.getMarqueName()}}
\t\t\t\t\t\t\t{{item.model.getModelName()}}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" class=\"start\" data-target=\"#model{{item.id}}\">Détails</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{asset('JS/HomePage.js')}}\"></script>
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/homePage.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\HomePage.html.twig");
    }
}
