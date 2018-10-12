<?php

/* partials/pagination.html.twig */
class __TwigTemplate_667d67322fc431b5e60c1336fe35e0b4c914b8930e0f4c0564b45f61c6da16c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["pagination"] = (((isset($context["pagination"]) || array_key_exists("pagination", $context))) ? (_twig_default_filter(($context["pagination"] ?? null), $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array()))) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "collection", array()), "params", array()), "pagination", array())));
        // line 2
        $context["base_url"] = (((isset($context["base_url"]) || array_key_exists("base_url", $context))) ? (_twig_default_filter(($context["base_url"] ?? null), $this->getAttribute(($context["page"] ?? null), "url", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
        // line 3
        echo "
";
        // line 4
        if ((twig_length_filter($this->env, ($context["pagination"] ?? null)) > 1)) {
            // line 5
            echo "
<ul class=\"pagination\">
    ";
            // line 7
            if ($this->getAttribute(($context["pagination"] ?? null), "hasPrev", array())) {
                // line 8
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "prevUrl", array())), array("//" => "/"));
                // line 9
                echo "        <li class=\"waves-effect\"><a href=\"";
                echo ($context["url"] ?? null);
                echo "\"><i class=\"material-icons\">chevron_left</i></a></li>
    ";
            } else {
                // line 11
                echo "        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
    ";
            }
            // line 13
            echo "
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["paginate"]) {
                // line 15
                echo "
        ";
                // line 16
                if ($this->getAttribute($context["paginate"], "isCurrent", array())) {
                    // line 17
                    echo "            <li class=\"active blue-grey darken-4\"><a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
        ";
                } elseif ($this->getAttribute(                // line 18
$context["paginate"], "isInDelta", array())) {
                    // line 19
                    echo "            ";
                    $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute($context["paginate"], "url", array())), array("//" => "/"));
                    // line 20
                    echo "            <li class=\"waves-effect\"><a href=\"";
                    echo ($context["url"] ?? null);
                    echo "\">";
                    echo $this->getAttribute($context["paginate"], "number", array());
                    echo "</a></li>
        ";
                } elseif ($this->getAttribute(                // line 21
$context["paginate"], "isDeltaBorder", array())) {
                    // line 22
                    echo "            <li class=\"gap\"><span>&hellip;</span></li>
        ";
                }
                // line 24
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paginate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
            if ($this->getAttribute(($context["pagination"] ?? null), "hasNext", array())) {
                // line 27
                echo "        ";
                $context["url"] = twig_replace_filter(((($context["base_url"] ?? null) . $this->getAttribute(($context["pagination"] ?? null), "params", array())) . $this->getAttribute(($context["pagination"] ?? null), "nextUrl", array())), array("//" => "/"));
                // line 28
                echo "        <li class=\"waves-effect\"><a href=\"";
                echo ($context["url"] ?? null);
                echo "\"><i class=\"material-icons\">chevron_right</i></a></li>
    ";
            } else {
                // line 30
                echo "        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
    ";
            }
            // line 32
            echo "</ul>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  103 => 30,  97 => 28,  94 => 27,  91 => 26,  84 => 24,  80 => 22,  78 => 21,  71 => 20,  68 => 19,  66 => 18,  59 => 17,  57 => 16,  54 => 15,  50 => 14,  47 => 13,  43 => 11,  37 => 9,  34 => 8,  32 => 7,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set pagination = pagination|default(page.collection.params.pagination) %}
{% set base_url = base_url|default(page.url) %}

{% if pagination|length > 1 %}

<ul class=\"pagination\">
    {% if pagination.hasPrev %}
        {% set url =  (base_url ~ pagination.params ~ pagination.prevUrl)|replace({'//':'/'}) %}
        <li class=\"waves-effect\"><a href=\"{{ url }}\"><i class=\"material-icons\">chevron_left</i></a></li>
    {% else %}
        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_left</i></a></li>
    {% endif %}

    {% for paginate in pagination %}

        {% if paginate.isCurrent %}
            <li class=\"active blue-grey darken-4\"><a href=\"{{ url }}\">{{ paginate.number }}</a></li>
        {% elseif paginate.isInDelta %}
            {% set url = (base_url ~ pagination.params ~ paginate.url)|replace({'//':'/'}) %}
            <li class=\"waves-effect\"><a href=\"{{ url }}\">{{ paginate.number }}</a></li>
        {% elseif paginate.isDeltaBorder %}
            <li class=\"gap\"><span>&hellip;</span></li>
        {% endif %}

    {% endfor %}
    {% if pagination.hasNext %}
        {% set url = (base_url ~ pagination.params ~ pagination.nextUrl)|replace({'//':'/'}) %}
        <li class=\"waves-effect\"><a href=\"{{ url }}\"><i class=\"material-icons\">chevron_right</i></a></li>
    {% else %}
        <li class=\"disabled\"><a href=\"#!\"><i class=\"material-icons\">chevron_right</i></a></li>
    {% endif %}
</ul>

{% endif %}
", "partials/pagination.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\partials\\pagination.html.twig");
    }
}
