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

/* gestion-profil/gestion_profil.html.twig */
class __TwigTemplate_99a983af722fae78a6d46c16a4aed7e1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion-profil/gestion_profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion-profil/gestion_profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion-profil/gestion_profil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion de Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
<style>
    body, html {
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: #333; /* Dark background for the whole page */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-family: Arial, sans-serif;
}

/* Wrapper styles */
.wrapper {
    display: flex; /* Display sidebar and content next to each other */
    align-items: flex-start; /* Align the top of the sidebar and content */
    background-color: #FFF; /* White background around the wrapper */
    padding: 20px; /* Space around the outside of the wrapper */
    border-radius: 10px; /* Rounded corners on the wrapper */
}

/* Sidebar styles */
.sidebar {
    display: flex; /* Stack icons vertically */
    flex-direction: column;
    justify-content: center; /* Center icons vertically */
    background-color: #222; /* Darker grey for the sidebar */
    padding: 20px;
    border-radius: 10px 0 0 10px; /* Rounded corners on the left side of the sidebar */
}

.sidebar a {
    color: #ddd;
    margin: 10px 0; /* Space between icons */
    text-align: center;
    font-size: 22px;
}

.sidebar a:hover {
    color: #fff;
}

/* Content styles */
.main-content {
    flex-grow: 1; /* Take up the remaining space */
    background-color: #4f4f4f; /* Lighter grey for the content area */
    padding: 40px; /* Space inside the rectangle */
    border-radius: 0 10px 10px 0; /* Rounded corners on the right side of the content */
}

/* Profile styles */
.profile-info {
    text-align: left; /* Align text to the left inside the main content */
}

.profile-action {
    margin-top: 20px; /* Space above the action buttons */
    display: block; /* Full-width buttons */
    width: 100%;
    padding: 10px;
    background: #555;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center; /* Center the text in the buttons */
}

.profile-action:not(:last-child) {
    margin-bottom: 10px; /* Space between buttons */
}

    .avatar {
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 89
        echo "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_profil");
        echo "\">👤</a>
        <a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_friends");
        echo "\">👥</a>
        <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_friend");
        echo "\">➕</a>
        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pending_friend_requests");
        echo "\">👥?</a>
    </div>
    <div class=\"main-content\">
        <h1>Gestion de Profil</h1>
        ";
        // line 98
        if ((isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })())) {
            // line 99
            echo "            <div class=\"profile-info\">
                ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "avatar", [], "any", false, false, false, 100)) {
                // line 101
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "avatar", [], "any", false, false, false, 101))), "html", null, true);
                echo "\" alt=\"Avatar de l'utilisateur\" class=\"avatar\">
                ";
            } else {
                // line 103
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                echo "\" alt=\"Avatar par défaut\" class=\"avatar\">
                ";
            }
            // line 105
            echo "                <p>Nom d'utilisateur : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "username", [], "any", false, false, false, 105), "html", null, true);
            echo "</p>
                <p>Description : ";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "description", [], "any", false, false, false, 106), "html", null, true);
            echo "</p>
                <p>Âge : ";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "age", [], "any", false, false, false, 107), "html", null, true);
            echo "</p>
            </div>
             <div>
                <button class=\"profile-action\" onclick=\"location.href='";
            // line 110
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modification_profil");
            echo "'\">
                    <i class=\"fa fa-edit\"></i> Modifier
                </button>
                <button class=\"profile-action\" onclick=\"if (confirm('Voulez-vous vraiment supprimer votre compte ?')) { location.href='";
            // line 113
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_account");
            echo "'; }\">
                    <i class=\"fa fa-trash\"></i> Supprimer
                </button>
            </div>
        ";
        } else {
            // line 118
            echo "            <p>Aucun utilisateur connecté.</p>
        ";
        }
        // line 120
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion-profil/gestion_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 120,  261 => 118,  253 => 113,  247 => 110,  241 => 107,  237 => 106,  232 => 105,  226 => 103,  220 => 101,  218 => 100,  215 => 99,  213 => 98,  206 => 94,  202 => 93,  198 => 92,  194 => 91,  190 => 89,  180 => 88,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion de Profil{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    body, html {
    height: 100%;
    margin: 0;
    padding: 0;
    background-color: #333; /* Dark background for the whole page */
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-family: Arial, sans-serif;
}

/* Wrapper styles */
.wrapper {
    display: flex; /* Display sidebar and content next to each other */
    align-items: flex-start; /* Align the top of the sidebar and content */
    background-color: #FFF; /* White background around the wrapper */
    padding: 20px; /* Space around the outside of the wrapper */
    border-radius: 10px; /* Rounded corners on the wrapper */
}

/* Sidebar styles */
.sidebar {
    display: flex; /* Stack icons vertically */
    flex-direction: column;
    justify-content: center; /* Center icons vertically */
    background-color: #222; /* Darker grey for the sidebar */
    padding: 20px;
    border-radius: 10px 0 0 10px; /* Rounded corners on the left side of the sidebar */
}

.sidebar a {
    color: #ddd;
    margin: 10px 0; /* Space between icons */
    text-align: center;
    font-size: 22px;
}

.sidebar a:hover {
    color: #fff;
}

/* Content styles */
.main-content {
    flex-grow: 1; /* Take up the remaining space */
    background-color: #4f4f4f; /* Lighter grey for the content area */
    padding: 40px; /* Space inside the rectangle */
    border-radius: 0 10px 10px 0; /* Rounded corners on the right side of the content */
}

/* Profile styles */
.profile-info {
    text-align: left; /* Align text to the left inside the main content */
}

.profile-action {
    margin-top: 20px; /* Space above the action buttons */
    display: block; /* Full-width buttons */
    width: 100%;
    padding: 10px;
    background: #555;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center; /* Center the text in the buttons */
}

.profile-action:not(:last-child) {
    margin-bottom: 10px; /* Space between buttons */
}

    .avatar {
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <div class=\"sidebar\">
        <a href=\"{{ path('gestion_profil') }}\">👤</a>
        <a href=\"{{ path('app_friends') }}\">👥</a>
        <a href=\"{{ path('app_add_friend') }}\">➕</a>
        <a href=\"{{ path('app_pending_friend_requests') }}\">👥?</a>
    </div>
    <div class=\"main-content\">
        <h1>Gestion de Profil</h1>
        {% if user %}
            <div class=\"profile-info\">
                {% if user.avatar %}
                    <img src=\"{{ asset('images/avatars/' ~ user.avatar) }}\" alt=\"Avatar de l'utilisateur\" class=\"avatar\">
                {% else %}
                    <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar par défaut\" class=\"avatar\">
                {% endif %}
                <p>Nom d'utilisateur : {{ user.username }}</p>
                <p>Description : {{ user.description }}</p>
                <p>Âge : {{ user.age }}</p>
            </div>
             <div>
                <button class=\"profile-action\" onclick=\"location.href='{{ path('modification_profil') }}'\">
                    <i class=\"fa fa-edit\"></i> Modifier
                </button>
                <button class=\"profile-action\" onclick=\"if (confirm('Voulez-vous vraiment supprimer votre compte ?')) { location.href='{{ path('delete_account') }}'; }\">
                    <i class=\"fa fa-trash\"></i> Supprimer
                </button>
            </div>
        {% else %}
            <p>Aucun utilisateur connecté.</p>
        {% endif %}
    </div>
</div>
{% endblock %}

", "gestion-profil/gestion_profil.html.twig", "/var/www/templates/gestion-profil/gestion_profil.html.twig");
    }
}
