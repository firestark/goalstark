<?php

namespace product;

class fats
{
    public $total, $saturated;

    function __construct ( float $total, float $saturated )
    {
        $this->total        = $total;
        $this->saturated    = $saturated;
    }
}