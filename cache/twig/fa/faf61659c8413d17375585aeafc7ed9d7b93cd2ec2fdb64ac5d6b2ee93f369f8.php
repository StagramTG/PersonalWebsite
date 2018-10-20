<?php

/* blogpost.html.twig */
class __TwigTemplate_40ebfb042e341019b09fef7ae0ca37f95f81828c20ab808d7480a06ad30e8965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "blogpost.html.twig", 1);
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

\t\t\t<div class=\"text-center\">
\t\t\t\t<h2>";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "</h2>
\t\t\t</div>

\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-sm-12\">
\t\t\t\t\t";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t<b>Publié le ";
        // line 21
        echo twig_date_format_filter($this->env, $this->getAttribute(($context["page"] ?? null), "date", array()), "d/m/Y");
        echo "</b>
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<b>Tags du poste</b><br><br>
\t\t\t\t\t\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "taxonomy", array()), "tag", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 26
            echo "\t\t\t\t\t\t\t    <span class=\"badge accentation\">";
            echo $context["tag"];
            echo "</span>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "blogpost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 28,  67 => 26,  63 => 25,  56 => 21,  46 => 14,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
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

\t\t\t<div class=\"text-center\">
\t\t\t\t<h2>{{ page.title }}</h2>
\t\t\t</div>

\t\t\t<hr>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-8 col-sm-12\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4 col-sm-12\">
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t<b>Publié le {{ page.date|date('d/m/Y') }}</b>
\t\t\t\t\t\t\t<hr>

\t\t\t\t\t\t\t<b>Tags du poste</b><br><br>
\t\t\t\t\t\t\t{% for tag in page.taxonomy.tag %}
\t\t\t\t\t\t\t    <span class=\"badge accentation\">{{ tag }}</span>
\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
    </div>
{% endblock %}", "blogpost.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\blogpost.html.twig");
    }
}
