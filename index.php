<?php
/**
* Yes we can use composer for PSR-4 autoloading
* Yes we can pull in some dedicated event handler like symfony/event-dispatcher, thephpleague/event etc.
**/
require_once __DIR__.'/SyncDispatcher.php';

$event = new SyncDispatcher;

// I am asuming here that if the SyncDispatcher is used By StateMachine class for dispatching events
// as the event dispatcher is firing this even we can listen to this event on our code and do the
// magical thing.
$event->on('state.change', function($parameters) {
    // do you thing here 
    var_dump($parameters);
});
