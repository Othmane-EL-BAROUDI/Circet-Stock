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
        // line 10
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 123
        echo "
";
        // line 124
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t<div class=\"home_content\">
\t\t<div class=\"text\">Stock matériel</div>
\t\t<form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
        echo "\" method=\"GET\">
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Rechercher\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t</select>

\t\t\t<button type=\"submit\">
\t\t\t\tRecherche
\t\t\t</button>
\t\t\t</form>
\t\t\t<form >
\t\t\t\t<button onclick=\"refreshPage()\" class=\"reload\">
\t\t\t\t\t<i class=\"fa-solid fa-rotate-right fa-lg\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "\t\t\t";
            if ($context["item"]) {
                // line 40
                echo "\t\t\t\t
\t\t\t
\t\t\t\t<div class=\"modal fade\" id=\"model";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel \">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 46), "marque", [], "any", false, false, false, 46), "getMarqueName", [], "method", false, false, false, 46), "html", null, true);
                echo "</h5>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<div class=\"pop_picture\">


\t\t\t\t\t\t\t\t\t";
                // line 55
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 55))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                    echo "\" style=\"width:180px;\" alt=\"\">

\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 59
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 59)), "html", null, true);
                    echo "\" style=\"width:200px; max-height:200px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModèle :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 65), "getModelName", [], "method", false, false, false, 65), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 68), "getType", [], "method", false, false, false, 68), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\tSerial number :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSerialNum", [], "method", false, false, false, 70), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\tÉtat :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "state", [], "any", false, false, false, 72), "html", null, true);
                echo "</label><br>
\t\t\t\t\t\t\t\t\tDisponibilité :
\t\t\t\t\t\t\t\t\t<label for=\"name\">
\t\t\t\t\t\t\t\t\t\t";
                // line 75
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "available", [], "any", false, false, false, 75) == 1)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t\t\t";
                // line 81
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 81), "getType", [], "method", false, false, false, 81) == "Desktop") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 81), "getType", [], "method", false, false, false, 81) == "Laptop"))) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\tmac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                    // line 83
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacEthernet", [], "method", false, false, false, 83), "html", null, true);
                    echo "</label><br>
\t\t\t\t\t\t\t\t\tMac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacWifi", [], "method", false, false, false, 85), "html", null, true);
                    echo "</label><br>
\t\t\t\t\t\t\t\t\t";
                }
                // line 87
                echo "\t\t\t\t\t\t\t\t\tdescription :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 88), "html", null, true);
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
                // line 100
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 100))) {
                    // line 101
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                    echo "\" style=\"width:150px;\" alt=\"\">

\t\t\t\t\t\t\t\t";
                } else {
                    // line 104
                    echo "\t\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 104)), "html", null, true);
                    echo "\"  style=\"width:150px; max-height:150px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t";
                }
                // line 106
                echo "\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<label for=\"name\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 109), "marque", [], "any", false, false, false, 109), "getMarqueName", [], "method", false, false, false, 109), "html", null, true);
                echo "
\t\t\t\t\t\t\t";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 110), "getModelName", [], "method", false, false, false, 110), "html", null, true);
                echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" class=\"start\" data-target=\"#model";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 114), "html", null, true);
                echo "\">Détails</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 118
            echo "\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            echo " <div class=\"noData\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/noData.png"), "html", null, true);
            echo "\" > </div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/HomePage.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 126
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
        return array (  333 => 126,  328 => 125,  321 => 124,  312 => 120,  299 => 118,  292 => 114,  285 => 110,  281 => 109,  276 => 106,  270 => 104,  263 => 101,  261 => 100,  246 => 88,  243 => 87,  238 => 85,  233 => 83,  230 => 82,  228 => 81,  225 => 80,  221 => 78,  217 => 76,  215 => 75,  209 => 72,  204 => 70,  199 => 68,  193 => 65,  187 => 61,  181 => 59,  174 => 56,  172 => 55,  160 => 46,  153 => 42,  149 => 40,  146 => 39,  141 => 38,  115 => 15,  110 => 12,  103 => 11,  91 => 6,  84 => 5,  70 => 2,  63 => 124,  60 => 123,  58 => 11,  54 => 10,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}

\t<div class=\"home_content\">
\t\t<div class=\"text\">Stock matériel</div>
\t\t<form action=\"{{ path('HomePage') }}\" method=\"GET\">
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Rechercher\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t</select>

\t\t\t<button type=\"submit\">
\t\t\t\tRecherche
\t\t\t</button>
\t\t\t</form>
\t\t\t<form >
\t\t\t\t<button onclick=\"refreshPage()\" class=\"reload\">
\t\t\t\t\t<i class=\"fa-solid fa-rotate-right fa-lg\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t{% for  item in data %}
\t\t\t{% if item %}
\t\t\t\t
\t\t\t
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
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(item.getImgSrc())}}\" style=\"width:200px; max-height:200px;\" alt=\"no pic\">
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModèle :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">{{item.model.getModelName()}}</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.model.getType()}}</label><br>
\t\t\t\t\t\t\t\t\tSerial number :
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
\t\t\t\t\t\t\t\t\t{% if item.model.getType() == \"Desktop\" or item.model.getType() == \"Laptop\" %}
\t\t\t\t\t\t\t\t\tmac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacEthernet()}}</label><br>
\t\t\t\t\t\t\t\t\tMac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacWifi()}}</label><br>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\tdescription :
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
\t\t\t\t\t\t\t\t\t<img src=\"{{asset(item.getImgSrc())}}\"  style=\"width:150px; max-height:150px;\" alt=\"no pic\">
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
\t\t\t\t{% endif %}
\t\t\t\t{% else %} <div class=\"noData\"> <img src=\"{{asset('images/noData.png')}}\" > </div>
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
", "Pages/homePage.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\HomePage.html.twig");
    }
}
