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
class __TwigTemplate_b3ddc5d77cdd50b3487302acbde53047437accb3e4844af19cbe2993b20a50f0 extends \Twig\Template
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
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 156
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
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "     ";
        echo twig_include($this->env, $context, "Pages/sidebar.html.twig");
        echo "
     <div class=\"home_content\">
            <div class=\"text\">Users</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add new user</button>
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
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>users</th>
                            <th>role</th>
                            <th>matricule</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">XjonSnow</label>
                                        <p>aymanegassi972003@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Web developer 
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/manager.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">aymane</label>
                                        <p>aymane@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                manager
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/technician.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Driss</label>
                                        <p>Driss@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                technician
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admin.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hmida</label>
                                        <p>Hmida@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                admin
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/technician.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Huwa</label>
                                        <p>Huwa@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                technician
                            </td>
                             <td>
                                BW338332
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

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Users.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  278 => 157,  271 => 156,  238 => 130,  211 => 106,  184 => 82,  157 => 58,  130 => 34,  98 => 6,  91 => 5,  81 => 3,  74 => 2,  61 => 1,  53 => 156,  51 => 5,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Users{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Users.css')}}\">
  {% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Users</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add new user</button>
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
                <table class=\"content-table\">
                    <thead>
                        <tr>
                            <th>users</th>
                            <th>role</th>
                            <th>matricule</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class=\"user_info\">
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/user.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">XjonSnow</label>
                                        <p>aymanegassi972003@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                Web developer 
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/manager.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">aymane</label>
                                        <p>aymane@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td >
                                manager
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/technician.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Driss</label>
                                        <p>Driss@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                technician
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/admin.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hmida</label>
                                        <p>Hmida@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                admin
                            </td>
                             <td>
                                BW338332
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
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/technician.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Huwa</label>
                                        <p>Huwa@gmail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                technician
                            </td>
                             <td>
                                BW338332
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
   {% endblock %}", "Pages/Users.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Users.html.twig");
    }
}
