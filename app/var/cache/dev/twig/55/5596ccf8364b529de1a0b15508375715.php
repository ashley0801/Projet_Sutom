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

/* game/index.html.twig */
class __TwigTemplate_abdb3748c7eb06cd10f65a405f151640 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "game/index.html.twig", 1);
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

        echo "Devinez le mot";
        
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

    h1 {
        color: #EEE;
        margin-top: 50px;
    }

    #game-board {
        margin-bottom: 20px;
        display: inline-block;
        background-color: #555;
        padding: 10px;
        border-radius: 10px;
    }

    .attempt {
        margin-bottom: 5px;
    }

    .letter {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border: 2px solid #777;
        text-align: center;
        margin-right: 5px;
        font-size: 24px;
        font-weight: bold;
        color: white;
        /* Colors are based on the classes .red, .yellow, .green, .empty */
    }

    .letter.red {
        background-color: red;
    }

    .letter.yellow {
        background-color: yellow;
        color: black; /* Pour assurer la lisibilité du texte sur fond jaune */
    }

    .letter.green {
        background-color: green;
    }

    .empty {
        background-color: #333; /* Same as body background for an \"empty\" effect */
    }

    input[type=text] {
        padding: 5px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
    }

    button {
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #1E90FF;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #5599FF;
    }

    .info {
        margin-top: 20px;
        font-size: 18px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 92
        echo "<h1>Devinez le mot pour ";
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "</h1>

";
        // line 94
        if ( !(isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 94, $this->source); })())) {
            // line 95
            echo "    <p class=\"info\">Il n'y a pas de mot du jour pour cette date.</p>
";
        } else {
            // line 97
            echo "    <div id=\"game-board\">
        ";
            // line 98
            $context["totalAttempts"] = 8;
            // line 99
            echo "        ";
            $context["attemptsMade"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["gameState"]) || array_key_exists("gameState", $context) ? $context["gameState"] : (function () { throw new RuntimeError('Variable "gameState" does not exist.', 99, $this->source); })()), "getAttempts", [], "any", false, false, false, 99));
            // line 100
            echo "        ";
            $context["emptyAttempts"] = ((isset($context["totalAttempts"]) || array_key_exists("totalAttempts", $context) ? $context["totalAttempts"] : (function () { throw new RuntimeError('Variable "totalAttempts" does not exist.', 100, $this->source); })()) - (isset($context["attemptsMade"]) || array_key_exists("attemptsMade", $context) ? $context["attemptsMade"] : (function () { throw new RuntimeError('Variable "attemptsMade" does not exist.', 100, $this->source); })()));
            // line 101
            echo "
        ";
            // line 103
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["gameState"]) || array_key_exists("gameState", $context) ? $context["gameState"] : (function () { throw new RuntimeError('Variable "gameState" does not exist.', 103, $this->source); })()), "getAttempts", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["attempt"]) {
                // line 104
                echo "            <div class=\"attempt\">
                ";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attempt"], "guess", [], "any", false, false, false, 105), ""));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["letter"]) {
                    // line 106
                    echo "                    ";
                    $context["hintColor"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["attempt"], "hints", [], "any", false, false, false, 106), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 106), [], "array", false, false, false, 106);
                    // line 107
                    echo "                    <span class=\"letter ";
                    echo twig_escape_filter($this->env, (isset($context["hintColor"]) || array_key_exists("hintColor", $context) ? $context["hintColor"] : (function () { throw new RuntimeError('Variable "hintColor" does not exist.', 107, $this->source); })()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["letter"], "html", null, true);
                    echo "</span>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['letter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 109
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attempt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "
        ";
            // line 113
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyAttempts"]) || array_key_exists("emptyAttempts", $context) ? $context["emptyAttempts"] : (function () { throw new RuntimeError('Variable "emptyAttempts" does not exist.', 113, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 114
                echo "            <div class=\"attempt\">
                ";
                // line 115
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 115, $this->source); })()))));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 116
                    echo "                    <span class=\"letter empty\">&nbsp;</span> ";
                    // line 117
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 118
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "    </div>

    ";
            // line 123
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, (isset($context["gameState"]) || array_key_exists("gameState", $context) ? $context["gameState"] : (function () { throw new RuntimeError('Variable "gameState" does not exist.', 123, $this->source); })()), "getRemainingTries", [], "any", false, false, false, 123) > 0) &&  !twig_get_attribute($this->env, $this->source, (isset($context["gameState"]) || array_key_exists("gameState", $context) ? $context["gameState"] : (function () { throw new RuntimeError('Variable "gameState" does not exist.', 123, $this->source); })()), "getHasWon", [], "any", false, false, false, 123))) {
                // line 124
                echo "        <form method=\"post\" id=\"guess-form\">
            <input type=\"text\" id=\"guess\" name=\"guess\" maxlength=\"";
                // line 125
                echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 125, $this->source); })())), "html", null, true);
                echo "\" required>
            <button type=\"submit\">Soumettre</button>
        </form>
    ";
            }
            // line 129
            echo "
  
";
        }
        // line 132
        echo "<script>
    document.getElementById('guess-form').addEventListener('submit', function(event) {
        var guessInput = document.getElementById('guess');
        var guessValue = guessInput.value.trim().toUpperCase(); // Trim and convert to uppercase for consistency

        // Ensure the guess is only letters and has the correct length
        var validGuess = /^[A-Za-z]+\$/.test(guessValue) && guessValue.length === ";
        // line 138
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 138, $this->source); })())), "html", null, true);
        echo ";

        if (!validGuess) {
            event.preventDefault(); // Prevent form submission
            alert('Votre devinette doit contenir uniquement des lettres et avoir la même longueur que le mot à deviner.');
            guessInput.focus(); // Refocus on the input element
        }
    });
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "game/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  332 => 138,  324 => 132,  319 => 129,  312 => 125,  309 => 124,  306 => 123,  302 => 120,  295 => 118,  289 => 117,  287 => 116,  283 => 115,  280 => 114,  275 => 113,  272 => 111,  265 => 109,  246 => 107,  243 => 106,  226 => 105,  223 => 104,  218 => 103,  215 => 101,  212 => 100,  209 => 99,  207 => 98,  204 => 97,  200 => 95,  198 => 94,  192 => 92,  182 => 91,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Devinez le mot{% endblock %}

{% block stylesheets %}
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #333;
        color: white;
        text-align: center;
    }

    h1 {
        color: #EEE;
        margin-top: 50px;
    }

    #game-board {
        margin-bottom: 20px;
        display: inline-block;
        background-color: #555;
        padding: 10px;
        border-radius: 10px;
    }

    .attempt {
        margin-bottom: 5px;
    }

    .letter {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border: 2px solid #777;
        text-align: center;
        margin-right: 5px;
        font-size: 24px;
        font-weight: bold;
        color: white;
        /* Colors are based on the classes .red, .yellow, .green, .empty */
    }

    .letter.red {
        background-color: red;
    }

    .letter.yellow {
        background-color: yellow;
        color: black; /* Pour assurer la lisibilité du texte sur fond jaune */
    }

    .letter.green {
        background-color: green;
    }

    .empty {
        background-color: #333; /* Same as body background for an \"empty\" effect */
    }

    input[type=text] {
        padding: 5px;
        margin-top: 20px;
        border-radius: 5px;
        border: none;
    }

    button {
        padding: 10px 20px;
        margin-top: 10px;
        border: none;
        border-radius: 5px;
        background-color: #1E90FF;
        color: white;
        font-size: 16px;
        cursor: pointer;
    }

    button:hover {
        background-color: #5599FF;
    }

    .info {
        margin-top: 20px;
        font-size: 18px;
    }
</style>
{% endblock %}

{% block body %}
<h1>Devinez le mot pour {{ date }}</h1>

{% if not word %}
    <p class=\"info\">Il n'y a pas de mot du jour pour cette date.</p>
{% else %}
    <div id=\"game-board\">
        {% set totalAttempts = 8 %}
        {% set attemptsMade = gameState.getAttempts|length %}
        {% set emptyAttempts = totalAttempts - attemptsMade %}

        {# Affichage des tentatives effectuées #}
        {% for attempt in gameState.getAttempts %}
            <div class=\"attempt\">
                {% for letter in attempt.guess|split('') %}
                    {% set hintColor = attempt.hints[loop.index0] %}
                    <span class=\"letter {{ hintColor }}\">{{ letter }}</span>
                {% endfor %}
            </div>
        {% endfor %}

        {# Affichage des tentatives vides s'il y en a #}
        {% for i in 1..emptyAttempts %}
            <div class=\"attempt\">
                {% for j in 1..word|length %}
                    <span class=\"letter empty\">&nbsp;</span> {# Espace insécable pour les lettres vides #}
                {% endfor %}
            </div>
        {% endfor %}
    </div>

    {# Formulaire de saisie des tentatives #}
    {% if gameState.getRemainingTries > 0 and not gameState.getHasWon %}
        <form method=\"post\" id=\"guess-form\">
            <input type=\"text\" id=\"guess\" name=\"guess\" maxlength=\"{{ word|length }}\" required>
            <button type=\"submit\">Soumettre</button>
        </form>
    {% endif %}

  
{% endif %}
<script>
    document.getElementById('guess-form').addEventListener('submit', function(event) {
        var guessInput = document.getElementById('guess');
        var guessValue = guessInput.value.trim().toUpperCase(); // Trim and convert to uppercase for consistency

        // Ensure the guess is only letters and has the correct length
        var validGuess = /^[A-Za-z]+\$/.test(guessValue) && guessValue.length === {{ word|length }};

        if (!validGuess) {
            event.preventDefault(); // Prevent form submission
            alert('Votre devinette doit contenir uniquement des lettres et avoir la même longueur que le mot à deviner.');
            guessInput.focus(); // Refocus on the input element
        }
    });
</script>
{% endblock %}", "game/index.html.twig", "/var/www/templates/game/index.html.twig");
    }
}
