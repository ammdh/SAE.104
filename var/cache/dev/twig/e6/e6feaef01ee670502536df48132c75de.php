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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/ars1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "arsene/ars1.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "arsene/ars1.html.twig", 2);
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

        echo "E-portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "
<header>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
          <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"#compétences\">
            </a>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class=\"hero is-medium is-primary is-bold\">
        <div class=\"hero-body\">
          <div class=\"container\">
            <h1 class=\"title\">
              Bienvenue sur mon portfolio !<br>
              Découvrez mes projets et mes compétences
            </h1>
          </div>
        </div>
      </section>

      <section class=\"section\" id=\"projets\">
        <div class=\"container\">
          <h1 class=\"title\">Mes projets</h1>
          <div class=\"columns is-multiline\">
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://cdn.pixabay.com/photo/2020/05/18/16/17/social-media-5187243_960_720.png\" alt=\"Projet 1\">
                  </figure>
                  </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 1</p>
                      <p class=\"subtitle is-6\">Se présenter sur Internet</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://media.istockphoto.com/id/1194209490/fr/vectoriel/protection-de-virus-illustration-polygonale-de-mod%C3%A8le-dart-de-vecteur.jpg?s=612x612&w=0&k=20&c=9Zzzpkiw-I5FomlwBdyg9nGdPjMwaLCl4D_ODfra9XE=\" alt=\"Projet 2\">
                  </figure>
                </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 2</p>
                      <p class=\"subtitle is-6\">Se Sensibiliser à l’Hygiène informatique et à la Cybersécurité</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://cdn.pixabay.com/photo/2019/08/06/22/48/artificial-intelligence-4389372_960_720.jpg\" alt=\"Projet 3\">
                  </figure>
                </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 3</p>
                      <p class=\"subtitle is-6\">s'initier aux réseaux informatiques</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class=\"section\" id=\"compétences\">
    <div class=\"container\">
      <h1 class=\"title\">Mes compétences</h1>
      <div class=\"columns is-multiline\">
        <div class=\"column is-one-third\">
          <div class=\"card\">
            <div class=\"card-content\">
              <div class=\"media\">
                <div class=\"media-content\">
                  <p class=\"subtitle is-6\">Administrer les réseaux et l’Internet.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"column is-one-third\">
          <div class=\"card\">
            <div class=\"card-content\">
              <div class=\"media\">
                <div class=\"media-content\">
                  <p class=\"subtitle is-6\">Connecter les entreprises et les usagers.</p>
        </div>
           </div>
             </div>
               </div>
            </div>
</section>
<footer class=\"bg-light py-5\">
            <div class=\"container px-4 px-lg-5\"><div class=\"small text-center text-muted\">BUT R&T 2022-2023, Arsene</div></div>
        </footer>          
<style type=\"text/css\"> 
/*la couleur du texte des titres */
.title, .subtitle {
  color: #333;
}

/*  l'apparence des cartes de projet */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}

/*une bordure de couleur lorsque la souris survole une carte de projet */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

/*  les images dans les cartes de projet */
.card-image img {
  display: block;
  margin: 0 auto;
}
/* la couleur de fond de la section Projets */
#projets {
  background-color: #f5f5f5;
}

/* une bordure arrondie aux images des projets */
.card-image img {
  border-radius: 10px;
}

/* la couleur du bouton \"Voir le projet\" */
.card-content a {
  color: #333;
}

/* la couleur de fond des compétences lorsque la souris survole une carte */
.card:hover {
  background-color: #f5f5f5;
}

/*  un effet de hover à la police d'écriture */
.card-content a:hover {
  text-decoration: underline;
}
/* Centre les projets dans la section Projets */
.columns {
  justify-content: center;
}

/* une animation à l'apparition des cartes de projet */
.card {
  opacity: 0;
  animation: fadeIn 0.5s ease-in-out forwards;
}

/* Définition de l'animation fadeIn */
@keyframes fadeIn {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/*la couleur des icônes des boutons */
.card-content a i {
  color: #ffa600;
}

/*l'apparence de la navigation */
.navbar {
  background-color: #ffa600;
}

/* la couleur de fond des onglets */
.tabs .tab a {
  background-color: #ffa600;
}
header {
  background-color: #ffa600;
}

/*la couleur de fond de la section Compétences */
#competences {
  background-color: #f5f5f5;
}

/* un effet de hover sur les cartes de compétence */
.card:hover {
  transform: scale(1.05);
}

/* Centre le titre du site */
.navbar-brand {
  justify-content: center;
}

/* la couleur de fond des onglets actifs */
.tabs .tab a.active {
  background-color: #333;
}

/* la couleur de fond des onglets lorsque la souris survole */
.tabs .tab a:hover {
  background-color: #333;
}

/* la taille de police du titre du site */
.navbar-brand .navbar-item {
  font-size: 2em;
}

/*  la taille de police des sous-titres */
.card-content .subtitle {
  font-size: 1.2em;
}

/* la taille de police des boutons */
.card-content a {
  font-size: 1.2em;
}

/* la taille de police des compétences */
#competences .title {
  font-size: 2em;
}

/* la taille de police des projets */
#projets .title {
  font-size: 2em;
}

/* Ajoute une ombre au header */
header {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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
        return array (  112 => 15,  102 => 14,  89 => 9,  79 => 8,  60 => 5,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Fichier \"templete\" la racine de mon site #}
{%extends 'base.html.twig'%}

{# titre de la page#}
{% block title%}E-portfolio{% endblock %}

{# le css de la page#}
{% block stylesheets %}
 <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
{% endblock %}


{# le contenu html de cette page#}
{% block body %}

<header>
        <div id=\"navbarBasicExample\" class=\"navbar-menu\">
          <div class=\"navbar-start\">
            <a class=\"navbar-item\" href=\"#compétences\">
            </a>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class=\"hero is-medium is-primary is-bold\">
        <div class=\"hero-body\">
          <div class=\"container\">
            <h1 class=\"title\">
              Bienvenue sur mon portfolio !<br>
              Découvrez mes projets et mes compétences
            </h1>
          </div>
        </div>
      </section>

      <section class=\"section\" id=\"projets\">
        <div class=\"container\">
          <h1 class=\"title\">Mes projets</h1>
          <div class=\"columns is-multiline\">
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://cdn.pixabay.com/photo/2020/05/18/16/17/social-media-5187243_960_720.png\" alt=\"Projet 1\">
                  </figure>
                  </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 1</p>
                      <p class=\"subtitle is-6\">Se présenter sur Internet</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://media.istockphoto.com/id/1194209490/fr/vectoriel/protection-de-virus-illustration-polygonale-de-mod%C3%A8le-dart-de-vecteur.jpg?s=612x612&w=0&k=20&c=9Zzzpkiw-I5FomlwBdyg9nGdPjMwaLCl4D_ODfra9XE=\" alt=\"Projet 2\">
                  </figure>
                </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 2</p>
                      <p class=\"subtitle is-6\">Se Sensibiliser à l’Hygiène informatique et à la Cybersécurité</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"column is-one-third\">
              <div class=\"card\">
                <div class=\"card-image\">
                  <figure class=\"image is-4by3\">
                    <img src=\"https://cdn.pixabay.com/photo/2019/08/06/22/48/artificial-intelligence-4389372_960_720.jpg\" alt=\"Projet 3\">
                  </figure>
                </div>
                <div class=\"card-content\">
                  <div class=\"media\">
                    <div class=\"media-content\">
                      <p class=\"title is-4\">Projet 3</p>
                      <p class=\"subtitle is-6\">s'initier aux réseaux informatiques</p>
                    </div>
                  </div>
                  <div class=\"content\">
                    <a href=\"#\">Voir le projet</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class=\"section\" id=\"compétences\">
    <div class=\"container\">
      <h1 class=\"title\">Mes compétences</h1>
      <div class=\"columns is-multiline\">
        <div class=\"column is-one-third\">
          <div class=\"card\">
            <div class=\"card-content\">
              <div class=\"media\">
                <div class=\"media-content\">
                  <p class=\"subtitle is-6\">Administrer les réseaux et l’Internet.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"column is-one-third\">
          <div class=\"card\">
            <div class=\"card-content\">
              <div class=\"media\">
                <div class=\"media-content\">
                  <p class=\"subtitle is-6\">Connecter les entreprises et les usagers.</p>
        </div>
           </div>
             </div>
               </div>
            </div>
</section>
<footer class=\"bg-light py-5\">
            <div class=\"container px-4 px-lg-5\"><div class=\"small text-center text-muted\">BUT R&T 2022-2023, Arsene</div></div>
        </footer>          
<style type=\"text/css\"> 
/*la couleur du texte des titres */
.title, .subtitle {
  color: #333;
}

/*  l'apparence des cartes de projet */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  transition: 0.3s;
}

/*une bordure de couleur lorsque la souris survole une carte de projet */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

/*  les images dans les cartes de projet */
.card-image img {
  display: block;
  margin: 0 auto;
}
/* la couleur de fond de la section Projets */
#projets {
  background-color: #f5f5f5;
}

/* une bordure arrondie aux images des projets */
.card-image img {
  border-radius: 10px;
}

/* la couleur du bouton \"Voir le projet\" */
.card-content a {
  color: #333;
}

/* la couleur de fond des compétences lorsque la souris survole une carte */
.card:hover {
  background-color: #f5f5f5;
}

/*  un effet de hover à la police d'écriture */
.card-content a:hover {
  text-decoration: underline;
}
/* Centre les projets dans la section Projets */
.columns {
  justify-content: center;
}

/* une animation à l'apparition des cartes de projet */
.card {
  opacity: 0;
  animation: fadeIn 0.5s ease-in-out forwards;
}

/* Définition de l'animation fadeIn */
@keyframes fadeIn {
  from { opacity: 0; }
  to   { opacity: 1; }
}

/*la couleur des icônes des boutons */
.card-content a i {
  color: #ffa600;
}

/*l'apparence de la navigation */
.navbar {
  background-color: #ffa600;
}

/* la couleur de fond des onglets */
.tabs .tab a {
  background-color: #ffa600;
}
header {
  background-color: #ffa600;
}

/*la couleur de fond de la section Compétences */
#competences {
  background-color: #f5f5f5;
}

/* un effet de hover sur les cartes de compétence */
.card:hover {
  transform: scale(1.05);
}

/* Centre le titre du site */
.navbar-brand {
  justify-content: center;
}

/* la couleur de fond des onglets actifs */
.tabs .tab a.active {
  background-color: #333;
}

/* la couleur de fond des onglets lorsque la souris survole */
.tabs .tab a:hover {
  background-color: #333;
}

/* la taille de police du titre du site */
.navbar-brand .navbar-item {
  font-size: 2em;
}

/*  la taille de police des sous-titres */
.card-content .subtitle {
  font-size: 1.2em;
}

/* la taille de police des boutons */
.card-content a {
  font-size: 1.2em;
}

/* la taille de police des compétences */
#competences .title {
  font-size: 2em;
}

/* la taille de police des projets */
#projets .title {
  font-size: 2em;
}

/* Ajoute une ombre au header */
header {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

</style>
{% endblock %}", "arsene/ars1.html.twig", "C:\\Users\\arsen\\projet00\\sae\\templates\\arsene\\ars1.html.twig");
    }
}
