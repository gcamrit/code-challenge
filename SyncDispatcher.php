<?php

require_once __DIR__.'/Contract/EventDispatcher.php';

class SyncDispatcher implements EventDispatcher
{
    protected $events = [];

    /**
     * Dispatches an event.
     */
    public function dispatch($eventName, array $parameters = array())
    {
        $this->events[$eventName] = $parameters;
    }

    /**
     * Attaches the $callable to an event, so that it will get executed 
     * once the event is dispatched.
     */
    public function on($eventName, $callable)
    {
        if(!array_key_exists($eventName, $this->events)) {
            return false;
        }
        // we can do check if the $callable is callable of not here
        // we might expect a class instead too like IWillHandlingIt::class

        $callable($this->events[$eventName]);

        return true;
    }
}
