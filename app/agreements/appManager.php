<?php

class appManager
{
    public $apps = [ ];

    function __construct ( )
    {
        $this->apps [ ] = new application ( 'Food tracker', 'food-tracker' );
    }

    function all ( ) : array
    {
        return $this->apps;
    }
}