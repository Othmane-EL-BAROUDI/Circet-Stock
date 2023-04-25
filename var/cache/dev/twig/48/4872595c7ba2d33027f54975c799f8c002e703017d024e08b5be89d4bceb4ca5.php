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

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_2c39e1f23e4694d002efc540bee222b874526c82077a4c88d2a244133d2b6ed9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo " ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "  <style>
      body{
    font-family: 'Poppins', sans-serif;
    background-size: auto;
    background-repeat: no-repeat;
    background-image : url(\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/wave.png"), "html", null, true);
        echo "\")
    
          }  
  </style>
<form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 16
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new RuntimeError('Variable "csrf_token" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 19
        echo "   
    
    
     <div class=\"container\">
     
  <div class=\"row content\">
    <div class=\"col-md-6 mb-3  cadre\">
        <img  class=\"logo\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        echo "\"  ></img>
    </div>
    <div class=\"col-md-6\">
      <h3 class=\"signin-text mb-3\"> Sign In</h3>
      <form>
        <div class=\"form-group\">
         <label for=\"username\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.username", [], "FOSUserBundle"), "html", null, true);
        echo " | Email</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\" required=\"required\"  class=\"form-control\" autocomplete=\"username\" />
        </div>
        <div class=\"form-group\">
          <label for=\"password\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.password", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  autocomplete=\"current-password\" />
        </div>
         <!--  <div class=\"form-group\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
         <label for=\"remember_me\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.remember_me", [], "FOSUserBundle"), "html", null, true);
        echo "</label>
         </div> -->
        <button class=\"btn btn-class\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("security.login.submit", [], "FOSUserBundle"), "html", null, true);
        echo "\"  >Login</button>
         <p  class=\"recovery\" >Forget password ? <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ForgetPassword");
        echo "\" >recovery</a></p>
         ";
        // line 45
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "              <div class=\"alert alert-danger h-20 \" role=\"alert\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageKey", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 46, $this->source); })()), "messageData", [], "any", false, false, false, 46), "security"), "html", null, true);
            echo "</div>
         ";
        }
        // line 48
        echo "      </form>
    </div>
  </div>
</div>
</form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "              <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
              <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/index.css"), "html", null, true);
        echo "\">
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 4,  146 => 3,  139 => 2,  127 => 48,  121 => 46,  119 => 45,  115 => 44,  111 => 43,  106 => 41,  98 => 36,  92 => 33,  88 => 32,  79 => 26,  70 => 19,  64 => 17,  62 => 16,  58 => 15,  51 => 11,  44 => 6,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain 'FOSUserBundle' %}
 {% block stylesheets %}
              <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ\" crossorigin=\"anonymous\">
              <link rel=\"stylesheet\" href=\"{{asset('css/index.css')}}\">
  {% endblock %}
  <style>
      body{
    font-family: 'Poppins', sans-serif;
    background-size: auto;
    background-repeat: no-repeat;
    background-image : url(\"{{asset('images/wave.png')}}\")
    
          }  
  </style>
<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}
   
    
    
     <div class=\"container\">
     
  <div class=\"row content\">
    <div class=\"col-md-6 mb-3  cadre\">
        <img  class=\"logo\" src=\"{{asset('images/logo.jpg')}}\"  ></img>
    </div>
    <div class=\"col-md-6\">
      <h3 class=\"signin-text mb-3\"> Sign In</h3>
      <form>
        <div class=\"form-group\">
         <label for=\"username\">{{ 'security.login.username'|trans }} | Email</label>
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\"  class=\"form-control\" autocomplete=\"username\" />
        </div>
        <div class=\"form-group\">
          <label for=\"password\">{{ 'security.login.password'|trans }}</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\"  autocomplete=\"current-password\" />
        </div>
         <!--  <div class=\"form-group\">
          <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
         <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
         </div> -->
        <button class=\"btn btn-class\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"  >Login</button>
         <p  class=\"recovery\" >Forget password ? <a href=\"{{path('ForgetPassword')}}\" >recovery</a></p>
         {% if error %}
              <div class=\"alert alert-danger h-20 \" role=\"alert\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
         {% endif %}
      </form>
    </div>
  </div>
</div>
</form>
", "FOSUserBundle:Security:login_content.html.twig", "C:\\xampp\\htdocs\\doc\\Project\\Final version\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Security/login_content.html.twig");
    }
}
