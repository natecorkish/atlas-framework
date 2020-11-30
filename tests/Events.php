<?php

use Atlas\Broadcaster\Events;

$events = new Events();

// Emit a Hello
$events->emit("update", fn() => "Hello");

return "Hello" === $events->listener("update");