<?php

namespace task\product;

class count extends \task
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];
    public $times = 0;
    public $due = 0;
    public $productid = null;

    function __construct ( array $goals, $id, string $description, $productid, int $times, int $due )
    {
        $this->productid = $productid;
        $this->times = $times;
        $this->due = $this->endOfDay ( $due );

        parent::__construct ( $goals, $id, $description );
    }

    function complete ( )
    {
        $this->completions [ ] = time ( );
    }

    function uncomplete ( )
    {
        array_pop ( $this->completions );
    }

    function isCompleted ( ) : bool
    {
        return ( count ( $this->completions ) >= $this->times );
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