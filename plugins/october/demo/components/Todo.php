<?php namespace October\Demo\Components;

use ApplicationException;
use Cms\Classes\ComponentBase;

class Todo extends ComponentBase
{
    /**
     * This is a person'name
     * @var string
     */
    public $name;

    public function componentDetails()
    {
        return [
            'name'        => 'Todo List',
            'description' => 'Implements a simple to-do list.',
        ];
    }

    public function defineProperties()
    {
        return [
            'max' => [
                'description'       => 'The most amount of todo items allowed',
                'title'             => 'Max items',
                'default'           => 10,
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'The Max Items value is required and should be integer.',
            ],
        ];
    }

    public function init()
    {
        // This will execute when the component is
        // first initialized, including AJAX events.
    }

    public function onRun()
    {
        // This code will note execute AJAX events.
        $this->name = 'Lionel';
    }

    public function onAddItem()
    {
        $items = post('items', []);

        if (count($items) >= $this->property('max')) {
            throw new ApplicationException(sprintf('Sorry only %s items are allowed.', $this->property('max')));
        }

        if (($newItem = post('newItem')) != '') {
            $items[] = $newItem;
        }

        $this->page['items'] = $items;
    }
}
