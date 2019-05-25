<?php

class goal
{
    public $id, $title, $description, $due, $tasks, $reasons;

    function __construct ( $id, string $title, string $description, array $tasks, array $reasons, int $due )
    {
        $this->id           = $id;
        $this->title        = $title;
        $this->description  = $description;
        $this->tasks        = $tasks;
        $this->reasons      = $reasons;
        $this->due          = $this->dueByEndOfDay ( $due );
    }

    function add ( goal\reason $reason )
    {
        $this->reasons [ $reason->id ] = $reason;
    }

    function remove ( goal\reason $reason )
    {
        if ( $this->has ( $reason ) )
            unset ( $this->reasons [ $reason->id ] );
    }

    function has ( goal\reason $reason ) : bool
    {
        return isset ( $this->reasons [ $reason->id ] );
    }

    /**
     * Setting the due timestamp to the end of the day.
     * This makes the goal only overdue based on the day.
     */
    private function dueByEndOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}