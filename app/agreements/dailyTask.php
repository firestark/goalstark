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
}