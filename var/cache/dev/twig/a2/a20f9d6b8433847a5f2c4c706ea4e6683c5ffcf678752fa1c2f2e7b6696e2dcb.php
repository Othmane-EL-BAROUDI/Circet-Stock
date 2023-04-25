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
        $this->displayBlock('body', $context, $blocks);
        // line 50
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["adminsnbr"]) || array_key_exists("adminsnbr", $context) ? $context["adminsnbr"] : (function () { throw new RuntimeError('Variable "adminsnbr" does not exist.', 26, $this->source); })()), 1, [], "array", false, false, false, 26), "html", null, true);
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
      </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
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

    public function getDebugInfo()
    {
        return array (  166 => 51,  159 => 50,  137 => 35,  125 => 26,  113 => 17,  99 => 7,  92 => 6,  81 => 3,  74 => 2,  61 => 1,  53 => 50,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<title>{% block title %}Circet-Dashboard{% endblock %}</title>
{% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{asset('css/Dashboard.css')}}\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  {% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
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
                              <p>{{adminsnbr[1]}}</p>
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
      </div>
{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/Dashboard.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\templates\\Pages\\Dashboard.html.twig");
    }
}