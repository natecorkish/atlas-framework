<?php

use Atlas\Collections\Collection;

require "vendor/autoload.php";

$collection = new Collection();

$collection->collect([
    ["name" => "John Doe", "active" => true],
    ["name" => "John Smith", "active" => true],
    ["name" => "Jayne Anon", "active" => false],
]);

$filtered = $collection->filter(function ($item) {
    return $item["active"];
});

// Get the first item of a filtered array
["name" => "John Doe", "active" => true] === $filtered->first();

// Loop through collection
$collection->each(function ($item) {
    echo $item["name"] . PHP_EOL;
});