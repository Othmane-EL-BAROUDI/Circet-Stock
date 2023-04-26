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

/* Pages/Users.html.twig */
class __TwigTemplate_c097c9d535af803fdbcc4409ca8872714411e6f419bc98e0fe05f5409bcbe34b extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Users.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "  ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 115
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Users.css"), "html", null, true);
        echo "\">
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "     <div class=\"home_content\">
         <div class=\"modal fade\" id=\"addUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addUser\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add user</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">user name :</label>
                                          <input  placeholder=\"@user_name\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user matricule :</label>
                                          <input  placeholder=\"@matricule\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user manager :</label>
                                          <input  placeholder=\"@manager\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user role :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>role</option>
                                          </select>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user permission :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>permission</option>
                                          </select>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user email :</label>
                                          <input  placeholder=\"user_email@gmail.com\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">user password:</label>
                                          <input  placeholder=\"@password\" type=\"text\">
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"close_button1\">Add user</button>
                               </div>
                         </div>
                  </div>
                  
      </div>
            <div class=\"text\">Users</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addUser\">Add new user</button>
            <div class=\"main_content\">
                 <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                     <select name=\"role\">
                            <option selected disabled>role</option>
                            <option value=\"manager\">manager</option>
                            <option value=\"admin\">admin</option>
                    </select>
                    <button>   Search  </button>
                </div>
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>users</th>
                            <th>matricule</th>
                            <th>job</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) || array_key_exists("allusers", $context) ? $context["allusers"] : (function () { throw new RuntimeError('Variable "allusers" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 81
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 81) != twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 81, $this->source); })()), "username", [], "any", false, false, false, 81))) {
                // line 82
                echo "                            <tr>
                                 <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 86), "html", null, true);
                echo "  </label>
                                        <p>";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 87), "html", null, true);
                echo "</p>
                                    </div>
                                </div>
                            </td>
                             <td>
                                ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 92), "html", null, true);
                echo "
                            </td>
                            <td>
                               ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "job", [], "any", false, false, false, 95), "html", null, true);
                echo " 
                            </td>
                        
                                    <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                                    </td>
                        
                             
                        </tr>
                        ";
            }
            // line 107
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                           
                        
                    </tbody>
                </table>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
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
        return "Pages/Users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 116,  243 => 115,  230 => 108,  224 => 107,  209 => 95,  203 => 92,  195 => 87,  191 => 86,  185 => 82,  182 => 81,  178 => 80,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 115,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Users{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Users.css')}}\">
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
  {{ include('Pages/sidebar.html.twig') }}
{% block body %}
     <div class=\"home_content\">
         <div class=\"modal fade\" id=\"addUser\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addUser\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add user</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">user name :</label>
                                          <input  placeholder=\"@user_name\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user matricule :</label>
                                          <input  placeholder=\"@matricule\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user manager :</label>
                                          <input  placeholder=\"@manager\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user role :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>role</option>
                                          </select>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user permission :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>permission</option>
                                          </select>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user email :</label>
                                          <input  placeholder=\"user_email@gmail.com\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">user password:</label>
                                          <input  placeholder=\"@password\" type=\"text\">
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"close_button1\">Add user</button>
                               </div>
                         </div>
                  </div>
                  
      </div>
            <div class=\"text\">Users</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addUser\">Add new user</button>
            <div class=\"main_content\">
                 <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                     <select name=\"role\">
                            <option selected disabled>role</option>
                            <option value=\"manager\">manager</option>
                            <option value=\"admin\">admin</option>
                    </select>
                    <button>   Search  </button>
                </div>
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>users</th>
                            <th>matricule</th>
                            <th>job</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        {% for key , user in allusers %}
                        {% if user.username != userInfo.username %}
                            <tr>
                                 <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">{{user.username}}  </label>
                                        <p>{{user.email}}</p>
                                    </div>
                                </div>
                            </td>
                             <td>
                                {{user.matricule}}
                            </td>
                            <td>
                               {{user.job}} 
                            </td>
                        
                                    <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                                    </td>
                        
                             
                        </tr>
                        {% endif %}
                        {% endfor %}
                           
                        
                    </tbody>
                </table>
            </div>
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
             <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
   {% endblock %}", "Pages/Users.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Users.html.twig");
    }
}
