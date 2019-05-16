<?php

namespace task;

class count extends \task
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];
    public $times = 0;
    public $due = 0;

    function __construct ( array $goals, $id, string $description, int $times, int $due, array $completions = [ ] )
    {
        $this->times = $times;
        $this->due = endOfDay ( $due );
        $this->completions = $completions;

        parent::__construct ( $goals, $id, $description );
    }

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
        return ( count ( $this->completions ) >= $this->times );
    }

    function isOverdue ( ) : bool
    {
        return ( 
            ! $this->isCompleted ( ) and 
            $this->due < endOfDay ( time ( ) )
        );
    }

    function dueToday ( ) : bool
    {
        return ( ! $this->isCompleted ( ) and $this->due === endOfDay ( time ( ) ) );
    }
}