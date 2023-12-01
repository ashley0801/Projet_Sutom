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

/* gestion-profil/modification_profil.html.twig */
class __TwigTemplate_0748d43729b8fb5dd0f38d02e78f25db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion-profil/modification_profil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion-profil/modification_profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion-profil/modification_profil.html.twig", 1);
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

        echo "Modification du Profil";
        
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
     /* Styles repris de la page de gestion de profil */
    body {
        background-color: #333;
        color: white;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    

   /* Basic styles */
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
    background-color: #FFF; /* White background around the wrapper */
    padding: 20px; /* Space around the outside of the wrapper */
    border-radius: 10px; /* Rounded corners on the wrapper */
}

/* Sidebar styles */
.sidebar {
    display: flex; /* Stack icons vertically */
    flex-direction: column;
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
    width: 50%; /* Adjust width as necessary */
    display: flex;
    flex-direction: column;
    justify-content: center;
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

    /* Styles pour la form */
    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: .5rem;
        color: #ccc;
    }

    input[type=\"text\"],
    input[type=\"file\"],
    textarea,
    input[type=\"number\"] {
        width: 100%; /* Pleine largeur */
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    button[type=\"submit\"] {
        color: white;
        background-color: #007bff;
        border-color: #007bff;
        padding: .375rem .75rem;
        border-radius: .25rem;
        font-size: 1rem;
        line-height: 1.5;
    }

    button[type=\"submit\"]:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .avatar-options label {
        display: inline-block;
        margin-right: 10px;
    }

    .avatar-thumbnail {
        display: block;
        width: 50px;
        height: 50px;
        border: 1px solid #ddd;
        border-radius: 50%;
        margin-bottom: 5px;
    }

</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 156
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 157
        echo "<div class=\"main-content\">
    <h1>Modification du Profil</h1>
    ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), 'form_start');
        echo "
    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "username", [], "any", false, false, false, 160), 'row');
        echo "
    <div class=\"form-group\">
        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "avatar", [], "any", false, false, false, 162), 'label');
        echo "
        <div class=\"avatar-options\">
            ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "avatar", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "choices", [], "any", false, false, false, 164));
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
        foreach ($context['_seq'] as $context["avatar_label"] => $context["avatar_value"]) {
            // line 165
            echo "                <label>
                    <input type=\"radio\" id=\"";
            // line 166
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "avatar", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "id", [], "any", false, false, false, 166), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 166), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "avatar", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "full_name", [], "any", false, false, false, 166), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avatar_value"], "value", [], "any", false, false, false, 166), "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "avatar", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166) == twig_get_attribute($this->env, $this->source, $context["avatar_value"], "value", [], "any", false, false, false, 166))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    <img src=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/avatars/" . twig_get_attribute($this->env, $this->source, $context["avatar_value"], "value", [], "any", false, false, false, 167))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $context["avatar_label"], "html", null, true);
            echo "\" class=\"avatar-thumbnail\">
                    ";
            // line 168
            echo twig_escape_filter($this->env, $context["avatar_label"], "html", null, true);
            echo "
                </label>
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
        unset($context['_seq'], $context['_iterated'], $context['avatar_label'], $context['avatar_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        echo "        </div>
    </div>
    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "description", [], "any", false, false, false, 173), 'row');
        echo "
    ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "age", [], "any", false, false, false, 174), 'row');
        echo "
    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
    ";
        // line 176
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "gestion-profil/modification_profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 176,  341 => 174,  337 => 173,  333 => 171,  316 => 168,  310 => 167,  296 => 166,  293 => 165,  276 => 164,  271 => 162,  266 => 160,  262 => 159,  258 => 157,  248 => 156,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modification du Profil{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
     /* Styles repris de la page de gestion de profil */
    body {
        background-color: #333;
        color: white;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    

   /* Basic styles */
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
    background-color: #FFF; /* White background around the wrapper */
    padding: 20px; /* Space around the outside of the wrapper */
    border-radius: 10px; /* Rounded corners on the wrapper */
}

/* Sidebar styles */
.sidebar {
    display: flex; /* Stack icons vertically */
    flex-direction: column;
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
    width: 50%; /* Adjust width as necessary */
    display: flex;
    flex-direction: column;
    justify-content: center;
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

    /* Styles pour la form */
    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        margin-bottom: .5rem;
        color: #ccc;
    }

    input[type=\"text\"],
    input[type=\"file\"],
    textarea,
    input[type=\"number\"] {
        width: 100%; /* Pleine largeur */
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }

    button[type=\"submit\"] {
        color: white;
        background-color: #007bff;
        border-color: #007bff;
        padding: .375rem .75rem;
        border-radius: .25rem;
        font-size: 1rem;
        line-height: 1.5;
    }

    button[type=\"submit\"]:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .avatar-options label {
        display: inline-block;
        margin-right: 10px;
    }

    .avatar-thumbnail {
        display: block;
        width: 50px;
        height: 50px;
        border: 1px solid #ddd;
        border-radius: 50%;
        margin-bottom: 5px;
    }

</style>
{% endblock %}

{% block body %}
<div class=\"main-content\">
    <h1>Modification du Profil</h1>
    {{ form_start(form) }}
    {{ form_row(form.username) }}
    <div class=\"form-group\">
        {{ form_label(form.avatar) }}
        <div class=\"avatar-options\">
            {% for avatar_label, avatar_value in form.avatar.vars.choices %}
                <label>
                    <input type=\"radio\" id=\"{{ form.avatar.vars.id }}_{{ loop.index0 }}\" name=\"{{ form.avatar.vars.full_name }}\" value=\"{{ avatar_value.value }}\" {% if form.avatar.vars.value == avatar_value.value %}checked=\"checked\"{% endif %}>
                    <img src=\"{{ asset('images/avatars/' ~ avatar_value.value) }}\" alt=\"{{ avatar_label }}\" class=\"avatar-thumbnail\">
                    {{ avatar_label }}
                </label>
            {% endfor %}
        </div>
    </div>
    {{ form_row(form.description) }}
    {{ form_row(form.age) }}
    <button type=\"submit\" class=\"btn btn-primary\">Enregistrer les modifications</button>
    {{ form_end(form) }}
</div>
{% endblock %}

", "gestion-profil/modification_profil.html.twig", "/var/www/templates/gestion-profil/modification_profil.html.twig");
    }
}
