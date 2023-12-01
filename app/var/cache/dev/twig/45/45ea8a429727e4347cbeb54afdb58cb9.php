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

/* friend/pending_friend_requests.html.twig */
class __TwigTemplate_ba7ba5212ae9688880a51aaab301bacc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/pending_friend_requests.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friend/pending_friend_requests.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "friend/pending_friend_requests.html.twig", 3);
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

        echo "Demandes d'amitié en attente";
        
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

    /* Styles spécifiques pour pending_friend_requests */
    .friend-requests-list {
        list-style-type: none; /* Supprime les puces de liste */
        padding: 0; /* Supprime le padding par défaut */
    }

    .friend-request-item {
        background-color: #4f4f4f; /* Couleur de fond pour chaque élément de la demande */
        padding: 15px; /* Espace intérieur pour chaque élément de la demande */
        margin-bottom: 10px; /* Espace entre les éléments de la demande */
        border-radius: 4px; /* Coins arrondis pour les éléments */
    }

    .friend-request-action {
        padding: 10px 15px;
        background: #555; /* Couleur de fond pour les boutons */
        color: white; /* Couleur du texte pour les boutons */
        text-decoration: none; /* Pas de soulignement pour les liens */
        border-radius: 4px; /* Coins arrondis pour les boutons */
        margin-right: 10px; /* Espace entre les boutons */
    }

    .friend-request-action:hover {
        background-color: #666; /* Couleur de fond au survol pour les boutons */
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
        <h1>Demandes d'amitié en attente</h1>
        ";
        // line 99
        if (twig_test_empty((isset($context["pendingRequests"]) || array_key_exists("pendingRequests", $context) ? $context["pendingRequests"] : (function () { throw new RuntimeError('Variable "pendingRequests" does not exist.', 99, $this->source); })()))) {
            // line 100
            echo "            <p>Vous n'avez pas de demandes d'amitié en attente.</p>
        ";
        } else {
            // line 102
            echo "            <ul class=\"friend-requests-list\">
                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pendingRequests"]) || array_key_exists("pendingRequests", $context) ? $context["pendingRequests"] : (function () { throw new RuntimeError('Variable "pendingRequests" does not exist.', 103, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 104
                echo "    <li class=\"friend-request-item\">
        ";
                // line 105
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usernames"]) || array_key_exists("usernames", $context) ? $context["usernames"] : (function () { throw new RuntimeError('Variable "usernames" does not exist.', 105, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["request"], "getUser1", [], "method", false, false, false, 105), [], "array", false, false, false, 105), "html", null, true);
                echo " vous a envoyé une demande d'amitié.
        <a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accept_friend_request", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                echo "\" class=\"friend-request-action\">Accepter</a>
        <a href=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_decline_friend_request", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 107)]), "html", null, true);
                echo "\" class=\"friend-request-action\">Refuser</a>
    </li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            </ul>
        ";
        }
        // line 112
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "friend/pending_friend_requests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 112,  245 => 110,  236 => 107,  232 => 106,  228 => 105,  225 => 104,  221 => 103,  218 => 102,  214 => 100,  212 => 99,  204 => 94,  200 => 93,  196 => 92,  192 => 91,  188 => 89,  178 => 88,  89 => 8,  79 => 7,  60 => 5,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/friend/pending_friend_requests.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Demandes d'amitié en attente{% endblock %}

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

    /* Styles spécifiques pour pending_friend_requests */
    .friend-requests-list {
        list-style-type: none; /* Supprime les puces de liste */
        padding: 0; /* Supprime le padding par défaut */
    }

    .friend-request-item {
        background-color: #4f4f4f; /* Couleur de fond pour chaque élément de la demande */
        padding: 15px; /* Espace intérieur pour chaque élément de la demande */
        margin-bottom: 10px; /* Espace entre les éléments de la demande */
        border-radius: 4px; /* Coins arrondis pour les éléments */
    }

    .friend-request-action {
        padding: 10px 15px;
        background: #555; /* Couleur de fond pour les boutons */
        color: white; /* Couleur du texte pour les boutons */
        text-decoration: none; /* Pas de soulignement pour les liens */
        border-radius: 4px; /* Coins arrondis pour les boutons */
        margin-right: 10px; /* Espace entre les boutons */
    }

    .friend-request-action:hover {
        background-color: #666; /* Couleur de fond au survol pour les boutons */
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
        <h1>Demandes d'amitié en attente</h1>
        {% if pendingRequests is empty %}
            <p>Vous n'avez pas de demandes d'amitié en attente.</p>
        {% else %}
            <ul class=\"friend-requests-list\">
                {% for request in pendingRequests %}
    <li class=\"friend-request-item\">
        {{ usernames[request.getUser1()] }} vous a envoyé une demande d'amitié.
        <a href=\"{{ path('app_accept_friend_request', {'id': request.id}) }}\" class=\"friend-request-action\">Accepter</a>
        <a href=\"{{ path('app_decline_friend_request', {'id': request.id}) }}\" class=\"friend-request-action\">Refuser</a>
    </li>
{% endfor %}
            </ul>
        {% endif %}
    </div>
</div>
{% endblock %}

", "friend/pending_friend_requests.html.twig", "/var/www/templates/friend/pending_friend_requests.html.twig");
    }
}
