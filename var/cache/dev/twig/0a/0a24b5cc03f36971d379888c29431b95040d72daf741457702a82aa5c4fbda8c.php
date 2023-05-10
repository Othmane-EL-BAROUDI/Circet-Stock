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

/* Pages/view/userView.html.twig */
class __TwigTemplate_a5fd01ba82391c0a4a9c5a08f0a5df47a19be65ada4fe2613a90efa42593e0e8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/view/userView.html.twig"));

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
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 135
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Utilisateur
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/UserProfile.css"), "html", null, true);
        echo "\">
\t<link
\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<!-- Font Awesome -->
\t<link
\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
\t<!-- Google Fonts -->
\t<link
\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
\t<!-- MDB -->
\t<linkhref=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "\t";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "

\t<div class=\"home_content\"   >
\t\t<div class=\"text\">Profil de l'utilisateur</div>
\t\t<section>
\t\t\t<div class=\"container py-5\">


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body text-center pt-5 pb-5\"  style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\">
\t\t\t\t\t\t\t\t<a class=\"back\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["Path"]) || array_key_exists("Path", $context) ? $context["Path"] : (function () { throw new RuntimeError('Variable "Path" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class='bx bxs-share  bx-md'  style=\"color:black;\"> </i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-7x \" alt=\"avatar\" class=\"rounded-circle img-fluid\" style=\"width: 150px;\"></i>
\t\t\t\t\t\t\t\t<h5 class=\"my-3 mt-4\">Profile de ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), "html", null, true);
        echo "</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4 mb-lg-0\"  >
\t\t\t\t\t\t\t<div class=\"card-body p-0\"  >
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush rounded-3\"  >
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center p-3\" style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >

\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-envelope fa-lg'></i>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\" style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Nom et Prénom</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "username", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Matricule</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "matricule", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Poste</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "job", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Rôle</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "roles", [], "any", false, false, false, 86), 0, [], "array", false, false, false, 86), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Manager</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 96
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "manager", [], "any", false, false, false, 96)) {
            // line 97
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "manager", [], "any", false, false, false, 97), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\tPas de manager
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 101
        echo "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"max-height: 270px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\" font-italic me-1\" style=\" color:#f9a826;\">Permission de</span>
\t\t\t\t\t\t\t\t\t\t\tAyman
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"overflow-y: scroll  !important; max-height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 115
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "getUserPermission", [], "method", false, false, false, 115)) > 0)) {
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 116, $this->source); })()), "getUserPermission", [], "method", false, false, false, 116));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 117
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2\" style=\"font-size: .77rem; \">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 117), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 120
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\" style=\"font-size: .77rem; \">Pas de permissions</p>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 122
        echo "\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
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
        return "Pages/view/userView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  290 => 136,  283 => 135,  264 => 122,  260 => 120,  257 => 119,  248 => 117,  243 => 116,  241 => 115,  225 => 101,  221 => 99,  215 => 97,  213 => 96,  200 => 86,  188 => 77,  176 => 68,  164 => 59,  147 => 45,  135 => 36,  127 => 31,  111 => 19,  104 => 18,  84 => 6,  77 => 5,  63 => 2,  56 => 135,  54 => 18,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Utilisateur
\t{% endblock %}
</title>
{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('css/UserProfile.css')}}\">
\t<link
\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
\t<!-- Font Awesome -->
\t<link
\thref=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
\t<!-- Google Fonts -->
\t<link
\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
\t<!-- MDB -->
\t<linkhref=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\" rel=\"stylesheet\"/>
{% endblock %}
{% block body %}
\t{{ include('Pages/sidebar.html.twig') }}

\t<div class=\"home_content\"   >
\t\t<div class=\"text\">Profil de l'utilisateur</div>
\t\t<section>
\t\t\t<div class=\"container py-5\">


\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body text-center pt-5 pb-5\"  style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\">
\t\t\t\t\t\t\t\t<a class=\"back\" href=\"{{Path}}\">
\t\t\t\t
\t\t\t\t\t\t\t\t\t<i class='bx bxs-share  bx-md'  style=\"color:black;\"> </i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-7x \" alt=\"avatar\" class=\"rounded-circle img-fluid\" style=\"width: 150px;\"></i>
\t\t\t\t\t\t\t\t<h5 class=\"my-3 mt-4\">Profile de {{user.username}}</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"card mb-4 mb-lg-0\"  >
\t\t\t\t\t\t\t<div class=\"card-body p-0\"  >
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-flush rounded-3\"  >
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex justify-content-between align-items-center p-3\" style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >

\t\t\t\t\t\t\t\t\t\t<i class='bx bxs-envelope fa-lg'></i>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">{{user.email}}</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"card mb-4\">
\t\t\t\t\t\t\t<div class=\"card-body\" style=\" box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Nom et Prénom</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{user.username}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Matricule</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{user.matricule}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Poste</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{user.job}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Rôle</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">{{user.roles[0]}}</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Manager</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">
\t\t\t\t\t\t\t\t\t\t\t{% if user.manager %}
\t\t\t\t\t\t\t\t\t\t\t\t{{user.manager}}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\tPas de manager
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t<div class=\"card mb-4 mb-md-0\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\" style=\"max-height: 270px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;\" >
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\" font-italic me-1\" style=\" color:#f9a826;\">Permission de</span>
\t\t\t\t\t\t\t\t\t\t\tAyman
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div style=\"overflow-y: scroll  !important; max-height: 150px;\">
\t\t\t\t\t\t\t\t\t\t\t{% if user.getUserPermission()|length > 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for permission in user.getUserPermission() %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-2\" style=\"font-size: .77rem; \">{{permission.getPermissionName()}}</p>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-1\" style=\"font-size: .77rem; \">Pas de permissions</p>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t</div>
{% endblock %}
{% block javascripts %}
\t<script src=\"{{asset('JS/sidebar.js')}}\"></script>
\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
{% endblock %}
", "Pages/view/userView.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\view\\userView.html.twig");
    }
}
