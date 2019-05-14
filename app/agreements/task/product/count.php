<?php

namespace task\product;

use product;

class count extends \task
{
    /**
     * An array of timestamps to track completion dates.
     */
    public $completions = [ ];
    public $times = 0;
    public $due = 0;
    public $product = null;

    function __construct ( array $goals, $id, product $product, int $times, int $due )
    {
        $this->product = $product;
        $this->times = $times;
        $this->due = endOfDay ( $due );

        $description = "Eat {$product->name}";

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
            $this->due < endOfDay ( time ( ) )
        );
    }

    function dueToday ( ) : bool
    {
        return ( $this->due === endOfDay ( time ( ) ) );
    }

    private function endOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}