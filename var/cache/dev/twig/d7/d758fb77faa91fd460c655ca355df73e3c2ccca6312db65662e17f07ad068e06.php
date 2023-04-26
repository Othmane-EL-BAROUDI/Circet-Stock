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

/* Pages/Profile.html.twig */
class __TwigTemplate_8cf60bcc42060a96097e2ed6a9770ebd20866a8fa6a6ddfe85a0c5a186a32e8e extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Pages/Profile.html.twig"));

        // line 1
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 72
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

        echo "Circet-Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/profile.css"), "html", null, true);
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
            <div class=\"text\">Profile</div>

            <div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
                  <div class=\"col-md-9\">
                        <div class=\"card mb-3 content\">
                              <div class=\"card-body\">
                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Nom</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 18, $this->source); })()), "username", [], "any", false, false, false, 18), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Matricule</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 25, $this->source); })()), "matricule", [], "any", false, false, false, 25), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Email</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Job</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 39, $this->source); })()), "job", [], "any", false, false, false, 39), "html", null, true);
        echo "\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <label for=\"inputPassword1\" class=\"mt-3 mb-1 col-form-label\">Mot de passe</label>
                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\"   class=\"form-control\" id=\"inputPassword1\" placeholder=\"Mot de passe actuel\">
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Nouveau mot de passe\">
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Confirmer le Nouveau mot de passe\">
                                          </div>
                                    </div>

                                    <div class=\"text-center mt-4\">
                                          <button type=\"button\" class=\"update\">Mettre à jour</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("JS/sidebar.js"), "html", null, true);
        echo "\"></script>
   ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Pages/Profile.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  191 => 73,  184 => 72,  144 => 39,  134 => 32,  124 => 25,  114 => 18,  99 => 7,  92 => 6,  81 => 3,  74 => 2,  61 => 1,  53 => 72,  51 => 6,  49 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <title>{% block title %}Circet-Profile{% endblock %}</title>
{% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{asset('css/profile.css')}}\">
      <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
{% endblock %}
{% block body %}
     {{ include('Pages/sidebar.html.twig') }}
     <div class=\"home_content\">
            <div class=\"text\">Profile</div>

            <div class=\"container\" style=\"display: flex; justify-content: center; align-items: center; height: 80vh;\">
                  <div class=\"col-md-9\">
                        <div class=\"card mb-3 content\">
                              <div class=\"card-body\">
                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Nom</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"{{userInfo.username}}\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Matricule</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"{{userInfo.matricule}}\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Email</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"{{userInfo.email}}\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\">
                                          <label class=\"col-sm-2 col-form-label\">Job</label>
                                          <div class=\"col-sm-10\">
                                                <input class=\"form-control\" type=\"text\" value=\"{{userInfo.job}}\" aria-label=\"readonly input example\" readonly>
                                          </div>
                                    </div>

                                    <label for=\"inputPassword1\" class=\"mt-3 mb-1 col-form-label\">Mot de passe</label>
                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\"   class=\"form-control\" id=\"inputPassword1\" placeholder=\"Mot de passe actuel\">
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\" class=\"form-control\" id=\"inputPassword2\" placeholder=\"Nouveau mot de passe\">
                                          </div>
                                    </div>

                                    <div class=\"mb-3 row\" style=\"width: 125%;\">
                                          <div class=\"col-sm-10\">
                                                <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Confirmer le Nouveau mot de passe\">
                                          </div>
                                    </div>

                                    <div class=\"text-center mt-4\">
                                          <button type=\"button\" class=\"update\">Mettre à jour</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      </div>

{% endblock %}
  {% block javascripts %}
            <script src=\"{{asset('JS/sidebar.js')}}\"></script>
   {% endblock %}", "Pages/Profile.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\Profile.html.twig");
    }
}
