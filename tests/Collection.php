<?php

use Atlas\Collections\Collection;

require "vendor/autoload.php";

$collection = new Collection();

$collection->collect([
    ["name" => "John Doe", "active" => true],
    ["name" => "John Smith", "active" => true],
    ["name" => "Jayne Anon", "active" => false],
]);

// Filter accounts by active status
$filtered = $collection->filter(fn($item) => $item["active"]);

var_dump($filtered);
// Get the first item of a filtered array
["name" => "John Doe", "active" => true] === $filtered->first();

// Get the last item of a filtered array
["name" => "John Smith", "active" => true] === $filtered->last();

// Loop through collection
$collection->each(function ($item) {
    echo $item["name"] . PHP_EOL;
});