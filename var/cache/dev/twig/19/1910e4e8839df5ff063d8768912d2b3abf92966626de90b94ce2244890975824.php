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
        echo "\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/sidebar.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-TY6ar5i3FCijZzFv+iGibWd6NUmnca6H5y5r5Q6lYU+jms0IQxh26RpX9Mv0zWNN0lb7lnpPxyVTdIvAVe8wDg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

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
        echo "
\t<div class=\"sidebar\">
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Centre des notifications</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<ul>
\t\t\t\t";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 23, $this->source); })())) > 0)) {
            // line 24
            echo "\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
                // line 25
                echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 28
                echo "\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["noti"], "srcImg", [], "method", false, false, false, 29)), "html", null, true);
                echo "\"/>

\t\t\t\t\t\t\t";
                // line 32
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "description", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
\t\t\t\t\t\t\t<h6  class=\"NotiDate\" style=\"font-size: .65rem; \">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "getDateNotifications", [], "method", false, false, false, 35), "html", null, true);
                echo "</h6>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr/>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t<li>

\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t</li>

\t\t\t\t\t<hr/>
\t\t\t\t";
        }
        // line 50
        echo "\t\t\t\t
\t\t\t</ul>
\t\t\t\t</div>
\t
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<div class=\"logo_content\">
\t\t\t<div class=\"logo\">
\t\t\t\t<i class='bx bxs-package'></i>
\t\t\t\t<div class=\"logo_name\">CircetStock
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<i class='bx bx-menu' id=\"btn\"></i>
\t\t</div>
\t\t<ul class=\"nav_link\">
\t\t\t";
        // line 66
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 66, $this->source); })()), "Connected", [], "any", false, false, false, 66)) {
            // line 67
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 67, $this->source); })()), "roles", [], "any", false, false, false, 67), 0, [], "array", false, false, false, 67) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 67, $this->source); })()), "roles", [], "any", false, false, false, 67), 0, [], "array", false, false, false, 67) == "SUPER ADMIN"))) {
                // line 68
                echo "
\t\t\t\t\t";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 69, $this->source); })()), "getUserPermission", [], "method", false, false, false, 69));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 70
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 70) == "Voir notification")) {
                        // line 71
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li  style=\"margin-top:-25px;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bbttnn\" data-toggle=\"exampleModal\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-bell  bx-sm mr-2'></i>\t<span class=\"links_name\">Notifications</span>
\t\t\t\t\t\t\t\t\t\t<div class=\" notlinkCount\">0</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Notifications</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 87, $this->source); })()), "getUserPermission", [], "method", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 88
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 88) == "Voir accueil")) {
                    // line 89
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 90
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
                    echo "\">
\t\t\t\t\t\t\t\t<i class='bx bx-home'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Accueil</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 97
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 98
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 98, $this->source); })()), "roles", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 98, $this->source); })()), "roles", [], "any", false, false, false, 98), 0, [], "array", false, false, false, 98) == "SUPER ADMIN"))) {
                // line 99
                echo "
\t\t\t\t\t";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 100, $this->source); })()), "getUserPermission", [], "method", false, false, false, 100));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 101
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 101) == "Voir tableau de bord")) {
                        // line 102
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 103
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-dashboard'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Tableau de bord</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Tableau de bord</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "
\t\t\t\t\t";
                // line 112
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 112, $this->source); })()), "getUserPermission", [], "method", false, false, false, 112));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 113
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 113) == "Voir les utilisateurs")) {
                        // line 114
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 115
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Utilisateurs</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 122
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "
\t\t\t\t\t";
                // line 124
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 124, $this->source); })()), "getUserPermission", [], "method", false, false, false, 124));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 125
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 125) == "Voir les rôles")) {
                        // line 126
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 127
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase-alt-2'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Rôle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Rôle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 134
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 135
                echo "
\t\t\t\t\t";
                // line 136
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 136, $this->source); })()), "getUserPermission", [], "method", false, false, false, 136));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 137
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 137) == "Voir les permissions")) {
                        // line 138
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 139
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-spreadsheet'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Permission</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Permission</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 146
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "
\t\t\t\t\t";
                // line 148
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 148, $this->source); })()), "getUserPermission", [], "method", false, false, false, 148));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 149
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 149) == "Voir le stock")) {
                        // line 150
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 151
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-package'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Stock</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Stock</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 158
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 159
                echo "
\t\t\t\t\t";
                // line 160
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 160, $this->source); })()), "getUserPermission", [], "method", false, false, false, 160));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 161
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 161) == "Voir les modèles")) {
                        // line 162
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 163
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Model");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-purchase-tag'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Modèle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Modèle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 170
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "
\t\t\t\t\t";
                // line 172
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 172, $this->source); })()), "getUserPermission", [], "method", false, false, false, 172));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 173
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 173) == "Voir les marques")) {
                        // line 174
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 175
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marque");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-bookmark-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Marque</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Marque</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 182
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "
\t\t\t\t";
            }
            // line 185
            echo "\t\t\t";
        }
        // line 186
        echo "
\t\t\t";
        // line 187
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 187, $this->source); })()), "getUserPermission", [], "method", false, false, false, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 188
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 188) == "Voir le profil")) {
                // line 189
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 190
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
                echo "\">
\t\t\t\t\t\t\t<i class='bx bxs-user-rectangle'></i>
\t\t\t\t\t\t\t<span class=\"links_name\">Profil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"tooltip\">Profil</span>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 197
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
\t\t</ul>
\t\t<div class=\"profile_content\">
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile_details\">
\t\t\t\t\t<img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"name_role\">
\t\t\t\t\t\t<div class=\"name\">";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 205, $this->source); })()), "username", [], "any", false, false, false, 205), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"role\">";
        // line 206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 206, $this->source); })()), "job", [], "any", false, false, false, 206), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 209
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">
\t\t\t\t\t<i class='bx bx-log-out' id=\"log_out\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>



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
        return array (  496 => 209,  490 => 206,  486 => 205,  481 => 203,  474 => 198,  468 => 197,  458 => 190,  455 => 189,  452 => 188,  448 => 187,  445 => 186,  442 => 185,  438 => 183,  432 => 182,  422 => 175,  419 => 174,  416 => 173,  412 => 172,  409 => 171,  403 => 170,  393 => 163,  390 => 162,  387 => 161,  383 => 160,  380 => 159,  374 => 158,  364 => 151,  361 => 150,  358 => 149,  354 => 148,  351 => 147,  345 => 146,  335 => 139,  332 => 138,  329 => 137,  325 => 136,  322 => 135,  316 => 134,  306 => 127,  303 => 126,  300 => 125,  296 => 124,  293 => 123,  287 => 122,  277 => 115,  274 => 114,  271 => 113,  267 => 112,  264 => 111,  258 => 110,  248 => 103,  245 => 102,  242 => 101,  238 => 100,  235 => 99,  232 => 98,  226 => 97,  216 => 90,  213 => 89,  210 => 88,  205 => 87,  202 => 86,  196 => 85,  180 => 71,  177 => 70,  173 => 69,  170 => 68,  167 => 67,  165 => 66,  147 => 50,  138 => 43,  135 => 42,  122 => 35,  118 => 34,  114 => 32,  109 => 29,  106 => 28,  103 => 25,  98 => 24,  96 => 23,  81 => 10,  74 => 9,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
\t<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
\t<link rel=\"stylesheet\" href=\"{{asset('css/sidebar.css')}}\">
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css\" integrity=\"sha512-TY6ar5i3FCijZzFv+iGibWd6NUmnca6H5y5r5Q6lYU+jms0IQxh26RpX9Mv0zWNN0lb7lnpPxyVTdIvAVe8wDg==\" crossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"/>

{% endblock %}
{% block body %}

\t<div class=\"sidebar\">
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Centre des notifications</h5>
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<ul>
\t\t\t\t{% if AllNotification|length > 0  %}
\t\t\t\t\t{% for noti in AllNotification %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t{# <img
\t\t\t\t\t\t\t\t\t\t\t\t\tsrc=\"{{asset('images/decline.png')}}\"/> #}
\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\tsrc=\"{{asset(noti.srcImg())}}\"/>

\t\t\t\t\t\t\t{# <img src=\"/CIRCET-STOCK/public/images/decline.png\" /> #}
\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">{{noti.description}}</p>
\t\t\t\t\t\t\t<h6  class=\"NotiDate\" style=\"font-size: .65rem; \">{{ noti.getDateNotifications() }}</h6>
\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr/>
\t\t\t\t\t{% endfor %}
\t\t\t\t{% else %}
\t\t\t\t\t<li>

\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t</li>

\t\t\t\t\t<hr/>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t</ul>
\t\t\t\t</div>
\t
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<div class=\"logo_content\">
\t\t\t<div class=\"logo\">
\t\t\t\t<i class='bx bxs-package'></i>
\t\t\t\t<div class=\"logo_name\">CircetStock
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<i class='bx bx-menu' id=\"btn\"></i>
\t\t</div>
\t\t<ul class=\"nav_link\">
\t\t\t{% if userInfo.Connected %}
\t\t\t\t{% if userInfo.roles[0] == \"ROLE_ADMIN\" or userInfo.roles[0] == \"SUPER ADMIN\" %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir notification\" %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t<li  style=\"margin-top:-25px;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bbttnn\" data-toggle=\"exampleModal\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-bell  bx-sm mr-2'></i>\t<span class=\"links_name\">Notifications</span>
\t\t\t\t\t\t\t\t\t\t<div class=\" notlinkCount\">0</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Notifications</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t{% if permission.getPermissionName() == \"Voir accueil\" %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('HomePage')}}\">
\t\t\t\t\t\t\t\t<i class='bx bx-home'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Accueil</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{% if userInfo.roles[0] == \"ROLE_ADMIN\" or userInfo.roles[0] == \"SUPER ADMIN\" %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir tableau de bord\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Dashboard')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-dashboard'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Tableau de bord</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Tableau de bord</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir les utilisateurs\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Users')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Utilisateurs</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir les rôles\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Role')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase-alt-2'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Rôle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Rôle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir les permissions\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Permission')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-spreadsheet'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Permission</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Permission</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir le stock\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Stock')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-package'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Stock</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Stock</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir les modèles\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Model')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-purchase-tag'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Modèle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Modèle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir les marques\" %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"{{path('Marque')}}\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-bookmark-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Marque</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Marque</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}

\t\t\t\t{% endif %}
\t\t\t{% endif %}

\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t{% if permission.getPermissionName() == \"Voir le profil\" %}
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"{{path('Profile')}}\">
\t\t\t\t\t\t\t<i class='bx bxs-user-rectangle'></i>
\t\t\t\t\t\t\t<span class=\"links_name\">Profil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"tooltip\">Profil</span>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t{% endfor %}

\t\t</ul>
\t\t<div class=\"profile_content\">
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile_details\">
\t\t\t\t\t<img src=\"{{asset('images/user.png')}}\" alt=\"\">
\t\t\t\t\t<div class=\"name_role\">
\t\t\t\t\t\t<div class=\"name\">{{userInfo.username}}</div>
\t\t\t\t\t\t<div class=\"role\">{{userInfo.job}}</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\">
\t\t\t\t\t<i class='bx bx-log-out' id=\"log_out\"></i>
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>



{% endblock %}
", "Pages/sidebar.html.twig", "C:\\xampp\\htdocs\\Circet-Stock\\templates\\Pages\\sidebar.html.twig");
    }
}
