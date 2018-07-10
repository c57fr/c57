<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/content/static-pages/content-pages.htm */
class __TwigTemplate_70f5e49304840d5e54fec18056f7517da1ae3212d293fdd6c15232e64f2f5838 extends Twig_Template
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
        echo "<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/content/static-pages/content-pages.htm";
    }

    public function getDebugInfo()
    {
        return array (  28 => 1,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% put extraContent %}
<p>When editing this page you should notice a second tab called <strong>Extra content</strong>, that's where this content is sourced from. It can be translated just like any other content!​</p>
{% endput %}", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/content/static-pages/content-pages.htm", "");
    }
}
