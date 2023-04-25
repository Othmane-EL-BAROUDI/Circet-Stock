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

/* Pages/homePage.html.twig */
class __TwigTemplate_5db1b7507320884f77ba08c3b93f52d6dc540c8d13ea53724d17ca8235be7d2e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/homePage.html.twig"));

        // line 1
        echo " <title>";
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
        // line 76
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

        echo "Circet-HomePage";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Homepage.css"), "html", null, true);
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
        echo "    
     <div class=\"home_content\">
            <div class=\"text\">Stock Materiel</div>
        
             <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <select name=\"machine\">
                            <option selected disabled>Type</option>
                            <option value=\"computer\">Computer</option>
                            <option value=\"cable\">Cable</option>
                            <option value=\"scanner\">scanner</option>
                    </select>
                    
                    <button>   Sort  </button>
                </div>
            <div class=\"materiel_area\">
                  
                     <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel \">Hp pavillion</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                                <div class=\"pop_picture\">
                                                      <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"pop_desc\">
                                                
                                                      Model : <label for=\"name\" id=\"customerId\" ></label> <br>
                                                      Type : <label for=\"name\">laptop</label><br>
                                                      Serial number : <label for=\"name\">chi serial number</label><br>
                                                      State : <label for=\"name\">good</label><br>
                                                      Available : <label for=\"name\">Head_phones</label><br>
                                                      mac_ethernet : <label for=\"name\">00:25:96:FF:FE:12:34:56</label><br>
                                                      mac_wifi : <label for=\"name\">MMM.MMM.SSS.SSS</label><br>
                                                      description : <label for=\"name\">dsqdqsd</label><br>
                                                      
                                                </div>
                                    </div>
                                    <div class=\"modal-footer close_button\">
                                          <button type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 58
            echo "                        <div class=\"materiel\">
                              <div class=\"pic\">
                                    <img src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
            echo "\" alt=\"\">
                              </div>
                              <div class=\"details\">
                              
                                    <label for=\"name\">";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "model", [], "any", false, false, false, 64), "html", null, true);
            echo "</label>
                              </div>
                              <div class=\"action\">
                                    <button>Demande</button>
                              <button type=\"button\"  data-customer-id=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\" data-toggle=\"modal\"  id=\"start\" data-target=\"#exampleModal\">details</button>

                              </div>
                        </div>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo " 
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/homePage.js"), "html", null, true);
        echo "\"></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/homePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 78,  208 => 77,  201 => 76,  191 => 72,  180 => 68,  173 => 64,  166 => 60,  162 => 58,  158 => 57,  134 => 36,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 76,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-HomePage{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Homepage.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
   {{ include('Pages/sidebar.html.twig') }}
{% block body %}
    
     <div class=\"home_content\">
            <div class=\"text\">Stock Materiel</div>
        
             <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <select name=\"machine\">
                            <option selected disabled>Type</option>
                            <option value=\"computer\">Computer</option>
                            <option value=\"cable\">Cable</option>
                            <option value=\"scanner\">scanner</option>
                    </select>
                    
                    <button>   Sort  </button>
                </div>
            <div class=\"materiel_area\">
                  
                     <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel \">Hp pavillion</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                                <div class=\"pop_picture\">
                                                      <img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
                                                </div>
                                                <div class=\"pop_desc\">
                                                
                                                      Model : <label for=\"name\" id=\"customerId\" ></label> <br>
                                                      Type : <label for=\"name\">laptop</label><br>
                                                      Serial number : <label for=\"name\">chi serial number</label><br>
                                                      State : <label for=\"name\">good</label><br>
                                                      Available : <label for=\"name\">Head_phones</label><br>
                                                      mac_ethernet : <label for=\"name\">00:25:96:FF:FE:12:34:56</label><br>
                                                      mac_wifi : <label for=\"name\">MMM.MMM.SSS.SSS</label><br>
                                                      description : <label for=\"name\">dsqdqsd</label><br>
                                                      
                                                </div>
                                    </div>
                                    <div class=\"modal-footer close_button\">
                                          <button type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
                  {% for key , item in data %}
                        <div class=\"materiel\">
                              <div class=\"pic\">
                                    <img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
                              </div>
                              <div class=\"details\">
                              
                                    <label for=\"name\">{{ item.model }}</label>
                              </div>
                              <div class=\"action\">
                                    <button>Demande</button>
                              <button type=\"button\"  data-customer-id=\"{{ item.id }}\" data-toggle=\"modal\"  id=\"start\" data-target=\"#exampleModal\">details</button>

                              </div>
                        </div>
                  {% endfor %} 
            </div>
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
            <script src=\"{{asset('JS/homePage.js')}}\"></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
   {% endblock %}", "Pages/homePage.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\HomePage.html.twig");
    }
}
