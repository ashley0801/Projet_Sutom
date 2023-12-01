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

/* game/lost.html.twig */
class __TwigTemplate_95d68788429573fac10cd28283ffee58 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/lost.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/lost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/lost.html.twig", 1);
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

        echo "Perdu";
        
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
        echo "<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #333;
        color: white;
        text-align: center;
    }
    
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
    }

    .likes {
        color: red;
        font-size: 24px;
    }

    .rating {
        color: #FFD700; /* Gold color for stars */
    }

    .star {
        font-size: 30px;
        line-height: 1;
    }

    .star.filled {
        color: #FFD700;
    }

    .heart {
        color: red;
        font-size: 24px;
    }

    h1 {
        margin-top: 50px;
        font-size: 48px;
    }

    p {
        font-size: 20px;
    }

    form {
        margin: 20px 0;
    }

    form input[type='checkbox'] {
        margin-right: 10px;
    }

    form select {
        margin-right: 10px;
    }

    button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    a:hover {
        text-decoration: underline;
    }

    .info {
        font-size: 18px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 93
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 94
        echo "<div class=\"container\">
    <h1>Dommage !</h1>
    <p>Vous n'avez pas réussi à deviner le mot du ";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 96, $this->source); })()), "html", null, true);
        echo ". Essayez encore !</p>
    <div class=\"likes\">
        <span class=\"heart\">❤</span> ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["likesCount"]) || array_key_exists("likesCount", $context) ? $context["likesCount"] : (function () { throw new RuntimeError('Variable "likesCount" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "
    </div>
  
    <div class=\"rating\">
        ";
        // line 102
        $context["maxStars"] = 5;
        // line 103
        echo "        ";
        $context["fullStars"] = twig_round((isset($context["averageRate"]) || array_key_exists("averageRate", $context) ? $context["averageRate"] : (function () { throw new RuntimeError('Variable "averageRate" does not exist.', 103, $this->source); })()), 0, "floor");
        // line 104
        echo "        ";
        $context["halfStar"] = (((isset($context["averageRate"]) || array_key_exists("averageRate", $context) ? $context["averageRate"] : (function () { throw new RuntimeError('Variable "averageRate" does not exist.', 104, $this->source); })()) - (isset($context["fullStars"]) || array_key_exists("fullStars", $context) ? $context["fullStars"] : (function () { throw new RuntimeError('Variable "fullStars" does not exist.', 104, $this->source); })())) >= 0.5);
        // line 105
        echo "        ";
        $context["emptyStars"] = (((isset($context["maxStars"]) || array_key_exists("maxStars", $context) ? $context["maxStars"] : (function () { throw new RuntimeError('Variable "maxStars" does not exist.', 105, $this->source); })()) - (isset($context["fullStars"]) || array_key_exists("fullStars", $context) ? $context["fullStars"] : (function () { throw new RuntimeError('Variable "fullStars" does not exist.', 105, $this->source); })())) - (((isset($context["halfStar"]) || array_key_exists("halfStar", $context) ? $context["halfStar"] : (function () { throw new RuntimeError('Variable "halfStar" does not exist.', 105, $this->source); })())) ? (1) : (0)));
        // line 106
        echo "
        ";
        // line 108
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["fullStars"]) || array_key_exists("fullStars", $context) ? $context["fullStars"] : (function () { throw new RuntimeError('Variable "fullStars" does not exist.', 108, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 109
            echo "            <span class=\"star filled\">★</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
        ";
        // line 113
        echo "        ";
        if ((isset($context["halfStar"]) || array_key_exists("halfStar", $context) ? $context["halfStar"] : (function () { throw new RuntimeError('Variable "halfStar" does not exist.', 113, $this->source); })())) {
            // line 114
            echo "            <span class=\"star half-filled\">★</span>
        ";
        }
        // line 116
        echo "
        ";
        // line 118
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyStars"]) || array_key_exists("emptyStars", $context) ? $context["emptyStars"] : (function () { throw new RuntimeError('Variable "emptyStars" does not exist.', 118, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 119
            echo "            <span class=\"star\">☆</span>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "    </div>
    
    ";
        // line 124
        echo "    <form method=\"post\">
        <input type=\"checkbox\" name=\"like\"> J'aime ce mot<br>
        Notez le mot: 
        <select name=\"rate\">
            <option value=\"1\">1</option>
            <option value=\"2\">2</option>
            <option value=\"3\">3</option>
            <option value=\"4\">4</option>
            <option value=\"5\">5</option>
        </select><br>
        <button type=\"submit\">Soumettre</button>
    </form>

    <a href=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("game", ["date" => (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 137, $this->source); })())]), "html", null, true);
        echo "\">Retour au jeu</a>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/lost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 137,  265 => 124,  261 => 121,  254 => 119,  249 => 118,  246 => 116,  242 => 114,  239 => 113,  236 => 111,  229 => 109,  224 => 108,  221 => 106,  218 => 105,  215 => 104,  212 => 103,  210 => 102,  203 => 98,  198 => 96,  194 => 94,  184 => 93,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Perdu{% endblock %}

{% block stylesheets %}
<style>
      body {
        font-family: Arial, sans-serif;
        background-color: #333;
        color: white;
        text-align: center;
    }
    
    .container {
        max-width: 600px;
        margin: auto;
        padding: 20px;
    }

    .likes {
        color: red;
        font-size: 24px;
    }

    .rating {
        color: #FFD700; /* Gold color for stars */
    }

    .star {
        font-size: 30px;
        line-height: 1;
    }

    .star.filled {
        color: #FFD700;
    }

    .heart {
        color: red;
        font-size: 24px;
    }

    h1 {
        margin-top: 50px;
        font-size: 48px;
    }

    p {
        font-size: 20px;
    }

    form {
        margin: 20px 0;
    }

    form input[type='checkbox'] {
        margin-right: 10px;
    }

    form select {
        margin-right: 10px;
    }

    button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }

    a {
        color: #fff;
        text-decoration: none;
        font-size: 18px;
    }

    a:hover {
        text-decoration: underline;
    }

    .info {
        font-size: 18px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Dommage !</h1>
    <p>Vous n'avez pas réussi à deviner le mot du {{ date }}. Essayez encore !</p>
    <div class=\"likes\">
        <span class=\"heart\">❤</span> {{ likesCount }}
    </div>
  
    <div class=\"rating\">
        {% set maxStars = 5 %}
        {% set fullStars = averageRate|round(0, 'floor') %}
        {% set halfStar = averageRate - fullStars >= 0.5 %}
        {% set emptyStars = maxStars - fullStars - (halfStar ? 1 : 0) %}

        {# Display full stars #}
        {% for i in 1..fullStars %}
            <span class=\"star filled\">★</span>
        {% endfor %}

        {# Display half star if needed #}
        {% if halfStar %}
            <span class=\"star half-filled\">★</span>
        {% endif %}

        {# Display empty stars #}
        {% for i in 1..emptyStars %}
            <span class=\"star\">☆</span>
        {% endfor %}
    </div>
    
    {# Formulaire pour liker et noter le mot #}
    <form method=\"post\">
        <input type=\"checkbox\" name=\"like\"> J'aime ce mot<br>
        Notez le mot: 
        <select name=\"rate\">
            <option value=\"1\">1</option>
            <option value=\"2\">2</option>
            <option value=\"3\">3</option>
            <option value=\"4\">4</option>
            <option value=\"5\">5</option>
        </select><br>
        <button type=\"submit\">Soumettre</button>
    </form>

    <a href=\"{{ path('game', {'date': date}) }}\">Retour au jeu</a>
</div>
{% endblock %}
", "game/lost.html.twig", "/var/www/templates/game/lost.html.twig");
    }
}
