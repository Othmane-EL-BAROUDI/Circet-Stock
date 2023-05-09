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

/* Pages/HomePage.html.twig */
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/HomePage.html.twig"));

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
        // line 103
        echo "
";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-HomePage
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
\t\t<div class=\"text\">Stock Materiel</div>
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Computer</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">scanner</option>
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
            // line 42
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 42)) > 3)) {
                // line 43
                echo "\t\t\t\t\t\t\t\t\t\t<img   src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 43)), "html", null, true);
                echo "\" alt=\"no pic\">
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 44
                echo "<img  style=\" width: 180px;\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t";
            }
            // line 46
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModel :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 51), "getModelName", [], "method", false, false, false, 51), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 54), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tSerial number :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getSerialNum", [], "method", false, false, false, 56), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tState :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "state", [], "any", false, false, false, 58), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tAvailable :
\t\t\t\t\t\t\t\t\t<label for=\"name\">
\t\t\t\t\t\t\t\t\t\t";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "available", [], "any", false, false, false, 61) == 1)) {
                // line 62
                echo "\t\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t\t\tmac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacEthernet", [], "method", false, false, false, 68), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tmac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getMacWifi", [], "method", false, false, false, 70), "html", null, true);
            echo "</label><br>
\t\t\t\t\t\t\t\t\tdescription :
\t\t\t\t\t\t\t\t\t<label for=\"name\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 72), "html", null, true);
            echo "</label><br>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t";
            // line 84
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 84)) > 3)) {
                // line 85
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 85)), "html", null, true);
                echo "\" alt=\"no pic\">
\t\t\t\t\t\t\t";
            } else {
                // line 86
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                echo "\" alt=\"\">
\t\t\t\t\t\t";
            }
            // line 88
            echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<label for=\"name\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 90), "marque", [], "any", false, false, false, 90), "getMarqueName", [], "method", false, false, false, 90), "html", null, true);
            echo "
\t\t\t\t\t\t\t";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 91), "getModelName", [], "method", false, false, false, 91), "html", null, true);
            echo "</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" class=\"start\" id=\"start\" data-target=\"#model";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 95), "html", null, true);
            echo "\">details</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "\t<script src=\"";
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
        return "Pages/HomePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 105,  283 => 104,  274 => 100,  263 => 95,  256 => 91,  252 => 90,  248 => 88,  242 => 86,  236 => 85,  234 => 84,  219 => 72,  214 => 70,  209 => 68,  205 => 66,  201 => 64,  197 => 62,  195 => 61,  189 => 58,  184 => 56,  179 => 54,  173 => 51,  166 => 46,  160 => 44,  154 => 43,  152 => 42,  142 => 35,  134 => 31,  130 => 30,  109 => 11,  102 => 10,  91 => 6,  84 => 5,  70 => 2,  63 => 104,  60 => 103,  58 => 10,  54 => 9,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-HomePage
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Homepage.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}

\t<div class=\"home_content\">
\t\t<div class=\"text\">Stock Materiel</div>
\t\t<div class=\"sort\">
\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t<select name=\"machine\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"computer\">Computer</option>
\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t<option value=\"scanner\">scanner</option>
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
\t\t\t\t\t\t\t\t\t{% if item.getImgSrc()|length > 3 %}
\t\t\t\t\t\t\t\t\t\t<img   src=\"{{ asset(item.getImgSrc()) }}\" alt=\"no pic\">
\t\t\t\t\t\t\t\t\t\t{% else %}<img  style=\" width: 180px;\" src=\"{{asset('images/laptop.png')}}\" alt=\"\">
\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"pop_desc\">

\t\t\t\t\t\t\t\t\tModel :
\t\t\t\t\t\t\t\t\t<label for=\"name\" id=\"customerId\">{{item.model.getModelName()}}</label>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t\tType :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.type}}</label><br>
\t\t\t\t\t\t\t\t\tSerial number :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getSerialNum()}}</label><br>
\t\t\t\t\t\t\t\t\tState :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.state}}</label><br>
\t\t\t\t\t\t\t\t\tAvailable :
\t\t\t\t\t\t\t\t\t<label for=\"name\">
\t\t\t\t\t\t\t\t\t\t{% if item.available == 1 %}
\t\t\t\t\t\t\t\t\t\t\tYes
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\tNo
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label><br>
\t\t\t\t\t\t\t\t\tmac_ethernet :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacEthernet()}}</label><br>
\t\t\t\t\t\t\t\t\tmac_wifi :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.getMacWifi()}}</label><br>
\t\t\t\t\t\t\t\t\tdescription :
\t\t\t\t\t\t\t\t\t<label for=\"name\">{{item.description}}</label><br>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t\t\t\t<button type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t{% if item.getImgSrc()|length > 3 %}
\t\t\t\t\t\t\t<img src=\"{{ asset(item.getImgSrc()) }}\" alt=\"no pic\">
\t\t\t\t\t\t\t{% else %}<img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t<label for=\"name\">{{item.model.marque.getMarqueName()}}
\t\t\t\t\t\t\t{{item.model.getModelName()}}</label>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t<button type=\"button\" data-toggle=\"modal\" class=\"start\" id=\"start\" data-target=\"#model{{item.id}}\">details</button>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t</div>
\t</div>
{% endblock %}

{% block javascripts %}
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/HomePage.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\HomePage.html.twig");
    }
}
