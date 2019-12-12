<?php

require 'functions.php';

class Task
{

    public $description;
    public $completed = false;

    public function __construct($description)
    {
        // Automatically triggeredon instantiation

        $this->description = $description;
    }

    public function complite()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to the mall'),
    new Task('Go to the store'),
    new Task('Go to the bekery')
];

require 'index.view.php';