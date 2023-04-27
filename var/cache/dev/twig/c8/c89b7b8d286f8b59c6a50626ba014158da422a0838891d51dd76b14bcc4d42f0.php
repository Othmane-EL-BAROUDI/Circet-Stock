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
        // line 128
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
                                    ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start');
        echo "
                                     <div class=\"modal-body\">
                                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'widget');
        echo "
                                    </div>
                                   <!--  <div class=\"modal-body\">
                                          <label for=\"name\">user role :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>role</option>
                                                  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allroles"]) || array_key_exists("allroles", $context) ? $context["allroles"] : (function () { throw new RuntimeError('Variable "allroles" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 27
            echo "                                                        <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["role"], "getRoleName", [], "method", false, false, false, 27), "html", null, true);
            echo "</option>
                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                                          </select>
                                    </div>-->
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user permission :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>permission</option>
                                                 ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allpermissions"]) || array_key_exists("allpermissions", $context) ? $context["allpermissions"] : (function () { throw new RuntimeError('Variable "allpermissions" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 36
            echo "                                                        <option>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 36), "html", null, true);
            echo "</option>
                                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                                          </select>
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"close_button1\">Add user</button>
                                    </div>
                                    ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "

                         </div>
                  </div>
                  
      </div>
            <div class=\"text\">Users</div>
             ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "session", [], "any", false, false, false, 50), "flashbag", [], "any", false, false, false, 50), "get", [0 => "success"], "method", false, false, false, 50));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 51
            echo "              <label class=\"alerto\" style=\"background-color: lightgreen\" >";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</label>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addUser\">Add new user</button>
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
<div class=\"mainC\">
<table class=\"table align-middle mb-0 bg-white\">
  <thead class=\"bg-light\">
    <tr>
      <th>users</th>
      <th>matricule</th>
      <th>Status</th>
      <th>job</th>
      <th  style=\"text-align:center;\" >Actions</th>
    </tr>
  </thead>
  <tbody>
     ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allusers"]) || array_key_exists("allusers", $context) ? $context["allusers"] : (function () { throw new RuntimeError('Variable "allusers" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["user"]) {
            // line 77
            echo "     ";
            if ((twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 77) != twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 77, $this->source); })()), "username", [], "any", false, false, false, 77))) {
                // line 78
                echo "    <tr>
      <td>
        <div class=\"d-flex align-items-center\">
          <div class=\"ms-3\">
            <p class=\"fw-bold mb-1\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 82), "html", null, true);
                echo "</p>
            <p class=\"text-muted mb-0\">";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 83), "html", null, true);
                echo "</p>
          </div>
        </div>
      </td>
      <td>
        <p class=\"text-muted mb-0 mt-2 \">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "matricule", [], "any", false, false, false, 88), "html", null, true);
                echo "t</p>
      </td>
      <td>
        <label class=\"mt-2\">
            ";
                // line 92
                if (twig_get_attribute($this->env, $this->source, $context["user"], "enabled", [], "any", false, false, false, 92)) {
                    echo " <span class=\"badge badge-success rounded-pill d-inline\">Active</span>
            ";
                } else {
                    // line 93
                    echo "  <span class=\"badge badge-warning rounded-pill d-inline\">Blocked</span>
            ";
                }
                // line 95
                echo "                
        </label>
        
      </td>
      <td><label class=\"mt-2\">";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "job", [], "any", false, false, false, 99), "html", null, true);
                echo "</label></td>
      <td  class=\"actions\" >
       <a href=\"User/";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 mr-1\">
               <i class='bx bx-show bx-xs'></i> view
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 mr-1 \">
            <i class='bx bx-edit bx-xs'></i>
            Edit
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 \">
            <i class='bx bx-trash bx-xs'></i>
            Delete
            </button>
        </a>
      </td>
    </tr>
    ";
            }
            // line 121
            echo "     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "  </tbody>
</table>
</div>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 128
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 129
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
        return array (  319 => 129,  312 => 128,  300 => 122,  294 => 121,  271 => 101,  266 => 99,  260 => 95,  256 => 93,  251 => 92,  244 => 88,  236 => 83,  232 => 82,  226 => 78,  223 => 77,  219 => 76,  194 => 53,  185 => 51,  181 => 50,  171 => 43,  164 => 38,  155 => 36,  151 => 35,  143 => 29,  134 => 27,  130 => 26,  121 => 20,  116 => 18,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 128,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
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
                                    {{ form_start(form) }}
                                     <div class=\"modal-body\">
                                    {{ form_widget(form) }}
                                    </div>
                                   <!--  <div class=\"modal-body\">
                                          <label for=\"name\">user role :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>role</option>
                                                  {% for role in allroles %}
                                                        <option>{{role.getRoleName()}}</option>
                                                 {% endfor %}
                                          </select>
                                    </div>-->
                                     <div class=\"modal-body\">
                                          <label for=\"name\">user permission :</label>
                                          <select name=\"role\" id=\"\">
                                                 <option selected disabled>permission</option>
                                                 {% for permission in allpermissions %}
                                                        <option>{{permission.getPermissionName()}}</option>
                                                 {% endfor %}
                                          </select>
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"close_button1\">Add user</button>
                                    </div>
                                    {{ form_end(form) }}

                         </div>
                  </div>
                  
      </div>
            <div class=\"text\">Users</div>
             {% for flash_message in app.session.flashbag.get('success') %}
              <label class=\"alerto\" style=\"background-color: lightgreen\" >{{flash_message}}</label>
              {% endfor %}
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
<div class=\"mainC\">
<table class=\"table align-middle mb-0 bg-white\">
  <thead class=\"bg-light\">
    <tr>
      <th>users</th>
      <th>matricule</th>
      <th>Status</th>
      <th>job</th>
      <th  style=\"text-align:center;\" >Actions</th>
    </tr>
  </thead>
  <tbody>
     {% for key , user in allusers %}
     {% if user.username != userInfo.username %}
    <tr>
      <td>
        <div class=\"d-flex align-items-center\">
          <div class=\"ms-3\">
            <p class=\"fw-bold mb-1\">{{user.username}}</p>
            <p class=\"text-muted mb-0\">{{user.email}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class=\"text-muted mb-0 mt-2 \">{{user.matricule}}t</p>
      </td>
      <td>
        <label class=\"mt-2\">
            {% if user.enabled %} <span class=\"badge badge-success rounded-pill d-inline\">Active</span>
            {% else %}  <span class=\"badge badge-warning rounded-pill d-inline\">Blocked</span>
            {% endif %}
                
        </label>
        
      </td>
      <td><label class=\"mt-2\">{{user.job}}</label></td>
      <td  class=\"actions\" >
       <a href=\"User/{{user.id}}\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 mr-1\">
               <i class='bx bx-show bx-xs'></i> view
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 mr-1 \">
            <i class='bx bx-edit bx-xs'></i>
            Edit
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"btn  btn-sm btn-rounded mt-1 \">
            <i class='bx bx-trash bx-xs'></i>
            Delete
            </button>
        </a>
      </td>
    </tr>
    {% endif %}
     {% endfor %}
  </tbody>
</table>
</div>
            </div>
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
             <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
   {% endblock %}", "Pages/Users.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Users.html.twig");
    }
}
