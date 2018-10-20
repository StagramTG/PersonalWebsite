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
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('footer', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('bottom', $context, $blocks);
        // line 185
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

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    ";
        // line 18
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

    ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 28
        echo "    ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/bootstrap.min.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 99), "method");
        // line 21
        echo "    ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 100), "method");
        // line 26
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/bootstrap.min.js", 1 => 100), "method");
        // line 27
        echo "    ";
    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        // line 35
        echo "
    <nav class=\"navbar navbar-expand-lg navbar-dark\">
      <div class=\"container\">
          <a class=\"navbar-brand\" href=\"/\"><span class=\"accentuation\">T</span>homas <span class=\"accentuation\">G</span>redin</a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                ";
        // line 44
        $this->displayBlock('header_navigation', $context, $blocks);
        // line 47
        echo "          </div>
      </div>
    </nav>

";
    }

    // line 44
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 45
        echo "                    ";
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "                ";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    <div class=\"container-fluid\">

        <div class=\"mt-3\"></div>
        <section id=\"body\">

            <div class=\"row\">

                <div class=\"col-md-12 col-lg-3\">
                    <div class=\"card shadow-sm\">
                        <img class=\"card-img-top\" src=\"";
        // line 63
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/profil.jpg");
        echo "\">

                        <div class=\"card-body\">
                            <h6 class=\"card-title text-center\">Etudiant ingénieur en Informatique spécialisé en imagerie</h6>
                            <p>
                                Passioné par la programmation graphique et la création de jeux vidéo,
                                j'aime créer de nouvelles choses en partant de zéro ou en utilisant des
                                moteurs de jeu de référence dans l'industrie comme Unity3D.
                            </p>
                        </div>
                    </div>

                    <div class=\"card mt-3 shadow-sm\">

                        <div class=\"card-body\">

                            <h5 class=\"card-title\"><span class=\"accentuation\">I</span>nformation</h5>

                            <table class=\"table table-borderless\">
                                <tbody>
                                  <tr>
                                    <td><i class=\"fas fa-home fa-lg accentuation\"></i></td>
                                    <td>Belfort, France</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-flag fa-lg accentuation\"></i></td>
                                    <td>Français</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-phone fa-lg accentuation\"></i></td>
                                    <td>(+33)669 606 859</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-envelope fa-lg accentuation\"></i></td>
                                    <td>thomas.gredin@utbm.fr</td>
                                  </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class=\"card mt-3 shadow-sm\">

                        <div class=\"card-body\">

                            <h5><span class=\"accentuation\">R</span>éseaux sociaux</h5>

                            <br>

                            <div class=\"row\">

                                <div class=\"col text-center\">
                                    <a class=\"text-dark\" href=\"https://github.com/StagramTG\">
                                        <i class=\"fab fa-github fa-3x black-text\"></i>
                                    </a>
                                </div>

                                <div class=\"col text-center\">
                                    <a class=\"text-info\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">
                                        <i class=\"fab fa-linkedin fa-3x blue-text text-darken-2\"></i>
                                    </a>
                                </div>

                                <div class=\"col text-center\">
                                    <a class=\"text-primary\" href=\"https://twitter.com/GredinTom\">
                                        <i class=\"fab fa-twitter fa-3x\"></i>
                                    </a>
                                </div>
                            </div>

                        </div>  

                    </div>
                </div>

                <div class=\"col-md-12 col-lg-9 mb-3\">
                    ";
        // line 144
        $this->displayBlock('content', $context, $blocks);
        // line 145
        echo "                </div>

            </div>

        </section>

    </div>
";
    }

    // line 144
    public function block_content($context, array $blocks = array())
    {
    }

    // line 154
    public function block_footer($context, array $blocks = array())
    {
        // line 155
        echo "    <!-- <footer class=\"page-footer blue-grey darken-4\">
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
    </footer> -->
";
    }

    // line 182
    public function block_bottom($context, array $blocks = array())
    {
        // line 183
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
        return array (  334 => 183,  331 => 182,  302 => 155,  299 => 154,  294 => 144,  283 => 145,  281 => 144,  197 => 63,  186 => 54,  183 => 53,  179 => 46,  176 => 45,  173 => 44,  165 => 47,  163 => 44,  152 => 35,  149 => 34,  145 => 27,  142 => 26,  139 => 25,  136 => 24,  132 => 21,  129 => 20,  126 => 19,  123 => 18,  115 => 28,  113 => 24,  107 => 22,  105 => 18,  98 => 14,  94 => 13,  91 => 12,  89 => 11,  78 => 7,  75 => 6,  72 => 5,  65 => 185,  63 => 182,  60 => 181,  58 => 154,  55 => 153,  53 => 53,  50 => 52,  48 => 34,  43 => 32,  40 => 31,  38 => 5,  33 => 3,  30 => 2,  28 => 1,);
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

    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css/bootstrap.min.css', 100) %}
        {% do assets.addCss('theme://css/custom.css', 99) %}
    {% endblock %}
    {{ assets.css() }}

    {% block javascripts %}
        {% do assets.addJs('jquery', 100) %}
        {% do assets.addJs('theme://js/bootstrap.min.js', 100) %}
    {% endblock %}
    {{ assets.js() }}

{% endblock head%}
</head>
<body id=\"top\" class=\"{{ page.header.body_classes }} blue-grey lighten-5\">

{% block header %}

    <nav class=\"navbar navbar-expand-lg navbar-dark\">
      <div class=\"container\">
          <a class=\"navbar-brand\" href=\"/\"><span class=\"accentuation\">T</span>homas <span class=\"accentuation\">G</span>redin</a>

          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <i class=\"fas fa-bars\"></i>
          </button>
          <div class=\"collapse navbar-collapse\" id=\"navbarText\">
                {% block header_navigation %}
                    {% include 'partials/navigation.html.twig' %}
                {% endblock %}
          </div>
      </div>
    </nav>

{% endblock %}

{% block body %}
    <div class=\"container-fluid\">

        <div class=\"mt-3\"></div>
        <section id=\"body\">

            <div class=\"row\">

                <div class=\"col-md-12 col-lg-3\">
                    <div class=\"card shadow-sm\">
                        <img class=\"card-img-top\" src=\"{{ url('theme://images/profil.jpg') }}\">

                        <div class=\"card-body\">
                            <h6 class=\"card-title text-center\">Etudiant ingénieur en Informatique spécialisé en imagerie</h6>
                            <p>
                                Passioné par la programmation graphique et la création de jeux vidéo,
                                j'aime créer de nouvelles choses en partant de zéro ou en utilisant des
                                moteurs de jeu de référence dans l'industrie comme Unity3D.
                            </p>
                        </div>
                    </div>

                    <div class=\"card mt-3 shadow-sm\">

                        <div class=\"card-body\">

                            <h5 class=\"card-title\"><span class=\"accentuation\">I</span>nformation</h5>

                            <table class=\"table table-borderless\">
                                <tbody>
                                  <tr>
                                    <td><i class=\"fas fa-home fa-lg accentuation\"></i></td>
                                    <td>Belfort, France</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-flag fa-lg accentuation\"></i></td>
                                    <td>Français</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-phone fa-lg accentuation\"></i></td>
                                    <td>(+33)669 606 859</td>
                                  </tr>

                                  <tr>
                                    <td><i class=\"fas fa-envelope fa-lg accentuation\"></i></td>
                                    <td>thomas.gredin@utbm.fr</td>
                                  </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>

                    <div class=\"card mt-3 shadow-sm\">

                        <div class=\"card-body\">

                            <h5><span class=\"accentuation\">R</span>éseaux sociaux</h5>

                            <br>

                            <div class=\"row\">

                                <div class=\"col text-center\">
                                    <a class=\"text-dark\" href=\"https://github.com/StagramTG\">
                                        <i class=\"fab fa-github fa-3x black-text\"></i>
                                    </a>
                                </div>

                                <div class=\"col text-center\">
                                    <a class=\"text-info\" href=\"https://www.linkedin.com/in/thomas-gredin-345339137/\">
                                        <i class=\"fab fa-linkedin fa-3x blue-text text-darken-2\"></i>
                                    </a>
                                </div>

                                <div class=\"col text-center\">
                                    <a class=\"text-primary\" href=\"https://twitter.com/GredinTom\">
                                        <i class=\"fab fa-twitter fa-3x\"></i>
                                    </a>
                                </div>
                            </div>

                        </div>  

                    </div>
                </div>

                <div class=\"col-md-12 col-lg-9 mb-3\">
                    {% block content %}{% endblock %}
                </div>

            </div>

        </section>

    </div>
{% endblock %}

{% block footer %}
    <!-- <footer class=\"page-footer blue-grey darken-4\">
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
    </footer> -->
{% endblock %}

{% block bottom %}
    {{ assets.js('bottom') }}
{% endblock %}

</body>
</html>
", "partials/base.html.twig", "D:\\Programs\\laragon\\www\\PersonalWebsite\\user\\themes\\resu-folio\\templates\\partials\\base.html.twig");
    }
}
