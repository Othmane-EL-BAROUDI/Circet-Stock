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

/* Pages/sidebar.html.twig */
class __TwigTemplate_9b78a005346975939bedebacaf879e7f562c5c36d5a156240aa115bbfd8b2c39 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/sidebar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Pages/sidebar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-TY6ar5i3FCijZzFv+iGibWd6NUmnca6H5y5r5Q6lYU+jms0IQxh26RpX9Mv0zWNN0lb7lnpPxyVTdIvAVe8wDg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "      <div class=\"sidebar\">
        <div class=\"logo_content\">
          <div class=\"logo\">
              <i class='bx bxs-package'></i>
              <div class=\"logo_name\">CircetStock </div> 
          </div>
          <i class='bx bx-menu'  id=\"btn\" ></i>
        </div>
        <ul class=\"nav_link\">
          <li> 
              <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
        echo "\">
                    <i class='bx bx-home'></i>
                    <span class=\"links_name\">Home</span>
              </a>
              <span class=\"tooltip\">Home</span>
          </li>

           <li> 
              <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
        echo "\">
                    <i class='bx bxs-dashboard' ></i>
                    <span class=\"links_name\">Dashboard</span>
              </a>
               <span class=\"tooltip\">Dashboard</span>
          </li>

            <li> 
              <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
        echo "\">
                    <i class='bx bxs-user-plus'></i>
                    <span class=\"links_name\">Users</span>
              </a>
               <span class=\"tooltip\">Users</span>
          </li>
           <li> 
              <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
        echo "\">
                    <i class='bx bx-package'></i>
                    <span class=\"links_name\">Stock</span>
              </a>
               <span class=\"tooltip\">Stock</span>
          </li>
           <li> 
              <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
        echo "\">
                   <i class='bx bx-briefcase-alt-2'></i>
                    <span class=\"links_name\"> Role</span>
              </a>
               <span class=\"tooltip\">Role</span>
          </li>
          <li> 
              <a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
        echo "\">
                    <i class='bx bx-spreadsheet'></i>
                    <span class=\"links_name\">Permission</span>
              </a>
               <span class=\"tooltip\">Permission</span>
          </li>

           <li> 
              <a href=\"Historique\">
                    <i class='bx bx-history'></i>
                    <span class=\"links_name\">Historique</span>
              </a>
               <span class=\"tooltip\">Historique</span>
          </li> 
            <li> 
              <a href=\"#\">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class=\"links_name\">Profile</span>
              </a>
               <span class=\"tooltip\">Profile</span>
          </li>
           <li> 
              <a href=\"#\">
                   <i class='bx bx-cog'></i>
                    <span class=\"links_name\">Settings</span>
              </a>
               <span class=\"tooltip\">Settings</span>
          </li>
        </ul>
        <div class=\"profile_content\">
            <div class=\"profile\">
                <div class=\"profile_details\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"name_role\">
                        <div class=\"name\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "username", [], "any", false, false, false, 90), "html", null, true);
        echo "</div>
                        <div class=\"role\">";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 91, $this->source); })()), "roles", [], "any", false, false, false, 91), 0, [], "array", false, false, false, 91), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <i class='bx bx-log-out'  id=\"log_out\" ></i>
            </div>
        </div>
      </div>
     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 91,  185 => 90,  180 => 88,  145 => 56,  135 => 49,  125 => 42,  115 => 35,  104 => 27,  93 => 19,  81 => 9,  74 => 8,  63 => 4,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel=\"stylesheet\" href=\"{{asset('css/sidebar.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-TY6ar5i3FCijZzFv+iGibWd6NUmnca6H5y5r5Q6lYU+jms0IQxh26RpX9Mv0zWNN0lb7lnpPxyVTdIvAVe8wDg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

  {% endblock %}
{% block body %}
      <div class=\"sidebar\">
        <div class=\"logo_content\">
          <div class=\"logo\">
              <i class='bx bxs-package'></i>
              <div class=\"logo_name\">CircetStock </div> 
          </div>
          <i class='bx bx-menu'  id=\"btn\" ></i>
        </div>
        <ul class=\"nav_link\">
          <li> 
              <a href=\"{{path('HomePage')}}\">
                    <i class='bx bx-home'></i>
                    <span class=\"links_name\">Home</span>
              </a>
              <span class=\"tooltip\">Home</span>
          </li>

           <li> 
              <a href=\"{{path('Dashboard')}}\">
                    <i class='bx bxs-dashboard' ></i>
                    <span class=\"links_name\">Dashboard</span>
              </a>
               <span class=\"tooltip\">Dashboard</span>
          </li>

            <li> 
              <a href=\"{{path('Users')}}\">
                    <i class='bx bxs-user-plus'></i>
                    <span class=\"links_name\">Users</span>
              </a>
               <span class=\"tooltip\">Users</span>
          </li>
           <li> 
              <a href=\"{{path('Stock')}}\">
                    <i class='bx bx-package'></i>
                    <span class=\"links_name\">Stock</span>
              </a>
               <span class=\"tooltip\">Stock</span>
          </li>
           <li> 
              <a href=\"{{path('Role')}}\">
                   <i class='bx bx-briefcase-alt-2'></i>
                    <span class=\"links_name\"> Role</span>
              </a>
               <span class=\"tooltip\">Role</span>
          </li>
          <li> 
              <a href=\"{{path('Permission')}}\">
                    <i class='bx bx-spreadsheet'></i>
                    <span class=\"links_name\">Permission</span>
              </a>
               <span class=\"tooltip\">Permission</span>
          </li>

           <li> 
              <a href=\"Historique\">
                    <i class='bx bx-history'></i>
                    <span class=\"links_name\">Historique</span>
              </a>
               <span class=\"tooltip\">Historique</span>
          </li> 
            <li> 
              <a href=\"#\">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class=\"links_name\">Profile</span>
              </a>
               <span class=\"tooltip\">Profile</span>
          </li>
           <li> 
              <a href=\"#\">
                   <i class='bx bx-cog'></i>
                    <span class=\"links_name\">Settings</span>
              </a>
               <span class=\"tooltip\">Settings</span>
          </li>
        </ul>
        <div class=\"profile_content\">
            <div class=\"profile\">
                <div class=\"profile_details\">
                    <img src=\"{{asset('images/user.png')}}\" alt=\"\">
                    <div class=\"name_role\">
                        <div class=\"name\">{{user.username}}</div>
                        <div class=\"role\">{{user.roles[0]}}</div>
                    </div>
                </div>
                <i class='bx bx-log-out'  id=\"log_out\" ></i>
            </div>
        </div>
      </div>
     
{% endblock %}
", "Pages/sidebar.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\sidebar.html.twig");
    }
}
