<?php namespace GrCOTE7\Demo\Components;

use Cms\Classes\ComponentBase;

class Aff extends ComponentBase
{

    /**
     * This is a person's name
     * @var string
     */
    public $name;

    /**
     * This is the person's role
     */
    public $role;

    public function componentDetails()
    {

        return [
            'name'        => 'Aff Info',
            'description' => 'Implements a simple Display.',
        ];
    }

    public function defineProperties()
    {

        return [
        ];
    }

    public function init()
    {
        // This will execute when the component is
        // first initialized, including AJAX events.
    }

    public function onRun()
    {
        $this->addCss('components/aff/assets/css/style.css');
        // This code will note execute AJAX events.
        // {{ demoAff.name }} (strict) => Never conflict
        $this->name = 'Lionel';
        $this->role = 'Admin';
        // {% set name = name %}

        // {{ name }} (Relaxed)
        $this->page['dateDue'] = 'Today';
    }

    public function onSortList()
    {

        $items = [
            'Tortelinis',
            'Pennes',
            'Nouilles',
            'Spaghettis',
        ];
        sort($items);
        $this->page['items'] = $items;
    }
}
