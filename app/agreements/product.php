<?php

class product
{
    public $id, $name, $nutrition;

    function __construct ( $id, string $name, product\nutrition $nutrition )
    {
        $this->id           = $id;
        $this->name         = $name;
        $this->nutrition    = $nutrition;
    }
}