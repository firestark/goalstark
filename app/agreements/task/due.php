<?php

namespace task;

class due extends \task
{
    public $due = 0;
    private $completed = false;

    function __construct ( array $goals, $id, string $description, int $due, bool $completed = false )
    {
        $this->due = endOfDay ( $due );
        $this->completed = $completed;
        parent::__construct ( $goals, $id, $description );
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