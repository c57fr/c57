<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/partials/site/subnav.htm */
class __TwigTemplate_e9c70eb1ddc3b7cfd19633f4395d1a398065bbf63136a868e71c05e99f6bf8f4 extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        $context["parentOrSelf"] = ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) ? (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "parent", array())) : (($context["page"] ?? null)));
        // line 4
        $context["childPages"] = twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "children", array());
        // line 5
        echo "
<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "url", array()))) ? ("active") : (""));
        echo "\">
            ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["parentOrSelf"] ?? null), "title", array()), "html", null, true);
        echo "
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["childPages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["childPage"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["childPage"], "navigation_hidden", array())) {
                // line 15
                echo "                <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "url", array()) == twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()))) ? ("active") : (""));
                echo "\">
                    <a href=\"";
                // line 16
                echo $this->extensions['System\Twig\Extension']->appFilter(twig_get_attribute($this->env, $this->source, $context["childPage"], "url", array()));
                echo "\">
                        ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["childPage"], "title", array()), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['childPage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/subnav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 21,  61 => 17,  57 => 16,  52 => 15,  47 => 14,  39 => 9,  35 => 8,  30 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Renders a menu with any child static pages #}

{% set parentOrSelf = page.parent ?: page %}
{% set childPages = parentOrSelf.children %}

<div class=\"row\">
    <div class=\"col-sm-4\">
        <h3 class=\"head-link {{ page.url == parentOrSelf.url ? 'active' }}\">
            {{ parentOrSelf.title }}
        </h3>
    </div>
    <div class=\"col-sm-8\">
        <ul class=\"nav nav-pills pull-right\">
            {% for childPage in childPages if not childPage.navigation_hidden %}
                <li class=\"{{ page.url == childPage.url ? 'active' }}\">
                    <a href=\"{{ childPage.url|app }}\">
                        {{ childPage.title }}
                    </a>
                </li>
            {% endfor %}
        </ul>
    </div>
</div>", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/subnav.htm", "");
    }
}
