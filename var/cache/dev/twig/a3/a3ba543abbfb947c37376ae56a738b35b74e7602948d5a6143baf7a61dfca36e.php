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
        // line 11
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 207
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
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<div class=\"home_content\">
\t\t<div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter au stock</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t\t<label for=\"name\">Aperçu de l'appareil:</label>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<i class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<p class=\"mb-1 mt-1\" id=\"fileName\"  style=\"font-size: .77rem; \"></p>
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'widget');
        echo "

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Ajouter un appareil</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 37
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "session", [], "any", false, false, false, 42), "flashbag", [], "any", false, false, false, 42), "get", [0 => "success"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 43
            echo "\t\t\t<div class=\"alert  alert-success fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 45
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
        // line 51
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "session", [], "any", false, false, false, 51), "flashbag", [], "any", false, false, false, 51), "get", [0 => "update"], "method", false, false, false, 51));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "\t\t\t<div class=\"alert  alert-info fade show\" role=\"alert\">
\t\t\t\t<strong>Succès!</strong>
\t\t\t\t";
            // line 54
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
        // line 60
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", [0 => "delete"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 61
            echo "\t\t\t<div class=\"alert  alert-danger fade show\" role=\"alert\">
\t\t\t\t";
            // line 62
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
        // line 68
        echo "
\t\t<div class=\"text\">Stock</div>
\t\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Ajouter au stock</button>
\t\t\t";
        // line 100
        echo "\t\t
\t\t<div class=\"CContent\">
\t\t\t<div class=\"mainC\">
\t\t\t\t<table  id=\"example\" class=\"table align-middle mb-0 bg-white\">
\t\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Numéro de série</th>
\t\t\t\t\t\t\t<th>Disponibilité</th>
\t\t\t\t\t\t\t<th>État</th>
\t\t\t\t\t\t\t<th style=\"text-align:center;\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allmachines"]) || array_key_exists("Allmachines", $context) ? $context["Allmachines"] : (function () { throw new RuntimeError('Variable "Allmachines" does not exist.', 115, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 116
            echo "\t\t\t\t\t\t";
            if ($context["machine"]) {
                // line 117
                echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\">";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 121), "marque", [], "any", false, false, false, 121), "getMarqueName", [], "method", false, false, false, 121), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 122), "getModelName", [], "method", false, false, false, 122), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 mt-2 \">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 127), "getType", [], "method", false, false, false, 127), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "getSerialNum", [], "method", false, false, false, 131), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2 ml-2\">
\t\t\t\t\t\t\t\t\t\t";
                // line 137
                if ((twig_get_attribute($this->env, $this->source, $context["machine"], "available", [], "any", false, false, false, 137) == 1)) {
                    // line 138
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Oui</span>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 140
                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">Non</span>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 142
                echo "\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t";
                // line 146
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "state", [], "method", false, false, false, 146), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"stockView/";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 151), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\" style=\" border: #28a745 solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-show-alt bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"Stock/Edit/";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 157), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 164), "html", null, true);
                echo "\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal";
                // line 171
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 171), "html", null, true);
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
\t\t\t\t\t\t\t\t\t\t\tVoulez-vous vraiment supprimer ce matériel :
\t\t\t\t\t\t\t\t\t\t\t<p style=\"   color: #f9a826; \">";
                // line 182
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 182), "marque", [], "any", false, false, false, 182), "getMarqueName", [], "method", false, false, false, 182), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 184), "getModelName", [], "method", false, false, false, 184), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Stock/Remove/";
                // line 187
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 187), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  h-5\" style=\" border: #dc3545 solid 1px;\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 196
            echo "\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 197
            echo "\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>No results found.</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 207
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 208
        echo "<script>
  \tfunction refreshPage() {
    \twindow.location.reload();
  \t}
\t\t\t\$(document).ready(function () {
    \$('#example').DataTable();
});
</script>
\t<script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/Stock.js"), "html", null, true);
        echo "\"></script>
\t
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
";
        
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
        return array (  410 => 217,  406 => 216,  396 => 208,  389 => 207,  378 => 202,  368 => 197,  363 => 196,  351 => 187,  345 => 184,  340 => 182,  326 => 171,  316 => 164,  306 => 157,  297 => 151,  289 => 146,  283 => 142,  279 => 140,  275 => 138,  273 => 137,  264 => 131,  257 => 127,  249 => 122,  245 => 121,  239 => 117,  236 => 116,  231 => 115,  214 => 100,  209 => 68,  197 => 62,  194 => 61,  189 => 60,  177 => 54,  173 => 52,  168 => 51,  156 => 45,  152 => 43,  148 => 42,  140 => 37,  131 => 31,  122 => 25,  108 => 13,  101 => 12,  88 => 6,  81 => 5,  67 => 2,  60 => 207,  58 => 12,  54 => 11,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Stock
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Stock.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css\" integrity=\"sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />
\t  <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}
\t<div class=\"home_content\">
\t\t<div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter au stock</h5>
\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">

\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<label for=\"name\">Aperçu de l'appareil:</label>
\t\t\t\t\t\t<button>
\t\t\t\t\t\t<i class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<p class=\"mb-1 mt-1\" id=\"fileName\"  style=\"font-size: .77rem; \"></p>
\t\t\t\t\t\t{{ form_widget(form) }}

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"submit\" class=\"close_button1\">Ajouter un appareil</button>
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
\t\t\t{% for flash_message in app.session.flashbag.get('update') %}
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

\t\t<div class=\"text\">Stock</div>
\t\t<button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Ajouter au stock</button>
\t\t\t{# <div class=\"main_content\">
\t\t\t\t<form action=\"{{ path('Stock') }}\" method=\"GET\">
\t\t\t\t\t<div class=\"sort1\">
\t\t\t\t\t\t<input type=\"text\" name=\"search\" placeholder=\"Rechercher\" autocomplete=\"off\">

\t\t\t\t\t\t<select name=\"role\">
\t\t\t\t\t\t\t<option selected disabled>Type</option>
\t\t\t\t\t\t\t<option value=\"manager\">Manager</option>
\t\t\t\t\t\t\t<option value=\"admin\">Admin</option>
\t\t\t\t\t\t</select>

\t\t\t\t\t\t<select name=\"availability\">
\t\t\t\t\t\t\t<option selected disabled>Disponibilité</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t

\t\t\t\t\t\t<button type=\"submit\">
\t\t\t\t\t\t\tRechercher
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>\t\t
\t\t\t\t</form>

\t\t\t\t<form style=\"  position: absolute; right: 22%;\" >
\t\t\t\t\t<button onclick=\"refreshPage()\" class=\"reload\">
\t\t\t\t\t\t<i class=\"fa-solid fa-rotate-right fa-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div> #}
\t\t
\t\t<div class=\"CContent\">
\t\t\t<div class=\"mainC\">
\t\t\t\t<table  id=\"example\" class=\"table align-middle mb-0 bg-white\">
\t\t\t\t\t<thead class=\"bg-light\">
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t<th>Numéro de série</th>
\t\t\t\t\t\t\t<th>Disponibilité</th>
\t\t\t\t\t\t\t<th>État</th>
\t\t\t\t\t\t\t<th style=\"text-align:center;\">Actions</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for machine in Allmachines %}
\t\t\t\t\t\t{% if machine %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\">{{machine.model.marque.getMarqueName()}}</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{machine.model.getModelName()}}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 mt-2 \">{{machine.model.getType()}}</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t{{machine.getSerialNum()}}
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2 ml-2\">
\t\t\t\t\t\t\t\t\t\t{% if machine.available == 1 %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Oui</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">Non</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<label class=\"mt-2\">
\t\t\t\t\t\t\t\t\t\t{{machine.state()}}
\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"actions\">
\t\t\t\t\t\t\t\t\t<a href=\"stockView/{{machine.id}}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\" style=\" border: #28a745 solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-show-alt bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tVoir
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"Stock/Edit/{{machine.id}}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
\t\t\t\t\t\t\t\t\t\t\t<i class='bx bx-edit bx-xs'></i>
\t\t\t\t\t\t\t\t\t\t\tModifier
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \" data-toggle=\"modal\" data-target=\"#exampleModal{{machine.id}}\" style=\" border: #dc3545 solid 1px;\">
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-trash bx-xs'></i>
\t\t\t\t\t\t\t\t\t\tSupprimer
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<div class=\"modal fade\" id=\"exampleModal{{machine.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t\t\t\t<div class=\"modal-dialog \" role=\"document\">
\t\t\t\t\t\t\t\t\t<div class=\"modal-content \">
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Confirmation de suppression</h5>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t\t\tVoulez-vous vraiment supprimer ce matériel :
\t\t\t\t\t\t\t\t\t\t\t<p style=\"   color: #f9a826; \">{{machine.model.marque.getMarqueName()}}
\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t{{machine.model.getModelName()}}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"Stock/Remove/{{machine.id}}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bn3 btn  h-5\" style=\" border: #dc3545 solid 1px;\">Supprimer</button>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\">Annuler</button>
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
\t\t\t\$(document).ready(function () {
    \$('#example').DataTable();
});
</script>
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t\t<script src=\"{{asset('JS/Stock.js')}}\"></script>
\t
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\Stock.html.twig");
    }
}
