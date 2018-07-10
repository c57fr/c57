<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/partials/site/meta.htm */
class __TwigTemplate_bdfb141dde83a27e90d4bad4a0be2e158fd02938e0a705e6d5b6f4413ad1e78b extends Twig_Template
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
        echo "<meta charset=\"utf-8\">
";
        // line 2
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array())) {
            // line 3
            echo "    <title>";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
    <meta name=\"title\" content=\"";
            // line 4
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_title", array())));
            echo "\">
";
        } else {
            // line 6
            echo "    <title>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
            echo " - ";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("site.name"));
            echo "</title>
";
        }
        // line 8
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array())) {
            // line 9
            echo "    <meta name=\"description\" content=\"";
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), array(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", array()), "meta_description", array())));
            echo "\">
";
        }
        // line 11
        echo "<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\" />
";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 16
        echo "<link href=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(array(0 => "assets/css/theme.css"));
        // line 18
        echo "\" rel=\"stylesheet\">";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  68 => 16,  65 => 15,  61 => 14,  56 => 11,  50 => 9,  48 => 8,  40 => 6,  35 => 4,  28 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<meta charset=\"utf-8\">
{% if this.page.meta_title %}
    <title>{{ this.page.meta_title|_ }} - {{ 'site.name'|_ }}</title>
    <meta name=\"title\" content=\"{{ this.page.meta_title|_ }}\">
{% else %}
    <title>{{ this.page.title }} - {{ 'site.name'|_ }}</title>
{% endif %}
{% if this.page.meta_description %}
    <meta name=\"description\" content=\"{{ this.page.meta_description|_ }}\">
{% endif %}
<meta name=\"author\" content=\"OctoberCMS\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"generator\" content=\"OctoberCMS\">
<link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
{% styles %}
<link href=\"{{ [
    'assets/css/theme.css'
]|theme }}\" rel=\"stylesheet\">", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/site/meta.htm", "");
    }
}
