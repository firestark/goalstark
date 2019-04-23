<?php

namespace product;

class fats
{
    public $saturated, $unsaturated;

    function __construct ( float $saturated, float $unsaturated )
    {
        $this->saturated    = $saturated;
        $this->unsaturated  = $unsaturated;
    }
}