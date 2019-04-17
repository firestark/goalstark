<?php

class dailyTask extends task
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];

    function complete ( )
    {
        $this->completions [ ] = time ( );
        parent::complete ( );
    }

    function uncomplete ( )
    {
        array_pop ( $this->completions );
        parent::uncomplete ( );
    }

    function isCompleted ( ) : bool
    {
        return end ( $this->completions ) >= $this->beginOfDay ( time ( ) );
    }

    /**
     * Setting the due timestamp to the end of the day.
     * This makes the goal only overdue based on the day.
     */
    private function beginOfDay ( int $timestamp ) : int
    {
        return strtotime ( 'midnight', $timestamp );
    }
}