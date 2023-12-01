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

/* calendar/show.html.twig */
class __TwigTemplate_ae63c347a482a22370f796cca53ad016 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "calendar/show.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Calendrier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "<style>
    body {
        background-color: #2c3e50;
        color: white;
        font-family: Arial, sans-serif;
    }

    #sutom-container {
        text-align: center;
        padding: 20px;
    }

    #calendar {
        margin: 0 auto;
        border-collapse: collapse;
        width: 60%;
        background-color: #3498db;
        color: #ffffff;
    }

    #calendar th {
        background-color: #2980b9;
        padding: 10px;
    }

    #calendar td {
        border: 1px solid #2c3e50;
        width: 14.28%;
        height: 100px; /* Adjust height as per your need */
        vertical-align: middle;
        cursor: pointer;
        font-size: 1.2em;
    }

    #calendar .empty {
        background-color: #34495e;
        cursor: default;
    }

    #calendar .day:hover:not(.empty) {
        background-color: #2980b9;
        transition: background-color 0.3s ease;
    }

    .word-of-day {
        margin-top: 10px;
        font-weight: bold;
    }
    .profile-icon {
        position: fixed;
        top: 10px;
        right: 10px;
        font-size: 30px;
        cursor: pointer;
        color: white; /* ou une autre couleur de votre choix */
    }

    .profile-icon:hover {
        color: #3498db; /* Couleur lors du survol de l'icône */
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "<div id=\"sutom-container\">
    <h1>SUTOM</h1>
    <!-- Icône de profil ajoutée ici -->
    <div class=\"profile-icon\" onclick=\"window.location.href='";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion_profil");
        echo "'\">
        &#128100; <!-- Symbole Unicode pour 'bonhomme' -->
    </div>


    <table id=\"calendar\">
        <!-- En-tête du tableau -->
        <thead>
            <tr>
                <th>Dim</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mer</th>
                <th>Jeu</th>
                <th>Ven</th>
                <th>Sam</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ici, nous construisons le calendrier mois par semaine -->
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_round((twig_length_filter($this->env, (isset($context["calendarDays"]) || array_key_exists("calendarDays", $context) ? $context["calendarDays"] : (function () { throw new RuntimeError('Variable "calendarDays" does not exist.', 94, $this->source); })())) / 7), 0, "ceil")));
        foreach ($context['_seq'] as $context["_key"] => $context["week"]) {
            // line 95
            echo "                <tr>
                    <!-- Boucle sur chaque jour de la semaine -->
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["dayOfWeek"]) {
                // line 98
                echo "                        ";
                $context["dayIndex"] = (((($context["week"] - 1) * 7) + $context["dayOfWeek"]) - 1);
                // line 99
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["calendarDays"] ?? null), (isset($context["dayIndex"]) || array_key_exists("dayIndex", $context) ? $context["dayIndex"] : (function () { throw new RuntimeError('Variable "dayIndex" does not exist.', 99, $this->source); })()), [], "array", true, true, false, 99)) {
                    // line 100
                    echo "                            ";
                    $context["dayInfo"] = twig_get_attribute($this->env, $this->source, (isset($context["calendarDays"]) || array_key_exists("calendarDays", $context) ? $context["calendarDays"] : (function () { throw new RuntimeError('Variable "calendarDays" does not exist.', 100, $this->source); })()), (isset($context["dayIndex"]) || array_key_exists("dayIndex", $context) ? $context["dayIndex"] : (function () { throw new RuntimeError('Variable "dayIndex" does not exist.', 100, $this->source); })()), [], "array", false, false, false, 100);
                    // line 101
                    echo "                            <td class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 101, $this->source); })()), "day", [], "any", false, false, false, 101)) ? ("day") : ("empty"));
                    echo "\" data-date=\"";
                    ((twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 101, $this->source); })()), "date", [], "any", false, false, false, 101)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 101, $this->source); })()), "date", [], "any", false, false, false, 101), "Y-m-d"), "html", null, true))) : (print ("")));
                    echo "\">
                                ";
                    // line 102
                    ((twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 102, $this->source); })()), "day", [], "any", false, false, false, 102)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 102, $this->source); })()), "day", [], "any", false, false, false, 102), "html", null, true))) : (print ("")));
                    echo "
                                ";
                    // line 103
                    if (twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 103, $this->source); })()), "word", [], "any", false, false, false, 103)) {
                        // line 104
                        echo "                                    <div class=\"word-of-day\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dayInfo"]) || array_key_exists("dayInfo", $context) ? $context["dayInfo"] : (function () { throw new RuntimeError('Variable "dayInfo" does not exist.', 104, $this->source); })()), "word", [], "any", false, false, false, 104), "html", null, true);
                        echo "</div>
                                ";
                    }
                    // line 106
                    echo "                            </td>
                        ";
                } else {
                    // line 108
                    echo "                            <td class=\"empty\"></td>
                        ";
                }
                // line 110
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dayOfWeek'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "        </tbody>
    </table>
</div>



<script>
// Code JavaScript pour gérer le clic sur un jour du calendrier
document.getElementById('calendar').addEventListener('click', function(event) {
    var target = event.target.closest('.day'); // Utilisez closest pour trouver le parent 'day' si nécessaire
    if (target) {
        // Vérifiez si le jour cliqué a un mot associé
        var wordOfTheDay = target.querySelector('.word-of-day');
        if (wordOfTheDay) {
            // Si un mot est associé, redirigez vers la page de jeu
            window.location.href = '/game/' + target.dataset.date;
        } else {
            // Sinon, affichez un message
            alert('Il n\\'y a pas encore de mots pour ce jour.');
        }
    }
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "calendar/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 113,  252 => 111,  246 => 110,  242 => 108,  238 => 106,  232 => 104,  230 => 103,  226 => 102,  219 => 101,  216 => 100,  213 => 99,  210 => 98,  206 => 97,  202 => 95,  198 => 94,  175 => 74,  170 => 71,  160 => 70,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/calendar/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Calendrier{% endblock %}

{% block stylesheets %}
<style>
    body {
        background-color: #2c3e50;
        color: white;
        font-family: Arial, sans-serif;
    }

    #sutom-container {
        text-align: center;
        padding: 20px;
    }

    #calendar {
        margin: 0 auto;
        border-collapse: collapse;
        width: 60%;
        background-color: #3498db;
        color: #ffffff;
    }

    #calendar th {
        background-color: #2980b9;
        padding: 10px;
    }

    #calendar td {
        border: 1px solid #2c3e50;
        width: 14.28%;
        height: 100px; /* Adjust height as per your need */
        vertical-align: middle;
        cursor: pointer;
        font-size: 1.2em;
    }

    #calendar .empty {
        background-color: #34495e;
        cursor: default;
    }

    #calendar .day:hover:not(.empty) {
        background-color: #2980b9;
        transition: background-color 0.3s ease;
    }

    .word-of-day {
        margin-top: 10px;
        font-weight: bold;
    }
    .profile-icon {
        position: fixed;
        top: 10px;
        right: 10px;
        font-size: 30px;
        cursor: pointer;
        color: white; /* ou une autre couleur de votre choix */
    }

    .profile-icon:hover {
        color: #3498db; /* Couleur lors du survol de l'icône */
    }
</style>
{% endblock %}

{% block body %}
<div id=\"sutom-container\">
    <h1>SUTOM</h1>
    <!-- Icône de profil ajoutée ici -->
    <div class=\"profile-icon\" onclick=\"window.location.href='{{ path('gestion_profil') }}'\">
        &#128100; <!-- Symbole Unicode pour 'bonhomme' -->
    </div>


    <table id=\"calendar\">
        <!-- En-tête du tableau -->
        <thead>
            <tr>
                <th>Dim</th>
                <th>Lun</th>
                <th>Mar</th>
                <th>Mer</th>
                <th>Jeu</th>
                <th>Ven</th>
                <th>Sam</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ici, nous construisons le calendrier mois par semaine -->
            {% for week in 1..(calendarDays|length / 7)|round(0, 'ceil') %}
                <tr>
                    <!-- Boucle sur chaque jour de la semaine -->
                    {% for dayOfWeek in 1..7 %}
                        {% set dayIndex = (week - 1) * 7 + dayOfWeek - 1 %}
                        {% if calendarDays[dayIndex] is defined %}
                            {% set dayInfo = calendarDays[dayIndex] %}
                            <td class=\"{{ dayInfo.day ? 'day' : 'empty' }}\" data-date=\"{{ dayInfo.date ? dayInfo.date|date('Y-m-d') : '' }}\">
                                {{ dayInfo.day ?: '' }}
                                {% if dayInfo.word %}
                                    <div class=\"word-of-day\">{{ dayInfo.word }}</div>
                                {% endif %}
                            </td>
                        {% else %}
                            <td class=\"empty\"></td>
                        {% endif %}
                    {% endfor %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>



<script>
// Code JavaScript pour gérer le clic sur un jour du calendrier
document.getElementById('calendar').addEventListener('click', function(event) {
    var target = event.target.closest('.day'); // Utilisez closest pour trouver le parent 'day' si nécessaire
    if (target) {
        // Vérifiez si le jour cliqué a un mot associé
        var wordOfTheDay = target.querySelector('.word-of-day');
        if (wordOfTheDay) {
            // Si un mot est associé, redirigez vers la page de jeu
            window.location.href = '/game/' + target.dataset.date;
        } else {
            // Sinon, affichez un message
            alert('Il n\\'y a pas encore de mots pour ce jour.');
        }
    }
});
</script>
{% endblock %}", "calendar/show.html.twig", "/var/www/templates/calendar/show.html.twig");
    }
}
