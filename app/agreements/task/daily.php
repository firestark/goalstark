<?php

namespace task;

class daily extends \task
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];

    function complete ( )
    {
        $this->completions [ ] = time ( );
    }

    function uncomplete ( )
    {
        array_pop ( $this->completions );
    }

    function isCompleted ( ) : bool
    {
        return end ( $this->completions ) >= $this->beginOfDay ( time ( ) );
    }

    function dueToday ( ) : bool
    {
        return true;
    }

    private function beginOfDay ( int $timestamp ) : int
    {
        return strtotime ( 'midnight', $timestamp );
    }
}