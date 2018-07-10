<?php

/* C:\laragon\www\w\sg1\c57/themes/rainlab-bonjour/pages/home.htm */
class __TwigTemplate_93e580cf0d0f0df0dc3bc38a1611fff290c4554ebcee9191ec85405a4e9420d8 extends Twig_Template
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
        echo "<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 24
        echo "    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  49 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div id=\"homeGreetings\" class=\"home-greetings\">
        <h1>Hello</h1>
        <h1>Bonjour</h1>
        <h1>Hola</h1>
        <h1>Привет</h1>
        <h1>Hallo</h1>
        <h1>Ahoj</h1>
        <h1>Χαίρετε</h1>
        <h1>Olá</h1>
        <h1>Ciao</h1>
        <h1>Salut</h1>
        <h1>こんにちは</h1>
        <h1>Sveiki</h1>
        <h1>Cześć</h1>
        <h1>Buna</h1>
        <h1>你好</h1>
        <h1>Hallå</h1>
        <h1>Merhaba</h1>
    </div>
</div>

{% put scripts %}
    <script>
        function swap() {
            \$('#homeGreetings h1:visible').each(function(){
                \$(this).fadeOut(500);
                if (\$(this).next().length > 0) \$(this).next().fadeIn(1000);
                else \$('#homeGreetings h1:first').fadeIn(1000)
            });
        }

        \$('#homeGreetings')
            .find('h1:not(:first)')
            .hide()
            .end()
            .addClass('is-loaded');

        setTimeout(function() {
            setInterval(swap, 2000);
        }, 1000)

    </script>
{% endput %}", "C:\\laragon\\www\\w\\sg1\\c57/themes/rainlab-bonjour/pages/home.htm", "");
    }
}
