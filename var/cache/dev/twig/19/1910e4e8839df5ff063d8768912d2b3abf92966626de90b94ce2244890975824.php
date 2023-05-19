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
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 21, $this->source); })()), "Connected", [], "any", false, false, false, 21)) {
            // line 22
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 22, $this->source); })()), "roles", [], "any", false, false, false, 22), 0, [], "array", false, false, false, 22) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 22, $this->source); })()), "roles", [], "any", false, false, false, 22), 0, [], "array", false, false, false, 22) == "SUPER ADMIN"))) {
                // line 23
                echo "
\t\t\t\t\t";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 24, $this->source); })()), "getUserPermission", [], "method", false, false, false, 24));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 25
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 25) == "Voir notification")) {
                        // line 26
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li  style=\"margin-top:-25px;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bbttnn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
                    // line 40
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 42, $this->source); })()), "getUserPermission", [], "method", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 43
                echo "\t\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 43) == "Voir accueil")) {
                    // line 44
                    echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                    // line 45
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
                    echo "\">
\t\t\t\t\t\t\t\t<i class='bx bx-home'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Accueil</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                }
                // line 52
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53), 0, [], "array", false, false, false, 53) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 53, $this->source); })()), "roles", [], "any", false, false, false, 53), 0, [], "array", false, false, false, 53) == "SUPER ADMIN"))) {
                // line 54
                echo "
\t\t\t\t\t";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 55, $this->source); })()), "getUserPermission", [], "method", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 56
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 56) == "Voir tableau de bord")) {
                        // line 57
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 58
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-dashboard'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Tableau de bord</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Tableau de bord</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "
\t\t\t\t\t";
                // line 67
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 67, $this->source); })()), "getUserPermission", [], "method", false, false, false, 67));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 68
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 68) == "Voir les utilisateurs")) {
                        // line 69
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 70
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Utilisateurs</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 77
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                echo "
\t\t\t\t\t";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 79, $this->source); })()), "getUserPermission", [], "method", false, false, false, 79));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 80
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 80) == "Voir les rôles")) {
                        // line 81
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 82
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase-alt-2'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Rôle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Rôle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 89
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "
\t\t\t\t\t";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 91, $this->source); })()), "getUserPermission", [], "method", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 92
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 92) == "Voir les permissions")) {
                        // line 93
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 94
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-spreadsheet'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Permission</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Permission</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 101
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 102
                echo "
\t\t\t\t\t";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 103, $this->source); })()), "getUserPermission", [], "method", false, false, false, 103));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 104
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 104) == "Voir le stock")) {
                        // line 105
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 106
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-package'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Stock</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Stock</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 113
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "
\t\t\t\t\t";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 115, $this->source); })()), "getUserPermission", [], "method", false, false, false, 115));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 116
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 116) == "Voir les modèles")) {
                        // line 117
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 118
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Model");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-purchase-tag'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Modèle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Modèle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "
\t\t\t\t\t";
                // line 127
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 127, $this->source); })()), "getUserPermission", [], "method", false, false, false, 127));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 128
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 128) == "Voir les marques")) {
                        // line 129
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 130
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marque");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-bookmark-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Marque</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Marque</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 137
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "
\t\t\t\t";
            }
            // line 140
            echo "\t\t\t";
        }
        // line 141
        echo "
\t\t\t";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 142, $this->source); })()), "getUserPermission", [], "method", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 143
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 143) == "Voir le profil")) {
                // line 144
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 145
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
                echo "\">
\t\t\t\t\t\t\t<i class='bx bxs-user-rectangle'></i>
\t\t\t\t\t\t\t<span class=\"links_name\">Profil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"tooltip\">Profil</span>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 152
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
\t\t</ul>
\t\t<div class=\"profile_content\">
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile_details\">
\t\t\t\t\t<img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"name_role\">
\t\t\t\t\t\t<div class=\"name\">";
        // line 160
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 160, $this->source); })()), "username", [], "any", false, false, false, 160), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"role\">";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 161, $this->source); })()), "job", [], "any", false, false, false, 161), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 164
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
        return array (  425 => 164,  419 => 161,  415 => 160,  410 => 158,  403 => 153,  397 => 152,  387 => 145,  384 => 144,  381 => 143,  377 => 142,  374 => 141,  371 => 140,  367 => 138,  361 => 137,  351 => 130,  348 => 129,  345 => 128,  341 => 127,  338 => 126,  332 => 125,  322 => 118,  319 => 117,  316 => 116,  312 => 115,  309 => 114,  303 => 113,  293 => 106,  290 => 105,  287 => 104,  283 => 103,  280 => 102,  274 => 101,  264 => 94,  261 => 93,  258 => 92,  254 => 91,  251 => 90,  245 => 89,  235 => 82,  232 => 81,  229 => 80,  225 => 79,  222 => 78,  216 => 77,  206 => 70,  203 => 69,  200 => 68,  196 => 67,  193 => 66,  187 => 65,  177 => 58,  174 => 57,  171 => 56,  167 => 55,  164 => 54,  161 => 53,  155 => 52,  145 => 45,  142 => 44,  139 => 43,  134 => 42,  131 => 41,  125 => 40,  109 => 26,  106 => 25,  102 => 24,  99 => 23,  96 => 22,  94 => 21,  81 => 10,  74 => 9,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
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
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"bbttnn\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
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
