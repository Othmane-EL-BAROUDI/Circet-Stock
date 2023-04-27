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

/* Pages/UserProfile.html.twig */
class __TwigTemplate_1c30cf283e931232784caed1e925dd1ce5348a07b4019d61ec5b73be9c374266 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/UserProfile.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 101
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
            <div class=\"text\">User Profile</div>
            
            <div class=\"container\">
                  <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-10 pt-5\">
                              <div class=\"row z-depth-3\">
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: rgb(255, 209, 100);\">
                                          <div class=\"card-block text-center text-white\">
                                                <i class=\"fas fa-user fa-7x mt-5\"></i>
                                                <h2 class=\"font-weight-bold mt-4\">Othmane EL BAROUDI</h2>
                                                <p>testtesttesttest</p>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\" style=\"box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 3px, rgba(0, 0, 0, 0.24) 0px 0px 2px;\">
                                          <h3 class=\"mt-3 text-center\">Information</h3>
                                          <hr class=\"badge-primary mx-auto mt-4 mb-4 w-25\">
                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Nom et prénom</p>
                                                      <h6 class=\"text-muted\">Othmane EL BAROUDI</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Email</p>
                                                      <h6 class=\"text-muted\">elbaroudiotmane99@gmail.com</h6>
                                                </div>
                                                <table class=\"table table-bordered text-center mr-4 ml-4\" style=\"width: 50%;\">
                                                      <thead>
                                                            <tr>
                                                                  <th>Permission</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                                  <td>Add user</td>
                                                            </tr>
                                                            <tr>
                                                                  <td>delete user</td>
                                                            </tr>
                                                            <tr>
                                                                  <td>Modifier user</td>
                                                            </tr>
                                                      </tbody>
                                                </table>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Matricule</p>
                                                      <h6 class=\"text-muted\">MA306084</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">manager</p>
                                                      <h6 class=\"text-muted\">Soufiane EL-KHERCHI</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Job</p>
                                                      <h6 class=\"text-muted\">Devops</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Role</p>
                                                      <h6 class=\"text-muted\">test</h6>
                                                </div>
                                          </div>
                                          <div class=\"text-center mb-4\">
                                                <p class=\"font-weight-bold\">Permission</p>
                                                ";
        // line 85
        echo "                                                <select class=\"form-select text-muted bg-light border-0 shadow-sm\" size=\"3\" aria-label=\"size 3 select example\">
                                                      <option selected>Open this select menu</option>
                                                      <option value=\"1\">One</option>
                                                      <option value=\"2\">Two</option>
                                                      <option value=\"3\">Three</option>
                                                </select>
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

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 102
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/UserProfile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 102,  202 => 101,  180 => 85,  105 => 13,  98 => 12,  81 => 3,  74 => 2,  61 => 1,  53 => 101,  51 => 12,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Profile{% endblock %}</title>
{% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{asset('css/profile.css')}}\">
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
            <div class=\"text\">User Profile</div>
            
            <div class=\"container\">
                  <div class=\"row d-flex justify-content-center\">
                        <div class=\"col-md-10 pt-5\">
                              <div class=\"row z-depth-3\">
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: rgb(255, 209, 100);\">
                                          <div class=\"card-block text-center text-white\">
                                                <i class=\"fas fa-user fa-7x mt-5\"></i>
                                                <h2 class=\"font-weight-bold mt-4\">Othmane EL BAROUDI</h2>
                                                <p>testtesttesttest</p>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\" style=\"box-shadow: rgba(0, 0, 0, 0.12) 0px 0px 3px, rgba(0, 0, 0, 0.24) 0px 0px 2px;\">
                                          <h3 class=\"mt-3 text-center\">Information</h3>
                                          <hr class=\"badge-primary mx-auto mt-4 mb-4 w-25\">
                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Nom et prénom</p>
                                                      <h6 class=\"text-muted\">Othmane EL BAROUDI</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Email</p>
                                                      <h6 class=\"text-muted\">elbaroudiotmane99@gmail.com</h6>
                                                </div>
                                                <table class=\"table table-bordered text-center mr-4 ml-4\" style=\"width: 50%;\">
                                                      <thead>
                                                            <tr>
                                                                  <th>Permission</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody>
                                                            <tr>
                                                                  <td>Add user</td>
                                                            </tr>
                                                            <tr>
                                                                  <td>delete user</td>
                                                            </tr>
                                                            <tr>
                                                                  <td>Modifier user</td>
                                                            </tr>
                                                      </tbody>
                                                </table>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Matricule</p>
                                                      <h6 class=\"text-muted\">MA306084</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">manager</p>
                                                      <h6 class=\"text-muted\">Soufiane EL-KHERCHI</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Job</p>
                                                      <h6 class=\"text-muted\">Devops</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Role</p>
                                                      <h6 class=\"text-muted\">test</h6>
                                                </div>
                                          </div>
                                          <div class=\"text-center mb-4\">
                                                <p class=\"font-weight-bold\">Permission</p>
                                                {# <h6 class=\"text-muted\">test</h6> #}
                                                <select class=\"form-select text-muted bg-light border-0 shadow-sm\" size=\"3\" aria-label=\"size 3 select example\">
                                                      <option selected>Open this select menu</option>
                                                      <option value=\"1\">One</option>
                                                      <option value=\"2\">Two</option>
                                                      <option value=\"3\">Three</option>
                                                </select>
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
   {% endblock %}", "Pages/UserProfile.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\UserProfile.html.twig");
    }
}
