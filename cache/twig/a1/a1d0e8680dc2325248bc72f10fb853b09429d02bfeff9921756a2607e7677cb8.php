<?php

/* homepage.html.twig */
class __TwigTemplate_398dccc4b46b9281601d32b44f00f21ceeec9c210b4c55c103ee77389e72b2b6 extends Twig_Template
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
\t\t<h2>Create new things is awesome !</h2>
\t</div>

    ";
        // line 9
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
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
        return array (  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
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
\t\t<h2>Create new things is awesome !</h2>
\t</div>

    {{ page.content }}
{% endblock %}", "homepage.html.twig", "C:\\laragon\\www\\grav-admin\\user\\themes\\resu-folio\\templates\\homepage.html.twig");
    }
}
