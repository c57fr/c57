<?php namespace GrCOTE7\C57\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use Grcote7\Movies\Models\Actor;

class DerInscrits extends ComponentBase {

  public function componentDetails() {

    return [
      'name'        => 'Derniers inscrits',
      'description' => 'Affiche la liste des derniers inscrits.'
    ];
  }

  public function defineProperties() {

    return [
    ];
  }

  public function onRun() {
    $this->derinscrits = $this->loadInscrits();
  }

  protected function loadInscrits() {

    $query = Actor::all();

    return $query;

    return '789';
  }

}
