<?php

/* partials/base.html.twig */
class __TwigTemplate_857fd730e05a43da8a1c1505c5a75b9b14e9d301f444dccd3ee2ac9c3e15d50a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'bottom' => array($this, 'block_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getActive", array())) : ($this->getAttribute(($context["theme_config"] ?? null), "default_lang", array())));
        echo "\">
<head>
";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 31
        echo "</head>
<body id=\"top\" class=\"";
        // line 32
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo " blue-grey lighten-5\">

";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('footer', $context, $blocks);
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('bottom', $context, $blocks);
        // line 168
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 7
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["header"] ?? null), "title", array()), "html");
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", array()), "html");
        echo "</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 11
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 11)->display($context);
        // line 12
        echo "
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/logo.png");
        echo "\" />
    <link rel=\"canonical\" href=\"";
        // line 14
        echo $this->getAttribute(($context["page"] ?? null), "url", array(0 => true, 1 => true), "method");
        echo "\" />

    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    ";
        // line 19
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 99), "method");
        // line 22
        echo "    ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 27
        echo "    ";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "    <nav class=\"blue-grey darken-4\">
        <div class=\"nav-wrapper container\">
        <a href=\"/\" class=\"brand-logo\"><span class=\"red-text text-lighten-1\">T</span>homas <span class=\"red-text text-lighten-1\">G</span>redin</a>

            ";
        // line 39
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 42
        echo "
        </div>
    </nav>
";
    }

    // line 39
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 40
        echo "                ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 40)->display($context);
        // line 41
        echo "            ";
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        // line 48
        echo "    <section id=\"body\">

        <div class=\"row\">

            <div class=\"col l3 m12\">
                <div class=\"card-panel z-depth-2\">

                        <div class=\"center-align\">
                            <img class=\"responsive-img\" src=\"";
        // line 56
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/profil.jpg");
        echo "\">
                            <h6>Etudiant ingénieur en Informatique spécialisé en imagerie</h6>
                        </div>

                        <blockquote>
                            Passioné par la programmation graphique et la création de jeux vidéo,
                            j'aime créer de nouvelles choses en partant de zéro ou en utilisant des
                            moteurs de jeu de référence dans l'industrie comme Unity3D.
                        </blockquote>

                </div>

                <div class=\"card-panel z-depth-2\">

                    <h5><span class=\"red-text text-lighten-1\">I</span>nformation</h5>

                    <table>
                        <tbody>
                          <tr>
                            <td><i class=\"fas fa-home fa-lg red-text text-lighten-1\"></i></td>
                            <td>Belfort, France</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-flag fa-lg red-text text-lighten-1\"></i></td>
                            <td>Français</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-phone fa-lg red-text text-lighten-1\"></i></td>
                            <td>(+33)669 606 859</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-envelope fa-lg red-text text-lighten-1\"></i></td>
                            <td>thomas.gredin@utbm.fr</td>
                          </tr>
                        </tbody>
                    </table>

                </div>

                <div class=\"card-panel z-depth-2\">

                    <h5><span class=\"red-text text-lighten-1\">R</span>éseaux sociaux</h5>

                    <br>

                    <div class=\"row\">

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://github.com/StagramTG\">
                                <i class=\"fab fa-github fa-3x black-text\"></i>
                            </a>
                        </div>

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">
                                <i class=\"fab fa-linkedin fa-3x blue-text text-darken-2\"></i>
                            </a>
                        </div>

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://twitter.com/GredinTom\">
                                <i class=\"fab fa-twitter fa-3x\"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"col l9 m12\">
                ";
        // line 129
        $this->displayBlock('content', $context, $blocks);
        // line 130
        echo "            </div>

        </div>

    </section>
";
    }

    // line 129
    public function block_content($context, array $blocks = array())
    {
    }

    // line 137
    public function block_footer($context, array $blocks = array())
    {
        // line 138
        echo "    <footer class=\"page-footer blue-grey darken-4\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col l6 s12\">
            <p class=\"grey-text text-lighten-4\">
                Ce site web est construit autour de <a href=\"https://getgrav.org\">Grav CMS</a> et <a href=\"https://materializecss.com\">Materialize.</a><br>
                Les icônes proviennent de <a href=\"https://fontawesome.com\">Font awesome</a>
            </p>
          </div>
          <div class=\"col l4 offset-l2 s12\">
            <h5 class=\"white-text\">Réseaux sociaux</h5>
            <ul>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://github.com/StagramTG\">Github</a></li>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">Linked In</a></li>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://twitter.com/GredinTom\">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright\">
        <div class=\"container\">
        Thomas Gredin © 2018 All right reserved
        </div>
      </div>
    </footer>
";
    }

    // line 165
    public function block_bottom($context, array $blocks = array())
    {
        // line 166
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(0 => "bottom"), "method");
        echo "
";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 166,  312 => 165,  283 => 138,  280 => 137,  275 => 129,  266 => 130,  264 => 129,  188 => 56,  178 => 48,  175 => 47,  171 => 41,  168 => 40,  165 => 39,  158 => 42,  156 => 39,  150 => 35,  147 => 34,  143 => 27,  140 => 26,  137 => 25,  133 => 22,  130 => 21,  127 => 20,  124 => 19,  116 => 28,  114 => 25,  108 => 23,  106 => 19,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  65 => 168,  63 => 165,  60 => 164,  58 => 137,  55 => 136,  53 => 47,  50 => 46,  48 => 34,  43 => 32,  40 => 31,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getActive ?: theme_config.default_lang }}\">
<head>
{% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title|e('html') }} | {% endif %}{{ site.title|e('html') }}</title>

    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% include 'partials/metadata.html.twig' %}

    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/logo.png') }}\" />
    <link rel=\"canonical\" href=\"{{ page.url(true, true) }}\" />

    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    {% block stylesheets %}
        {% do assets.addCss('https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 99) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} blue-grey lighten-5\">

{% block header %}
    <nav class=\"blue-grey darken-4\">
        <div class=\"nav-wrapper container\">
        <a href=\"/\" class=\"brand-logo\"><span class=\"red-text text-lighten-1\">T</span>homas <span class=\"red-text text-lighten-1\">G</span>redin</a>

            {% block header_navigation %}
                {% include 'partials/navigation.html.twig' %}
            {% endblock %}

        </div>
    </nav>
{% endblock %}

{% block body %}
    <section id=\"body\">

        <div class=\"row\">

            <div class=\"col l3 m12\">
                <div class=\"card-panel z-depth-2\">

                        <div class=\"center-align\">
                            <img class=\"responsive-img\" src=\"{{ url('theme://images/profil.jpg') }}\">
                            <h6>Etudiant ingénieur en Informatique spécialisé en imagerie</h6>
                        </div>

                        <blockquote>
                            Passioné par la programmation graphique et la création de jeux vidéo,
                            j'aime créer de nouvelles choses en partant de zéro ou en utilisant des
                            moteurs de jeu de référence dans l'industrie comme Unity3D.
                        </blockquote>

                </div>

                <div class=\"card-panel z-depth-2\">

                    <h5><span class=\"red-text text-lighten-1\">I</span>nformation</h5>

                    <table>
                        <tbody>
                          <tr>
                            <td><i class=\"fas fa-home fa-lg red-text text-lighten-1\"></i></td>
                            <td>Belfort, France</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-flag fa-lg red-text text-lighten-1\"></i></td>
                            <td>Français</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-phone fa-lg red-text text-lighten-1\"></i></td>
                            <td>(+33)669 606 859</td>
                          </tr>

                          <tr>
                            <td><i class=\"fas fa-envelope fa-lg red-text text-lighten-1\"></i></td>
                            <td>thomas.gredin@utbm.fr</td>
                          </tr>
                        </tbody>
                    </table>

                </div>

                <div class=\"card-panel z-depth-2\">

                    <h5><span class=\"red-text text-lighten-1\">R</span>éseaux sociaux</h5>

                    <br>

                    <div class=\"row\">

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://github.com/StagramTG\">
                                <i class=\"fab fa-github fa-3x black-text\"></i>
                            </a>
                        </div>

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">
                                <i class=\"fab fa-linkedin fa-3x blue-text text-darken-2\"></i>
                            </a>
                        </div>

                        <div class=\"col s4 center-align\">
                            <a class=\"\" href=\"https://twitter.com/GredinTom\">
                                <i class=\"fab fa-twitter fa-3x\"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class=\"col l9 m12\">
                {% block content %}{% endblock %}
            </div>

        </div>

    </section>
{% endblock %}

{% block footer %}
    <footer class=\"page-footer blue-grey darken-4\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col l6 s12\">
            <p class=\"grey-text text-lighten-4\">
                Ce site web est construit autour de <a href=\"https://getgrav.org\">Grav CMS</a> et <a href=\"https://materializecss.com\">Materialize.</a><br>
                Les icônes proviennent de <a href=\"https://fontawesome.com\">Font awesome</a>
            </p>
          </div>
          <div class=\"col l4 offset-l2 s12\">
            <h5 class=\"white-text\">Réseaux sociaux</h5>
            <ul>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://github.com/StagramTG\">Github</a></li>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">Linked In</a></li>
              <li><a class=\"grey-text text-lighten-3\" href=\"https://twitter.com/GredinTom\">Twitter</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class=\"footer-copyright\">
        <div class=\"container\">
        Thomas Gredin © 2018 All right reserved
        </div>
      </div>
    </footer>
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\partials\\base.html.twig");
    }
}
