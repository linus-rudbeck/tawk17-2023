<?php

// Indexed arrays
$colors = ["Red", "Blue", "Yellow"];

$colors[] = "Green";

var_dump($colors);

echo $colors[1];

// Key Value arrays (Associative)

$my_car = [
    "make" => "Volvo",
    "model" => "V90",
    "color" => "Red"
];

$my_car["speed"] = 150;

var_dump($my_car);

echo $my_car["model"];