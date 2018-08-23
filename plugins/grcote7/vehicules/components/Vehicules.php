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
    $this->addCss('assets/css/style.css');
    $this->page['vehicule'] = $this->initVehicule();
  }


  public function initVehicule() {
    $unVehicule = new Vehicule();

    $unVehicule->setOwner('DoroW');
    // $unVehicule->marque='RENAULT';
    // $unVehicule->rouler(50);
    // $unVehicule->rouler(2);

    return $unVehicule;
  }
}
