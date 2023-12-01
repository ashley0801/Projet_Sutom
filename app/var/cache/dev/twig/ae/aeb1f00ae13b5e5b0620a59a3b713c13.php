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

/* friend/show_friends.html.twig */
class __TwigTemplate_ddb2dcf75519acb68e99edb9222f83c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/show_friends.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/show_friends.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "friend/show_friends.html.twig", 3);
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

        echo "Liste des Amis";
        
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

    /* Styles spécifiques pour show_friends */
    .friends-list {
        list-style-type: none; /* Pas de puces */
        padding: 0; /* Pas de padding par défaut */
        margin: 0; /* Pas de marges par défaut */
    }

    .friend-item {
        background-color: #4f4f4f; /* Couleur de fond pour chaque ami */
        padding: 15px; /* Espace intérieur */
        margin-bottom: 10px; /* Espace entre les amis */
        border-radius: 4px; /* Coins arrondis */
        color: white; /* Texte blanc */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 77
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_profil");
        echo "\">👤</a>
        <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_friends");
        echo "\">👥</a>
        <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_friend");
        echo "\">➕</a>
        <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pending_friend_requests");
        echo "\">👥?</a>
    </div>

    <div class=\"main-content\">
        <h1>Liste des Amis</h1>

        ";
        // line 89
        if (twig_test_empty((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 89, $this->source); })()))) {
            // line 90
            echo "            <p>Vous n'avez pas encore d'amis.</p>
        ";
        } else {
            // line 92
            echo "            <ul class=\"friends-list\">
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
                // line 94
                echo "    <li class=\"friend-item\">
        ";
                // line 95
                $context["friendId"] = (((twig_get_attribute($this->env, $this->source, $context["friend"], "user1", [], "any", false, false, false, 95) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95))) ? (twig_get_attribute($this->env, $this->source, $context["friend"], "user2", [], "any", false, false, false, 95)) : (twig_get_attribute($this->env, $this->source, $context["friend"], "user1", [], "any", false, false, false, 95)));
                // line 96
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usernames"]) || array_key_exists("usernames", $context) ? $context["usernames"] : (function () { throw new RuntimeError('Variable "usernames" does not exist.', 96, $this->source); })()), (isset($context["friendId"]) || array_key_exists("friendId", $context) ? $context["friendId"] : (function () { throw new RuntimeError('Variable "friendId" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), "html", null, true);
                echo "
    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "


            </ul>
        ";
        }
        // line 104
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "friend/show_friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 104,  230 => 99,  220 => 96,  218 => 95,  215 => 94,  211 => 93,  208 => 92,  204 => 90,  202 => 89,  193 => 83,  189 => 82,  185 => 81,  181 => 80,  177 => 78,  167 => 77,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/friend/show_friends.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des Amis{% endblock %}

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

    /* Styles spécifiques pour show_friends */
    .friends-list {
        list-style-type: none; /* Pas de puces */
        padding: 0; /* Pas de padding par défaut */
        margin: 0; /* Pas de marges par défaut */
    }

    .friend-item {
        background-color: #4f4f4f; /* Couleur de fond pour chaque ami */
        padding: 15px; /* Espace intérieur */
        margin-bottom: 10px; /* Espace entre les amis */
        border-radius: 4px; /* Coins arrondis */
        color: white; /* Texte blanc */
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
        <h1>Liste des Amis</h1>

        {% if friends is empty %}
            <p>Vous n'avez pas encore d'amis.</p>
        {% else %}
            <ul class=\"friends-list\">
                {% for friend in friends %}
    <li class=\"friend-item\">
        {% set friendId = friend.user1 == app.user.id ? friend.user2 : friend.user1 %}
        {{ usernames[friendId] }}
    </li>
{% endfor %}



            </ul>
        {% endif %}
    </div>
</div>
{% endblock %}
", "friend/show_friends.html.twig", "/var/www/templates/friend/show_friends.html.twig");
    }
}
