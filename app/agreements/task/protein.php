<?php

namespace task;

class protein extends daily
{
    public $target = 0; 

    function __construct ( $id, int $target )
    {
        $this->target = $target;
        $description = "Consume {$target}g of protein";
        parent::__construct ( $id, $description );
    }
}