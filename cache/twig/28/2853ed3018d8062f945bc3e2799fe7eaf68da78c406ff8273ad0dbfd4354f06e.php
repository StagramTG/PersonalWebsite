<?php

/* portfolio.html.twig */
class __TwigTemplate_f344cfbf47e62faad2e4e81270c8c76c74c2695c502b6a92ffc688ac99f2150f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "portfolio.html.twig", 1);
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
        echo "\t<div class=\"card shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h1 class=\"card-title\"><span class=\"accentuation\">P</span>ortfolio</h1>
\t\t\t<p>J'expose ici les projets que j'ai réalisé soit professionnellement, soit personnellement.</p>

\t\t\t<div class=\"row\">

\t\t\t\t";
        // line 13
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 14
        echo "\t\t\t\t";
        $context["index"] = 0;
        // line 15
        echo "
\t\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "\t\t\t\t    
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">

\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t<img src=\"";
            // line 22
            echo $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($context["page"], "media", array()), "images", array())), "url", array(), "method");
            echo "\" class=\"card-img-top\">
\t\t\t\t\t\t\t<div class=\"card-body text-center\">

\t\t\t\t\t\t\t\t<p>";
            // line 25
            echo $this->getAttribute($context["page"], "title", array());
            echo "</p>

\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\" data-toggle=\"modal\" data-target=\"#details-";
            // line 27
            echo ($context["index"] ?? null);
            echo "\">
\t\t\t\t\t\t\t\t\tPlus de détails
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"modal fade\" id=\"details-";
            // line 37
            echo ($context["index"] ?? null);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">";
            // line 41
            echo $this->getAttribute($context["page"], "title", array());
            echo "</h5>
\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t        </button>
\t\t\t\t\t      </div>
\t\t\t\t\t      <div class=\"modal-body\">
\t\t\t\t\t      \t";
            // line 47
            echo $this->getAttribute($context["page"], "content", array());
            echo "
\t\t\t\t\t      </div>
\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t\t\t\t\t";
            // line 56
            $context["index"] = (($context["index"] ?? null) + 1);
            // line 57
            echo "
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t</div>

\t\t</div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 59,  115 => 57,  113 => 56,  101 => 47,  92 => 41,  85 => 37,  72 => 27,  67 => 25,  61 => 22,  54 => 17,  50 => 16,  47 => 15,  44 => 14,  42 => 13,  31 => 4,  28 => 3,  11 => 1,);
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
\t<div class=\"card shadow-sm\">

\t\t<div class=\"card-body\">

\t\t\t<h1 class=\"card-title\"><span class=\"accentuation\">P</span>ortfolio</h1>
\t\t\t<p>J'expose ici les projets que j'ai réalisé soit professionnellement, soit personnellement.</p>

\t\t\t<div class=\"row\">

\t\t\t\t{% set collection = page.collection() %}
\t\t\t\t{% set index = 0 %}

\t\t\t\t{% for page in collection %}
\t\t\t\t    
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12\">

\t\t\t\t\t\t<div class=\"card\">

\t\t\t\t\t\t\t<img src=\"{{ (page.media.images|first).url() }}\" class=\"card-img-top\">
\t\t\t\t\t\t\t<div class=\"card-body text-center\">

\t\t\t\t\t\t\t\t<p>{{ page.title }}</p>

\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-dark\" data-toggle=\"modal\" data-target=\"#details-{{ index }}\">
\t\t\t\t\t\t\t\t\tPlus de détails
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>

\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"modal fade\" id=\"details-{{ index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t\t\t  <div class=\"modal-dialog modal-lg\" role=\"document\">
\t\t\t\t\t    <div class=\"modal-content\">
\t\t\t\t\t      <div class=\"modal-header\">
\t\t\t\t\t        <h5 class=\"modal-title\" id=\"exampleModalLabel\">{{ page.title }}</h5>
\t\t\t\t\t        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t          <span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t        </button>
\t\t\t\t\t      </div>
\t\t\t\t\t      <div class=\"modal-body\">
\t\t\t\t\t      \t{{ page.content }}
\t\t\t\t\t      </div>
\t\t\t\t\t      <div class=\"modal-footer\">
\t\t\t\t\t        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
\t\t\t\t\t      </div>
\t\t\t\t\t    </div>
\t\t\t\t\t  </div>
\t\t\t\t\t</div>

\t\t\t\t\t{% set index = index + 1 %}

\t\t\t\t{% endfor %}

\t\t\t</div>

\t\t</div>

    </div>
{% endblock %}", "portfolio.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\portfolio.html.twig");
    }
}
