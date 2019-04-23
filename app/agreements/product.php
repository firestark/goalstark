<?php

class product
{
    public $name, $nutrition;

    function __construct ( string $name, product\nutrition $nutrition )
    {
        $this->name         = $name;
        $this->nutrition    = $nutrition;
    }
}