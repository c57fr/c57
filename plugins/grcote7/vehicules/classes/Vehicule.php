<?php namespace Grcote7\Vehicules\classes;


class Vehicule {

  public    $marque = "HONDA";
  protected $owner;

  public function __construct() {
    //    echo 'Marque: ' . $this->marque;
  }

  /**
   * @return mixed
   */
  public function getOwner() {
    return $this->owner;
  }

  /**
   * @param mixed $owner
   */
  public function setOwner($owner) {
    $this->owner = $owner;
  }


}
