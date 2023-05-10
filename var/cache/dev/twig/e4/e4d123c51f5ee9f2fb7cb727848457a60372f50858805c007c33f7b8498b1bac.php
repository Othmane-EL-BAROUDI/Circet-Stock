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

/* Pages/Role.html.twig */
class __TwigTemplate_8f26bcb0c83e5031984e0625d0a450c44048db52df42b90704adb634c47df428 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Role.html.twig"));

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
        // line 155
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Role
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Role.css"), "html", null, true);
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
\t\t";
        // line 33
        echo "
\t\t<div class=\"modal fade\" id=\"addRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addRole\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter rôle</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Ajouter rôle</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", [0 => "success"], "method", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 57
            echo "\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 59
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
        // line 65
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "flashbag", [], "any", false, false, false, 65), "get", [0 => "update"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 66
            echo "\t\t\t<div class=\"alert  alert-info fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 68
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
        // line 74
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "session", [], "any", false, false, false, 74), "flashbag", [], "any", false, false, false, 74), "get", [0 => "delete"], "method", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 75
            echo "\t\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t\t";
            // line 76
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
        // line 82
        echo "
\t\t<div class=\"text\">Rôle</div>
\t\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Ajouter un rôle</button>
\t\t<div class=\"main_content\">
\t\t\t<div class=\"sort\">
\t\t\t\t<input type=\"text\" placeholder=\"Rechercher\">
\t\t\t\t<button>
\t\t\t\t\tRechercher
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"CContent\">
\t\t\t<div class=\"mainC\">
\t\t\t\t<table class=\"table align-middle mb-0 bg-white\">
\t\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Rôle</th>
\t\t\t\t\t\t\t<th style=\"text-align:center;\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allRoles"]) || array_key_exists("allRoles", $context) ? $context["allRoles"] : (function () { throw new RuntimeError('Variable "allRoles" does not exist.', 105, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 106
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"textperm\">
\t\t\t\t\t\t\t\t\t";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "roleName", [], "any", false, false, false, 108), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"actions\">

\t\t\t\t\t\t\t\t\t<a href=\"Role/Edit/";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 113), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 125), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"modal-dialog \" role=\"document\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content \">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation de suppression</h5>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\tVoulez-vous vraiment supprimer ce rôle :
\t\t\t\t\t\t\t\t\t\t\t<label style=\"  font-weight: bold; color: #f9a826; \">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "roleName", [], "any", false, false, false, 136), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Role/Remove/";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 139), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn btn-sm h-4\" style=\" border: #dc3545 solid 1px;\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm  btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
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
        return "Pages/Role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 156,  312 => 155,  299 => 148,  284 => 139,  278 => 136,  264 => 125,  255 => 119,  246 => 113,  238 => 108,  234 => 106,  230 => 105,  205 => 82,  193 => 76,  190 => 75,  185 => 74,  173 => 68,  169 => 66,  164 => 65,  152 => 59,  148 => 57,  144 => 56,  135 => 50,  127 => 45,  122 => 43,  110 => 33,  106 => 11,  99 => 10,  88 => 6,  81 => 5,  67 => 2,  60 => 155,  58 => 10,  54 => 9,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Role
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Role.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}

\t<div class=\"home_content\">
\t\t{# <div class=\"modal fade\" id=\"editRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editRole\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Modification de rôle</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<label for=\"name\">Nom de rôle:</label>
\t\t\t\t\t\t<input placeholder=\"@role_name\" type=\"text\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<button type=\"button\" class=\"close_button\">Save changes</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> #}

\t\t<div class=\"modal fade\" id=\"addRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addRole\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter rôle</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Ajouter rôle</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t\t{% for flash_message in app.session.flashbag.get('success') %}
\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t{{flash_message}}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endfor %}
\t\t{% for flash_message in app.session.flashbag.get('update') %}
\t\t\t<div class=\"alert  alert-info fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t{{flash_message}}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endfor %}
\t\t{% for flash_message in app.session.flashbag.get('delete') %}
\t\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t\t{{flash_message}}
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t</button>
\t\t\t</div>
\t\t{% endfor %}

\t\t<div class=\"text\">Rôle</div>
\t\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Ajouter un rôle</button>
\t\t<div class=\"main_content\">
\t\t\t<div class=\"sort\">
\t\t\t\t<input type=\"text\" placeholder=\"Rechercher\">
\t\t\t\t<button>
\t\t\t\t\tRechercher
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>


\t\t<div class=\"CContent\">
\t\t\t<div class=\"mainC\">
\t\t\t\t<table class=\"table align-middle mb-0 bg-white\">
\t\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Rôle</th>
\t\t\t\t\t\t\t<th style=\"text-align:center;\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for role in allRoles %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"textperm\">
\t\t\t\t\t\t\t\t\t{{role.roleName}}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"actions\">

\t\t\t\t\t\t\t\t\t<a href=\"Role/Edit/{{role.id}}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal{{role.id}}\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{role.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"modal-dialog \" role=\"document\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content \">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation de suppression</h5>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\tVoulez-vous vraiment supprimer ce rôle :
\t\t\t\t\t\t\t\t\t\t\t<label style=\"  font-weight: bold; color: #f9a826; \">{{role.roleName}}</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Role/Remove/{{role.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn btn-sm h-4\" style=\" border: #dc3545 solid 1px;\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm  btn-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>

\t</div>
{% endblock %}
{% block javascripts %}
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/Role.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Role.html.twig");
    }
}
