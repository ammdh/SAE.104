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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
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
        echo "    <div class=\"container\">
        <h1>BIENVENUE SUR MON SITE WEB PERSONNEL</h1>
        <p>
            Bonjour, je suis Arsene M'DAHOMA, j'ai 18 ans, j'habite à Roanne<br>
            je suis originaires de Mayotte et de la Reunion, et j'étudie à l'I.U.T de Roanne,<br>
            où je suis en apprentissage dans la formation B.U.T réseaux et télécommunication en première année.
        </p>
        <h3>Parcours</h3>
        <p>
            
            Je suis née en France à Angouleme en CHARENTE(16), mes parents sont originaires de la Réunion et de Mayotte, 
            <div class=\"col-md-6\">
                <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mayotte.png"), "html", null, true);
        echo "\" alt=\"Mayotte Image\" class=\"img-fluid resized-image\">
                <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("reunion.png"), "html", null, true);
        echo "\" alt=\"Reunion Image\" class=\"img-fluid resized-image\">
            </div>
        </p>
    </div>
        
    </div>
    <div class=\"container\">
        <h3>Cliquer ici...</h3>
        <a href=\"";
        // line 27
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

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        #animatedText {
            position: absolute;
            left: 0;
            top: 50%;
            white-space: nowrap;
            font-size: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<div id=\"animatedText\">";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "</div>

<script>
    // Fonction pour animer le texte
    function animateText() {
        var textElement = document.getElementById('animatedText');
        var position = 0;

        // Fonction d'animation
        function moveText() {
            position += 1;
            textElement.style.left = position + 'px';

            // Réinitialiser la position si le texte est sorti de l'écran
            if (position > window.innerWidth) {
                position = -textElement.clientWidth;
            }

            // Répéter l'animation
            requestAnimationFrame(moveText);
        }

        // Lancer l'animation
        moveText();
    }

    // Appeler la fonction d'animation
    animateText();
</script>

</body>
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
        return array (  166 => 54,  148 => 38,  138 => 37,  118 => 27,  107 => 19,  103 => 18,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title%}Accueil{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1>BIENVENUE SUR MON SITE WEB PERSONNEL</h1>
        <p>
            Bonjour, je suis Arsene M'DAHOMA, j'ai 18 ans, j'habite à Roanne<br>
            je suis originaires de Mayotte et de la Reunion, et j'étudie à l'I.U.T de Roanne,<br>
            où je suis en apprentissage dans la formation B.U.T réseaux et télécommunication en première année.
        </p>
        <h3>Parcours</h3>
        <p>
            
            Je suis née en France à Angouleme en CHARENTE(16), mes parents sont originaires de la Réunion et de Mayotte, 
            <div class=\"col-md-6\">
                <img src=\"{{ asset('mayotte.png') }}\" alt=\"Mayotte Image\" class=\"img-fluid resized-image\">
                <img src=\"{{ asset('reunion.png') }}\" alt=\"Reunion Image\" class=\"img-fluid resized-image\">
            </div>
        </p>
    </div>
        
    </div>
    <div class=\"container\">
        <h3>Cliquer ici...</h3>
        <a href=\"{{ path('plus') }}\" class=\"btn btn-primary\">Pour en savoir plus</a>
    </div>
    
    <style>
        .resized-image {
            max-width: 50%; /* Définit la largeur maximale de l'image à 100% de la largeur du conteneur parent */
            height: auto; /* Garantit que l'image conserve ses proportions d'origine */
        }
    </style>
{% endblock %}
{% block javascripts %}
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <style>
        #animatedText {
            position: absolute;
            left: 0;
            top: 50%;
            white-space: nowrap;
            font-size: 20px;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

<div id=\"animatedText\">{{ text }}</div>

<script>
    // Fonction pour animer le texte
    function animateText() {
        var textElement = document.getElementById('animatedText');
        var position = 0;

        // Fonction d'animation
        function moveText() {
            position += 1;
            textElement.style.left = position + 'px';

            // Réinitialiser la position si le texte est sorti de l'écran
            if (position > window.innerWidth) {
                position = -textElement.clientWidth;
            }

            // Répéter l'animation
            requestAnimationFrame(moveText);
        }

        // Lancer l'animation
        moveText();
    }

    // Appeler la fonction d'animation
    animateText();
</script>

</body>
{% endblock %}", "arsene/home.html.twig", "C:\\Users\\arsen\\projet00\\sae\\templates\\arsene\\home.html.twig");
    }
}
