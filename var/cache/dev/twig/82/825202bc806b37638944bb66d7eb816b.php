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

/* acceuil_client/index.html.twig */
class __TwigTemplate_fd9e039cb4708a304b175c3f69eef413 extends Template
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
        return "client.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil_client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil_client/index.html.twig"));

        $this->parent = $this->loadTemplate("client.html.twig", "acceuil_client/index.html.twig", 1);
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

        echo "Acceuil ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<body>

<p style=\"font-weight:bold;font-size: 30px;\">
LeSuperCoin
</p> 

<p style=\"font-weight:bold;font-size: 20px;height:40px;\"> Bonjour utilisateur n°";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>

<section id=\"haut\">
<div class=\"saut\"></div>
<div class=\"pre2\">
<center>
</center>
</div>
</section>

</section>
<div class=\"saut\"></div>
<div class=\"container\">
<p>Bonjour bienvenue dans l'accueil de LeSuperCoin</p>
<br>

<p>
LeSuperCoin se présente comme une plateforme communautaire incontournable, offrant une expérience similaire à celle du Bon Coin. Sur ce site convivial, vous avez la liberté d'explorer une multitude d'annonces pour acheter ou vendre une variété de produits en mode C to C (consommateur à consommateur). Que vous recherchiez des articles d'occasion, des produits uniques ou des bonnes affaires, LeSuperCoin propose un espace diversifié où les utilisateurs peuvent interagir et conclure des transactions.
</p>
<p>
L'interface conviviale du site facilite la navigation et la recherche d'annonces pertinentes. Que vous soyez un acheteur en quête de bonnes affaires ou un vendeur souhaitant donner une seconde vie à vos objets, LeSuperCoin encourage l'échange au sein de sa communauté active. Des catégories variées permettent de couvrir un large éventail de produits, des biens de consommation courante aux articles plus spécialisés.
</p>
<p>
L'accent est mis sur la simplicité et la convivialité, offrant aux utilisateurs une plateforme intuitive pour mener à bien leurs transactions en toute confiance. Que ce soit pour dénicher des trésors cachés, vendre des objets dont vous n'avez plus besoin, ou simplement pour explorer les offres locales, LeSuperCoin s'érige comme un espace dynamique au service de la rencontre entre acheteurs et vendeurs passionnés.
</p>


</div>


<script src=\"./index.js\"></script>

<!-- Les sources pour tout -->

<!-- Inclure le CSS de Bootstrap -->
<link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

<!-- Inclure les scripts JavaScript de Bootstrap (jQuery doit être inclus en premier) -->
<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

</body>



</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "acceuil_client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 51,  141 => 50,  135 => 47,  97 => 12,  88 => 5,  78 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'client.html.twig' %}

{% block title %}Acceuil {% endblock %}
{% block body %}

<body>

<p style=\"font-weight:bold;font-size: 30px;\">
LeSuperCoin
</p> 

<p style=\"font-weight:bold;font-size: 20px;height:40px;\"> Bonjour utilisateur n°{{app.user.id}}</p>

<section id=\"haut\">
<div class=\"saut\"></div>
<div class=\"pre2\">
<center>
</center>
</div>
</section>

</section>
<div class=\"saut\"></div>
<div class=\"container\">
<p>Bonjour bienvenue dans l'accueil de LeSuperCoin</p>
<br>

<p>
LeSuperCoin se présente comme une plateforme communautaire incontournable, offrant une expérience similaire à celle du Bon Coin. Sur ce site convivial, vous avez la liberté d'explorer une multitude d'annonces pour acheter ou vendre une variété de produits en mode C to C (consommateur à consommateur). Que vous recherchiez des articles d'occasion, des produits uniques ou des bonnes affaires, LeSuperCoin propose un espace diversifié où les utilisateurs peuvent interagir et conclure des transactions.
</p>
<p>
L'interface conviviale du site facilite la navigation et la recherche d'annonces pertinentes. Que vous soyez un acheteur en quête de bonnes affaires ou un vendeur souhaitant donner une seconde vie à vos objets, LeSuperCoin encourage l'échange au sein de sa communauté active. Des catégories variées permettent de couvrir un large éventail de produits, des biens de consommation courante aux articles plus spécialisés.
</p>
<p>
L'accent est mis sur la simplicité et la convivialité, offrant aux utilisateurs une plateforme intuitive pour mener à bien leurs transactions en toute confiance. Que ce soit pour dénicher des trésors cachés, vendre des objets dont vous n'avez plus besoin, ou simplement pour explorer les offres locales, LeSuperCoin s'érige comme un espace dynamique au service de la rencontre entre acheteurs et vendeurs passionnés.
</p>


</div>


<script src=\"./index.js\"></script>

<!-- Les sources pour tout -->

<!-- Inclure le CSS de Bootstrap -->
<link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">

<!-- Inclure les scripts JavaScript de Bootstrap (jQuery doit être inclus en premier) -->
<script src=\"{{ asset('assets/bootstrap/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>

</body>



</html>

{% endblock %}
", "acceuil_client/index.html.twig", "/var/www/html/lesupercoindavidli/templates/acceuil_client/index.html.twig");
    }
}
