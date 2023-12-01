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

/* friends/list.html.twig */
class __TwigTemplate_c8efccdcbd21aab3ab46fe3113cf8285 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friends/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "friends/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "friends/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style>
/* Reset some basic elements */
body, h1, p, img, a {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

/* Apply a natural box layout model to all elements */
*, *:before, *:after {
  box-sizing: border-box;
}

/* Body and container styles */
body {
  background-color: #343a40;
  color: #fff;
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
}

/* Sidebar styles */
.sidebar {
  width: 20%;
  background-color: #23272b;
  height: 100vh;
  padding: 20px 0;
}

.sidebar img {
  display: block;
  margin: 0 auto 20px;
}

/* Content styles */
.content {
  width: 80%;
  padding: 20px;
}

.content h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

/* Friends list styles */
.friends-list {
  background: #fff;
  border-radius: 10px;
  padding: 20px;
  color: #000;
}

.friend {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.friend:last-child {
  margin-bottom: 0;
}

.friend img {
  border-radius: 50%;
  margin-right: 10px;
}

.friend p {
  flex: 1;
}

/* Button styles */
.remove-friend-btn {
  background-color: #dc3545;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 15px;
  cursor: pointer;
  outline: none;
}

.remove-friend-btn:hover {
  background-color: #c82333;
}
.friend-avatar {
    width: 50px; /* Ajustez la taille selon vos besoins */
    height: 50px;
    border-radius: 50%; /* Cela crée l'effet d'avatar rond */
}
.label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}


/* Add any additional styling you need below */

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 116
        echo "<div class=\"sidebar\">
    <!-- Ici, ajoutez la structure de votre barre latérale -->
</div>

<div class=\"content\">
    <h1>Liste des amis</h1>
    <div class=\"friends-list\">
        ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 123, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friendship"]) {
            // line 124
            echo "            <div class=\"friend\">
                <img src=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["friendship"], "friend", [], "any", false, false, false, 125), "avatarBase64", [], "any", false, false, false, 125), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["friendship"], "friend", [], "any", false, false, false, 125), "username", [], "any", false, false, false, 125), "html", null, true);
            echo "\" class=\"friend-avatar\">
                <div class=\"friend-info\">
                    <span class=\"label\">Player</span>
                    <p class=\"friend-name\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["friendship"], "friend", [], "any", false, false, false, 128), "username", [], "any", false, false, false, 128), "html", null, true);
            echo "</p>
                    <form action=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("friend_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["friendship"], "friend", [], "any", false, false, false, 129), "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\" method=\"post\" class=\"form-remove-friend\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["friendship"], "friend", [], "any", false, false, false, 130), "id", [], "any", false, false, false, 130))), "html", null, true);
            echo "\">
                        <button type=\"submit\" class=\"remove-friend-btn\">Supprimer</button>
                    </form>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "            <p>Vous n'avez aucun ami pour le moment.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friendship'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "    </div>
     <a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("friend_add");
        echo "\" class=\"add-friends-link\">Ajouter des amis</a>

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "friends/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 139,  249 => 138,  242 => 136,  231 => 130,  227 => 129,  223 => 128,  215 => 125,  212 => 124,  207 => 123,  198 => 116,  188 => 115,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
<style>
/* Reset some basic elements */
body, h1, p, img, a {
  margin: 0;
  padding: 0;
  border: 0;
  font-size: 100%;
  font: inherit;
  vertical-align: baseline;
}

/* Apply a natural box layout model to all elements */
*, *:before, *:after {
  box-sizing: border-box;
}

/* Body and container styles */
body {
  background-color: #343a40;
  color: #fff;
  font-family: 'Arial', sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
}

/* Sidebar styles */
.sidebar {
  width: 20%;
  background-color: #23272b;
  height: 100vh;
  padding: 20px 0;
}

.sidebar img {
  display: block;
  margin: 0 auto 20px;
}

/* Content styles */
.content {
  width: 80%;
  padding: 20px;
}

.content h1 {
  font-size: 24px;
  margin-bottom: 20px;
}

/* Friends list styles */
.friends-list {
  background: #fff;
  border-radius: 10px;
  padding: 20px;
  color: #000;
}

.friend {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.friend:last-child {
  margin-bottom: 0;
}

.friend img {
  border-radius: 50%;
  margin-right: 10px;
}

.friend p {
  flex: 1;
}

/* Button styles */
.remove-friend-btn {
  background-color: #dc3545;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 15px;
  cursor: pointer;
  outline: none;
}

.remove-friend-btn:hover {
  background-color: #c82333;
}
.friend-avatar {
    width: 50px; /* Ajustez la taille selon vos besoins */
    height: 50px;
    border-radius: 50%; /* Cela crée l'effet d'avatar rond */
}
.label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}


/* Add any additional styling you need below */

</style>
{% endblock %}

{% block body %}
<div class=\"sidebar\">
    <!-- Ici, ajoutez la structure de votre barre latérale -->
</div>

<div class=\"content\">
    <h1>Liste des amis</h1>
    <div class=\"friends-list\">
        {% for friendship in friends %}
            <div class=\"friend\">
                <img src=\"{{ friendship.friend.avatarBase64 }}\" alt=\"Avatar de {{ friendship.friend.username }}\" class=\"friend-avatar\">
                <div class=\"friend-info\">
                    <span class=\"label\">Player</span>
                    <p class=\"friend-name\">{{ friendship.friend.username }}</p>
                    <form action=\"{{ path('friend_remove', {'id': friendship.friend.id}) }}\" method=\"post\" class=\"form-remove-friend\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ friendship.friend.id) }}\">
                        <button type=\"submit\" class=\"remove-friend-btn\">Supprimer</button>
                    </form>
                </div>
            </div>
        {% else %}
            <p>Vous n'avez aucun ami pour le moment.</p>
        {% endfor %}
    </div>
     <a href=\"{{ path('friend_add') }}\" class=\"add-friends-link\">Ajouter des amis</a>

</div>

{% endblock %}
", "friends/list.html.twig", "/var/www/templates/friends/list.html.twig");
    }
}
