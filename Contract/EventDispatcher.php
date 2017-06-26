<?php 

interface EventDispatcher
{
    /**
     * Dispatches an event.
     */
    public function dispatch($eventName, array $parameters = array());

    /**
     * Attaches the $callable to an event, so that it will get executed 
     * once the event is dispatched.
     */
    public function on($eventName, $callable);
}
