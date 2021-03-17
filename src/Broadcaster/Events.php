<?php

namespace Atlas\Broadcaster;

use Error;
use Closure;

class Events
{
    /*------------------------------------------------------------
     * A list of events
     *
     * @var array
     * -----------------------------------------------------------
     */
    private array $events = [];

    /*------------------------------------------------------------
     * Emit an event
     *
     * @param string   $name
     * @param \Closure $action
     * -----------------------------------------------------------
     */
    public function emit(string $name, closure $action): void {
        $this->events[$name] = $action;
    }

    /*------------------------------------------------------------
     * Listen for an event
     *
     * @param string $event
     * -----------------------------------------------------------
     */
    public function listener(string $event): void {
        $this->events[$event] ?? false
            ? $this->events[$event]()
            : throw new Error("No events belong to the key: ${event}");
    }
}