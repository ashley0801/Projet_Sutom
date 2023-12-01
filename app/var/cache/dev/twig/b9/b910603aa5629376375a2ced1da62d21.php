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

/* friend/add_friend.html.twig */
class __TwigTemplate_265beb7f4d0e44827222ee44e39e9dc3 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/add_friend.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/add_friend.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "friend/add_friend.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Ajouter un Ami";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
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

    /* Styles spécifiques pour add_friend */
    .add-friend-form {
        text-align: left; /* Aligner le texte à gauche dans le contenu principal */
    }

    .add-friend-action {
        margin-top: 20px; /* Espace au-dessus du bouton d'action */
        display: block; /* Bouton en pleine largeur */
        width: 100%;
        padding: 10px;
        background: #555;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center; /* Centrer le texte dans le bouton */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_profil");
        echo "\">👤</a>
        <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_friends");
        echo "\">👥</a>
        <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_friend");
        echo "\">➕</a>
        <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pending_friend_requests");
        echo "\">👥?</a>
    </div>

    <div class=\"main-content\">
        <h1>Ajouter un Ami</h1>

        <div class=\"add-friend-form\">
            ";
        // line 93
        if (array_key_exists("errorMessage", $context)) {
            // line 94
            echo "                <p style=\"color: red;\">";
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 94, $this->source); })()), "html", null, true);
            echo "</p>
            ";
        }
        // line 96
        echo "
            <form method=\"post\" action=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_friend");
        echo "\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("add_friend"), "html", null, true);
        echo "\">

                <label for=\"username\">Nom d'utilisateur de l'ami :</label>
                <input type=\"text\" id=\"username\" name=\"username\" required>

                <button type=\"submit\" class=\"add-friend-action\">Ajouter</button>
            </form>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "friend/add_friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 98,  217 => 97,  214 => 96,  208 => 94,  206 => 93,  196 => 86,  192 => 85,  188 => 84,  184 => 83,  180 => 81,  170 => 80,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/friend/add_friend.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Ajouter un Ami{% endblock %}

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

    /* Styles spécifiques pour add_friend */
    .add-friend-form {
        text-align: left; /* Aligner le texte à gauche dans le contenu principal */
    }

    .add-friend-action {
        margin-top: 20px; /* Espace au-dessus du bouton d'action */
        display: block; /* Bouton en pleine largeur */
        width: 100%;
        padding: 10px;
        background: #555;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center; /* Centrer le texte dans le bouton */
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
        <h1>Ajouter un Ami</h1>

        <div class=\"add-friend-form\">
            {% if errorMessage is defined %}
                <p style=\"color: red;\">{{ errorMessage }}</p>
            {% endif %}

            <form method=\"post\" action=\"{{ path('app_add_friend') }}\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('add_friend') }}\">

                <label for=\"username\">Nom d'utilisateur de l'ami :</label>
                <input type=\"text\" id=\"username\" name=\"username\" required>

                <button type=\"submit\" class=\"add-friend-action\">Ajouter</button>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "friend/add_friend.html.twig", "/var/www/templates/friend/add_friend.html.twig");
    }
}
