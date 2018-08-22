<?php namespace Grcote7\Vehicules\Components;

use Cms\Classes\ComponentBase;
use Grcote7\Vehicules\classes\Vehicule;

class Vehicules extends ComponentBase {

  public function componentDetails() {
    return [
      'name'        => 'Vehicule',
      'description' => 'Dev classe Vehicule'
    ];
  }

  public function defineProperties() {
    return [];
  }

  public function onRun() {
    $this->vehicule = $this->initVehicule();
  }


  public function initVehicule() {
    $unVehicule = new Vehicule;

    return $unVehicule->marque;
  }
}
