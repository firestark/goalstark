<?php

namespace task;

class protein extends daily
{
    public $goal; 

    function __construct ( $goalid, $id, float $goal )
    {
        $this->goal = $goal;
        $description = "Consume {$goal}g of protein every day";
        parent::__construct ( $goalid, $id, $description );
    }
}