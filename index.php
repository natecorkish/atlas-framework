<?php

use Atlas\Broadcaster\Events;
use Atlas\Collections\Collection;

require "vendor/autoload.php";

$collection = new Collection();

$collection->collect([
    ["name" => "John Doe", "active" => true],
    ["name" => "John Smith", "active" => true],
    ["name" => "Jayne Anon", "active" => false],
]);

// Filter the collection
$filtered = $collection->filter(fn($item) => $item["active"]);

// Modify the collection
$modified = $filtered->map(function ($item) {
    $item["name"] = strtolower($item["name"]);
    return $item;
});

var_dump($modified->collection());