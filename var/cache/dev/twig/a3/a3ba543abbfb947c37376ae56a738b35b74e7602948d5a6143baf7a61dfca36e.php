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

/* Pages/Stock.html.twig */
class __TwigTemplate_08deb0ab49ad0dbf83a8320894f4e04a9cee9013485ae94498b8a799f89c1ce8 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Stock.html.twig"));

        // line 1
        echo "<title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "   ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 135
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

        echo "Circet-Stock";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Stock.css"), "html", null, true);
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
      <div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                 
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add to stock</h5>
                                     <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                       
                                        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
                                          <label for=\"name\">item picture:</label>
                                          <button class=\"up\"< ><i class='bx bxs-cloud-upload bx-sm'></i></button>
                                          <input  type=\"file\">
                                   
                                         
                                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'widget');
        echo "
                                        
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"close_button1\">Add item</button>
                                    </div>
                                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_end');
        echo "
                         </div>
                  </div>
                  
      </div>
             ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "flashbag", [], "any", false, false, false, 38), "get", [0 => "delete"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 39
            echo "                   <div class=\"alert  alert-danger fade show\" role=\"alert\">
                               ";
            // line 40
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
        // line 46
        echo "            <div class=\"text\">Stock</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Add to stock</button>
            <div class=\"main_content\">
                 <div class=\"sort1\">
                    <input type=\"text\" placeholder=\"Search\" >
                     <select name=\"role\">
                            <option selected disabled>Type</option>
                            <option value=\"manager\">manager</option>
                            <option value=\"admin\">admin</option>
                    </select>
                    <select name=\"availability\">
                            <option selected disabled>Availability</option>
                    </select>
                     <select name=\"state\">
                            <option selected disabled>State</option>
                    </select>
                    <button>   Search  </button>
                </div>
<div class=\"mainC\">
<table class=\"table align-middle mb-0 bg-white\">
  <thead class=\"bg-light\"  >
    <tr>
      <th>name</th>
      <th>type</th>
       <th>serial number</th>
       <th>availability</th>
       <th>state</th>
       <th  style=\"text-align:center;\" >action</th>
    </tr>
  </thead>
  <tbody>
     ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allmachines"]) || array_key_exists("Allmachines", $context) ? $context["Allmachines"] : (function () { throw new RuntimeError('Variable "Allmachines" does not exist.', 77, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 78
            echo "    <tr>
      <td>
        <div class=\"d-flex align-items-center\">
          <div class=\"ms-3\">
            <p class=\"fw-bold mb-1\">";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 82), "marque", [], "any", false, false, false, 82), "getMarqueName", [], "method", false, false, false, 82), "html", null, true);
            echo "</p>
            <p class=\"text-muted mb-0\">";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 83), "getModelName", [], "method", false, false, false, 83), "html", null, true);
            echo "</p>
          </div>
        </div>
      </td>
      <td>
        <p class=\"text-muted mb-0 mt-2 \">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "type", [], "any", false, false, false, 88), "html", null, true);
            echo "</p>
      </td>
      <td>
        <label class=\"mt-2\">
                ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "getSerialNum", [], "method", false, false, false, 92), "html", null, true);
            echo "
        </label>
        
      </td>
      <td  ><label  class=\"mt-2 ml-2\">
             ";
            // line 97
            if ((twig_get_attribute($this->env, $this->source, $context["machine"], "available", [], "any", false, false, false, 97) == 1)) {
                echo " <span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Yes</span>
            ";
            } else {
                // line 98
                echo "  <span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">No</span>
            ";
            }
            // line 100
            echo "      </label></td>
      <td >
        <label class=\"mt-2\">
                ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "state", [], "method", false, false, false, 103), "html", null, true);
            echo "
        </label>
        
      </td>
      <td  class=\"actions\" >
       <a href=\"stockView/";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 108), "html", null, true);
            echo "\"> 
            <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \">
            <i class='bx bx-show-alt bx-xs'></i> view
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
            <i class='bx bx-edit bx-xs'></i>
            Edit
            </button>
        </a>
        <a href=\"/Stock/Remove/";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\"> 
            <button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \"style=\" border: #dc3545 solid 1px;\" >
            <i class='bx bx-trash bx-xs'></i>
            Delete
            </button>
        </a>
      </td>
    </tr>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "  </tbody>
</table>
</div>

            </div>
      </div>
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
        return "Pages/Stock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 136,  298 => 135,  285 => 128,  270 => 119,  256 => 108,  248 => 103,  243 => 100,  239 => 98,  234 => 97,  226 => 92,  219 => 88,  211 => 83,  207 => 82,  201 => 78,  197 => 77,  164 => 46,  152 => 40,  149 => 39,  145 => 38,  137 => 33,  128 => 27,  119 => 21,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 135,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Stock{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Stock.css')}}\">
           <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
   {{ include('Pages/sidebar.html.twig') }}
{% block body %}
     <div class=\"home_content\">
      <div class=\"modal fade\" id=\"addStock\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addStock\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                             <div class=\"modal-header\">
                                 
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add to stock</h5>
                                     <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                       
                                        {{ form_start(form) }}
                                          <label for=\"name\">item picture:</label>
                                          <button class=\"up\"< ><i class='bx bxs-cloud-upload bx-sm'></i></button>
                                          <input  type=\"file\">
                                   
                                         
                                        {{ form_widget(form) }}
                                        
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"submit\" class=\"close_button1\">Add item</button>
                                    </div>
                                    {{ form_end(form) }}
                         </div>
                  </div>
                  
      </div>
             {% for flash_message in app.session.flashbag.get('delete') %}
                   <div class=\"alert  alert-danger fade show\" role=\"alert\">
                               {{flash_message}}
                              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                              <span aria-hidden=\"true\">&times;</span>
                              </button>
                  </div>
             {% endfor %}
            <div class=\"text\">Stock</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addStock\">Add to stock</button>
            <div class=\"main_content\">
                 <div class=\"sort1\">
                    <input type=\"text\" placeholder=\"Search\" >
                     <select name=\"role\">
                            <option selected disabled>Type</option>
                            <option value=\"manager\">manager</option>
                            <option value=\"admin\">admin</option>
                    </select>
                    <select name=\"availability\">
                            <option selected disabled>Availability</option>
                    </select>
                     <select name=\"state\">
                            <option selected disabled>State</option>
                    </select>
                    <button>   Search  </button>
                </div>
<div class=\"mainC\">
<table class=\"table align-middle mb-0 bg-white\">
  <thead class=\"bg-light\"  >
    <tr>
      <th>name</th>
      <th>type</th>
       <th>serial number</th>
       <th>availability</th>
       <th>state</th>
       <th  style=\"text-align:center;\" >action</th>
    </tr>
  </thead>
  <tbody>
     {% for machine in Allmachines %}
    <tr>
      <td>
        <div class=\"d-flex align-items-center\">
          <div class=\"ms-3\">
            <p class=\"fw-bold mb-1\">{{machine.model.marque.getMarqueName()}}</p>
            <p class=\"text-muted mb-0\">{{machine.model.getModelName()}}</p>
          </div>
        </div>
      </td>
      <td>
        <p class=\"text-muted mb-0 mt-2 \">{{machine.type}}</p>
      </td>
      <td>
        <label class=\"mt-2\">
                {{machine.getSerialNum()}}
        </label>
        
      </td>
      <td  ><label  class=\"mt-2 ml-2\">
             {% if machine.available == 1 %} <span class=\"badge badge-success rounded-pill d-inline pl-3 pr-3\">Yes</span>
            {% else %}  <span class=\"badge badge-warning rounded-pill d-inline pl-3 pr-3\">No</span>
            {% endif %}
      </label></td>
      <td >
        <label class=\"mt-2\">
                {{machine.state()}}
        </label>
        
      </td>
      <td  class=\"actions\" >
       <a href=\"stockView/{{machine.id}}\"> 
            <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \">
            <i class='bx bx-show-alt bx-xs'></i> view
            </button>
        </a>
        <a href=\"#\"> 
            <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 mr-1 \" style=\" border: #007bff solid 1px; \">
            <i class='bx bx-edit bx-xs'></i>
            Edit
            </button>
        </a>
        <a href=\"/Stock/Remove/{{machine.id}}\"> 
            <button type=\"button\" class=\"bn3 btn  btn-sm btn-rounded mt-1 \"style=\" border: #dc3545 solid 1px;\" >
            <i class='bx bx-trash bx-xs'></i>
            Delete
            </button>
        </a>
      </td>
    </tr>
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
   {% endblock %}", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\Stock.html.twig");
    }
}
