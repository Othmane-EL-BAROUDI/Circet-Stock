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

/* Pages/update/Update.html.twig */
class __TwigTemplate_7565788b7359742907b287e561fe71e9bd4f53a6221b893f140acc902a7e7a4b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/update/Update.html.twig"));

        // line 1
        echo "<title>
\t";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "</title>
";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\t\t";
        echo twig_escape_filter($this->env, (isset($context["Title"]) || array_key_exists("Title", $context) ? $context["Title"] : (function () { throw new RuntimeError('Variable "Title" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Update.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
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
        echo "\t<div class=\"home_content\">
\t\t<div class=\"text\">";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["PageName"]) || array_key_exists("PageName", $context) ? $context["PageName"] : (function () { throw new RuntimeError('Variable "PageName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</div>
\t\t<div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card mb-3 content\">
\t\t\t\t\t";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 19
        if (((isset($context["Title"]) || array_key_exists("Title", $context) ? $context["Title"] : (function () { throw new RuntimeError('Variable "Title" does not exist.', 19, $this->source); })()) == "Stock")) {
            // line 20
            echo "\t\t\t\t\t\t\t<label>Ajouter une photo</label>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\" mt-\" id=\"fileName\"  style=\"font-size: .77rem; \">image uploaded : Current picture</p>
\t\t\t\t\t\t";
        }
        // line 30
        echo "
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<div class=\"buttons  text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" style=\"background-color:#f9a826;\">Mettre à jour</button>
\t\t\t\t\t\t\t\t";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t\t<a href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["Path"]) || array_key_exists("Path", $context) ? $context["Path"] : (function () { throw new RuntimeError('Variable "Path" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"background-color: #6c757d\">Annuler</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/Stock.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/update/Update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 49,  177 => 48,  170 => 47,  152 => 36,  148 => 35,  141 => 31,  138 => 30,  126 => 20,  124 => 19,  119 => 17,  112 => 13,  109 => 12,  102 => 11,  91 => 7,  84 => 6,  74 => 3,  67 => 2,  60 => 47,  58 => 11,  54 => 10,  52 => 6,  49 => 5,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}
\t\t{{Title}}
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/Update.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{{ include('Pages/sidebar.html.twig') }}
{% block body %}
\t<div class=\"home_content\">
\t\t<div class=\"text\">{{PageName}}</div>
\t\t<div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
\t\t\t<div class=\"col-md-9\">
\t\t\t\t<div class=\"card mb-3 content\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{% if Title == 'Stock' %}
\t\t\t\t\t\t\t<label>Ajouter une photo</label>
\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-cloud-upload bx-sm'></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<p class=\" mt-\" id=\"fileName\"  style=\"font-size: .77rem; \">image uploaded : Current picture</p>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<div class=\"buttons  text-center mt-4\">
\t\t\t\t\t\t\t\t<button type=\"submit\" style=\"background-color:#f9a826;\">Mettre à jour</button>
\t\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t\t\t<a href=\"{{Path}}\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"background-color: #6c757d\">Annuler</button>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
{% block javascripts %}
\t<script src=\"{{asset('JS/Stock.js')}}\"></script>
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
{% endblock %}
", "Pages/update/Update.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\update\\Update.html.twig");
    }
}
