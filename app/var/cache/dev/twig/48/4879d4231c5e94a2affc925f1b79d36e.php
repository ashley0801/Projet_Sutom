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

/* registration/register.html.twig */
class __TwigTemplate_8a2cf2cb4649f81d6140bf2c38dd4e1d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
    .login-container {
        max-width: 300px;
        margin: 50px auto;
        background: #333;
        padding: 20px;
        color: #fff;
        border-radius: 5px;
        text-align: center;
    }

    .login-container h1 {
        margin-bottom: 20px;
    }

    .login-form .form-group {
        margin-bottom: 15px;
    }

    .login-form .form-group input,
    .login-form .form-group label {
        width: calc(100% - 20px);
        padding: 10px;
        margin-top: 5px;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background: #555;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-sizing: border-box;
    }

    .login-button:hover {
        background: #666;
    }

    /* Styles pour les vignettes d'avatar */
    .avatar-options {
        display: flex; /* Cela alignera les vignettes d'avatar côte à côte */
        justify-content: center; /* Centrer les vignettes si nécessaire */
        gap: 10px; /* Ajoute un peu d'espace entre les vignettes */
    }

    .avatar-thumbnail {
        border-radius: 50%;
        width: 50px; /* Taille de la vignette */
        height: 50px;
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 63
        echo "<div class=\"login-container\">
    <h1>Register</h1>
    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), 'form_start', ["attr" => ["class" => "login-form"]]);
        echo "
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "username", [], "any", false, false, false, 66), 'row', ["attr" => ["placeholder" => "Username"]]);
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "plainPassword", [], "any", false, false, false, 67), 'row', ["attr" => ["placeholder" => "Password"]]);
        echo "
        <div class=\"form-group\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "avatar", [], "any", false, false, false, 69), 'label');
        echo "
            <div class=\"avatar-options\">
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "avatar", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "choices", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["avatar_label"] => $context["avatar_value"]) {
            // line 72
            echo "                    <label>
                        <input type=\"radio\" name=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 73, $this->source); })()), "avatar", [], "any", false, false, false, 73), "vars", [], "any", false, false, false, 73), "full_name", [], "any", false, false, false, 73), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avatar_value"], "value", [], "any", false, false, false, 73), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, $context["avatar_value"], "value", [], "any", false, false, false, 74))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["avatar_label"], "html", null, true);
            echo "\" class=\"avatar-thumbnail\">
                        ";
            // line 75
            echo twig_escape_filter($this->env, $context["avatar_label"], "html", null, true);
            echo "
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['avatar_label'], $context['avatar_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </div>
        </div>
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'row', ["attr" => ["placeholder" => "Describe yourself..."]]);
        echo "
        ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 81, $this->source); })()), "age", [], "any", false, false, false, 81), 'row', ["attr" => ["placeholder" => "Age"]]);
        echo "
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "agreeTerms", [], "any", false, false, false, 82), 'row');
        echo "
        <button type=\"submit\" class=\"login-button\">Register</button>
    ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 84,  225 => 82,  221 => 81,  217 => 80,  213 => 78,  204 => 75,  198 => 74,  192 => 73,  189 => 72,  185 => 71,  180 => 69,  175 => 67,  171 => 66,  167 => 65,  163 => 63,  153 => 62,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}
<style>
    .login-container {
        max-width: 300px;
        margin: 50px auto;
        background: #333;
        padding: 20px;
        color: #fff;
        border-radius: 5px;
        text-align: center;
    }

    .login-container h1 {
        margin-bottom: 20px;
    }

    .login-form .form-group {
        margin-bottom: 15px;
    }

    .login-form .form-group input,
    .login-form .form-group label {
        width: calc(100% - 20px);
        padding: 10px;
        margin-top: 5px;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background: #555;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        box-sizing: border-box;
    }

    .login-button:hover {
        background: #666;
    }

    /* Styles pour les vignettes d'avatar */
    .avatar-options {
        display: flex; /* Cela alignera les vignettes d'avatar côte à côte */
        justify-content: center; /* Centrer les vignettes si nécessaire */
        gap: 10px; /* Ajoute un peu d'espace entre les vignettes */
    }

    .avatar-thumbnail {
        border-radius: 50%;
        width: 50px; /* Taille de la vignette */
        height: 50px;
    }
</style>
{% endblock %}

{% block body %}
<div class=\"login-container\">
    <h1>Register</h1>
    {{ form_start(registrationForm, {'attr': {'class': 'login-form'}}) }}
        {{ form_row(registrationForm.username, {'attr': {'placeholder': 'Username'}}) }}
        {{ form_row(registrationForm.plainPassword, {'attr': {'placeholder': 'Password'}}) }}
        <div class=\"form-group\">
            {{ form_label(registrationForm.avatar) }}
            <div class=\"avatar-options\">
                {% for avatar_label, avatar_value in registrationForm.avatar.vars.choices %}
                    <label>
                        <input type=\"radio\" name=\"{{ registrationForm.avatar.vars.full_name }}\" value=\"{{ avatar_value.value }}\">
                        <img src=\"{{ asset('images/avatars/' ~ avatar_value.value) }}\" alt=\"{{ avatar_label }}\" class=\"avatar-thumbnail\">
                        {{ avatar_label }}
                    </label>
                {% endfor %}
            </div>
        </div>
        {{ form_row(registrationForm.description, {'attr': {'placeholder': 'Describe yourself...'}}) }}
        {{ form_row(registrationForm.age, {'attr': {'placeholder': 'Age'}}) }}
        {{ form_row(registrationForm.agreeTerms) }}
        <button type=\"submit\" class=\"login-button\">Register</button>
    {{ form_end(registrationForm) }}
</div>
{% endblock %}
", "registration/register.html.twig", "/var/www/templates/registration/register.html.twig");
    }
}
