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

$filtered = $collection->filter(function ($item) {
		return $item["active"];
});

$collection->each(function($item) {
		echo $item;
});
