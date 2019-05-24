<?php

namespace task;

class count extends due
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];
    public $times = 0;

    function __construct ( $id, string $description, int $times, int $due, array $completions = [ ] )
    {
        $this->times = $times;
        $this->completions = $completions;

        parent::__construct ( $id, $description, $due );
    }

    function __toString ( )
    {
        return uniqid ( );
    }
}