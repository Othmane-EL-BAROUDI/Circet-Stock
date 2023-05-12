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
        // line 10
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Rôle
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
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Ajouter rôle</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "session", [], "any", false, false, false, 35), "flashbag", [], "any", false, false, false, 35), "get", [0 => "success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 36
            echo "\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 38
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
        // line 44
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "session", [], "any", false, false, false, 44), "flashbag", [], "any", false, false, false, 44), "get", [0 => "update"], "method", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 45
            echo "\t\t\t<div class=\"alert  alert-info fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 47
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
        // line 53
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "flashbag", [], "any", false, false, false, 53), "get", [0 => "delete"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 54
            echo "\t\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t\t";
            // line 55
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
        // line 61
        echo "
\t\t<div class=\"text\">Rôle</div>
\t\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Ajouter un rôle</button>
\t\t<div class=\"main_content\">
\t\t\t<form action=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
        echo "\" method=\"GET\">
\t\t\t\t<div class=\"sort\">
\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Rechercher\" autocomplete=\"off\">
\t\t\t\t\t<button>
\t\t\t\t\t\tRechercher
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<form>
\t\t\t\t<div class=\"reload\">
\t\t\t\t\t<button onclick=\"refreshPage()\"><i class=\"fa-solid fa-rotate-right fa-lg\"></i></button>
\t\t\t\t</div>
\t\t\t</form>
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
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allRoles"]) || array_key_exists("allRoles", $context) ? $context["allRoles"] : (function () { throw new RuntimeError('Variable "allRoles" does not exist.', 91, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 92
            echo "\t\t\t\t\t\t";
            if ($context["role"]) {
                // line 93
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"textperm\">
\t\t\t\t\t\t\t\t\t";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "roleName", [], "any", false, false, false, 95), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<td class=\"actions\">

\t\t\t\t\t\t\t\t\t<a href=\"Role/Edit/";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 100), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 112), "html", null, true);
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
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "roleName", [], "any", false, false, false, 123), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Role/Remove/";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "id", [], "any", false, false, false, 126), "html", null, true);
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
            // line 135
            echo "\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>No results found.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "<script>
  \tfunction refreshPage() {
    \twindow.location.reload();
  \t}
</script>
<script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
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
        return array (  347 => 152,  340 => 147,  333 => 146,  322 => 141,  312 => 136,  307 => 135,  295 => 126,  289 => 123,  275 => 112,  266 => 106,  257 => 100,  249 => 95,  245 => 93,  242 => 92,  237 => 91,  208 => 65,  202 => 61,  190 => 55,  187 => 54,  182 => 53,  170 => 47,  166 => 45,  161 => 44,  149 => 38,  145 => 36,  141 => 35,  133 => 30,  125 => 25,  120 => 23,  107 => 12,  100 => 11,  88 => 6,  81 => 5,  67 => 2,  60 => 146,  58 => 11,  54 => 10,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Rôle
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Role.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}

\t<div class=\"home_content\">
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
\t\t\t<form action=\"{{ path('Role') }}\" method=\"GET\">
\t\t\t\t<div class=\"sort\">
\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Rechercher\" autocomplete=\"off\">
\t\t\t\t\t<button>
\t\t\t\t\t\tRechercher
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</form>

\t\t\t<form>
\t\t\t\t<div class=\"reload\">
\t\t\t\t\t<button onclick=\"refreshPage()\"><i class=\"fa-solid fa-rotate-right fa-lg\"></i></button>
\t\t\t\t</div>
\t\t\t</form>
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
\t\t\t\t\t\t{% if role %}
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
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>No results found.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t{% endfor %}
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block javascripts %}
<script>
  \tfunction refreshPage() {
    \twindow.location.reload();
  \t}
</script>
<script src=\"{{asset('JS/sidebar.js')}}\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/Role.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\Role.html.twig");
    }
}
