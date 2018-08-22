<?php namespace Grcote7\Vehicules\classes;


class Vehicule {

  public $marque = "HONDA";

  public function __construct() {
    echo 'Marque: ' . $this->marque;
  }

}
