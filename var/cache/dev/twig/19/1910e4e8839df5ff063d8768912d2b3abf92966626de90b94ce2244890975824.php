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
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 10, $this->source); })()), "Connected", [], "any", false, false, false, 10)) {
            // line 11
            echo "\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 11, $this->source); })()), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11) == "IT SERVICE") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 11, $this->source); })()), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11) == "USER"))) {
                // line 12
                echo "\t\t<div class=\"notifications btn-group dropup\">
\t\t\t<button type=\"button\" class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class='bx bx-bell  bx-sm mr-2'></i>Notifications
\t\t\t\t<div class=\" nbrNotifications\">";
                // line 15
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 15, $this->source); })())), "html", null, true);
                echo "</div>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t<h6>notifications récentes</h6>
\t\t\t\t<hr/>
\t\t\t\t<ul>
\t\t\t\t\t";
                // line 21
                if ((twig_length_filter($this->env, (isset($context["RecentNotification"]) || array_key_exists("RecentNotification", $context) ? $context["RecentNotification"] : (function () { throw new RuntimeError('Variable "RecentNotification" does not exist.', 21, $this->source); })())) > 0)) {
                    // line 22
                    echo "\t\t\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["RecentNotification"]) || array_key_exists("RecentNotification", $context) ? $context["RecentNotification"] : (function () { throw new RuntimeError('Variable "RecentNotification" does not exist.', 22, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
                        // line 23
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"";
                        // line 27
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["noti"], "srcImg", [], "method", false, false, false, 27)), "html", null, true);
                        echo "\"/>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">";
                        // line 30
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "description", [], "any", false, false, false, 30), "html", null, true);
                        echo "</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "\t\t\t\t\t";
                } else {
                    // line 36
                    echo "\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr/>
\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t<li style=\" height: 2px;\">
\t\t\t\t\t\t<button type=\"button\" class=\"voirPLus\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\tVoir plus
\t\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 52
            echo "\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Centre des notifications</h5>
\t\t\t\t<a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteNotification");
            echo "\" class=\"close\" >&times;</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body noti-body\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 61
            if ((twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 61, $this->source); })())) > 0)) {
                // line 62
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 62, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tsrc=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["noti"], "srcImg", [], "method", false, false, false, 67)), "html", null, true);
                    echo "\"/>

\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "description", [], "any", false, false, false, 72), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"NotiDate\" style=\"font-size: .65rem; \">";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "getDateNotifications", [], "method", false, false, false, 73), "html", null, true);
                    echo "</h6>


\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "\t\t\t\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
            }
            // line 88
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 96
        echo "\t<div class=\"sidebar\">
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
        // line 106
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 106, $this->source); })()), "Connected", [], "any", false, false, false, 106)) {
            // line 107
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 107, $this->source); })()), "roles", [], "any", false, false, false, 107), 0, [], "array", false, false, false, 107) == "ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 107, $this->source); })()), "roles", [], "any", false, false, false, 107), 0, [], "array", false, false, false, 107) == "SUPER ADMIN"))) {
                // line 108
                echo "
\t\t\t\t\t";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 109, $this->source); })()), "getUserPermission", [], "method", false, false, false, 109));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 110
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 110) == "Voir notification")) {
                        // line 111
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<button class=\"bbttnn\"  type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-bell bx-sm'></i><span class=\"links_name\">Activites</span>
\t\t\t\t\t\t\t\t\t\t<div class=\" notlinkCount\">";
                        // line 117
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 117, $this->source); })())), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Activites</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 125
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 127, $this->source); })()), "roles", [], "any", false, false, false, 127), 0, [], "array", false, false, false, 127) == "IT SERVICE") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 127, $this->source); })()), "roles", [], "any", false, false, false, 127), 0, [], "array", false, false, false, 127) == "USER"))) {
                // line 128
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 128, $this->source); })()), "getUserPermission", [], "method", false, false, false, 128));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 129
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 129) == "Voir accueil")) {
                        // line 130
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 131
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
                        echo "\">
\t\t\t\t\t\t\t\t<i class='bx bx-home'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Accueil</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 138
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 139, $this->source); })()), "getUserPermission", [], "method", false, false, false, 139));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 140
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 140) == "Voir restitution")) {
                        // line 141
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 142
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restitution");
                        echo "\">
\t\t\t\t\t\t\t\t<i class='bx bxs-message-alt-detail'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Restitution</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Restitution</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 149
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                echo "\t\t\t\t";
            }
            // line 151
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 151, $this->source); })()), "roles", [], "any", false, false, false, 151), 0, [], "array", false, false, false, 151) == "ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 151, $this->source); })()), "roles", [], "any", false, false, false, 151), 0, [], "array", false, false, false, 151) == "SUPER ADMIN"))) {
                // line 152
                echo "
\t\t\t\t\t";
                // line 153
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 153, $this->source); })()), "getUserPermission", [], "method", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 154
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 154) == "Voir tableau de bord")) {
                        // line 155
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 156
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-dashboard'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Tableau de bord</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Tableau de bord</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 164
                echo "
\t\t\t\t\t";
                // line 165
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 165, $this->source); })()), "getUserPermission", [], "method", false, false, false, 165));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 166
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 166) == "Voir les utilisateurs")) {
                        // line 167
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 168
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Utilisateurs</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 175
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "
\t\t\t\t\t";
                // line 177
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 177, $this->source); })()), "getUserPermission", [], "method", false, false, false, 177));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 178
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 178) == "Voir les rôles")) {
                        // line 179
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 180
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase-alt-2'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Rôle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Rôle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 187
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "
\t\t\t\t\t";
                // line 189
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 189, $this->source); })()), "getUserPermission", [], "method", false, false, false, 189));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 190
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 190) == "Voir les permissions")) {
                        // line 191
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 192
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-spreadsheet'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Permission</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Permission</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 199
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 200
                echo "
\t\t\t\t\t";
                // line 201
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 201, $this->source); })()), "getUserPermission", [], "method", false, false, false, 201));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 202
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 202) == "Voir le stock")) {
                        // line 203
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 204
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-package'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Stock</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Stock</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 211
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 212
                echo "
\t\t\t\t\t";
                // line 213
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 213, $this->source); })()), "getUserPermission", [], "method", false, false, false, 213));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 214
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 214) == "Voir les modèles")) {
                        // line 215
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 216
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Model");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-purchase-tag'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Modèle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Modèle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 223
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 224
                echo "
\t\t\t\t\t";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 225, $this->source); })()), "getUserPermission", [], "method", false, false, false, 225));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 226
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 226) == "Voir les marques")) {
                        // line 227
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 228
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marque");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-bookmark-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Marque</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Marque</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 235
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 236
                echo "
\t\t\t\t";
            }
            // line 238
            echo "\t\t\t";
        }
        // line 239
        echo "
\t\t\t";
        // line 240
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 240, $this->source); })()), "getUserPermission", [], "method", false, false, false, 240));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 241
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 241) == "Voir le profil")) {
                // line 242
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 243
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
                echo "\">
\t\t\t\t\t\t\t<i class='bx bxs-user-rectangle'></i>
\t\t\t\t\t\t\t<span class=\"links_name\">Profil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"tooltip\">Profil</span>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 250
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 251
        echo "
\t\t</ul>
\t\t<div class=\"profile_content\">
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile_details\">
\t\t\t\t\t<img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"name_role\">
\t\t\t\t\t\t<div class=\"name\">";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 258, $this->source); })()), "username", [], "any", false, false, false, 258), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"role\">";
        // line 259
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 259, $this->source); })()), "job", [], "any", false, false, false, 259), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 262
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
        return array (  606 => 262,  600 => 259,  596 => 258,  591 => 256,  584 => 251,  578 => 250,  568 => 243,  565 => 242,  562 => 241,  558 => 240,  555 => 239,  552 => 238,  548 => 236,  542 => 235,  532 => 228,  529 => 227,  526 => 226,  522 => 225,  519 => 224,  513 => 223,  503 => 216,  500 => 215,  497 => 214,  493 => 213,  490 => 212,  484 => 211,  474 => 204,  471 => 203,  468 => 202,  464 => 201,  461 => 200,  455 => 199,  445 => 192,  442 => 191,  439 => 190,  435 => 189,  432 => 188,  426 => 187,  416 => 180,  413 => 179,  410 => 178,  406 => 177,  403 => 176,  397 => 175,  387 => 168,  384 => 167,  381 => 166,  377 => 165,  374 => 164,  368 => 163,  358 => 156,  355 => 155,  352 => 154,  348 => 153,  345 => 152,  342 => 151,  339 => 150,  333 => 149,  323 => 142,  320 => 141,  317 => 140,  312 => 139,  306 => 138,  296 => 131,  293 => 130,  290 => 129,  285 => 128,  282 => 127,  279 => 126,  273 => 125,  262 => 117,  254 => 111,  251 => 110,  247 => 109,  244 => 108,  241 => 107,  239 => 106,  227 => 96,  217 => 88,  208 => 81,  205 => 80,  192 => 73,  188 => 72,  180 => 67,  174 => 63,  169 => 62,  167 => 61,  160 => 57,  153 => 52,  142 => 43,  133 => 36,  130 => 35,  119 => 30,  113 => 27,  107 => 23,  102 => 22,  100 => 21,  91 => 15,  86 => 12,  83 => 11,  81 => 10,  74 => 9,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
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
{% if userInfo.Connected %}
\t{% if userInfo.roles[0] == \"IT SERVICE\" or userInfo.roles[0] == \"USER\"   %}
\t\t<div class=\"notifications btn-group dropup\">
\t\t\t<button type=\"button\" class=\"btn  dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t<i class='bx bx-bell  bx-sm mr-2'></i>Notifications
\t\t\t\t<div class=\" nbrNotifications\">{{ AllNotification|length }}</div>
\t\t\t</button>
\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t<h6>notifications récentes</h6>
\t\t\t\t<hr/>
\t\t\t\t<ul>
\t\t\t\t\t{% if RecentNotification|length > 0  %}
\t\t\t\t\t\t{% for noti in RecentNotification %}
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tsrc=\"{{asset(noti.srcImg())}}\"/>

\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">{{noti.description}}</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<hr/>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li style=\" height: 2px;\">
\t\t\t\t\t\t<button type=\"button\" class=\"voirPLus\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\tVoir plus
\t\t\t\t\t\t</button>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t{% endif %}
\t<div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Centre des notifications</h5>
\t\t\t\t<a href=\"{{path('DeleteNotification')}}\" class=\"close\" >&times;</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body noti-body\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t{% if AllNotification|length > 0  %}
\t\t\t\t\t\t\t{% for noti in AllNotification %}
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tsrc=\"{{asset(noti.srcImg())}}\"/>

\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">{{noti.description}}</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"NotiDate\" style=\"font-size: .65rem; \">{{ noti.getDateNotifications() }}</h6>


\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}
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
\t\t\t\t{% if userInfo.roles[0] == \"ADMIN\" or userInfo.roles[0] == \"SUPER ADMIN\" %}

\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t\t{% if permission.getPermissionName() == \"Voir notification\" %}
\t\t\t\t\t\t
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<button class=\"bbttnn\"  type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-bell bx-sm'></i><span class=\"links_name\">Activites</span>
\t\t\t\t\t\t\t\t\t\t<div class=\" notlinkCount\">{{AllNotification|length }}</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Activites</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t\t{% if userInfo.roles[0] == \"IT SERVICE\" or userInfo.roles[0] == \"USER\" %}
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
\t\t\t\t\t{% for permission in userInfo.getUserPermission() %}
\t\t\t\t\t{% if permission.getPermissionName() == \"Voir restitution\" %}
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"{{path('restitution')}}\">
\t\t\t\t\t\t\t\t<i class='bx bxs-message-alt-detail'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Restitution</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Restitution</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}
\t\t\t\t{% endif %}
\t\t\t\t{% if userInfo.roles[0] == \"ADMIN\" or userInfo.roles[0] == \"SUPER ADMIN\" %}

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
", "Pages/sidebar.html.twig", "C:\\xampp\\htdocs\\Circet Projet\\Circet-Stock\\templates\\Pages\\sidebar.html.twig");
    }
}
