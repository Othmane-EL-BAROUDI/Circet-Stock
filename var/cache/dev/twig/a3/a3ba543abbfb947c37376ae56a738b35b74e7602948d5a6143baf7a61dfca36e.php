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
        // line 155
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
                                          <label for=\"name\">item picture:</label>
                                          <button><i class='bx bxs-cloud-upload bx-sm'></i></button>
                                          <input  type=\"file\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">item model :</label>
                                          <input  placeholder=\"@model\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">item marque :</label>
                                          <input  placeholder=\"@marque\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">serial number :</label>
                                          <input  placeholder=\"@serial_number\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                         <fieldset>
                                            <label>State:</label>

                                            <div>
                                            <label for=\"name\">Good</label>
                                            <input type=\"radio\" name=\"drone\" value=\"good\"  checked >
                                            
                                            </div>

                                            <div>
                                            <label for=\"name\">Bad</label>
                                            <input type=\"radio\"  name=\"drone\" value=\"bad\">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class=\"modal-body\">
                                         <fieldset>
                                            <label>Available:</label>

                                            <div>
                                            <label for=\"name\">Yes</label>
                                            <input type=\"radio\" name=\"drone\" value=\"Yes\"  checked >
                                            
                                            </div>

                                            <div>
                                            <label for=\"name\">No</label>
                                            <input type=\"radio\"  name=\"drone\" value=\"No\">
                                            </div>
                                        </fieldset>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">mac ethernet :</label>
                                           <input  placeholder=\"@mac_ethernet\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">mac wifi :</label>
                                           <input  placeholder=\"@mac_wifi\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">description:</label>
                                           <textarea name=\"\" id=\"\" cols=\"55\" placeholder=\"@configuration\" rows=\"10\"></textarea>
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"close_button1\">Add item</button>
                                    
                               </div>
                         </div>
                  </div>
                  
      </div>
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
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>type</th>
                            <th>serial number</th>
                            <th>availability</th>
                            <th>state</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Allmachines"]) || array_key_exists("Allmachines", $context) ? $context["Allmachines"] : (function () { throw new RuntimeError('Variable "Allmachines" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["machine"]) {
            // line 118
            echo "
                            <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 123), "marque", [], "any", false, false, false, 123), "getMarqueName", [], "method", false, false, false, 123), "html", null, true);
            echo "</label>
                                        <p>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["machine"], "model", [], "any", false, false, false, 124), "getModelName", [], "method", false, false, false, 124), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                ";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "type", [], "any", false, false, false, 129), "html", null, true);
            echo "
                            </td>
                             <td>
                                 ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "getSerialNum", [], "method", false, false, false, 132), "html", null, true);
            echo "
                            </td>
                             <td class=\"info\" >
                                 ";
            // line 135
            if ((twig_get_attribute($this->env, $this->source, $context["machine"], "available", [], "any", false, false, false, 135) == 1)) {
                // line 136
                echo "                                          Yes
                                    ";
            } else {
                // line 137
                echo "  No
                                ";
            }
            // line 139
            echo "                            </td>
                             <td class=\"info\" >
                               ";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["machine"], "state", [], "any", false, false, false, 141), "html", null, true);
            echo "
                            </td>
                             <td>
                               <button ><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['machine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                       
                    </tbody>
                </table>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 156
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
        return array (  298 => 156,  291 => 155,  279 => 149,  264 => 141,  260 => 139,  256 => 137,  252 => 136,  250 => 135,  244 => 132,  238 => 129,  230 => 124,  226 => 123,  219 => 118,  215 => 117,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 155,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
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
                                          <label for=\"name\">item picture:</label>
                                          <button><i class='bx bxs-cloud-upload bx-sm'></i></button>
                                          <input  type=\"file\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">item model :</label>
                                          <input  placeholder=\"@model\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">item marque :</label>
                                          <input  placeholder=\"@marque\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">serial number :</label>
                                          <input  placeholder=\"@serial_number\" type=\"text\">
                                    </div>
                                     <div class=\"modal-body\">
                                         <fieldset>
                                            <label>State:</label>

                                            <div>
                                            <label for=\"name\">Good</label>
                                            <input type=\"radio\" name=\"drone\" value=\"good\"  checked >
                                            
                                            </div>

                                            <div>
                                            <label for=\"name\">Bad</label>
                                            <input type=\"radio\"  name=\"drone\" value=\"bad\">
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class=\"modal-body\">
                                         <fieldset>
                                            <label>Available:</label>

                                            <div>
                                            <label for=\"name\">Yes</label>
                                            <input type=\"radio\" name=\"drone\" value=\"Yes\"  checked >
                                            
                                            </div>

                                            <div>
                                            <label for=\"name\">No</label>
                                            <input type=\"radio\"  name=\"drone\" value=\"No\">
                                            </div>
                                        </fieldset>
                                    </div>
                                     <div class=\"modal-body\">
                                          <label for=\"name\">mac ethernet :</label>
                                           <input  placeholder=\"@mac_ethernet\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">mac wifi :</label>
                                           <input  placeholder=\"@mac_wifi\" type=\"text\">
                                    </div>
                                    <div class=\"modal-body\">
                                          <label for=\"name\">description:</label>
                                           <textarea name=\"\" id=\"\" cols=\"55\" placeholder=\"@configuration\" rows=\"10\"></textarea>
                                    </div>
                                    <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"close_button1\">Add item</button>
                                    
                               </div>
                         </div>
                  </div>
                  
      </div>
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
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>name</th>
                            <th>type</th>
                            <th>serial number</th>
                            <th>availability</th>
                            <th>state</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for machine in Allmachines %}

                            <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">{{machine.model.marque.getMarqueName()}}</label>
                                        <p>{{machine.model.getModelName()}}</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                {{machine.type}}
                            </td>
                             <td>
                                 {{machine.getSerialNum()}}
                            </td>
                             <td class=\"info\" >
                                 {% if machine.available == 1 %}
                                          Yes
                                    {% else %}  No
                                {% endif %}
                            </td>
                             <td class=\"info\" >
                               {{machine.state}}
                            </td>
                             <td>
                               <button ><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
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
   {% endblock %}", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Stock.html.twig");
    }
}
