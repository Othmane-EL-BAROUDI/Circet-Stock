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
        // line 176
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
                        <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hp</label>
                                        <p>pavillion</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                laptop
                            </td>
                             <td>
                                BW338332
                            </td>
                             <td class=\"info\" >
                                Yes
                            </td>
                             <td class=\"info\" >
                                Good
                            </td>
                             <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">Dell</label>
                                        <p>G5 5500</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                computer 
                            </td>
                             <td>
                                BW338332
                            </td>
                             <td class=\"info\">
                                No
                            </td>
                             <td  class=\"info\">
                                Bad
                            </td>
                             <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </td>
                        </tr>
                                                
                    </tbody>
                </table>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 176
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 177
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
        return array (  285 => 177,  278 => 176,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 176,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
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
                        <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hp</label>
                                        <p>pavillion</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                laptop
                            </td>
                             <td>
                                BW338332
                            </td>
                             <td class=\"info\" >
                                Yes
                            </td>
                             <td class=\"info\" >
                                Good
                            </td>
                             <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_details\">
                                        <label for=\"name\">Dell</label>
                                        <p>G5 5500</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                computer 
                            </td>
                             <td>
                                BW338332
                            </td>
                             <td class=\"info\">
                                No
                            </td>
                             <td  class=\"info\">
                                Bad
                            </td>
                             <td>
                                <button><i class='bx bx-show bx-sm'></i></button>
                                <button><i class='bx bx-edit bx-sm'></i></button>
                                <button><i class='bx bx-trash bx-sm'></i></button>
                            </td>
                        </tr>
                                                
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
   {% endblock %}", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Stock.html.twig");
    }
}
