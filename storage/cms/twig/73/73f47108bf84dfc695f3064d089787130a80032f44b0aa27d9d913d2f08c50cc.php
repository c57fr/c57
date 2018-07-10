<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/layouts/content.htm */
class __TwigTemplate_12fe7e52643d64675723c2dbc0ef2c669e1ff99dc8e9fa9f6b50eebe3fdb3aeb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $context["hasChildren"] = twig_get_attribute($this->env, $this->source, ((twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "parent", array())) : (twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", array()))), "children", array());
        // line 8
        echo "
        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 18
        if (($context["hasChildren"] ?? null)) {
            // line 19
            echo "                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        ";
            // line 21
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['page'] = twig_get_attribute($this->env, $this->source, ($context["staticPage"] ?? null), "page", array())            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/subnav"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "                    </div>
                </div>
            ";
        }
        // line 25
        echo "            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h2>
                    </div>

                    ";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 33
        echo "                </div>
                ";
        // line 34
        if ($this->extensions['Cms\Twig\Extension']->placeholderFunction("extraContent")) {
            // line 35
            echo "                    <div class=\"static-content-extra\">
                        ";
            // line 36
            $context['__placeholder_extraContent_default_contents'] = null;            echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('extraContent', $context['__placeholder_extraContent_default_contents']);
            unset($context['__placeholder_extraContent_default_contents']);            // line 37
            echo "                    </div>
                ";
        }
        // line 39
        echo "            </div>
        </section>

        <!-- Help Popups -->
        ";
        // line 43
        $context['__placeholder_help_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('help', $context['__placeholder_help_default_contents']);
        unset($context['__placeholder_help_default_contents']);        // line 44
        echo "
        <!-- Scripts -->
        ";
        // line 46
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 47
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/layouts/content.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  111 => 46,  107 => 44,  105 => 43,  99 => 39,  95 => 37,  93 => 36,  90 => 35,  88 => 34,  85 => 33,  83 => 32,  77 => 29,  71 => 25,  66 => 22,  61 => 21,  57 => 19,  55 => 18,  50 => 15,  46 => 14,  38 => 8,  36 => 7,  32 => 5,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        {% partial 'site/meta' %}
    </head>
    <body>
        {% set hasChildren = (staticPage.parent ?: staticPage.page).children %}

        <!-- Header -->
        <header id=\"layout-header\">
        </header>

        <!-- Nav -->
        {% partial 'site/nav' %}

        <!-- Content -->
        <section id=\"layout-content\">
            {% if hasChildren %}
                <div id=\"layout-subnav\">
                    <div class=\"container\">
                        {% partial 'site/subnav' page=staticPage.page %}
                    </div>
                </div>
            {% endif %}
            <div class=\"container\">

                <div class=\"static-content-page\">
                    <div class=\"title-area\">
                        <h2>{{ this.page.title }}</h2>
                    </div>

                    {% page %}
                </div>
                {% if placeholder('extraContent') %}
                    <div class=\"static-content-extra\">
                        {% placeholder extraContent title=\"Extra content\" %}
                    </div>
                {% endif %}
            </div>
        </section>

        <!-- Help Popups -->
        {% placeholder help ignore=true %}

        <!-- Scripts -->
        {% partial 'site/scripts' %}

    </body>
</html>", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/layouts/content.htm", "");
    }
}
