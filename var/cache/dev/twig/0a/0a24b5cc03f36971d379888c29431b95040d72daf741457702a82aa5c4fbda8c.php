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
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 118
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

        echo "Circet-Users";
        
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
            <div class=\"text\">User View</div>
            <div class=\"container mt-2\">
               
                  <div class=\"row d-flex justify-content-center \">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\"  >
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
                                          <div class=\"card-block text-center text-white mt-5\"  >
                                                   <a  class=\"back\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["Path"]) || array_key_exists("Path", $context) ? $context["Path"] : (function () { throw new RuntimeError('Variable "Path" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\"><i class='bx bx-chevron-left bx-lg'></i></a>
                                                  <i class=\"fas fa-user fa-7x \"></i>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\">
                                          <div class=\"row mb-4 mt-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Nom et prénom</p>
                                                      <h6 class=\"text-muted\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "username", [], "any", false, false, false, 32), "html", null, true);
        echo "</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Email</p>
                                                      <h6 class=\"text-muted\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        echo "</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Matricule</p>
                                                      <h6 class=\"text-muted\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "matricule", [], "any", false, false, false, 43), "html", null, true);
        echo "</h6>
                                                </div>
                                                ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "roles", [], "any", false, false, false, 45), 0, [], "array", false, false, false, 45) != "ROLE_ADMIN")) {
            // line 46
            echo "                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">manager</p>
                                                      <h6 class=\"text-muted\">
                                                                  ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "manager", [], "any", false, false, false, 49)) {
                // line 50
                echo "                                                                              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "manager", [], "any", false, false, false, 50), "html", null, true);
                echo "
                                                                  ";
            } else {
                // line 51
                echo " no manager
                                                                  ";
            }
            // line 53
            echo "                                                      </h6>
                                                </div>
                                                ";
        }
        // line 56
        echo "                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Job</p>
                                                      <h6 class=\"text-muted\">";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "job", [], "any", false, false, false, 61), "html", null, true);
        echo "</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Role</p>
                                                      <h6 class=\"text-muted\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65), 0, [], "array", false, false, false, 65), "html", null, true);
        echo "</h6>
                                                </div>
                                          </div>

                                          <div class=\"text-center mb-4 d-flex\" style=\"justify-content: center;\">
                                                <div class=\"row\">
                                                      <table class=\"table table-bordered text-center mr-4 ml-4\" style=\"width: 500px;\">
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
                                                                        <td>Add user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Add user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>delete user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                            </tbody>
                                                      </table>
                                                </div>
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

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/view/userView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 119,  251 => 118,  191 => 65,  184 => 61,  177 => 56,  172 => 53,  168 => 51,  162 => 50,  160 => 49,  155 => 46,  153 => 45,  148 => 43,  138 => 36,  131 => 32,  119 => 23,  105 => 13,  98 => 12,  81 => 3,  74 => 2,  61 => 1,  53 => 118,  51 => 12,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Users{% endblock %}</title>
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
            <div class=\"text\">User View</div>
            <div class=\"container mt-2\">
               
                  <div class=\"row d-flex justify-content-center \">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\"  >
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
                                          <div class=\"card-block text-center text-white mt-5\"  >
                                                   <a  class=\"back\" href=\"{{Path}}\"><i class='bx bx-chevron-left bx-lg'></i></a>
                                                  <i class=\"fas fa-user fa-7x \"></i>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\">
                                          <div class=\"row mb-4 mt-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Nom et prénom</p>
                                                      <h6 class=\"text-muted\">{{user.username}}</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Email</p>
                                                      <h6 class=\"text-muted\">{{user.email}}</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Matricule</p>
                                                      <h6 class=\"text-muted\">{{user.matricule}}</h6>
                                                </div>
                                                {% if user.roles[0] != \"ROLE_ADMIN\" %}
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">manager</p>
                                                      <h6 class=\"text-muted\">
                                                                  {% if user.manager %}
                                                                              {{user.manager}}
                                                                  {% else %} no manager
                                                                  {% endif %}
                                                      </h6>
                                                </div>
                                                {% endif %}
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Job</p>
                                                      <h6 class=\"text-muted\">{{user.job}}</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Role</p>
                                                      <h6 class=\"text-muted\">{{user.roles[0]}}</h6>
                                                </div>
                                          </div>

                                          <div class=\"text-center mb-4 d-flex\" style=\"justify-content: center;\">
                                                <div class=\"row\">
                                                      <table class=\"table table-bordered text-center mr-4 ml-4\" style=\"width: 500px;\">
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
                                                                        <td>Add user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Add user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>delete user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                                  <tr>
                                                                        <td>Modifier user</td>
                                                                  </tr>
                                                            </tbody>
                                                      </table>
                                                </div>
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
   {% endblock %}", "Pages/view/userView.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\view\\userView.html.twig");
    }
}
