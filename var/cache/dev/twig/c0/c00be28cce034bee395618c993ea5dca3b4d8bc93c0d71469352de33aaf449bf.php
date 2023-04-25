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

/* Pages/Profile-edit.html.twig */
class __TwigTemplate_2d7b5c6f16c03ebbb19f1023ba37e737979922c89108ccf97ad175fc1f4e43ed extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Profile-edit.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Circet-Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
     <div class=\"home_content\">
            <div class=\"text\">Edit Profile</div>
            
            <div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
                  <div class=\"col-md-9\">
                        <div class=\"card mb-3 content\">
                              <div class=\"card-body\">
                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Full name</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                <input type=\"text\" class=\"form-control\" name=\"fullName\" placeholder=\"Full name\">
                                          </div>
                                    </div>

                                    ";
        // line 36
        echo "
                                    <hr>

                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Email</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                          </div>
                                    </div>

                                    ";
        // line 60
        echo "
                                    <div class=\"text-center mt-4\">
                                          <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile-edit");
        echo "\">
                                                <button type=\"button\" class=\"btn btn-primary\">Modifier</button>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Profile-edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 74,  158 => 73,  140 => 62,  136 => 60,  121 => 36,  99 => 7,  92 => 6,  81 => 3,  74 => 2,  61 => 1,  53 => 73,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Profile{% endblock %}</title>
{% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{asset('css/profile.css')}}\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Edit Profile</div>
            
            <div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
                  <div class=\"col-md-9\">
                        <div class=\"card mb-3 content\">
                              <div class=\"card-body\">
                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Full name</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                <input type=\"text\" class=\"form-control\" name=\"fullName\" placeholder=\"Full name\">
                                          </div>
                                    </div>

                                    {# <hr>

                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Matricule</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                MA306084
                                          </div>
                                    </div> #}

                                    <hr>

                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Email</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                <input type=\"text\" class=\"form-control\" name=\"email\" placeholder=\"Email\">
                                          </div>
                                    </div>

                                    {# <hr>

                                    <div class=\"row\">
                                          <div class=\"col-md-3\">
                                                <h5>Job</h5>
                                          </div>

                                          <div class=\"col-md-9 text-secondary\">
                                                Web Developer
                                          </div>
                                    </div> #}

                                    <div class=\"text-center mt-4\">
                                          <a href=\"{{path('Profile-edit')}}\">
                                                <button type=\"button\" class=\"btn btn-primary\">Modifier</button>
                                          </a>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/Profile-edit.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Profile-edit.html.twig");
    }
}
