<?php

class goal
{
    public $id, $title, $description, $reasons, $due, $rating, $completed;

    function __construct ( $id, string $title, string $description, string $reasons, int $due, int $rating, bool $completed = false )
    {
        $this->id           = $id;
        $this->title        = $title;
        $this->description  = $description;
        $this->reasons      = $reasons;
        $this->due          = $this->dueByEndOfDay ( $due );
        $this->rating       = $rating;
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