<?php

class task
{
    public $goalid, $id, $description, $completed;

    function __construct ( $goalid, $id, string $description, int $due, bool $completed = false )
    {
        $this->goalid       = $goalid;
        $this->id           = $id;
        $this->description  = $description;
        $this->due          = $this->dueByEndOfDay ( $due );
        $this->completed    = $completed;
    }

    /**
     * Setting the due timestamp to the end of the day.
     * This makes the task only overdue based on the day.
     */
    private function dueByEndOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}