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
class __TwigTemplate_7418a27d5ef7d145589c7791999188cad19a1eeed00a62c1a7ee83760bd5eeab extends \Twig\Template
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
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 133
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
            <div class=\"text\">Stock</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add to stock</button>
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
                                    <div class=\"user_image\">
                                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laptop.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
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
                                <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/out-stock.png"), "html", null, true);
        echo "\" alt=\"\">
                            </td>
                             <td class=\"info\" >
                                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dislike.png"), "html", null, true);
        echo "\" alt=\"\">
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
                                    <div class=\"user_pic\">
                                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pc.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
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
                                <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/in-stock.png"), "html", null, true);
        echo "\" alt=\"\">
                            </td>
                             <td  class=\"info\">
                                <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/like.png"), "html", null, true);
        echo "\" alt=\"\">
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
                                    <div class=\"user_pic\">
                                        <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/scanner.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hp</label>
                                        <p>HG8070</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                scanner 
                            </td>
                             <td>
                                dsqsq8dsq8
                            </td>
                             <td class=\"info\">
                                <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/in-stock.png"), "html", null, true);
        echo "\" alt=\"\">
                            </td>
                             <td  class=\"info\">
                                <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/like.png"), "html", null, true);
        echo "\" alt=\"\">
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

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Stock.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  267 => 134,  260 => 133,  240 => 120,  234 => 117,  216 => 102,  201 => 90,  195 => 87,  177 => 72,  162 => 60,  156 => 57,  138 => 42,  98 => 6,  91 => 5,  81 => 3,  74 => 2,  61 => 1,  53 => 133,  51 => 5,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Stock{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Users.css')}}\">
  {% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Stock</div>
            <button type=\"button\" class=\"new\" data-toggle=\"modal\" data-target=\"#addRole\">Add to stock</button>
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
                                    <div class=\"user_image\">
                                        <img src=\"{{asset('images/laptop.png')}}\" alt=\"\">
                                    </div>
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
                                <img src=\"{{asset('images/out-stock.png')}}\" alt=\"\">
                            </td>
                             <td class=\"info\" >
                                <img src=\"{{asset('images/dislike.png')}}\" alt=\"\">
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
                                    <div class=\"user_pic\">
                                        <img src=\"{{asset('images/pc.png')}}\" alt=\"\">
                                    </div>
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
                                <img src=\"{{asset('images/in-stock.png')}}\" alt=\"\">
                            </td>
                             <td  class=\"info\">
                                <img src=\"{{asset('images/like.png')}}\" alt=\"\">
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
                                    <div class=\"user_pic\">
                                        <img src=\"{{asset('images/scanner.png')}}\" alt=\"\">
                                    </div>
                                    <div class=\"user_details\">
                                        <label for=\"name\">Hp</label>
                                        <p>HG8070</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                scanner 
                            </td>
                             <td>
                                dsqsq8dsq8
                            </td>
                             <td class=\"info\">
                                <img src=\"{{asset('images/in-stock.png')}}\" alt=\"\">
                            </td>
                             <td  class=\"info\">
                                <img src=\"{{asset('images/like.png')}}\" alt=\"\">
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
   {% endblock %}", "Pages/Stock.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Stock.html.twig");
    }
}
