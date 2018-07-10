<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/partials/site/nav.htm */
class __TwigTemplate_64e35563d5255717e33d16ded6f7d7ea76957a16271150795ea63c70368430db extends Twig_Template
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
        $context["nav"] = $this;
        // line 2
        echo "
";
        // line 23
        echo "
<nav id=\"layout-nav\" class=\"navbar\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array())) {
            // line 36
            echo "                <ul class=\"nav navbar-nav\">
                    ";
            // line 37
            echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, ($context["mainMenu"] ?? null), "menuItems", array()));
            echo "
                </ul>
            ";
        }
        // line 40
        echo "            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Help"));
        echo "</span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                ";
        // line 49
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("localePicker"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 50
        echo "            </form>
        </div>
    </div>
</nav>

";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('help'        );
        // line 56
        echo "    <!-- Locale Help -->
    <div id=\"localeHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeHelp')\">&times;</button>
        <div class=\"setup-content\">
            ";
        // line 60
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("locale-help.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 61
        echo "        </div>
    </div>
";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    // line 3
    public function macro_render_menu($__items__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 4
            echo "    ";
            $context["nav"] = $this;
            // line 5
            echo "
    ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 7
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", array())) {
                    // line 8
                    echo "            <li role=\"presentation\" class=\"dropdown ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->source, $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->source, $context["item"], "title", array()))), "html", null, true);
                    echo " <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 13
                    echo $context["nav"]->macro_render_menu(twig_get_attribute($this->env, $this->source, $context["item"], "items", array()));
                    echo "
                </ul>
            </li>
        ";
                } else {
                    // line 17
                    echo "            <li role=\"presentation\" class=\"";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", array())) ? ("active") : (""));
                    echo " ";
                    echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", array())) ? ("child-active") : (""));
                    echo "\">
                <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["item"], "code", array())) ? (call_user_func_array($this->env->getFilter('_')->getCallable(), array(("nav." . twig_get_attribute($this->env, $this->source, $context["item"], "code", array()))))) : (twig_get_attribute($this->env, $this->source, $context["item"], "title", array()))), "html", null, true);
                    echo "</a>
            </li>
        ";
                }
                // line 21
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 21,  157 => 18,  150 => 17,  143 => 13,  137 => 10,  133 => 9,  126 => 8,  123 => 7,  119 => 6,  116 => 5,  113 => 4,  101 => 3,  97 => 55,  93 => 61,  89 => 60,  83 => 56,  81 => 55,  74 => 50,  70 => 49,  62 => 44,  56 => 40,  50 => 37,  47 => 36,  45 => 35,  39 => 32,  28 => 23,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import _self as nav %}

{% macro render_menu(items) %}
    {% import _self as nav %}

    {% for item in items %}
        {% if item.items %}
            <li role=\"presentation\" class=\"dropdown {{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                    {{ item.code ? ('nav.'~item.code)|_ : item.title }} <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    {{ nav.render_menu(item.items) }}
                </ul>
            </li>
        {% else %}
            <li role=\"presentation\" class=\"{{ item.isActive ? 'active' }} {{ item.isChildActive ? 'child-active' }}\">
                <a href=\"{{ item.url }}\">{{ item.code ? ('nav.'~item.code)|_ : item.title }}</a>
            </li>
        {% endif %}
    {% endfor %}
{% endmacro %}

<nav id=\"layout-nav\" class=\"navbar\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\"></a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            {% if mainMenu.menuItems %}
                <ul class=\"nav navbar-nav\">
                    {{ nav.render_menu(mainMenu.menuItems) }}
                </ul>
            {% endif %}
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"javascript:toggleHelp('#localeHelp')\">
                        <i class=\"icon-question-sign hidden-xs\"></i>
                        <span class=\"visible-xs\">{{ 'Help'|_ }}</span>
                    </a>
                </li>
            </ul>
            <form class=\"navbar-form navbar-right\">
                {% component 'localePicker' %}
            </form>
        </div>
    </div>
</nav>

{% put help %}
    <!-- Locale Help -->
    <div id=\"localeHelp\" class=\"help-popup\">
        <button class=\"setup-close\" type=\"button\" onclick=\"toggleHelp('#localeHelp')\">&times;</button>
        <div class=\"setup-content\">
            {% content 'locale-help.htm' %}
        </div>
    </div>
{% endput %}", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/nav.htm", "");
    }
}
