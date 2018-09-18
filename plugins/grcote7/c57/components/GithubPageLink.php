<?php namespace GrCOTE7\C57\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Controller;

class GithubPageLink extends ComponentBase
{

    public $githubPageLink;

    public function componentDetails()
    {

        return [
            'name' => 'GithubPageLink',
            'description' => 'Get the github link of the page.'
        ];
    }

    public function defineProperties()
    {

        return [
        ];
    }

    public function onRun()
    {
        // GOAL: Can obtain *** (Filename of the static-page to construct this above link)
        // https://github.com/c57fr/c57/edit/master/themes/mdb/content/static-pages/ *** .htm

        // $this->githubPageLink =$this->controller->getPage()->fileName;
        $this->githubPageLink = 'https://github.com/c57fr/c57/edit/master/themes/mdb/content/static-pages/' . $this->controller->getPage()->apiBag["staticPage"]->fileName;

//        dump("githubPageLink value", $this->githubPageLink);
    }

}
