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
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Users
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
\t<div class=\"modal fade\" id=\"model\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel \">Les permissions de
\t\t\t\t\t\t";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), "html", null, true);
        echo "</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body \">
\t\t\t\t\t<ul class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t";
        // line 32
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "getUserPermission", [], "method", false, false, false, 32)) > 0)) {
            // line 33
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "getUserPermission", [], "method", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 34
                echo "\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 34), "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t\t\t\t\t";
        } else {
            // line 37
            echo "\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">no permission</li>
\t\t\t\t\t\t";
        }
        // line 39
        echo "\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t<button style=\"width: 120px;background: #f9a826; border:none; border-radius: 5px; color:white; padding: 2px 3px 2px 3px ;  cursor: pointer;\" type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"home_content\">
\t\t<div class=\"text\">User View</div>
\t\t<div class=\"container mt-2\">

\t\t\t<div class=\"row d-flex justify-content-center \">
\t\t\t\t<div class=\"col-md-10 pt-5\">
\t\t\t\t\t<div class=\"row z-depth-3\">
\t\t\t\t\t\t<div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
\t\t\t\t\t\t\t<div class=\"card-block text-center text-white mt-2\">
\t\t\t\t\t\t\t\t<a class=\"back\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["Path"]) || array_key_exists("Path", $context) ? $context["Path"] : (function () { throw new RuntimeError('Variable "Path" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-chevron-left bx-lg'></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-7x \"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-7 rounded-right\" style=\"border: solid 1px #f9a826; \">
\t\t\t\t\t\t\t<div class=\"row mb-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Nom et prénom</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "username", [], "any", false, false, false, 67), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Email</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Matricule</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "matricule", [], "any", false, false, false, 78), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 80
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "roles", [], "any", false, false, false, 80), 0, [], "array", false, false, false, 80) != "ROLE_ADMIN")) {
            // line 81
            echo "\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">manager</p>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 84
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 84, $this->source); })()), "manager", [], "any", false, false, false, 84)) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "manager", [], "any", false, false, false, 85), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 87
                echo "\t\t\t\t\t\t\t\t\t\t\t\tno manager
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 89
            echo "\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Job</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 97, $this->source); })()), "job", [], "any", false, false, false, 97), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Role</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "roles", [], "any", false, false, false, 101), 0, [], "array", false, false, false, 101), "html", null, true);
        echo "</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center mb-4 d-flex\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"width:300px;\" data-toggle=\"modal\" class=\"start mr-4\" id=\"start\" data-target=\"#model\">voir permissions</button>
\t\t\t\t\t\t\t\t</div>
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

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
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
        return array (  279 => 120,  272 => 119,  247 => 101,  240 => 97,  233 => 92,  228 => 89,  224 => 87,  218 => 85,  216 => 84,  211 => 81,  209 => 80,  204 => 78,  194 => 71,  187 => 67,  173 => 56,  154 => 39,  150 => 37,  147 => 36,  138 => 34,  133 => 33,  131 => 32,  121 => 25,  111 => 19,  104 => 18,  84 => 6,  77 => 5,  63 => 2,  56 => 119,  54 => 18,  52 => 5,  49 => 4,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>
\t{% block title %}Circet-Users
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
\t<div class=\"modal fade\" id=\"model\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel \">Les permissions de
\t\t\t\t\t\t{{user.username}}</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body \">
\t\t\t\t\t<ul class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t{% if user.getUserPermission()|length > 0 %}
\t\t\t\t\t\t\t{% for permission in user.getUserPermission() %}
\t\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">{{permission.getPermissionName()}}</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">no permission</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer close_button\">
\t\t\t\t\t<button style=\"width: 120px;background: #f9a826; border:none; border-radius: 5px; color:white; padding: 2px 3px 2px 3px ;  cursor: pointer;\" type=\"button\" data-dismiss=\"modal\">Close</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"home_content\">
\t\t<div class=\"text\">User View</div>
\t\t<div class=\"container mt-2\">

\t\t\t<div class=\"row d-flex justify-content-center \">
\t\t\t\t<div class=\"col-md-10 pt-5\">
\t\t\t\t\t<div class=\"row z-depth-3\">
\t\t\t\t\t\t<div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
\t\t\t\t\t\t\t<div class=\"card-block text-center text-white mt-2\">
\t\t\t\t\t\t\t\t<a class=\"back\" href=\"{{Path}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-chevron-left bx-lg'></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-7x \"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-7 rounded-right\" style=\"border: solid 1px #f9a826; \">
\t\t\t\t\t\t\t<div class=\"row mb-4 mt-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Nom et prénom</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">{{user.username}}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Email</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">{{user.email}}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Matricule</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">{{user.matricule}}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% if user.roles[0] != \"ROLE_ADMIN\" %}
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">manager</p>
\t\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t\t{% if user.manager %}
\t\t\t\t\t\t\t\t\t\t\t\t{{user.manager}}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\tno manager
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Job</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">{{user.job}}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Role</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"text-muted\">{{user.roles[0]}}</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"text-center mb-4 d-flex\" style=\"justify-content: center;\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" style=\"width:300px;\" data-toggle=\"modal\" class=\"start mr-4\" id=\"start\" data-target=\"#model\">voir permissions</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>
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
", "Pages/view/userView.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\view\\userView.html.twig");
    }
}
