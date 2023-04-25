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

/* Pages/Historique.html.twig */
class __TwigTemplate_65c3c2325f2c01e8df1fa8f8e302c2f747247c39328747404600f86e3ab51c24 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Historique.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 47
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

        echo "Circet-Historique";
        
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/Historique.css"), "html", null, true);
        echo "\">
       <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
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
            <div class=\"text\">Historique</div>
            <div class=\"mainPart\">
                <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <select name=\"machine\">
                            <option selected disabled>machine</option>
                            <option value=\"computer\">Computer</option>
                            <option value=\"cable\">Cable</option>
                            <option value=\"scanner\">scanner</option>
                    </select>
                    <select name=\"role\">
                            <option selected disabled>role</option>
                            <option value=\"admin\">Admin</option>
                            <option value=\"super-admin\">Super-Admin</option>
                            <option value=\"It_service\">IT-service</option>
                    </select>
                     <select name=\"autocad\">
                            <option selected disabled>autocad</option>
                            <option value=\"yes\">yes</option>
                            <option value=\"no\">no</option>
                    </select>
                    <button>   Sort  </button>
                </div>
                <div class=\"log\">
                       <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\"> <label for=\"name\" class=\"name\">XjonSnow </label> has taken<label for=\"name\" class=\"name\">Dell G5 5500</label> with a <label for=\"state\">good state</label>
                        <div class=\"time\"> 20/04/2023    16:15 </div>
                </div>
                 <div class=\"log\">
                       <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\"> <label for=\"name\" class=\"name\">Ayman</label> has taken <label for=\"name\" class=\"name\">scanner</label> with a <label for=\"state\">bad state</label>
                         <div class=\"time\"> 20/04/2023    16:15 </div>
                    </div>
                 <div class=\"log\">
                       <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\"> <label for=\"name\" class=\"name\">othmane </label> has taken <label for=\"name\" class=\"name\">hp pavillion</label>with a <label for=\"state\">bad state</label>
                         <div class=\"time\"> 20/04/2023    16:15 </div>
                </div>
            </div>
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Historique.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  163 => 48,  156 => 47,  143 => 41,  136 => 37,  129 => 33,  99 => 7,  92 => 6,  81 => 3,  74 => 2,  61 => 1,  53 => 47,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Historique{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Historique.css')}}\">
       <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0\" />
  {% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Historique</div>
            <div class=\"mainPart\">
                <div class=\"sort\">
                    <input type=\"text\" placeholder=\"Search\" >
                    <select name=\"machine\">
                            <option selected disabled>machine</option>
                            <option value=\"computer\">Computer</option>
                            <option value=\"cable\">Cable</option>
                            <option value=\"scanner\">scanner</option>
                    </select>
                    <select name=\"role\">
                            <option selected disabled>role</option>
                            <option value=\"admin\">Admin</option>
                            <option value=\"super-admin\">Super-Admin</option>
                            <option value=\"It_service\">IT-service</option>
                    </select>
                     <select name=\"autocad\">
                            <option selected disabled>autocad</option>
                            <option value=\"yes\">yes</option>
                            <option value=\"no\">no</option>
                    </select>
                    <button>   Sort  </button>
                </div>
                <div class=\"log\">
                       <img src=\"{{asset('images/user.png')}}\" alt=\"\"> <label for=\"name\" class=\"name\">XjonSnow </label> has taken<label for=\"name\" class=\"name\">Dell G5 5500</label> with a <label for=\"state\">good state</label>
                        <div class=\"time\"> 20/04/2023    16:15 </div>
                </div>
                 <div class=\"log\">
                       <img src=\"{{asset('images/user.png')}}\" alt=\"\"> <label for=\"name\" class=\"name\">Ayman</label> has taken <label for=\"name\" class=\"name\">scanner</label> with a <label for=\"state\">bad state</label>
                         <div class=\"time\"> 20/04/2023    16:15 </div>
                    </div>
                 <div class=\"log\">
                       <img src=\"{{asset('images/user.png')}}\" alt=\"\"> <label for=\"name\" class=\"name\">othmane </label> has taken <label for=\"name\" class=\"name\">hp pavillion</label>with a <label for=\"state\">bad state</label>
                         <div class=\"time\"> 20/04/2023    16:15 </div>
                </div>
            </div>
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/Historique.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Historique.html.twig");
    }
}
