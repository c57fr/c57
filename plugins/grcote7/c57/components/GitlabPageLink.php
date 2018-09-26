<?php namespace GrCOTE7\C57\Components;

use Cms\Classes\ComponentBase;
use Cms\Classes\Controller;

class GitlabPageLink extends ComponentBase
{

    public $gitlabPageLink;

    public function componentDetails()
    {

        return [
            'name' => 'GitlabPageLink',
            'description' => 'Get the gitlab link of the page.'
        ];
    }

    public function defineProperties()
    {

        return [
        ];
    }

    public function onRun()
    {
        // $this->gitlabPageLink =$this->controller->getPage()->fileName;
        $this->gitlabPageLink = 'https://gitlab.com/c57fr/c57/edit/master/themes/c57/content/static-pages/' . $this->controller->getPage()->apiBag["staticPage"]->fileName;
      
//        dump("gitlabPageLink value", $this->gitlabPageLink);
    }

}
