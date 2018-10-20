<?php

/* bloglist.html.twig */
class __TwigTemplate_66f2f8bdc3e69f242a7bf292321439ad4432b6cefcea871bc0c19fd3fc6bf1dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "bloglist.html.twig", 1);
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
\t";
        // line 5
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 6
        echo "
\t<div class=\"card shadow-sm mt-lg-0 mt-sm-3\">

\t\t<div class=\"card-body\">

\t\t\t<h1 class=\"card-title\"><span class=\"accentuation\">A</span>rticles</h1>

\t\t    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 14
            echo "\t\t        
\t\t        <div class=\"card\">
\t\t        \t
\t\t        \t<div class=\"card-body\">

\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-sm-10\">
\t        \t\t\t\t\t<h5 class=\"card-title\">
\t        \t\t\t\t\t\t";
            // line 22
            echo $this->getAttribute($context["p"], "title", array());
            echo "
\t        \t\t\t\t\t</h5>
\t\t        \t\t\t</div>

\t\t        \t\t\t<div class=\"col-sm-2 s2 text-right\">
\t\t        \t\t\t\t<a class=\"card-link accentuation\" href=\"";
            // line 27
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">Lire <i class=\"fas fa-arrow-right\"></i></a>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</div>

\t\t        \t<div class=\"card-footer\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col\">
\t\t\t\t        \t\t";
            // line 35
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array())) > 0)) {
                // line 36
                echo "\t\t\t\t        \t    \t<span class=\"badge accentation\">";
                echo $this->getAttribute($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()), 0, array(), "array");
                echo "</span>
\t\t\t\t        \t    ";
            }
            // line 38
            echo "\t\t\t\t        \t</div>

\t\t\t\t\t        <div class=\"col text-right\">
\t\t\t\t\t        \t<small class=\"text-muted\">";
            // line 41
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc($this->getAttribute($context["p"], "date", array()), false);
            echo "</small>
\t\t\t\t\t        </div>
\t\t        \t\t</div>
\t\t\t\t    </div>

\t\t        </div>

\t\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
\t\t    ";
        // line 50
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 51
            echo "\t\t\t    ";
            $this->loadTemplate("partials/pagination.html.twig", "bloglist.html.twig", 51)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 52
            echo "\t\t\t";
        }
        // line 53
        echo "
\t\t</div>

\t</div>

";
    }

    public function getTemplateName()
    {
        return "bloglist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 53,  113 => 52,  110 => 51,  108 => 50,  105 => 49,  91 => 41,  86 => 38,  80 => 36,  78 => 35,  67 => 27,  59 => 22,  49 => 14,  45 => 13,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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
\t{% set collection = page.collection() %}

\t<div class=\"card shadow-sm mt-lg-0 mt-sm-3\">

\t\t<div class=\"card-body\">

\t\t\t<h1 class=\"card-title\"><span class=\"accentuation\">A</span>rticles</h1>

\t\t    {% for p in collection %}
\t\t        
\t\t        <div class=\"card\">
\t\t        \t
\t\t        \t<div class=\"card-body\">

\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col-sm-10\">
\t        \t\t\t\t\t<h5 class=\"card-title\">
\t        \t\t\t\t\t\t{{ p.title }}
\t        \t\t\t\t\t</h5>
\t\t        \t\t\t</div>

\t\t        \t\t\t<div class=\"col-sm-2 s2 text-right\">
\t\t        \t\t\t\t<a class=\"card-link accentuation\" href=\"{{ p.url }}\">Lire <i class=\"fas fa-arrow-right\"></i></a>
\t\t        \t\t\t</div>
\t\t        \t\t</div>
\t\t        \t</div>

\t\t        \t<div class=\"card-footer\">
\t\t        \t\t<div class=\"row\">
\t\t        \t\t\t<div class=\"col\">
\t\t\t\t        \t\t{% if p.taxonomy.tag|length > 0 %}
\t\t\t\t        \t    \t<span class=\"badge accentation\">{{ p.taxonomy.tag[0] }}</span>
\t\t\t\t        \t    {% endif %}
\t\t\t\t        \t</div>

\t\t\t\t\t        <div class=\"col text-right\">
\t\t\t\t\t        \t<small class=\"text-muted\">{{ p.date|nicetime(false) }}</small>
\t\t\t\t\t        </div>
\t\t        \t\t</div>
\t\t\t\t    </div>

\t\t        </div>

\t\t    {% endfor %}

\t\t    {% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t\t    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t\t{% endif %}

\t\t</div>

\t</div>

{% endblock %}", "bloglist.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\bloglist.html.twig");
    }
}
