<?php namespace GrCOTE7\C57\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;
use RainLab\User\Models\User;

class DerInscrits extends ComponentBase
{

    public $derinscrits;

    public function componentDetails()
    {

        return [
            'name' => 'Derniers Inscrits',
            'description' => 'Affiche la liste des derniers inscrits.'
        ];
    }

    public function defineProperties()
    {

        return [
        ];
    }

    public function onRun()
    {
        //$this->derinscrits='456';
        $this->derinscrits = $this->loadDerInscrits();
//        var_dump($this->derinscrits);
    }

    protected function loadDerInscrits()
    {
        $query = User::all()->sortByDesc('created_at')->take(2);
//        echo '<pre>';
//        var_dump($query);
//        echo '</pre>';
        return $query;
    }

}
