<?php namespace Grcote7\C57;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
  public function registerComponents() {
    return [
      'GrCOTE7\C57\Components\DerInscrits' => 'derinscrits'
    ];
  }

  public function registerSettings() {

  }
}
