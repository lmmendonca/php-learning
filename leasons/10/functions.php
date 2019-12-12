<?php

// Functions

$animals = [ 'dog', 'cat'];

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function night_club($age) {
    if ($age < 18) {
        echo "You can't come in!";

    } else {
        echo 'Come on in!';   
    }

}