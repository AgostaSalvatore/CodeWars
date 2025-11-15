<?php

$players = [
    (object) ['name' => 'Alice'],
    (object) ['name' => 'Marta'],
    (object) ['name' => 'Mario']
];

function duck_duck_goose($players, $goose)
{
    $index = $goose - 1;

    if ($index >= count($players)) {
        return 'Unknown Index';
    } else {
        return $players[$index]->name;
    }
}

echo duck_duck_goose($players, 2);
