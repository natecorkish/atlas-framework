<?php

use Atlas\Broadcaster\Events;

$events = new Events();

$events->emit("update", function() {
    return "Hello";
});

return "Hello" === $events->listener("update");