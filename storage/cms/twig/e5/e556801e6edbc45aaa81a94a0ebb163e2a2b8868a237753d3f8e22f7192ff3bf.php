<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/partials/snippets/theme-image.htm */
class __TwigTemplate_7737f4eeabe1b0e57c839a23bfb99c3abc899ff49f74e551fea443618cf007aa extends Twig_Template
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
        echo "<img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter(("assets/images/" . ($context["src"] ?? null)));
        echo "\" alt=\"\" class=\"img-theme img-responsive\" />";
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/snippets/theme-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<img src=\"{{ ('assets/images/'~src)|theme }}\" alt=\"\" class=\"img-theme img-responsive\" />", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/partials/snippets/theme-image.htm", "");
    }
}
