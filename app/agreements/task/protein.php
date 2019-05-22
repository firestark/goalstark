<?php

namespace task;

class protein extends daily
{
    public $goal = 0; 

    function __construct ( $id, int $goal )
    {
        $this->goal = $goal;
        $description = "Consume {$goal}g of protein";
        parent::__construct ( $id, $description );
    }
}