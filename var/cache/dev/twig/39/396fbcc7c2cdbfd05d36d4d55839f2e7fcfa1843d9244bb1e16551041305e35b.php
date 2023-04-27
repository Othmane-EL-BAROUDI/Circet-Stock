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

/* Pages/Permission.html.twig */
class __TwigTemplate_60aa358e0ec294ed663caa4ee002c33679c57d85dce6d4a437ae97906365f7b9 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Permission.html.twig"));

        // line 1
        echo " <title>";
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
        // line 110
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

        echo "Circet-Permission";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Role.css"), "html", null, true);
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
            <div class=\"modal fade\" id=\"editRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editRole\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Permission</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">Permission name:</label>
                                          <input  placeholder=\"@permission_name\" type=\"text\">
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" class=\"close_button\">Save changes</button>
                               </div>
                         </div>
                  </div>
                  
      </div>
      
            <div class=\"modal fade\" id=\"addRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addRole\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add permission</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                         ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
        echo "
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\"  class=\"close_button1\">Add permission</button>
                              </div>
                              ";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        echo "
                         </div>
                  </div>
                  
      </div>
            
            
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "flashbag", [], "any", false, false, false, 54), "get", [0 => "success"], "method", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 55
            echo "                   <div class=\"alert  alert-success fade show\" role=\"alert\">
                              <strong>Success!</strong> ";
            // line 56
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                     </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", [0 => "update"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 63
            echo "                  <div class=\"alert  alert-info fade show\" role=\"alert\">
                              <strong>Success!</strong> ";
            // line 64
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                  </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "             ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "session", [], "any", false, false, false, 70), "flashbag", [], "any", false, false, false, 70), "get", [0 => "delete"], "method", false, false, false, 70));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 71
            echo "                   <div class=\"alert  alert-danger fade show\" role=\"alert\">
                               ";
            // line 72
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                  </div>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "             <div class=\"text\">Permission</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add new permission</button>
            <div class=\"main_content\">
               <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <button>   Search  </button>
                </div>
            </div>
            <div class=\"content\">
              <table class=\"content-table\" style=\"\">
                    <thead>
                        <tr>
                            <th>permission</th>
                            <th  style=\"text-align : center\" >action</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allPermissions"]) || array_key_exists("allPermissions", $context) ? $context["allPermissions"] : (function () { throw new RuntimeError('Variable "allPermissions" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["permission"]) {
            // line 96
            echo "                            <tr>
                             <td  class=\"textperm\" > ";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 97), "html", null, true);
            echo " </td>
                                    <td class=\"actions\">
                                          <a class = \"text-decoration-none\" href=\"/Permission/";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 99), "html", null, true);
            echo "\"  ><button><i class='bx bx-edit bx-sm'></i>Update</button></a> 
                                          <a href=\"/Permission/Remove/";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["permission"], "id", [], "any", false, false, false, 100), "html", null, true);
            echo "\"><button><i class='bx bx-trash bx-sm'></i> Delete</button></a> 
                                    </td>   
                              </tr>       
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "   
                    </tbody>
                </table>
                  
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
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
        return "Pages/Permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 111,  278 => 110,  265 => 103,  255 => 100,  251 => 99,  246 => 97,  243 => 96,  239 => 95,  220 => 78,  208 => 72,  205 => 71,  200 => 70,  188 => 64,  185 => 63,  180 => 62,  168 => 56,  165 => 55,  161 => 54,  151 => 47,  143 => 42,  132 => 34,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 110,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Permission{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Role.css')}}\">
         <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
  {{ include('Pages/sidebar.html.twig') }}
{% block body %}
     <div class=\"home_content\">
            <div class=\"modal fade\" id=\"editRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editRole\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Edit Permission</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">Permission name:</label>
                                          <input  placeholder=\"@permission_name\" type=\"text\">
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                    <button type=\"button\" class=\"close_button\">Save changes</button>
                               </div>
                         </div>
                  </div>
                  
      </div>
      
            <div class=\"modal fade\" id=\"addRole\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addRole\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              {{ form_start(form) }}
                             <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add permission</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                         {{ form_widget(form) }}
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\"  class=\"close_button1\">Add permission</button>
                              </div>
                              {{ form_end(form) }}
                         </div>
                  </div>
                  
      </div>
            
            
            {% for flash_message in app.session.flashbag.get('success') %}
                   <div class=\"alert  alert-success fade show\" role=\"alert\">
                              <strong>Success!</strong> {{flash_message}}
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                     </div>
             {% endfor %}
             {% for flash_message in app.session.flashbag.get('update') %}
                  <div class=\"alert  alert-info fade show\" role=\"alert\">
                              <strong>Success!</strong> {{flash_message}}
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                  </div>
             {% endfor %}
             {% for flash_message in app.session.flashbag.get('delete') %}
                   <div class=\"alert  alert-danger fade show\" role=\"alert\">
                               {{flash_message}}
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                  </div>
             {% endfor %}
             <div class=\"text\">Permission</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add new permission</button>
            <div class=\"main_content\">
               <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <button>   Search  </button>
                </div>
            </div>
            <div class=\"content\">
              <table class=\"content-table\" style=\"\">
                    <thead>
                        <tr>
                            <th>permission</th>
                            <th  style=\"text-align : center\" >action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for key , permission in allPermissions %}
                            <tr>
                             <td  class=\"textperm\" > {{permission.getPermissionName()}} </td>
                                    <td class=\"actions\">
                                          <a class = \"text-decoration-none\" href=\"/Permission/{{permission.id}}\"  ><button><i class='bx bx-edit bx-sm'></i>Update</button></a> 
                                          <a href=\"/Permission/Remove/{{permission.id}}\"><button><i class='bx bx-trash bx-sm'></i> Delete</button></a> 
                                    </td>   
                              </tr>       
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
   {% endblock %}", "Pages/Permission.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Permission.html.twig");
    }
}
