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
}