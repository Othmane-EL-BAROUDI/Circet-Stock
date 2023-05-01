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

/* Pages/Dashboard.html.twig */
class __TwigTemplate_6b303279fdb17559f41557c6aee56d1f6d0b3fd527225bdadbfbf415b5ca0725 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Dashboard.html.twig"));

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
        // line 165
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

        echo "Circet-Dashboard";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Dashboard.css"), "html", null, true);
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
            <div class=\"text\">Dashboard</div>
            <div class=\"body_header\">
                  <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-user bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">USER</label>
                              <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usersnbr"]) || array_key_exists("usersnbr", $context) ? $context["usersnbr"] : (function () { throw new RuntimeError('Variable "usersnbr" does not exist.', 17, $this->source); })()), 1, [], "array", false, false, false, 17), "html", null, true);
        echo "</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-user-voice bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">ADMIN</label>
                              <p>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["adminsnbr"]) || array_key_exists("adminsnbr", $context) ? $context["adminsnbr"] : (function () { throw new RuntimeError('Variable "adminsnbr" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bx-package bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">STOCK ITEMS</label>
                              <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["machinesnbr"]) || array_key_exists("machinesnbr", $context) ? $context["machinesnbr"] : (function () { throw new RuntimeError('Variable "machinesnbr" does not exist.', 35, $this->source); })()), 1, [], "array", false, false, false, 35), "html", null, true);
        echo "</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-analyse bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">AFFECTATION</label>
                              <p>0</p>
                        </div>
                  </div>
            </div>
            <div class=\"body_body\" >
                 <div class=\"left\" >
                 <div class=\"text2\">Demandes de changement de mot de passe</div>
                  <table class=\"table align-middle mb-0 bg-white\">
                  <thead class=\"bg-light\">
                  <tr>
                        <th>users</th>
                        <th>matricule</th>
                        <th  style=\"text-align:center;\" >Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Ayman</p>
                              <p class=\"text-muted mb-0\">Aymangassi972003@gmail.com</p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">BOWBOW</p>
                        </td>
                       
                        <td  class=\"actions\" >
                        <a href=\"#\"> 
                              <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \" >
                              <i class='bx bx-check bx-xs' ></i>
                              Accept
                              </button>
                        </a>
                         <a href=\"#\"> 
                              <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 \" style=\" border: #dc3545 solid 1px;\" >
                              <i class='bx bx-x bx-xs' ></i>
                              Decline
                              </button>
                        </a>
                        </td>
                  </tr>
                   <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Othman</p>
                              <p class=\"text-muted mb-0\">Othman@gmail.com</p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">BAWBAW</p>
                        </td>
                       
                        <td  class=\"actions\" >
                        <a href=\"#\"> 
                              <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \" >
                              <i class='bx bx-check bx-xs' ></i>
                              Accept
                              </button>
                        </a>
                         <a href=\"#\"> 
                              <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 \" style=\" border: #dc3545 solid 1px;\" >
                              <i class='bx bx-x bx-xs' ></i>
                              Decline
                              </button>
                        </a>
                        </td>
                  </tr>
                  </tbody>
                  </table>
                 </div>

                   <div class=\"right\" >
                 <div class=\"text2\">Affectation of today</div>
                  <table class=\"table align-middle mb-0 bg-white\">
                  <thead class=\"bg-light\">
                  <tr>
                        <th>affectation</th>
                        <th>Time</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Ayman - Web developer</p>
                              <p class=\"text-muted mb-0\">took  <label>DELL G5500</label> </p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">08:30</p>
                        </td>
                  </tr>
                   </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Othman - Manager</p>
                              <p class=\"text-muted mb-0\">took  <label>scanner</label> </p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">16:30</p>
                        </td>
                  </tr>
                  </tbody>
                  </table>
                 </div>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 165
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 166,  276 => 165,  139 => 35,  127 => 26,  115 => 17,  104 => 8,  97 => 7,  86 => 3,  79 => 2,  66 => 1,  58 => 165,  56 => 7,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Dashboard{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Dashboard.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
  {{ include('Pages/sidebar.html.twig') }}
{% block body %}
     <div class=\"home_content\">
            <div class=\"text\">Dashboard</div>
            <div class=\"body_header\">
                  <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-user bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">USER</label>
                              <p>{{usersnbr[1]}}</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-user-voice bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">ADMIN</label>
                              <p>{{adminsnbr}}</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bx-package bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">STOCK ITEMS</label>
                              <p>{{machinesnbr[1]}}</p>
                        </div>
                  </div>
                   <div>
                        <div class=\"pic_container\">
                              <i class='bx bxs-analyse bx-lg'></i>
                        </div>
                        <div class=\"info_container\">
                              <label for=\"name\">AFFECTATION</label>
                              <p>0</p>
                        </div>
                  </div>
            </div>
            <div class=\"body_body\" >
                 <div class=\"left\" >
                 <div class=\"text2\">Demandes de changement de mot de passe</div>
                  <table class=\"table align-middle mb-0 bg-white\">
                  <thead class=\"bg-light\">
                  <tr>
                        <th>users</th>
                        <th>matricule</th>
                        <th  style=\"text-align:center;\" >Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Ayman</p>
                              <p class=\"text-muted mb-0\">Aymangassi972003@gmail.com</p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">BOWBOW</p>
                        </td>
                       
                        <td  class=\"actions\" >
                        <a href=\"#\"> 
                              <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \" >
                              <i class='bx bx-check bx-xs' ></i>
                              Accept
                              </button>
                        </a>
                         <a href=\"#\"> 
                              <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 \" style=\" border: #dc3545 solid 1px;\" >
                              <i class='bx bx-x bx-xs' ></i>
                              Decline
                              </button>
                        </a>
                        </td>
                  </tr>
                   <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Othman</p>
                              <p class=\"text-muted mb-0\">Othman@gmail.com</p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">BAWBAW</p>
                        </td>
                       
                        <td  class=\"actions\" >
                        <a href=\"#\"> 
                              <button type=\"button\" class=\"bn1 btn  btn-sm btn-rounded mt-1 mr-1\"  style=\" border: #28a745 solid 1px; \" >
                              <i class='bx bx-check bx-xs' ></i>
                              Accept
                              </button>
                        </a>
                         <a href=\"#\"> 
                              <button type=\"button\" class=\"bn2 btn  btn-sm btn-rounded mt-1 \" style=\" border: #dc3545 solid 1px;\" >
                              <i class='bx bx-x bx-xs' ></i>
                              Decline
                              </button>
                        </a>
                        </td>
                  </tr>
                  </tbody>
                  </table>
                 </div>

                   <div class=\"right\" >
                 <div class=\"text2\">Affectation of today</div>
                  <table class=\"table align-middle mb-0 bg-white\">
                  <thead class=\"bg-light\">
                  <tr>
                        <th>affectation</th>
                        <th>Time</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Ayman - Web developer</p>
                              <p class=\"text-muted mb-0\">took  <label>DELL G5500</label> </p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">08:30</p>
                        </td>
                  </tr>
                   </tr>
                  </thead>
                  <tbody>
                  <tr>
                        <td>
                        <div class=\"d-flex align-items-center\">
                        <div class=\"ms-3\">
                              <p class=\"fw-bold mb-1\">Othman - Manager</p>
                              <p class=\"text-muted mb-0\">took  <label>scanner</label> </p>
                        </div>
                        </div>
                        </td>
                        <td>
                        <p class=\"text-muted mb-0 mt-2 \">16:30</p>
                        </td>
                  </tr>
                  </tbody>
                  </table>
                 </div>
            </div>
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/Dashboard.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\Dashboard.html.twig");
    }
}
