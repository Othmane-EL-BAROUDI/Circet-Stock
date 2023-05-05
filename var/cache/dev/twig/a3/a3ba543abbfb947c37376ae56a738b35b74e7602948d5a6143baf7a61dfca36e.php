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

/* Pages/Stock.html.twig */
class __TwigTemplate_08deb0ab49ad0dbf83a8320894f4e04a9cee9013485ae94498b8a799f89c1ce8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Stock.html.twig"));

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
        // line 166
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Stock
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Stock.css"), "html", null, true);
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
        echo "\t<div class=\"home_content\">
\t\t<div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add to stock</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<label for=\"name\">item picture:</label>
\t\t\t\t\t\t<button<i class=\"up\" < > class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t</button>
\t\t\t\t\t<input type=\"file\">


\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'widget');
        echo "

\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Add item</button>
\t\t\t\t</div>
\t\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>

\t</div>
\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "flashbag", [], "any", false, false, false, 42), "get", [0 => "delete"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 43
            echo "\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t<div class=\"text\">Stock</div>
\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Add to stock</button>
\t<div class=\"main_content\">
\t\t<div class=\"sort1\">
\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t<select name=\"role\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"manager\">manager</option>
\t\t\t\t<option value=\"admin\">admin</option>
\t\t\t</select>
\t\t\t<select name=\"availability\">
\t\t\t\t<option selected disabled>Availability</option>
\t\t\t</select>
\t\t\t<select name=\"state\">
\t\t\t\t<option selected disabled>State</option>
\t\t\t</select>
\t\t\t<button>
\t\t\t\tSearch
\t\t\t</button>
\t\t</div>
\t\t<div class=\"mainC\">
\t\t\t<table class=\"table align-middle mb-0 bg-white\">
\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>name</th>
\t\t\t\t\t\t<th>type</th>
\t\t\t\t\t\t<th>serial number</th>
\t\t\t\t\t\t<th>availability</th>
\t\t\t\t\t\t<th>state</th>
\t\t\t\t\t\t<th style=\"text-align:center;\">action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allmachines"]) || array_key_exists("Allmachines", $context) ? $context["Allmachines"] : (function () { throw new RuntimeError('Variable "Allmachines" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 84
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 88), "marque", [], "any", false, false, false, 88), "getMarqueName", [], "method", false, false, false, 88), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 89), "getModelName", [], "method", false, false, false, 89), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 mt-2 \">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "type", [], "any", false, false, false, 94), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "getSerialNum", [], "method", false, false, false, 98), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2 ml-2\">
\t\t\t\t\t\t\t\t\t";
            // line 104
            if ((twig_get_attribute($this->env, $this->source, $context["machine"], "available", [], "any", false, false, false, 104) == 1)) {
                // line 105
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Yes</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 107
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">No</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 109
            echo "\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "state", [], "method", false, false, false, 113), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"stockView/";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 118), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\" style=\" border: #28a745 solid 1px; \">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-show-alt bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tview
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 131), "html", null, true);
            echo "\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 138), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog \" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content \">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete confirmation</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tDo you Realy want to delete from the stock :
\t\t\t\t\t\t\t\t\t\t<label style=\"  font-weight: bold; color: #f9a826; \">";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 149), "marque", [], "any", false, false, false, 149), "getMarqueName", [], "method", false, false, false, 149), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 149), "getModelName", [], "method", false, false, false, 149), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"Stock/Remove/";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 152), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn btn-sm h-4\" style=\" border: #dc3545 solid 1px;\">Delete</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm  btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t</div>
</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 166
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 167
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 167,  339 => 166,  327 => 161,  312 => 152,  304 => 149,  290 => 138,  280 => 131,  264 => 118,  256 => 113,  250 => 109,  246 => 107,  242 => 105,  240 => 104,  231 => 98,  224 => 94,  216 => 89,  212 => 88,  206 => 84,  202 => 83,  167 => 50,  155 => 44,  152 => 43,  148 => 42,  140 => 37,  131 => 31,  121 => 24,  106 => 11,  99 => 10,  88 => 6,  81 => 5,  67 => 2,  60 => 166,  58 => 10,  54 => 9,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Stock
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Stock.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}
\t<div class=\"home_content\">
\t\t<div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">

\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Add to stock</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<label for=\"name\">item picture:</label>
\t\t\t\t\t\t<button<i class=\"up\" < > class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t</button>
\t\t\t\t\t<input type=\"file\">


\t\t\t\t\t{{ form_widget(form) }}

\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Add item</button>
\t\t\t\t</div>
\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>

\t</div>
\t{% for flash_message in app.session.flashbag.get('delete') %}
\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t{{flash_message}}
\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t</button>
\t\t</div>
\t{% endfor %}
\t<div class=\"text\">Stock</div>
\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Add to stock</button>
\t<div class=\"main_content\">
\t\t<div class=\"sort1\">
\t\t\t<input type=\"text\" placeholder=\"Search\">
\t\t\t<select name=\"role\">
\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t<option value=\"manager\">manager</option>
\t\t\t\t<option value=\"admin\">admin</option>
\t\t\t</select>
\t\t\t<select name=\"availability\">
\t\t\t\t<option selected disabled>Availability</option>
\t\t\t</select>
\t\t\t<select name=\"state\">
\t\t\t\t<option selected disabled>State</option>
\t\t\t</select>
\t\t\t<button>
\t\t\t\tSearch
\t\t\t</button>
\t\t</div>
\t\t<div class=\"mainC\">
\t\t\t<table class=\"table align-middle mb-0 bg-white\">
\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>name</th>
\t\t\t\t\t\t<th>type</th>
\t\t\t\t\t\t<th>serial number</th>
\t\t\t\t\t\t<th>availability</th>
\t\t\t\t\t\t<th>state</th>
\t\t\t\t\t\t<th style=\"text-align:center;\">action</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for machine in Allmachines %}
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\">{{machine.model.marque.getMarqueName()}}</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{machine.model.getModelName()}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 mt-2 \">{{machine.type}}</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t{{machine.getSerialNum()}}
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2 ml-2\">
\t\t\t\t\t\t\t\t\t{% if machine.available == 1 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Yes</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">No</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t{{machine.state()}}
\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t<a href=\"stockView/{{machine.id}}\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\" style=\" border: #28a745 solid 1px; \">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-show-alt bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tview
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tEdit
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal{{machine.id}}\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{machine.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<div class=\"modal-dialog \" role=\"document\">
\t\t\t\t\t\t\t\t<div class=\"modal-content \">
\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Delete confirmation</h5>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\tDo you Realy want to delete from the stock :
\t\t\t\t\t\t\t\t\t\t<label style=\"  font-weight: bold; color: #f9a826; \">{{machine.model.marque.getMarqueName()}} - {{machine.model.getModelName()}}</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t<a href=\"Stock/Remove/{{machine.id}}\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn btn-sm h-4\" style=\" border: #dc3545 solid 1px;\">Delete</button>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm  btn-secondary\" data-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>

\t</div>
</div>{% endblock %}{% block javascripts %}
<script src=\"{{asset('JS/sidebar.js')}}\"></script>
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>{% endblock %}
", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Stock.html.twig");
    }
}
