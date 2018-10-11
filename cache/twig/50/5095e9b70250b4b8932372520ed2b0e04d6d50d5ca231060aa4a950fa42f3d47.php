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
\t<div class=\"card-panel z-depth-2\">

\t\t<h1><span class=\"red-text text-lighten-1\">B</span>log posts</h1>

\t    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 12
            echo "\t        
\t        <div class=\"card-panel z-depth-0 blue-grey lighten-5\">
\t        \t\t<div class=\"row\">
\t        \t\t\t<div class=\"col s10\">
\t        \t\t\t\t<span class=\"flow-text\">";
            // line 16
            echo $this->getAttribute($context["p"], "title", array());
            echo "</span><br>

\t        \t\t\t\t";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["p"], "taxonomy", array()), "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 19
                echo "\t        \t\t\t\t    <span class=\"new badge blue-grey darken-4 white-text\">";
                echo $context["tag"];
                echo "</span>
\t        \t\t\t\t    <span class=\"new badge blue\">lol</span>
\t        \t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t        \t\t\t</div>

\t        \t\t\t<div class=\"col s2 right-align\">
\t        \t\t\t\t<small>";
            // line 25
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nicetimeFunc($this->getAttribute($context["p"], "date", array()), false);
            echo "</small><br>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<a class=\"red-text text-lighten-1\" href=\"";
            // line 28
            echo $this->getAttribute($context["p"], "url", array());
            echo "\">Read post <i class=\"fas fa-arrow-right\"></i></a>
\t        </div>

\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
\t    ";
        // line 33
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "pagination", array()), "enabled", array()) && $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))) {
            // line 34
            echo "\t\t    ";
            $this->loadTemplate("partials/pagination.html.twig", "bloglist.html.twig", 34)->display(array_merge($context, array("base_url" => $this->getAttribute(($context["page"] ?? null), "url", array()), "pagination" => $this->getAttribute($this->getAttribute(($context["collection"] ?? null), "params", array()), "pagination", array()))));
            // line 35
            echo "\t\t";
        }
        // line 36
        echo "\t</div>

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
        return array (  104 => 36,  101 => 35,  98 => 34,  96 => 33,  93 => 32,  83 => 28,  77 => 25,  72 => 22,  62 => 19,  58 => 18,  53 => 16,  47 => 12,  43 => 11,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

\t<div class=\"card-panel z-depth-2\">

\t\t<h1><span class=\"red-text text-lighten-1\">B</span>log posts</h1>

\t    {% for p in collection %}
\t        
\t        <div class=\"card-panel z-depth-0 blue-grey lighten-5\">
\t        \t\t<div class=\"row\">
\t        \t\t\t<div class=\"col s10\">
\t        \t\t\t\t<span class=\"flow-text\">{{ p.title }}</span><br>

\t        \t\t\t\t{% for tag in p.taxonomy.tag %}
\t        \t\t\t\t    <span class=\"new badge blue-grey darken-4 white-text\">{{ tag }}</span>
\t        \t\t\t\t    <span class=\"new badge blue\">lol</span>
\t        \t\t\t\t{% endfor %}
\t        \t\t\t</div>

\t        \t\t\t<div class=\"col s2 right-align\">
\t        \t\t\t\t<small>{{ p.date|nicetime(false) }}</small><br>
\t        \t\t\t</div>
\t        \t\t</div>
\t        \t\t<a class=\"red-text text-lighten-1\" href=\"{{ p.url }}\">Read post <i class=\"fas fa-arrow-right\"></i></a>
\t        </div>

\t    {% endfor %}

\t    {% if config.plugins.pagination.enabled and collection.params.pagination %}
\t\t    {% include 'partials/pagination.html.twig' with {'base_url':page.url, 'pagination':collection.params.pagination} %}
\t\t{% endif %}
\t</div>

{% endblock %}", "bloglist.html.twig", "C:\\laragon\\www\\grav-admin\\user\\themes\\resu-folio\\templates\\bloglist.html.twig");
    }
}
