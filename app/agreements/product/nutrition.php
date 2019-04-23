<?php

namespace product;

class nutrition
{
    public $fats, $carbohydrates, $protein;

    function __construct ( fats $fats, carbohydrates $carbohydrates, float $protein, float $salt )
    {
        $this->fats             = $fats;
        $this->carbohydrates    = $carbohydrates;
        $this->protein          = $protein;
        $this->salt             = $salt;
    } 
}