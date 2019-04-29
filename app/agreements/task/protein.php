<?php

namespace task;

class protein extends daily
{
    public $goal = 0; 

    function __construct ( array $goals, $id, int $goal )
    {
        $this->goal = $goal;
        $description = "Consume {$goal}g of protein";
        parent::__construct ( $goals, $id, $description );
    }
}