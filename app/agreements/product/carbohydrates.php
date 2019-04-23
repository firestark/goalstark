<?php

namespace product;

class carbohydrates
{
    public $total, $sugars, $fiber, $simple;

    function __construct ( float $total, float $sugars, float $fiber )
    {
        $this->total    = $total;
        $this->sugars   = $sugars;
        $this->fiber    = $fiber;
        $this->simple   = $total - ( $sugars + $fiber );
    }
}