<?php

class task
{
    public $goalid, $id, $description;
    private $completed;

    /**
     * Setting the due timestamp to the end of the day.
     * This makes the task only overdue based on the day.
     */
    function __construct ( $goalid, $id, string $description, int $due, bool $completed = false )
    {
        $this->goalid       = $goalid;
        $this->id           = $id;
        $this->description  = $description;
        $this->due          = $this->endOfDay ( $due );
        $this->completed    = $completed;
    }

    function complete ( )
    {
        $this->completed = true;
    }

    function uncomplete ( )
    {
        $this->completed = false;
    }

    function isCompleted ( ) : bool
    {
        return $this->completed;
    }

    function dueToday ( ) : bool
    {
        return ( $this->due === $this->endOfDay ( time ( ) ) );
    }

    private function endOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}