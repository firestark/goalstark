<?php

class goal
{
    public $id, $description, $due, $completed;

    function __construct ( $id, string $description, int $due, bool $completed = false )
    {
        $this->id           = $id;
        $this->description  = $description;
        $this->due          = $this->dueByEndOfDay ( $due );
        $this->completed    = $completed;
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