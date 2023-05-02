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
        // line 109
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
                  <div class=\"modal fade\" id=\"model\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                     <div class=\"modal-content\">
                                     <div class=\"modal-header\" >
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel \">Les permissions de ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                          <span aria-hidden=\"true\">&times;</span>
                                          </button>
                                          </div>
                                          <div class=\"modal-body \"  >
                                                <ul class=\"row d-flex justify-content-center\">
                                                ";
        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "getUserPermission", [], "method", false, false, false, 25)) > 0)) {
            // line 26
            echo "                                                             ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "getUserPermission", [], "method", false, false, false, 26));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 27
                echo "                                                                   <li  class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 27), "html", null, true);
                echo "</li>
                                                             ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                                                ";
        } else {
            echo " <li  class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\" >no permission</li>
                                                ";
        }
        // line 31
        echo "                                            
                                                </ul>
                                          </div>
                                    <div class=\"modal-footer close_button\">
                                          <button style=\"width: 120px;background: #f9a826; border:none; border-radius: 5px; color:white; padding: 2px 3px 2px 3px ;  cursor: pointer;\" type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
      <div class=\"home_content\">
            <div class=\"text\">User View</div>
            <div class=\"container mt-2\">
               
                  <div class=\"row d-flex justify-content-center \">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\"  >
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
                                          <div class=\"card-block text-center text-white mt-2\"  >
                                                   <a  class=\"back\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["Path"]) || array_key_exists("Path", $context) ? $context["Path"] : (function () { throw new RuntimeError('Variable "Path" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\"><i class='bx bx-chevron-left bx-lg'></i></a>
                                                  <i class=\"fas fa-user fa-7x \"></i>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\"  style=\"border: solid 1px #f9a826; \">
                                          <div class=\"row mb-4 mt-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Nom et prénom</p>
                                                      <h6 class=\"text-muted\">";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "username", [], "any", false, false, false, 58), "html", null, true);
        echo "</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Email</p>
                                                      <h6 class=\"text-muted\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), "html", null, true);
        echo "</h6>
                                                </div>
                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Matricule</p>
                                                      <h6 class=\"text-muted\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "matricule", [], "any", false, false, false, 69), "html", null, true);
        echo "</h6>
                                                </div>
                                                ";
        // line 71
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "roles", [], "any", false, false, false, 71), 0, [], "array", false, false, false, 71) != "ROLE_ADMIN")) {
            // line 72
            echo "                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">manager</p>
                                                      <h6 class=\"text-muted\">
                                                                  ";
            // line 75
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 75, $this->source); })()), "manager", [], "any", false, false, false, 75)) {
                // line 76
                echo "                                                                              ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "manager", [], "any", false, false, false, 76), "html", null, true);
                echo "
                                                                  ";
            } else {
                // line 77
                echo " no manager
                                                                  ";
            }
            // line 79
            echo "                                                      </h6>
                                                </div>
                                                ";
        }
        // line 82
        echo "                                          </div>

                                          <div class=\"row mb-4\">
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Job</p>
                                                      <h6 class=\"text-muted\">";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 87, $this->source); })()), "job", [], "any", false, false, false, 87), "html", null, true);
        echo "</h6>
                                                </div>
                                                <div class=\"col-sm-6\">
                                                      <p class=\"font-weight-bold\">Role</p>
                                                      <h6 class=\"text-muted\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "roles", [], "any", false, false, false, 91), 0, [], "array", false, false, false, 91), "html", null, true);
        echo "</h6>
                                                </div>
                                          </div>

                                          <div class=\"text-center mb-4 d-flex\" style=\"justify-content: center;\">
                                                <div class=\"row\">
                                                     <button type=\"button\"   data-toggle=\"modal\" class=\"start\"  id=\"start\" data-target=\"#model\">voir permissions</button>
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

    // line 109
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 110
        echo "            <script src=\"";
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
        return "Pages/view/userView.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  270 => 110,  263 => 109,  238 => 91,  231 => 87,  224 => 82,  219 => 79,  215 => 77,  209 => 76,  207 => 75,  202 => 72,  200 => 71,  195 => 69,  185 => 62,  178 => 58,  166 => 49,  146 => 31,  140 => 29,  131 => 27,  126 => 26,  124 => 25,  114 => 18,  105 => 13,  98 => 12,  81 => 3,  74 => 2,  61 => 1,  53 => 109,  51 => 12,  49 => 2,  44 => 1,);
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
                  <div class=\"modal fade\" id=\"model\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                     <div class=\"modal-content\">
                                     <div class=\"modal-header\" >
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel \">Les permissions de {{user.username}}</h5>
                                          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                          <span aria-hidden=\"true\">&times;</span>
                                          </button>
                                          </div>
                                          <div class=\"modal-body \"  >
                                                <ul class=\"row d-flex justify-content-center\">
                                                {% if user.getUserPermission()|length > 0 %}
                                                             {% for permission in user.getUserPermission() %}
                                                                   <li  class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\">{{permission.getPermissionName()}}</li>
                                                             {% endfor %}
                                                {% else %} <li  class=\"d-flex justify-content-center align-items-center\" style=\" color:white; height: 40px; background: #f9a826; border-radius: 5px; width: 70%; list-style: none; border: 1px solid orange;  margin-bottom: 10px; font-size: 16px;\" >no permission</li>
                                                {% endif %}
                                            
                                                </ul>
                                          </div>
                                    <div class=\"modal-footer close_button\">
                                          <button style=\"width: 120px;background: #f9a826; border:none; border-radius: 5px; color:white; padding: 2px 3px 2px 3px ;  cursor: pointer;\" type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
      <div class=\"home_content\">
            <div class=\"text\">User View</div>
            <div class=\"container mt-2\">
               
                  <div class=\"row d-flex justify-content-center \">
                        <div class=\"col-md-10 pt-5\" >
                              <div class=\"row z-depth-3\"  >
                                    <div class=\"col-sm-4 rounded-left\" style=\"background-color: #f9a826; \">
                                          <div class=\"card-block text-center text-white mt-2\"  >
                                                   <a  class=\"back\" href=\"{{Path}}\"><i class='bx bx-chevron-left bx-lg'></i></a>
                                                  <i class=\"fas fa-user fa-7x \"></i>
                                          </div>
                                    </div>

                                    <div class=\"col-sm-7 rounded-right\"  style=\"border: solid 1px #f9a826; \">
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
                                                     <button type=\"button\"   data-toggle=\"modal\" class=\"start\"  id=\"start\" data-target=\"#model\">voir permissions</button>
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
             <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
   {% endblock %}", "Pages/view/userView.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\view\\userView.html.twig");
    }
}
