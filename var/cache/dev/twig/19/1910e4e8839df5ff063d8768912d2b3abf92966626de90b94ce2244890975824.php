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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 11, $this->source); })()), "roles", [], "any", false, false, false, 11), 0, [], "array", false, false, false, 11) == "IT SERVICE")) {
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
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body noti-body\">
\t\t\t\t\t<ul>
\t\t\t\t\t\t";
            // line 63
            if ((twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 63, $this->source); })())) > 0)) {
                // line 64
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 64, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["noti"]) {
                    // line 65
                    echo "\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\t\tsrc=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["noti"], "srcImg", [], "method", false, false, false, 69)), "html", null, true);
                    echo "\"/>

\t\t\t\t\t\t\t\t\t


\t\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">";
                    // line 74
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "description", [], "any", false, false, false, 74), "html", null, true);
                    echo "</p>
\t\t\t\t\t\t\t\t\t<h6 class=\"NotiDate\" style=\"font-size: .65rem; \">";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["noti"], "getDateNotifications", [], "method", false, false, false, 75), "html", null, true);
                    echo "</h6>


\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['noti'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "\t\t\t\t\t\t";
            } else {
                // line 83
                echo "\t\t\t\t\t\t\t<li>

\t\t\t\t\t\t\t\t<p style=\"font-size: .77rem; \">Pas de notifications</p>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t";
            }
            // line 90
            echo "
\t\t\t\t\t</ul>
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t</div>
";
        }
        // line 98
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
        // line 108
        if (twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 108, $this->source); })()), "Connected", [], "any", false, false, false, 108)) {
            // line 109
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 109, $this->source); })()), "roles", [], "any", false, false, false, 109), 0, [], "array", false, false, false, 109) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 109, $this->source); })()), "roles", [], "any", false, false, false, 109), 0, [], "array", false, false, false, 109) == "SUPER ADMIN"))) {
                // line 110
                echo "
\t\t\t\t\t";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 111, $this->source); })()), "getUserPermission", [], "method", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 112
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 112) == "Voir notification")) {
                        // line 113
                        echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t<li >
\t\t\t\t\t\t\t\t<button class=\"bbttnn\"  type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#exampleModal\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<i class='bx bx-bell bx-sm'></i><span class=\"links_name\">Activites</span>
\t\t\t\t\t\t\t\t\t\t<div class=\" notlinkCount\">";
                        // line 119
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["AllNotification"]) || array_key_exists("AllNotification", $context) ? $context["AllNotification"] : (function () { throw new RuntimeError('Variable "AllNotification" does not exist.', 119, $this->source); })())), "html", null, true);
                        echo "</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Activites</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
                    }
                    // line 127
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 129, $this->source); })()), "roles", [], "any", false, false, false, 129), 0, [], "array", false, false, false, 129) == "IT SERVICE")) {
                // line 130
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 130, $this->source); })()), "getUserPermission", [], "method", false, false, false, 130));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 131
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 131) == "Voir accueil")) {
                        // line 132
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 133
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("HomePage");
                        echo "\">
\t\t\t\t\t\t\t\t<i class='bx bx-home'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Accueil</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Accueil</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 140
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                echo "\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 141, $this->source); })()), "getUserPermission", [], "method", false, false, false, 141));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 142
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 142) == "Voir restitution")) {
                        // line 143
                        echo "\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
                        // line 144
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("restitution");
                        echo "\">
\t\t\t\t\t\t\t\t<i class='bx bxs-message-alt-detail'></i>
\t\t\t\t\t\t\t\t<span class=\"links_name\">Restitution</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<span class=\"tooltip\">Restitution</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
                    }
                    // line 151
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "\t\t\t\t";
            }
            // line 153
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 153, $this->source); })()), "roles", [], "any", false, false, false, 153), 0, [], "array", false, false, false, 153) == "ROLE_ADMIN") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 153, $this->source); })()), "roles", [], "any", false, false, false, 153), 0, [], "array", false, false, false, 153) == "SUPER ADMIN"))) {
                // line 154
                echo "
\t\t\t\t\t";
                // line 155
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 155, $this->source); })()), "getUserPermission", [], "method", false, false, false, 155));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 156
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 156) == "Voir tableau de bord")) {
                        // line 157
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 158
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dashboard");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-dashboard'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Tableau de bord</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Tableau de bord</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 165
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                echo "
\t\t\t\t\t";
                // line 167
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 167, $this->source); })()), "getUserPermission", [], "method", false, false, false, 167));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 168
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 168) == "Voir les utilisateurs")) {
                        // line 169
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 170
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Users");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bxs-user-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Utilisateurs</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Utilisateurs</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 177
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 178
                echo "
\t\t\t\t\t";
                // line 179
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 179, $this->source); })()), "getUserPermission", [], "method", false, false, false, 179));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 180
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 180) == "Voir les rôles")) {
                        // line 181
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 182
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Role");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-briefcase-alt-2'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Rôle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Rôle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 189
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 190
                echo "
\t\t\t\t\t";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 191, $this->source); })()), "getUserPermission", [], "method", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 192
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 192) == "Voir les permissions")) {
                        // line 193
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 194
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Permission");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-spreadsheet'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Permission</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Permission</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 201
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                echo "
\t\t\t\t\t";
                // line 203
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 203, $this->source); })()), "getUserPermission", [], "method", false, false, false, 203));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 204
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 204) == "Voir le stock")) {
                        // line 205
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 206
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Stock");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-package'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Stock</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Stock</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 213
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 214
                echo "
\t\t\t\t\t";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 215, $this->source); })()), "getUserPermission", [], "method", false, false, false, 215));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 216
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 216) == "Voir les modèles")) {
                        // line 217
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 218
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Model");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-purchase-tag'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Modèle</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Modèle</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 225
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "
\t\t\t\t\t";
                // line 227
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 227, $this->source); })()), "getUserPermission", [], "method", false, false, false, 227));
                foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                    // line 228
                    echo "\t\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 228) == "Voir les marques")) {
                        // line 229
                        echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                        // line 230
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Marque");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class='bx bx-bookmark-plus'></i>
\t\t\t\t\t\t\t\t\t<span class=\"links_name\">Marque</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<span class=\"tooltip\">Marque</span>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 238
                echo "
\t\t\t\t";
            }
            // line 240
            echo "\t\t\t";
        }
        // line 241
        echo "
\t\t\t";
        // line 242
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 242, $this->source); })()), "getUserPermission", [], "method", false, false, false, 242));
        foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
            // line 243
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["permission"], "getPermissionName", [], "method", false, false, false, 243) == "Voir le profil")) {
                // line 244
                echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
                // line 245
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Profile");
                echo "\">
\t\t\t\t\t\t\t<i class='bx bxs-user-rectangle'></i>
\t\t\t\t\t\t\t<span class=\"links_name\">Profil</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<span class=\"tooltip\">Profil</span>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 252
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "
\t\t</ul>
\t\t<div class=\"profile_content\">
\t\t\t<div class=\"profile\">
\t\t\t\t<div class=\"profile_details\">
\t\t\t\t\t<img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.png"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<div class=\"name_role\">
\t\t\t\t\t\t<div class=\"name\">";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 260, $this->source); })()), "username", [], "any", false, false, false, 260), "html", null, true);
        echo "</div>
\t\t\t\t\t\t<div class=\"role\">";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userInfo"]) || array_key_exists("userInfo", $context) ? $context["userInfo"] : (function () { throw new RuntimeError('Variable "userInfo" does not exist.', 261, $this->source); })()), "job", [], "any", false, false, false, 261), "html", null, true);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<a href=\"";
        // line 264
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
        return array (  605 => 264,  599 => 261,  595 => 260,  590 => 258,  583 => 253,  577 => 252,  567 => 245,  564 => 244,  561 => 243,  557 => 242,  554 => 241,  551 => 240,  547 => 238,  541 => 237,  531 => 230,  528 => 229,  525 => 228,  521 => 227,  518 => 226,  512 => 225,  502 => 218,  499 => 217,  496 => 216,  492 => 215,  489 => 214,  483 => 213,  473 => 206,  470 => 205,  467 => 204,  463 => 203,  460 => 202,  454 => 201,  444 => 194,  441 => 193,  438 => 192,  434 => 191,  431 => 190,  425 => 189,  415 => 182,  412 => 181,  409 => 180,  405 => 179,  402 => 178,  396 => 177,  386 => 170,  383 => 169,  380 => 168,  376 => 167,  373 => 166,  367 => 165,  357 => 158,  354 => 157,  351 => 156,  347 => 155,  344 => 154,  341 => 153,  338 => 152,  332 => 151,  322 => 144,  319 => 143,  316 => 142,  311 => 141,  305 => 140,  295 => 133,  292 => 132,  289 => 131,  284 => 130,  281 => 129,  278 => 128,  272 => 127,  261 => 119,  253 => 113,  250 => 112,  246 => 111,  243 => 110,  240 => 109,  238 => 108,  226 => 98,  216 => 90,  207 => 83,  204 => 82,  191 => 75,  187 => 74,  179 => 69,  173 => 65,  168 => 64,  166 => 63,  153 => 52,  142 => 43,  133 => 36,  130 => 35,  119 => 30,  113 => 27,  107 => 23,  102 => 22,  100 => 21,  91 => 15,  86 => 12,  83 => 11,  81 => 10,  74 => 9,  63 => 5,  60 => 4,  53 => 3,  36 => 1,);
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
\t{% if userInfo.roles[0] == \"IT SERVICE\"  %}
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
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
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
\t\t\t\t{% if userInfo.roles[0] == \"ROLE_ADMIN\" or userInfo.roles[0] == \"SUPER ADMIN\" %}

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
\t\t\t\t{% if userInfo.roles[0] == \"IT SERVICE\" %}
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
