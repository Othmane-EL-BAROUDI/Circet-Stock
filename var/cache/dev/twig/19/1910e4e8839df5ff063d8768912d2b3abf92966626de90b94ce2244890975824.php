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
class __TwigTemplate_d86ce06bb4778847f4b82e59caec70f96a57533a7b5ae1c9d787fe201896f81c extends \Twig\Template
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

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-TY6ar5i3FCijZzFv+iGibWd6NUmnca6H5y5r5Q6lYU+jms0IQxh26RpX9Mv0zWNN0lb7lnpPxyVTdIvAVe8wDg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\" />

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "      <div class=\"sidebar\">
        <div class=\"logo_content\">
          <div class=\"logo\">
              <i class='bx bxs-package'></i>
              <div class=\"logo_name\">CircetStock </div> 
          </div>
          <i class='bx bx-menu'  id=\"btn\" ></i>
        </div>
        <ul class=\"nav_link\">
        ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 19, $this->source); })()), "Connected", [], "any", false, false, false, 19)) {
            // line 20
            echo "        
          <li> 
              <a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
            echo "\">
                    <i class='bx bx-home'></i>
                    <span class=\"links_name\">Accueil</span>
              </a>
              <span class=\"tooltip\">Accueil</span>
          </li>
           ";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 28, $this->source); })()), "roles", [], "any", false, false, false, 28), 0, [], "array", false, false, false, 28) == "ROLE_ADMIN")) {
                echo " 
          
           <li> 
              <a href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
                echo "\">
                    <i class='bx bxs-dashboard' ></i>
                    <span class=\"links_name\">Tableau de bord</span>
              </a>
               <span class=\"tooltip\">Tableau de bord</span>
          </li>

            <li> 
              <a href=\"";
                // line 39
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
                echo "\">
                    <i class='bx bxs-user-plus'></i>
                    <span class=\"links_name\">Utilisateurs</span>
              </a>
               <span class=\"tooltip\">Utilisateurs</span>
          </li>
           <li> 
              <a href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
                echo "\">
                   <i class='bx bx-briefcase-alt-2'></i>
                    <span class=\"links_name\"> Rôle</span>
              </a>
               <span class=\"tooltip\">Rôle</span>
          </li>
          <li> 
              <a href=\"";
                // line 53
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
                echo "\">
                    <i class='bx bx-spreadsheet'></i>
                    <span class=\"links_name\">Permission</span>
              </a>
               <span class=\"tooltip\">Permission</span>
          </li>
           <li> 
              <a href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
                echo "\">
                    <i class='bx bx-package'></i>
                    <span class=\"links_name\">Stock</span>
              </a>
               <span class=\"tooltip\">Stock</span>
          </li>
           <li> 
              <a href=\"";
                // line 67
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Model");
                echo "\">
                   <i class='bx bx-purchase-tag'></i>
                    <span class=\"links_name\">Modèle</span>
              </a>
               <span class=\"tooltip\">Modèle</span>
          </li>
           <li> 
              <a href=\"";
                // line 74
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marque");
                echo "\">
                   <i class='bx bx-bookmark-plus'></i>
                    <span class=\"links_name\">Marque</span>
              </a>
               <span class=\"tooltip\">Marque</span>
          </li>
          
       ";
            }
            // line 82
            echo "       ";
        }
        // line 83
        echo "            <li> 
              <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
        echo "\">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class=\"links_name\">Profil</span>
              </a>
               <span class=\"tooltip\">Profil</span>
          </li>
        </ul>
        <div class=\"profile_content\">
            <div class=\"profile\">
                <div class=\"profile_details\">
                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"name_role\">
                        <div class=\"name\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 96, $this->source); })()), "username", [], "any", false, false, false, 96), "html", null, true);
        echo "</div>
                        <div class=\"role\">";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 97, $this->source); })()), "job", [], "any", false, false, false, 97), "html", null, true);
        echo "</div>
                    </div>
                </div>
               <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\"> <i class='bx bx-log-out'  id=\"log_out\" ></i></a>
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
        return array (  219 => 100,  213 => 97,  209 => 96,  204 => 94,  191 => 84,  188 => 83,  185 => 82,  174 => 74,  164 => 67,  154 => 60,  144 => 53,  134 => 46,  124 => 39,  113 => 31,  107 => 28,  98 => 22,  94 => 20,  92 => 19,  81 => 10,  74 => 9,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
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
        {% if userInfo.Connected %}
        
          <li> 
              <a href=\"{{path('HomePage')}}\">
                    <i class='bx bx-home'></i>
                    <span class=\"links_name\">Accueil</span>
              </a>
              <span class=\"tooltip\">Accueil</span>
          </li>
           {% if userInfo.roles[0] == \"ROLE_ADMIN\" %} 
          
           <li> 
              <a href=\"{{path('Dashboard')}}\">
                    <i class='bx bxs-dashboard' ></i>
                    <span class=\"links_name\">Tableau de bord</span>
              </a>
               <span class=\"tooltip\">Tableau de bord</span>
          </li>

            <li> 
              <a href=\"{{path('Users')}}\">
                    <i class='bx bxs-user-plus'></i>
                    <span class=\"links_name\">Utilisateurs</span>
              </a>
               <span class=\"tooltip\">Utilisateurs</span>
          </li>
           <li> 
              <a href=\"{{path('Role')}}\">
                   <i class='bx bx-briefcase-alt-2'></i>
                    <span class=\"links_name\"> Rôle</span>
              </a>
               <span class=\"tooltip\">Rôle</span>
          </li>
          <li> 
              <a href=\"{{path('Permission')}}\">
                    <i class='bx bx-spreadsheet'></i>
                    <span class=\"links_name\">Permission</span>
              </a>
               <span class=\"tooltip\">Permission</span>
          </li>
           <li> 
              <a href=\"{{path('Stock')}}\">
                    <i class='bx bx-package'></i>
                    <span class=\"links_name\">Stock</span>
              </a>
               <span class=\"tooltip\">Stock</span>
          </li>
           <li> 
              <a href=\"{{path('Model')}}\">
                   <i class='bx bx-purchase-tag'></i>
                    <span class=\"links_name\">Modèle</span>
              </a>
               <span class=\"tooltip\">Modèle</span>
          </li>
           <li> 
              <a href=\"{{path('Marque')}}\">
                   <i class='bx bx-bookmark-plus'></i>
                    <span class=\"links_name\">Marque</span>
              </a>
               <span class=\"tooltip\">Marque</span>
          </li>
          
       {% endif %}
       {% endif %}
            <li> 
              <a href=\"{{path('Profile')}}\">
                    <i class='bx bxs-user-rectangle'></i>
                    <span class=\"links_name\">Profil</span>
              </a>
               <span class=\"tooltip\">Profil</span>
          </li>
        </ul>
        <div class=\"profile_content\">
            <div class=\"profile\">
                <div class=\"profile_details\">
                    <img src=\"{{asset('images/user.png')}}\" alt=\"\">
                    <div class=\"name_role\">
                        <div class=\"name\">{{userInfo.username}}</div>
                        <div class=\"role\">{{userInfo.job}}</div>
                    </div>
                </div>
               <a href=\"{{ path('fos_user_security_logout') }}\"> <i class='bx bx-log-out'  id=\"log_out\" ></i></a>
            </div>
        </div>
      </div>
     
{% endblock %}
", "Pages/sidebar.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\sidebar.html.twig");
    }
}
