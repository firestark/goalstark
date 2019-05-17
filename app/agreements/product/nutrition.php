<?php

namespace product;

class nutrition
{
    public $per, $kcal, $fats, $carbohydrates, $protein, $salt;

    function __construct ( string $per, int $kcal, fats $fats, carbohydrates $carbohydrates, float $protein, float $salt )
    {
        $this->per              = $per;
        $this->kcal             = $kcal;
        $this->fats             = $fats;
        $this->carbohydrates    = $carbohydrates;
        $this->protein          = $protein;
        $this->salt             = $salt;
    } 
}