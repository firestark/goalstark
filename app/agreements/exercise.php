<?php

class exercise
{
    public $id, $name;

    function __construct ( $id, string $name )
    {
        $this->id = $id;
        $this->name = $name;
    }
}