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

/* Pages/HomePage.html.twig */
class __TwigTemplate_df7d82f48100db7b2d13b0d1122cd2e07c3bc370670f052749f7da1712a9d537 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/HomePage.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 181
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

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "     ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
     <div class=\"home_content\">
            <div class=\"text\">Stock Materiel</div>
           <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hp pavillion</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                                <div class=\"pop_picture\">
                                                      <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" alt=\"\">
                                                </div>
                                                <div class=\"pop_desc\">
                                                      Model : <label for=\"name\">chi model</label> <br>
                                                      Type : <label for=\"name\">laptop</label><br>
                                                      Serial number : <label for=\"name\">chi serial number</label><br>
                                                      State : <label for=\"name\">good</label><br>
                                                      Available : <label for=\"name\">Head_phones</label><br>
                                                      mac_ethernet : <label for=\"name\">00:25:96:FF:FE:12:34:56</label><br>
                                                      mac_wifi : <label for=\"name\">MMM.MMM.SSS.SSS</label><br>
                                                      description : <label for=\"name\">i7 10gen - RTX2070 - 144hz</label><br>
                                                      
                                                </div>
                                    </div>
                                    <div class=\"modal-footer close_button\">
                                          <button type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
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

                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pc.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Dell G5 5500</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                             <button type=\"button\"  data-toggle=\"modal\" data-target=\"#exampleModal\">details</button>

                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Hp pavillion</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                             <button type=\"button\"  data-toggle=\"modal\" data-target=\"#exampleModal\">details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mobile-phone.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">iphone Xr</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/printer.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">hp printer</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scanner.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">hp scanner</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/computer-mouse.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Mouse</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/headphones.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">head phones</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/keyboard.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">keyboard</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/monitor.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">msi monitor</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cable.png"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Cable</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                 
                   
                  
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 182
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
        return "Pages/HomePage.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  321 => 182,  314 => 181,  291 => 165,  276 => 153,  261 => 141,  246 => 129,  231 => 117,  216 => 105,  201 => 93,  186 => 81,  171 => 69,  155 => 56,  117 => 21,  99 => 7,  92 => 6,  81 => 3,  74 => 2,  61 => 1,  53 => 181,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-HomePage{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Homepage.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Stock Materiel</div>
           <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
                  <div class=\"modal-dialog\" role=\"document\">
                        <div class=\"modal-content\">
                              <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Hp pavillion</h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                    </div>
                                    <div class=\"modal-body\">
                                                <div class=\"pop_picture\">
                                                      <img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
                                                </div>
                                                <div class=\"pop_desc\">
                                                      Model : <label for=\"name\">chi model</label> <br>
                                                      Type : <label for=\"name\">laptop</label><br>
                                                      Serial number : <label for=\"name\">chi serial number</label><br>
                                                      State : <label for=\"name\">good</label><br>
                                                      Available : <label for=\"name\">Head_phones</label><br>
                                                      mac_ethernet : <label for=\"name\">00:25:96:FF:FE:12:34:56</label><br>
                                                      mac_wifi : <label for=\"name\">MMM.MMM.SSS.SSS</label><br>
                                                      description : <label for=\"name\">i7 10gen - RTX2070 - 144hz</label><br>
                                                      
                                                </div>
                                    </div>
                                    <div class=\"modal-footer close_button\">
                                          <button type=\"button\"  data-dismiss=\"modal\">Close</button>
                                    </div>
                              </div>
                        </div>
                  </div>
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

                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/pc.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Dell G5 5500</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                             <button type=\"button\"  data-toggle=\"modal\" data-target=\"#exampleModal\">details</button>

                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Hp pavillion</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                             <button type=\"button\"  data-toggle=\"modal\" data-target=\"#exampleModal\">details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/mobile-phone.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">iphone Xr</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/printer.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">hp printer</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/scanner.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">hp scanner</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/computer-mouse.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Mouse</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                   <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/headphones.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">head phones</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/keyboard.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">keyboard</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/monitor.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">msi monitor</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
                        </div>
                  </div>
                  <div class=\"materiel\">
                        <div class=\"pic\">
                              <img src=\"{{asset('images/cable.png')}}\" alt=\"\">
                        </div>
                        <div class=\"details\">
                              <label for=\"name\">Cable</label>
                        </div>
                        <div class=\"action\">
                              <button>Demande</button>
                              <button type=\"submit\"> details</button>
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
   {% endblock %}", "Pages/HomePage.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\HomePage.html.twig");
    }
}
