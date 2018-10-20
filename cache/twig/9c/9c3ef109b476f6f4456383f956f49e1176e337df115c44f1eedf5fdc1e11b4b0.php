<?php

/* homepage.html.twig */
class __TwigTemplate_1204a09fa03baa4002f89ea26f2946b6e5ce3d72423f19134813552c9c298f84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "homepage.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t<div class=\"row\">

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<div class=\"card mt-lg-0 mt-sm-3 shadow-sm\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t";
        // line 10
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<div class=\"card mt-lg-0 mt-sm-3 shadow-sm\">
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h5 class=\"card-title\"><span class=\"red-text text-lighten-1\">D</span>erniers articles</h5>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t        \t\t\t<td>
\t\t\t\t        \t\t\t\t";
            // line 27
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array())) > 0)) {
                // line 28
                echo "\t\t\t\t        \t\t\t\t\t<span class=\"badge accentation\">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()), 0, array(), "array");
                echo "</span>
\t\t\t\t        \t\t\t\t";
            }
            // line 30
            echo "\t\t\t\t        \t\t\t\t<b>";
            echo $this->getAttribute($context["p"], "title", array());
            echo "</b> - <small>";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc($this->getAttribute($context["p"], "date", array()), false);
            echo "</small><br>
\t\t\t\t        \t\t\t</td>

\t\t\t\t        \t\t\t<td class=\"center-align\">
\t\t\t\t        \t\t\t\t<a class=\"accentuation\" href=\"";
            // line 34
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">Lire <i class=\"fas fa-arrow-right\"></i></a>
\t\t\t\t        \t\t\t</td>
\t\t\t\t\t        \t</tr>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

\t<!-- Skills -->

\t<div class=\"card mt-3 shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">C</span>ompétences</h3>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-code fa-lg text-warning\"></i> Code</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe code tous les jours, mon langage préféré est le <b>C++</b>
\t\t\t\t\t\t\tmais j'aime également coder en <b>C#</b> et apprendre à utiliser
\t\t\t\t\t\t\tde nouveaux outils/langages quand j'en ai l'occasion.
\t\t\t\t\t\t\tAutodidact je sais apprendre rapidement de nouvelles choses pour
\t\t\t\t\t\t\têtre rapidement productif.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-shapes fa-lg text-danger\"></i> 3D</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe pratique également la modélisation 3D que se soit pour mes projets de
\t\t\t\t\t\t\tcours ou pour mes projets personnels. <b>Blender</b> est mon éditeur favori.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-palette fa-lg text-primary\"></i> Design</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe sais utiliser des outils de design pour réaliser des choses simples comme
\t\t\t\t\t\t\tle prototypage d'interface pour les logiciels que je dois réaliser ou de simple
\t\t\t\t\t\t\ttextures. Je préfers les outils d'image vectorielle comme <b>Gravit Designer</b>
\t\t\t\t\t\t\tmais je connais également les bases de <b>Photoshop</b> et <b>Gimp</b>.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-users fa-lg text-success\"></i> Social</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA chaque projet que je dois réaliser pour mes cours je travaille en équipe, je sais
\t\t\t\t\t\t\tdonc gérer un projet à plusieurs en utilisant des outils tels que <b>Git</b> pour la
\t\t\t\t\t\t\tgestion du code source et <b>Glow</b> ou <b>Trello</b> pour l'organisation et la répartition des tâches.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card mt-3 shadow-sm\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">E</span>ducation</h3>

\t\t\t\t\t<br>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2014</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-flask fa-3x text-warning\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>Baccalauréat scientifique, spécialité Physique et Chimie.</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2014 - 2016</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard fa-3x text-primary\"></i> 
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tBrevet de Technicien Supérieur Systèmes Numériques, option Informatique
\t\t\t\t\t\t\t\t\t\tet Réseaux (Major de promotion).
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2016 - 2019</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-graduation-cap fa-3x text-danger\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPréparation d'un diplôme d'ingénieur en informatique spécialité Image, Intéractions et Réalité Virtuelle à l'université technologique de 
\t\t\t\t\t\t\t\t\t\tBelfort Montbéliard.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card mt-3 shadow-sm\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">E</span>xperience</h3>
\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Stage développeur Web Full stack</b> <span class=\"red-text text-lighten-1\">Septembre 2017 - Février 2018</span><br>
\t\t\t\t\t\t\t\t\tStage dans la direction régionale des Alpes de la société ENEDIS en tant
\t\t\t\t\t\t\t\t\tque développeur Full stack. Création d'un application orienté management
\t\t\t\t\t\t\t\t\tet finances.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Développeur C#</b> <span class=\"red-text text-lighten-1\">Juillet - Août 2016</span><br>
\t\t\t\t\t\t\t\t\tDéveloppeur C# pour la mairie de Vesoul. Création d'un application facilitant
\t\t\t\t\t\t\t\t\tla migration d'un serveur Active Directory.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Stage Développeur Java</b> <span class=\"red-text text-lighten-1\">Mai - Juin 2015</span><br>
\t\t\t\t\t\t\t\t\tStage dans l'entreprise Faurecia en tant que développeur Java. Création d'un
\t\t\t\t\t\t\t\t\tlogiciel permettant l'amélioration du suivi du chargement des camions et le 
\t\t\t\t\t\t\t\t\tsuivi des pièces.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- Portfolio -->
\t<div class=\"card mt-3 shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h3 class=\"card-title\"><span class=\"text-purple\">D</span>issident Studio</h3>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-4 col-sm-12 text-center\">

\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 242
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/dissidentstudio.webp");
        echo "\">

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8 col-sm-12\">

\t\t\t\t\t<p>
\t\t\t\t\t\tPassioné par la création de jeux vidéos et la liberté que cela offre, nous avons lancé
\t\t\t\t\t\ten 2014, avec Yannis Beaux et Florian Bayle, la création de notre studio de jeu vidéo.
\t\t\t\t\t\tBien que n'étant pas une réelle entité juridique Dissident Studio est la bannière sous
\t\t\t\t\t\tlaquelle nous regroupons nos créations.
\t\t\t\t\t\tAujourd'hui notre site répertorie les projets terminés et en cours de conception, c'est à 
\t\t\t\t\t\tdire 4 jeux terminés et 1 actuellement en cours de conception.
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-6 col-sm-12\">

\t\t\t\t\t<h5><span class=\"text-purple\">R</span>uins</h5>

\t\t\t\t\t<p>
\t\t\t\t\t\tNous développons activement notre prochain jeu, Ruins ! Il proposera au joueur de s'amuser
\t\t\t\t\t\tseul ou avec ces amis en coopération local et jusqu'à 4 en résistant à des vagues 
\t\t\t\t\t\td'ennemis et en poussant toujours plus loin le tableau des scores. <br><br>
\t\t\t\t\t\tPlongé dans un nouvel univers créé de toute pièce, tout peut arriver ! Pour en savoir plus
\t\t\t\t\t\tsur le jeu et sur Dissident Studio, visitez notre site.
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a 
\t\t\t\t\t\t\thref=\"https://www.dissidentstudio.fr\" 
\t\t\t\t\t\t\tclass=\"btn btn-primary btn-lg\"
\t\t\t\t\t\t\tstyle=\"background-color: #4a148c; border-color: transparent;\" 
\t\t\t\t\t\t>Visiter dissidentstudio.fr</a>
\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 col-sm-12 text-center\">

\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 290
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/Ruins.png");
        echo "\">

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>
    
";
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 290,  298 => 242,  92 => 38,  82 => 34,  72 => 30,  66 => 28,  64 => 27,  60 => 25,  56 => 24,  39 => 10,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% block content %}
\t
\t<div class=\"row\">

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<div class=\"card mt-lg-0 mt-sm-3 shadow-sm\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<div class=\"card mt-lg-0 mt-sm-3 shadow-sm\">
\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h5 class=\"card-title\"><span class=\"red-text text-lighten-1\">D</span>erniers articles</h5>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>

\t\t\t\t\t\t\t{% for p in page.collection %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t        \t\t\t<td>
\t\t\t\t        \t\t\t\t{% if p.taxonomy.tag|length > 0 %}
\t\t\t\t        \t\t\t\t\t<span class=\"badge accentation\">{{ p.taxonomy.tag[0] }}</span>
\t\t\t\t        \t\t\t\t{% endif %}
\t\t\t\t        \t\t\t\t<b>{{ p.title }}</b> - <small>{{ p.date|nicetime(false) }}</small><br>
\t\t\t\t        \t\t\t</td>

\t\t\t\t        \t\t\t<td class=\"center-align\">
\t\t\t\t        \t\t\t\t<a class=\"accentuation\" href=\"{{ p.url }}\">Lire <i class=\"fas fa-arrow-right\"></i></a>
\t\t\t\t        \t\t\t</td>
\t\t\t\t\t        \t</tr>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t</div>

\t<!-- Skills -->

\t<div class=\"card mt-3 shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">C</span>ompétences</h3>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-code fa-lg text-warning\"></i> Code</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe code tous les jours, mon langage préféré est le <b>C++</b>
\t\t\t\t\t\t\tmais j'aime également coder en <b>C#</b> et apprendre à utiliser
\t\t\t\t\t\t\tde nouveaux outils/langages quand j'en ai l'occasion.
\t\t\t\t\t\t\tAutodidact je sais apprendre rapidement de nouvelles choses pour
\t\t\t\t\t\t\têtre rapidement productif.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-shapes fa-lg text-danger\"></i> 3D</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe pratique également la modélisation 3D que se soit pour mes projets de
\t\t\t\t\t\t\tcours ou pour mes projets personnels. <b>Blender</b> est mon éditeur favori.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-palette fa-lg text-primary\"></i> Design</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tJe sais utiliser des outils de design pour réaliser des choses simples comme
\t\t\t\t\t\t\tle prototypage d'interface pour les logiciels que je dois réaliser ou de simple
\t\t\t\t\t\t\ttextures. Je préfers les outils d'image vectorielle comme <b>Gravit Designer</b>
\t\t\t\t\t\t\tmais je connais également les bases de <b>Photoshop</b> et <b>Gimp</b>.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-sm-12 col-lg-3\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<h4><i class=\"fas fa-users fa-lg text-success\"></i> Social</h4>
\t\t\t\t\t</div>

\t\t\t\t\t<div>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tA chaque projet que je dois réaliser pour mes cours je travaille en équipe, je sais
\t\t\t\t\t\t\tdonc gérer un projet à plusieurs en utilisant des outils tels que <b>Git</b> pour la
\t\t\t\t\t\t\tgestion du code source et <b>Glow</b> ou <b>Trello</b> pour l'organisation et la répartition des tâches.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card mt-3 shadow-sm\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">E</span>ducation</h3>

\t\t\t\t\t<br>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2014</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-flask fa-3x text-warning\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>Baccalauréat scientifique, spécialité Physique et Chimie.</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2014 - 2016</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard fa-3x text-primary\"></i> 
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tBrevet de Technicien Supérieur Systèmes Numériques, option Informatique
\t\t\t\t\t\t\t\t\t\tet Réseaux (Major de promotion).
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<b>2016 - 2019</b><br>
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-graduation-cap fa-3x text-danger\"></i>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\tPréparation d'un diplôme d'ingénieur en informatique spécialité Image, Intéractions et Réalité Virtuelle à l'université technologique de 
\t\t\t\t\t\t\t\t\t\tBelfort Montbéliard.
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t\t<div class=\"col-md-12 col-lg-6\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card mt-3 shadow-sm\">

\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t<h3 class=\"card-title\"><span class=\"red-text text-lighten-1\">E</span>xperience</h3>
\t\t\t\t\t
\t\t\t\t\t<br>

\t\t\t\t\t<table class=\"table table-borderless\">
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Stage développeur Web Full stack</b> <span class=\"red-text text-lighten-1\">Septembre 2017 - Février 2018</span><br>
\t\t\t\t\t\t\t\t\tStage dans la direction régionale des Alpes de la société ENEDIS en tant
\t\t\t\t\t\t\t\t\tque développeur Full stack. Création d'un application orienté management
\t\t\t\t\t\t\t\t\tet finances.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Développeur C#</b> <span class=\"red-text text-lighten-1\">Juillet - Août 2016</span><br>
\t\t\t\t\t\t\t\t\tDéveloppeur C# pour la mairie de Vesoul. Création d'un application facilitant
\t\t\t\t\t\t\t\t\tla migration d'un serveur Active Directory.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<b>Stage Développeur Java</b> <span class=\"red-text text-lighten-1\">Mai - Juin 2015</span><br>
\t\t\t\t\t\t\t\t\tStage dans l'entreprise Faurecia en tant que développeur Java. Création d'un
\t\t\t\t\t\t\t\t\tlogiciel permettant l'amélioration du suivi du chargement des camions et le 
\t\t\t\t\t\t\t\t\tsuivi des pièces.
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- Portfolio -->
\t<div class=\"card mt-3 shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h3 class=\"card-title\"><span class=\"text-purple\">D</span>issident Studio</h3>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-4 col-sm-12 text-center\">

\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ url('theme://images/dissidentstudio.webp') }}\">

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-8 col-sm-12\">

\t\t\t\t\t<p>
\t\t\t\t\t\tPassioné par la création de jeux vidéos et la liberté que cela offre, nous avons lancé
\t\t\t\t\t\ten 2014, avec Yannis Beaux et Florian Bayle, la création de notre studio de jeu vidéo.
\t\t\t\t\t\tBien que n'étant pas une réelle entité juridique Dissident Studio est la bannière sous
\t\t\t\t\t\tlaquelle nous regroupons nos créations.
\t\t\t\t\t\tAujourd'hui notre site répertorie les projets terminés et en cours de conception, c'est à 
\t\t\t\t\t\tdire 4 jeux terminés et 1 actuellement en cours de conception.
\t\t\t\t\t</p>

\t\t\t\t</div>

\t\t\t</div>

\t\t\t<br>

\t\t\t<div class=\"row\">

\t\t\t\t<div class=\"col-lg-6 col-sm-12\">

\t\t\t\t\t<h5><span class=\"text-purple\">R</span>uins</h5>

\t\t\t\t\t<p>
\t\t\t\t\t\tNous développons activement notre prochain jeu, Ruins ! Il proposera au joueur de s'amuser
\t\t\t\t\t\tseul ou avec ces amis en coopération local et jusqu'à 4 en résistant à des vagues 
\t\t\t\t\t\td'ennemis et en poussant toujours plus loin le tableau des scores. <br><br>
\t\t\t\t\t\tPlongé dans un nouvel univers créé de toute pièce, tout peut arriver ! Pour en savoir plus
\t\t\t\t\t\tsur le jeu et sur Dissident Studio, visitez notre site.
\t\t\t\t\t</p>

\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t<a 
\t\t\t\t\t\t\thref=\"https://www.dissidentstudio.fr\" 
\t\t\t\t\t\t\tclass=\"btn btn-primary btn-lg\"
\t\t\t\t\t\t\tstyle=\"background-color: #4a148c; border-color: transparent;\" 
\t\t\t\t\t\t>Visiter dissidentstudio.fr</a>
\t\t\t\t\t\t<br><br>
\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-6 col-sm-12 text-center\">

\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ url('theme://images/Ruins.png') }}\">

\t\t\t\t</div>

\t\t\t</div>

\t\t</div>

\t</div>
    
{% endblock %}", "homepage.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\homepage.html.twig");
    }
}
