<?php namespace Grcote7\Vehicules\classes;


class Vehicule {

  public $marque = "HONDA";

  protected $compteur, $owner;

  public function __construct($kms = 0) {
    $this->setCompteur($kms);
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

  /**
   * @return int
   */
  public function getCompteur() {
    return $this->compteur;
  }

  /**
   * @param int $compteur
   */
  public function setCompteur($compteur) {
    $this->compteur = $compteur;
  }

  public function rouler($kms) {
    $this->compteur += $kms;
  }

}
