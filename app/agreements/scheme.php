<?php

class scheme
{
    public $id, $name;

    function __construct ( $id, string $name )
    {
        $this->id = $id;
        $this->name = $name;
    }
}