<?php

namespace task;

class protein extends \dailyTask
{
    public $goal; 

    function __construct ( $goalid, $id, float $goal, int $due, bool $completed = false )
    {
        $this->goal = $goal;
        $description = "Consume {$goal}g of protein every day";
        parent::__construct ( $goalid, $id, $description, $due, $completed );
    }
}