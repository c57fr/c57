<?php

/* C:\laragon\www\w\sg1\c57/plugins/rainlab/translate/components/localepicker/default.htm */
class __TwigTemplate_2590e6924657503950dcef925d0b78fc7b336cccd7e4b6c1c36b77a1f0c8e376 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_open')->getCallable(), array("open"));
        echo "
    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? null));
        foreach ($context['_seq'] as $context["code"] => $context["name"]) {
            // line 4
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "\" ";
            echo ((($context["code"] == ($context["activeLocale"] ?? null))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </select>
";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), array("close"));
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/plugins/rainlab/translate/components/localepicker/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  45 => 6,  32 => 4,  28 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_open() }}
    <select name=\"locale\" data-request=\"onSwitchLocale\" class=\"form-control\">
        {% for code, name in locales %}
            <option value=\"{{ code }}\" {{ code == activeLocale ? 'selected' }}>{{ name }}</option>
        {% endfor %}
    </select>
{{ form_close() }}", "C:\\laragon\\www\\w\\sg1\\c57/plugins/rainlab/translate/components/localepicker/default.htm", "");
    }
}
