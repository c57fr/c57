<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/content/static-pages/content-urls.htm */
class __TwigTemplate_c187acfa9baecf54cfdf38634817d9281922cbee7b40e1af3421ea28c0c9305c extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('extraContent'        );
        // line 2
        echo "<p>
    This theme has two layouts that use this component, so to test it out you should enable the setting on the <strong>default.htm</strong> layout and the <strong>content.htm</strong> layout.
</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/content/static-pages/content-urls.htm";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put extraContent %}
<p>
    This theme has two layouts that use this component, so to test it out you should enable the setting on the <strong>default.htm</strong> layout and the <strong>content.htm</strong> layout.
</p>
{% endput %}", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/content/static-pages/content-urls.htm", "");
    }
}
