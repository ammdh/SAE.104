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

/* arsene/plus.html.twig */
class __TwigTemplate_6fdc810e3aba8c34783e4738836cbe0f extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/plus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/plus.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arsene/plus.html.twig", 2);
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

        echo "mes loisirs";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "<div class=\"sartp\">
 <div class=\"imag-container\">
  <img src=\"https://cdn.pixabay.com/photo/2016/11/14/05/21/children-1822688_960_720.jpg\" alt=\"photo de football\">
</div>

<div class=\"imag-container music\">
  <img src=\"https://cdn.pixabay.com/photo/2020/04/15/14/45/microphone-5046876_960_720.jpg\" alt=\"photo de music\">
</div>

<div class=\"imag-container  mma\">
  <img src=\"https://medias-wordpress-offload.storage.googleapis.com/lesportbusiness.com/2024/01/18184937/baki-doumbe-place-billet-accor-arena-paris-650x394.png\" alt=\"photo de mma\">
</div>

<div class=\"imag-container formule-1\">
  <img src=\"https://www.turbo.fr/sites/default/files/styles/header_image/public/2020-11/Hamilton.jpg?itok=z1cFSo2i\" alt=\"photo de FORMULE 1\">
</div>

<div class=\"imag-container\">
  <img src=\"https://cdn.pixabay.com/photo/2021/09/07/07/11/joysticks-6603119_960_720.jpg\" alt=\"photo de jeux vidéo\">
</div>

</div>

<style type=\"text/css\"> 
.imag-container {
  width: 930px;
  height: 600px;
  overflow: hidden;
 
}

.imag-container img {
  width: 100%;
  height: auto;
  
}
.music , .formule-1 , .jeux-vidéo {
  float: right;

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
        return "arsene/plus.html.twig";
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
        return array (  88 => 11,  78 => 10,  59 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Fichier \"templete\" la racine de mon site #}
{%extends 'base.html.twig'%}

{# titre de la page#}
{% block title%}mes loisirs{% endblock %}



{# le contenu html de cette page#}
{% block body %}
<div class=\"sartp\">
 <div class=\"imag-container\">
  <img src=\"https://cdn.pixabay.com/photo/2016/11/14/05/21/children-1822688_960_720.jpg\" alt=\"photo de football\">
</div>

<div class=\"imag-container music\">
  <img src=\"https://cdn.pixabay.com/photo/2020/04/15/14/45/microphone-5046876_960_720.jpg\" alt=\"photo de music\">
</div>

<div class=\"imag-container  mma\">
  <img src=\"https://medias-wordpress-offload.storage.googleapis.com/lesportbusiness.com/2024/01/18184937/baki-doumbe-place-billet-accor-arena-paris-650x394.png\" alt=\"photo de mma\">
</div>

<div class=\"imag-container formule-1\">
  <img src=\"https://www.turbo.fr/sites/default/files/styles/header_image/public/2020-11/Hamilton.jpg?itok=z1cFSo2i\" alt=\"photo de FORMULE 1\">
</div>

<div class=\"imag-container\">
  <img src=\"https://cdn.pixabay.com/photo/2021/09/07/07/11/joysticks-6603119_960_720.jpg\" alt=\"photo de jeux vidéo\">
</div>

</div>

<style type=\"text/css\"> 
.imag-container {
  width: 930px;
  height: 600px;
  overflow: hidden;
 
}

.imag-container img {
  width: 100%;
  height: auto;
  
}
.music , .formule-1 , .jeux-vidéo {
  float: right;

}

</style>
{% endblock %}", "arsene/plus.html.twig", "C:\\Users\\arsen\\projet00\\sae\\templates\\arsene\\plus.html.twig");
    }
}
