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

/* Pages/stockView.html.twig */
class __TwigTemplate_43c3dd1a6047731f8c755ef17ed6e5808a790cb6c9c3e47c3e80199ffeb54954 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/stockView.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 77
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/UserProfile.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
      <!-- Font Awesome -->
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
      <!-- Google Fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
      <!-- MDB -->
      <linkhref=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\" rel=\"stylesheet\"/>
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
        echo "     ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
      <div class=\"home_content\">
            <div class=\"text\">Stock View</div>
            
            <div class=\"container\">
                  <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\">
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: rgb(255, 209, 100);\">
                                          <div class=\"card-block text-center text-white mt-5\">
                                                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" class=\"rounded float-start w-50\" alt=\"\">

                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right text-center\">
                                          <div class=\"row mb-5 mt-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Type</p>
                                                      <h6 class=\"text-muted\">Laptop</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Serial number</p>
                                                      <h6 class=\"text-muted\">srl223</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-5\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">State</p>
                                                      <h6 class=\"text-muted\">bad</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Available</p>
                                                      <h6 class=\"text-muted\">Yes</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-5\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Mac ethernet</p>
                                                      <h6 class=\"text-muted\">test test</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Mac wifi</p>
                                                      <h6 class=\"text-muted\">test test</h6>
                                                </div>
                                          </div>

                                          <div class=\" mb-3\">
                                                <p class=\"font-weight-bold\">Description</p>
                                                ";
        // line 65
        echo "                                                <textarea class=\"form-control\" style=\"height: 100px\" disabled>test test test</textarea>
                                                
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/stockView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  188 => 78,  181 => 77,  163 => 65,  119 => 23,  105 => 13,  98 => 12,  81 => 3,  74 => 2,  61 => 1,  53 => 77,  51 => 12,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Profile{% endblock %}</title>
{% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{asset('css/UserProfile.css')}}\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
      <!-- Font Awesome -->
      <link href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\" rel=\"stylesheet\"/>
      <!-- Google Fonts -->
      <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\" rel=\"stylesheet\"/>
      <!-- MDB -->
      <linkhref=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\" rel=\"stylesheet\"/>
{% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
      <div class=\"home_content\">
            <div class=\"text\">Stock View</div>
            
            <div class=\"container\">
                  <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\">
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: rgb(255, 209, 100);\">
                                          <div class=\"card-block text-center text-white mt-5\">
                                                <img src=\"{{asset('images/laptop.png')}}\" class=\"rounded float-start w-50\" alt=\"\">

                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right text-center\">
                                          <div class=\"row mb-5 mt-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Type</p>
                                                      <h6 class=\"text-muted\">Laptop</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Serial number</p>
                                                      <h6 class=\"text-muted\">srl223</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-5\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">State</p>
                                                      <h6 class=\"text-muted\">bad</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Available</p>
                                                      <h6 class=\"text-muted\">Yes</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-5\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Mac ethernet</p>
                                                      <h6 class=\"text-muted\">test test</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Mac wifi</p>
                                                      <h6 class=\"text-muted\">test test</h6>
                                                </div>
                                          </div>

                                          <div class=\" mb-3\">
                                                <p class=\"font-weight-bold\">Description</p>
                                                {# <h6 class=\"text-muted\">Add user</h6> #}
                                                <textarea class=\"form-control\" style=\"height: 100px\" disabled>test test test</textarea>
                                                
                                          </div>
                                    </div>

                              </div>
                        </div>
                  </div>
            </div>
      </div>

{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/stockView.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\stockView.html.twig");
    }
}
