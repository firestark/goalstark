<?php

class goal
{
    public $id, $description, $completeBy, $completed;
    public $tasks = [ ];

    function __construct ( $id, string $description, int $completeBy, array $tasks = [ ], bool $completed = false )
    {
        $this->id           = $id;
        $this->description  = $description;
        $this->completeBy   = $this->completeByEndOfDay ( $completeBy );
        $this->tasks        = $tasks;
        $this->completed    = $completed;
    }

    function add ( task $task )
    {
        $this->tasks [ $task->id ] = $task;
    }

    function remove ( task $task )
    {
        unset ( $this->tasks [ $task->id ] );
    }

    function update ( task $task )
    {
        $this->tasks [ $task->id ] = $task;
    }

    /**
     * Setting the completeBy timestamp to the end of the day.
     * This makes the goal only overdue based on the day.
     */
    private function completeByEndOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}