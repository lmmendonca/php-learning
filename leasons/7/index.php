<?php

// Associative Arrays

$person = [
    'age' => 31,

    'hair' => 'brown',

    'carrer' => 'web developer'
];

$person['name'] = 'Jeff';


// die(var_dump($person));

unset($person['age']);
require 'index.view.php';