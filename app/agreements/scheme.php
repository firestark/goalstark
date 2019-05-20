<?php

class scheme
{
    public $id, $name;
    public $routines = [ ];

    function __construct ( $id, string $name, array $routines = [ ] )
    {
        $this->id = $id;
        $this->name = $name;
        $this->routines = $routines;
    }

    function add ( routine $routine )
    {
        $this->routines [ ] = $routine;
    }
}