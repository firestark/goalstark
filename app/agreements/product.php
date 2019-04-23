<?php

class product
{
    public $name, $protein, $sugars;

    function __construct ( string $name, float $protein, float $sugars )
    {
        $this->name     = $name;
        $this->protein  = $protein;
        $this->sugars   = $sugars;
    }
}