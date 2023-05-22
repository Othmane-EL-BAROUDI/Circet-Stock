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
        // line 95
        echo "
\t\t";
        // line 96
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
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
        echo "\t
\t<div class=\"home_content\">
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "session", [], "any", false, false, false, 14), "flashbag", [], "any", false, false, false, 14), "get", [0 => "success"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t<div class=\"text\">Stock matériel</div>
\t\t<form action=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
        echo "\" method=\"GET\">
\t\t\t<div class=\"sort\">
\t\t\t\t<input type=\"text\" name=\"ModelSearch\" placeholder=\"@model\">
\t\t\t\t<input type=\"text\" name=\"MarqueSearch\" placeholder=\"@marque\">
\t\t\t\t<select name=\"machine\">
\t\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t\t</select>

\t\t\t\t<button type=\"submit\">
\t\t\t\t\tRecherche
\t\t\t\t</button>
\t\t\t</form>
\t\t\t<form>
\t\t\t\t<button onclick=\"refreshPage()\" class=\"reload\">
\t\t\t\t\t<i class=\"fa-solid fa-rotate-right fa-lg\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 48, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "\t\t\t\t";
            if ($context["item"]) {
                // line 50
                echo "

\t\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t\t";
                // line 54
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 54))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
                    echo "\" style=\"width:150px;\" alt=\"\">
\t\t\t\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"/CIRCET-STOCK/public/";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getImgSrc", [], "method", false, false, false, 58), "html", null, true);
                    echo "\" style=\"width:150px; max-height:150px;\" alt=\"no pic\">
\t\t\t\t\t\t\t";
                    // line 60
                    echo "\t\t\t\t\t\t\t";
                }
                // line 61
                echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<p class=\"small text-muted\">";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 64), "type", [], "any", false, false, false, 64), "html", null, true);
                echo "
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 69, $this->source); })()), "getUserPermission", [], "method", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 70
                    echo "\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 70) == "Demande matériel")) {
                        // line 71
                        echo "\t\t\t\t\t\t\t\t\t<a href=\"Affectation/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t\t\t\t\t<a/>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 75
                    echo "\t\t\t\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 75) == "Voir Matériel Détails")) {
                        // line 76
                        echo "\t\t\t\t\t\t\t\t\t\t<a href=\"materialView/";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 76), "html", null, true);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"start\">Détails</button>
\t\t\t\t\t\t\t\t\t\t\t<a/>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 81
                echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "\t\t\t\t\t\t";
            // line 88
            echo "\t\t\t\t\t\t<div class=\"noData\"><img src=\"/CIRCET-STOCK/public/images/noData.png\"></div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t\t</div>

\t\t\t</div>

\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/HomePage.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t";
        
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
        return array (  283 => 98,  278 => 97,  271 => 96,  260 => 90,  253 => 88,  251 => 85,  246 => 84,  241 => 81,  235 => 80,  227 => 76,  224 => 75,  216 => 71,  213 => 70,  209 => 69,  201 => 64,  196 => 61,  193 => 60,  189 => 58,  186 => 57,  180 => 55,  178 => 54,  172 => 50,  169 => 49,  164 => 48,  137 => 24,  134 => 23,  122 => 17,  118 => 15,  114 => 14,  110 => 12,  103 => 11,  91 => 6,  84 => 5,  70 => 2,  63 => 96,  60 => 95,  58 => 11,  54 => 10,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
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
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}
\t
\t<div class=\"home_content\">
\t\t{% for flash_message in app.session.flashbag.get('success') %}
\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t{{flash_message}}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endfor %}
\t\t<div class=\"text\">Stock matériel</div>
\t\t<form action=\"{{ path('HomePage') }}\" method=\"GET\">
\t\t\t<div class=\"sort\">
\t\t\t\t<input type=\"text\" name=\"ModelSearch\" placeholder=\"@model\">
\t\t\t\t<input type=\"text\" name=\"MarqueSearch\" placeholder=\"@marque\">
\t\t\t\t<select name=\"machine\">
\t\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t\t<option value=\"computer\">Ordinateur</option>
\t\t\t\t\t<option value=\"cable\">Cable</option>
\t\t\t\t\t<option value=\"scanner\">Scanner</option>
\t\t\t\t</select>

\t\t\t\t<button type=\"submit\">
\t\t\t\t\tRecherche
\t\t\t\t</button>
\t\t\t</form>
\t\t\t<form>
\t\t\t\t<button onclick=\"refreshPage()\" class=\"reload\">
\t\t\t\t\t<i class=\"fa-solid fa-rotate-right fa-lg\"></i>
\t\t\t\t</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"materiel_area\">


\t\t\t{% for  item in data %}
\t\t\t\t{% if item %}


\t\t\t\t\t<div class=\"materiel\">
\t\t\t\t\t\t<div class=\"pic\">
\t\t\t\t\t\t\t{% if item.getImgSrc() is empty   %}
\t\t\t\t\t\t\t\t<img src=\"{{asset('images/laptop.png')}}\" style=\"width:150px;\" alt=\"\">
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"/CIRCET-STOCK/public/{{item.getImgSrc()}}\" style=\"width:150px; max-height:150px;\" alt=\"no pic\">
\t\t\t\t\t\t\t{# <img src=\"{{asset(item.getImgSrc())}}\" style=\"width:150px; max-height:150px;\" alt=\"no pic\"> #}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"details\">
\t\t\t\t\t\t\t<p class=\"small text-muted\">{{item.model.type}}
\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"action\">
\t\t\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t\t\t{% if permission.getPermissionName() == \"Demande matériel\" %}
\t\t\t\t\t\t\t\t\t<a href=\"Affectation/{{item.id}}\">
\t\t\t\t\t\t\t\t\t\t<button>Demande</button>
\t\t\t\t\t\t\t\t\t\t<a/>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir Matériel Détails\" %}
\t\t\t\t\t\t\t\t\t\t<a href=\"materialView/{{item.id}}\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"start\">Détails</button>
\t\t\t\t\t\t\t\t\t\t\t<a/>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{# <div class=\"noData\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('images/noData.png')}}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t<div class=\"noData\"><img src=\"/CIRCET-STOCK/public/images/noData.png\"></div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</div>

\t\t\t</div>

\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t<script src=\"{{asset('JS/HomePage.js')}}\"></script>
\t\t\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
\t\t{% endblock %}
", "Pages/homePage.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\HomePage.html.twig");
    }
}
