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
\t<div class=\"card-panel z-depth-2\">
\t\t";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t</div>

\t<!-- Skills -->

\t<div class=\"card-panel z-depth-2\">

\t\t<h3><span class=\"red-text text-lighten-1\">S</span>kills</h3>

\t\t<br>

\t\t<div class=\"row\">

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-code fa-lg orange-text text-lighten-1\"></i> Code</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI code every day, my favourite language is <b>C++</b>.
\t\t\t\t\t\tI like to code in <b>C#</b> too. <br>
\t\t\t\t\t\tI'm an adaptive person, I can learn new languages and be
\t\t\t\t\t\tproductive with it as fast as possible !
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-shapes fa-lg blue-text text-lighten-1\"></i> 3D</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI practice 3D modeling a lot in courses and for more personnal projects.
\t\t\t\t\t\tI use <b>Blender</b> as my favourite 3D editing tool.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-palette fa-lg red-text text-lighten-1\"></i> Design</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI know how to use design tools to create mockup for software's GUI or just
\t\t\t\t\t\tsimple graphics for application/game. I prefer vector based design softwares
\t\t\t\t\t\tlike <b>Gravit Designer</b> but I can use <b>Photoshop</b> and <b>Gimp</b>.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-users fa-lg green-text text-lighten-1\"></i> Social</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI work in team almost every time for my school projects. I know how to  animate
\t\t\t\t\t\tand manage a group by experience. I can be managed too ! <br>
\t\t\t\t\t\tI use <b>Git</b> to manage the code and <b>Glow</b> or <b>Trello</b> to organise tasks
\t\t\t\t\t\tin team projects.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>

\t<div class=\"row\">
\t\t<div class=\"col l6 m12 s12\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card-panel z-depth-2\">

\t\t\t\t<h3><span class=\"red-text text-lighten-1\">E</span>ducation</h3>

\t\t\t\t<br>

\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2014</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-flask fa-3x red-text text-lighten-1\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>Baccalauréat in sciences, specialized in chemistry and physic.</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2014 - 2016</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard fa-3x orange-text text-lighten-1\"></i> 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>Two-year degree in numerical systems, option computer science and networking, with honours.</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2016 - 2019</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-graduation-cap fa-3x blue-text text-lighten-1\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tPreparation of an engineer degree (Five years) in computer science, specialized in 
\t\t\t\t\t\t\t\t\tpictures processing, interactions and virtual/augmented reality.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>

\t\t</div>

\t\t<div class=\"col l6 m12 s12\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card-panel z-depth-2\">

\t\t\t\t<h3><span class=\"red-text text-lighten-1\">E</span>xperience</h3>
\t\t\t\t\t
\t\t\t\t<br>

\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>Full stack developer internship</b> <span class=\"red-text text-lighten-1\">September 2017 - February 2018</span><br>
\t\t\t\t\t\t\t\tInternship at ENEDIS in France, Alpes, as a full stack web developer. I created an application for management and financial purposes.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>C# developer</b> <span class=\"red-text text-lighten-1\">July - August 2016</span><br>
\t\t\t\t\t\t\t\tC# developer for the town hall of Vesoul. I developed an application to facilitate the migration of a server.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>Java developer internship</b> <span class=\"red-text text-lighten-1\">May - June 2015</span><br>
\t\t\t\t\t\t\t\tInternship at Faurecia in France, Haute-Saône, as Java developer. I created an application to improve truck loading and keep track of parts.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- Portfolio -->
    
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
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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
\t<div class=\"card-panel z-depth-2\">
\t\t{{ page.content }}
\t</div>

\t<!-- Skills -->

\t<div class=\"card-panel z-depth-2\">

\t\t<h3><span class=\"red-text text-lighten-1\">S</span>kills</h3>

\t\t<br>

\t\t<div class=\"row\">

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-code fa-lg orange-text text-lighten-1\"></i> Code</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI code every day, my favourite language is <b>C++</b>.
\t\t\t\t\t\tI like to code in <b>C#</b> too. <br>
\t\t\t\t\t\tI'm an adaptive person, I can learn new languages and be
\t\t\t\t\t\tproductive with it as fast as possible !
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-shapes fa-lg blue-text text-lighten-1\"></i> 3D</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI practice 3D modeling a lot in courses and for more personnal projects.
\t\t\t\t\t\tI use <b>Blender</b> as my favourite 3D editing tool.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-palette fa-lg red-text text-lighten-1\"></i> Design</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI know how to use design tools to create mockup for software's GUI or just
\t\t\t\t\t\tsimple graphics for application/game. I prefer vector based design softwares
\t\t\t\t\t\tlike <b>Gravit Designer</b> but I can use <b>Photoshop</b> and <b>Gimp</b>.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col l3 s12\">
\t\t\t\t<div class=\"center-align\">
\t\t\t\t\t<h4><i class=\"fas fa-users fa-lg green-text text-lighten-1\"></i> Social</h4>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t<p>
\t\t\t\t\t\tI work in team almost every time for my school projects. I know how to  animate
\t\t\t\t\t\tand manage a group by experience. I can be managed too ! <br>
\t\t\t\t\t\tI use <b>Git</b> to manage the code and <b>Glow</b> or <b>Trello</b> to organise tasks
\t\t\t\t\t\tin team projects.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</div>

\t<div class=\"row\">
\t\t<div class=\"col l6 m12 s12\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card-panel z-depth-2\">

\t\t\t\t<h3><span class=\"red-text text-lighten-1\">E</span>ducation</h3>

\t\t\t\t<br>

\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2014</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-flask fa-3x red-text text-lighten-1\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>Baccalauréat in sciences, specialized in chemistry and physic.</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2014 - 2016</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-keyboard fa-3x orange-text text-lighten-1\"></i> 
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>Two-year degree in numerical systems, option computer science and networking, with honours.</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td class=\"center-align\">
\t\t\t\t\t\t\t\t<b>2016 - 2019</b><br>
\t\t\t\t\t\t\t\t<i class=\"fas fa-graduation-cap fa-3x blue-text text-lighten-1\"></i>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tPreparation of an engineer degree (Five years) in computer science, specialized in 
\t\t\t\t\t\t\t\t\tpictures processing, interactions and virtual/augmented reality.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>

\t\t</div>

\t\t<div class=\"col l6 m12 s12\">
\t\t\t<!-- Education -->
\t\t\t<div class=\"card-panel z-depth-2\">

\t\t\t\t<h3><span class=\"red-text text-lighten-1\">E</span>xperience</h3>
\t\t\t\t\t
\t\t\t\t<br>

\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>Full stack developer internship</b> <span class=\"red-text text-lighten-1\">September 2017 - February 2018</span><br>
\t\t\t\t\t\t\t\tInternship at ENEDIS in France, Alpes, as a full stack web developer. I created an application for management and financial purposes.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>C# developer</b> <span class=\"red-text text-lighten-1\">July - August 2016</span><br>
\t\t\t\t\t\t\t\tC# developer for the town hall of Vesoul. I developed an application to facilitate the migration of a server.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>

\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<b>Java developer internship</b> <span class=\"red-text text-lighten-1\">May - June 2015</span><br>
\t\t\t\t\t\t\t\tInternship at Faurecia in France, Haute-Saône, as Java developer. I created an application to improve truck loading and keep track of parts.
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>

\t\t\t</div>

\t\t</div>

\t</div>

\t<!-- Portfolio -->
    
{% endblock %}", "homepage.html.twig", "C:\\laragon\\www\\grav-admin\\user\\themes\\resu-folio\\templates\\homepage.html.twig");
    }
}
