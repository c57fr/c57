<?php namespace Grcote7\Vehicules;

use System\Classes\PluginBase;

class Plugin extends PluginBase {
  public function registerComponents() {
    return [
      'Grcote7\Vehicules\Components\Vehicules' => 'vehicules'
    ];
  }

  public function registerSettings() {
  }
}
