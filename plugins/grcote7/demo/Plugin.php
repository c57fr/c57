<?php namespace GrCOTE7\Demo;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'DemoAff',
            'description' => 'Fournit et affiche une information.',
            'author' => 'GC7',
            'icon' => 'icon-hand-o-up'
        ];
    }

    public function registerComponents()
    {
        return [
            '\GrCOTE7\Demo\Components\Aff' => 'demoAff'
        ];
    }
}
