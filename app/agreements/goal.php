<?php

class goal
{
    public $id, $title, $description, $due, $completed;
    public $reasons = [ ];

    function __construct ( $id, string $title, string $description, array $reasons, int $due, bool $completed = false )
    {
        $this->id           = $id;
        $this->title        = $title;
        $this->description  = $description;
        $this->reasons      = $reasons;
        $this->due          = $this->dueByEndOfDay ( $due );
        $this->completed    = $completed;
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

    function isOverdue ( ) : bool
    {
        return ( ! $this->completed and ( $this->due < time ( ) ) ); 
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