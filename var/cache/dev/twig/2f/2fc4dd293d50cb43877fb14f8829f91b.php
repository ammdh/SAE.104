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

/* arsene/home.html.twig */
class __TwigTemplate_f4533018ad4f6114b6a576b756ef89d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arsene/home.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
        }

        .container {
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
        <h1>BIENVENUE SUR MON SITE WEB PERSONNEL</h1>
        <p>
            Bonjour, je suis Arsene M'DAHOMA, j'ai 18 ans, j'habite à Roanne<br>
            je suis originaires de Mayotte et de la Reunion, et j'étudie à l'I.U.T de Roanne,<br>
            où je suis en apprentissage dans la formation B.U.T réseaux et télécommunication en première année.
        </p>
        <h2>Parcours</h3>
        <p>
            
            Je suis née en France à Angouleme en CHARENTE(16), mes parents sont originaires de la Réunion et de Mayotte, 
            <div class=\"col-md-6\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mayotte.png"), "html", null, true);
        echo "\" alt=\"Mayotte Image\" class=\"img-fluid resized-image\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("reunion.png"), "html", null, true);
        echo "\" alt=\"Reunion Image\" class=\"img-fluid resized-image\">
            </div>
        </p>
        </div>
        <div class=\"col-md-6\">
                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("moi.png"), "html", null, true);
        echo "\" alt=\"Ma Photo\" class=\"img-fluid\">
        </div>
    </div>

        <h3>Cliquer ici...</h3>
        <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plus");
        echo "\" class=\"btn btn-primary\">Pour en savoir plus</a>
    </div>
    <style>
        .resized-image {
            max-width: 50%; /* Définit la largeur maximale de l'image à 100% de la largeur du conteneur parent */
            height: auto; /* Garantit que l'image conserve ses proportions d'origine */
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
        return "arsene/home.html.twig";
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
        return array (  147 => 52,  139 => 47,  131 => 42,  127 => 41,  111 => 27,  101 => 26,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        body {
            background-color: #f8f9fa;
            color: #343a40;
        }

        h1 {
            color: #007bff;
        }

        p {
            font-size: 1.2em;
            line-height: 1.6;
        }

        .container {
            margin-top: 20px;
        }
    </style>
{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
        <h1>BIENVENUE SUR MON SITE WEB PERSONNEL</h1>
        <p>
            Bonjour, je suis Arsene M'DAHOMA, j'ai 18 ans, j'habite à Roanne<br>
            je suis originaires de Mayotte et de la Reunion, et j'étudie à l'I.U.T de Roanne,<br>
            où je suis en apprentissage dans la formation B.U.T réseaux et télécommunication en première année.
        </p>
        <h2>Parcours</h3>
        <p>
            
            Je suis née en France à Angouleme en CHARENTE(16), mes parents sont originaires de la Réunion et de Mayotte, 
            <div class=\"col-md-6\">
                <img src=\"{{ asset('mayotte.png') }}\" alt=\"Mayotte Image\" class=\"img-fluid resized-image\">
                <img src=\"{{ asset('reunion.png') }}\" alt=\"Reunion Image\" class=\"img-fluid resized-image\">
            </div>
        </p>
        </div>
        <div class=\"col-md-6\">
                <img src=\"{{ asset('moi.png') }}\" alt=\"Ma Photo\" class=\"img-fluid\">
        </div>
    </div>

        <h3>Cliquer ici...</h3>
        <a href=\"{{ path('plus') }}\" class=\"btn btn-primary\">Pour en savoir plus</a>
    </div>
    <style>
        .resized-image {
            max-width: 50%; /* Définit la largeur maximale de l'image à 100% de la largeur du conteneur parent */
            height: auto; /* Garantit que l'image conserve ses proportions d'origine */
        }
    </style>
{% endblock %}", "arsene/home.html.twig", "C:\\Users\\arsen\\projet00\\sae\\templates\\arsene\\home.html.twig");
    }
}
