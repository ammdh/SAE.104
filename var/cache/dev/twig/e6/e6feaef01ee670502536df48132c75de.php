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

/* arsene/ars1.html.twig */
class __TwigTemplate_6eb6ca3256bce1d059108fb08d720d22 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/ars1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/ars1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arsene/ars1.html.twig", 1);
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

        echo "Barres de progression";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

    <div class=\"progress-container\">
        <h1>Voici mon portfolios:</h1>   
        <div class=\"progress-header\">RT1</div>
        <div class=\"progress-bar bar-1\">Administrer les réseaux et l’Internet (";
        // line 11
        echo 55;
        echo "%)</div>
    </div>

    <div class=\"progress-container\">
        <div class=\"progress-header\">RT2</div>
        <div class=\"progress-bar bar-2\">Connecter les entreprises et les usagers (";
        // line 16
        echo 40;
        echo "%)</div>
    </div>

    <div class=\"progress-container\">
        <div class=\"progress-header\">RT3</div>
        <div class=\"progress-bar bar-3\">Créer des outils et applications informatiques pour les R&T (";
        // line 21
        echo 67;
        echo "%)</div>
    </div>
    <div class=\"container\">
        <h2> Cliquer ci-dessous pour obtenir le portfolios complet en format excel:</h2>
        <form id=\"downloadForm\" action=\"portfolios.xlsx\" method=\"get\">
        <button type=\"submit\" class=\"btn btn-primary mt-3\">Télécharger</button>
    </form>





   <style>
    body {
      background-image: url('/portfolio.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
      width: 100vw; /* Ajoute cette ligne */
      height: 100vh; /* Ajoute cette ligne */
      }
      

    .progress-container {
        width: 80%;
        margin: 20px auto;
        border: 1px solid black;
        background-color: black;
        padding: 10px;
        opacity: 0.8;
    }

    .progress-bar {
        height: 25px;
        background-color: black;
        text-align: center;
        line-height: 25px;
        color: white;
        margin-bottom: 10px;
    }

    .progress-header {
        text-align: center;
        font-weight: bold;
        margin-bottom: 10px;
        color: gray;
    }

    .bar-1 {
        width: ";
        // line 71
        echo 55;
        echo "%;
        background-color: #4CAF50;
    }

    .bar-2 {
        width: ";
        // line 76
        echo 40;
        echo "%;
        background-color: #2196F3;
    }

    .bar-3 {
        width: ";
        // line 81
        echo 67;
        echo "%;
        background-color: #f44336;
    }
</style>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "arsene/ars1.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  180 => 81,  172 => 76,  164 => 71,  111 => 21,  103 => 16,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Barres de progression{% endblock %}

{% block body %}


    <div class=\"progress-container\">
        <h1>Voici mon portfolios:</h1>   
        <div class=\"progress-header\">RT1</div>
        <div class=\"progress-bar bar-1\">Administrer les réseaux et l’Internet ({{ 55 }}%)</div>
    </div>

    <div class=\"progress-container\">
        <div class=\"progress-header\">RT2</div>
        <div class=\"progress-bar bar-2\">Connecter les entreprises et les usagers ({{ 40 }}%)</div>
    </div>

    <div class=\"progress-container\">
        <div class=\"progress-header\">RT3</div>
        <div class=\"progress-bar bar-3\">Créer des outils et applications informatiques pour les R&T ({{ 67 }}%)</div>
    </div>
    <div class=\"container\">
        <h2> Cliquer ci-dessous pour obtenir le portfolios complet en format excel:</h2>
        <form id=\"downloadForm\" action=\"portfolios.xlsx\" method=\"get\">
        <button type=\"submit\" class=\"btn btn-primary mt-3\">Télécharger</button>
    </form>





   <style>
    body {
      background-image: url('/portfolio.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      margin: 0;
      width: 100vw; /* Ajoute cette ligne */
      height: 100vh; /* Ajoute cette ligne */
      }
      

    .progress-container {
        width: 80%;
        margin: 20px auto;
        border: 1px solid black;
        background-color: black;
        padding: 10px;
        opacity: 0.8;
    }

    .progress-bar {
        height: 25px;
        background-color: black;
        text-align: center;
        line-height: 25px;
        color: white;
        margin-bottom: 10px;
    }

    .progress-header {
        text-align: center;
        font-weight: bold;
        margin-bottom: 10px;
        color: gray;
    }

    .bar-1 {
        width: {{ 55 }}%;
        background-color: #4CAF50;
    }

    .bar-2 {
        width: {{ 40 }}%;
        background-color: #2196F3;
    }

    .bar-3 {
        width: {{ 67 }}%;
        background-color: #f44336;
    }
</style>


{% endblock %}
", "arsene/ars1.html.twig", "C:\\Users\\arsen\\projet00\\sae\\templates\\arsene\\ars1.html.twig");
    }
}
