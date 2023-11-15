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

/* contact/index.html.twig */
class __TwigTemplate_b18bfa7f40b974158fcc8f5ce9d57a42 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contact";
        
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
        echo "<section id=\"hautcontact\">
<div class=\"saut\"></div>
<div class=\"precontact\">
<p style=\"    font-size: 100px;\"> Contactez nous </p>
</div>
</section>
<br><br><br>
<div class=\"container\">
<div class=\"row\">
<p style=\"font-size:20px; text-align:left\"> Bienvenue sur le site de réservation de palce de port en ligne de SicilyLines </p>
<p style=\"font-size:20px; text-align:left\"> Nous vous offrons le meilleur rapport qualité-prix et service avec 4 secteurs ! </p>
<p style=\"font-size:20px; text-align:left\"> Si vous avez besoin d'aide pour gérer des réservations nouvelles ou existantes, ou bien explorer de nouvelles destinations, n'hésitez pas à nous contacter.  </p>

</div>
<div class=\"row\">
<form>
<label for=\"depart-port\">Prénom*</label>
<input type=\"text\" id=\"prenom\" name=\"prenom\"><br>


<label for=\"arrivee-port\">Nom de famille*</label>
<input type=\"text\" id=\"nom\" name=\"nom\"><br>

<label for=\"arrivee-date\">Email*</label>
<input type=\"text\" id=\"email\" name=\"email\"><br>

<label for=\"traversee-date\">Téléphone*</label>
<input type=\"text\" id=\"telephone\" name=\"telephone\">

<label for=\"traversee-date\">Message*</label>
<textarea id=\"message\" name=\"message\"></textarea><br>
<br>
<label for=\"aller-retour\">Annulation d'une réservation <input type=\"checkbox\" id=\"aller-retour\" name=\"aller-retour\" style=\"text-align:right !important;\"><br>
</label>
<br>
<label for=\"aller-retour\">Suppression d'un compte<input type=\"checkbox\" id=\"aller-retour\" name=\"aller-retour\" style=\"text-align:right !important;\"><br>
</label>

<button type=\"submit\">Réserver une traversée</button>
</form>
</div>
<br><br>
<p style=\"font-size:20px; text-align:left\"> Toute demande d'annulation de traversée ou suppression de compte peut être demandé par nous.</p>
<br>
<p style=\"font-size:20px; text-align:left\"> Les pénalités d'une annulation d'une traversée:
-10% du montant total quand la demande a lieu 30jours avant le départ
-20% du montant total quand la demande a lieu de 7 à 29 jours avant le départ
-50% du montant total de 2 à 6 jours avant le départ
-100% la veille du départ </p>
<br><br><br><br><br><br>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
<section id=\"hautcontact\">
<div class=\"saut\"></div>
<div class=\"precontact\">
<p style=\"    font-size: 100px;\"> Contactez nous </p>
</div>
</section>
<br><br><br>
<div class=\"container\">
<div class=\"row\">
<p style=\"font-size:20px; text-align:left\"> Bienvenue sur le site de réservation de palce de port en ligne de SicilyLines </p>
<p style=\"font-size:20px; text-align:left\"> Nous vous offrons le meilleur rapport qualité-prix et service avec 4 secteurs ! </p>
<p style=\"font-size:20px; text-align:left\"> Si vous avez besoin d'aide pour gérer des réservations nouvelles ou existantes, ou bien explorer de nouvelles destinations, n'hésitez pas à nous contacter.  </p>

</div>
<div class=\"row\">
<form>
<label for=\"depart-port\">Prénom*</label>
<input type=\"text\" id=\"prenom\" name=\"prenom\"><br>


<label for=\"arrivee-port\">Nom de famille*</label>
<input type=\"text\" id=\"nom\" name=\"nom\"><br>

<label for=\"arrivee-date\">Email*</label>
<input type=\"text\" id=\"email\" name=\"email\"><br>

<label for=\"traversee-date\">Téléphone*</label>
<input type=\"text\" id=\"telephone\" name=\"telephone\">

<label for=\"traversee-date\">Message*</label>
<textarea id=\"message\" name=\"message\"></textarea><br>
<br>
<label for=\"aller-retour\">Annulation d'une réservation <input type=\"checkbox\" id=\"aller-retour\" name=\"aller-retour\" style=\"text-align:right !important;\"><br>
</label>
<br>
<label for=\"aller-retour\">Suppression d'un compte<input type=\"checkbox\" id=\"aller-retour\" name=\"aller-retour\" style=\"text-align:right !important;\"><br>
</label>

<button type=\"submit\">Réserver une traversée</button>
</form>
</div>
<br><br>
<p style=\"font-size:20px; text-align:left\"> Toute demande d'annulation de traversée ou suppression de compte peut être demandé par nous.</p>
<br>
<p style=\"font-size:20px; text-align:left\"> Les pénalités d'une annulation d'une traversée:
-10% du montant total quand la demande a lieu 30jours avant le départ
-20% du montant total quand la demande a lieu de 7 à 29 jours avant le départ
-50% du montant total de 2 à 6 jours avant le départ
-100% la veille du départ </p>
<br><br><br><br><br><br>
</div>
{% endblock %}
", "contact/index.html.twig", "/var/www/html/lesupercoindavidli/templates/contact/index.html.twig");
    }
}
