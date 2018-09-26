<?php namespace GrCOTE7\C57;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name' => 'Grcote7 c57',
            'description' => 'Fournit quelques components propres au concept c57.',
            'author' => 'GC7',
            'icon' => 'oc-icon-yelp'
        ];
    }

    public function registerComponents()
    {
        return [
            'GrCOTE7\C57\Components\DerInscrits' => 'derInscrits',
            'GrCOTE7\C57\Components\GitlabPageLink' => 'gitlabPageLink'
        ];
    }

    public function registerPageSnippets()
    {
        return [
            'GrCOTE7\C57\Components\GitlabPageLink' => 'gitlabPageLink'
        ];
    }

    public function registerSettings()
    {

    }
}
