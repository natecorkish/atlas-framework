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

$filtered = $collection->filter(fn($item) => $item["active"]);


$collection->each(function ($item) {
    echo $item["name"] . PHP_EOL;
});
