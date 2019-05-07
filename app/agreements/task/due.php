<?php

namespace task;

class due extends \task
{
    public $due = 0;
    private $completed = false;

    function __construct ( array $goals, $id, string $description, int $due, bool $completed = false )
    {
        $this->due = $this->endOfDay ( $due );
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
            $this->due < $this->endOfDay ( time ( ) )
        );
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