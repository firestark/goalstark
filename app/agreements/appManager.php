<?php

class appManager
{
    public $apps = [ ];

    function __construct ( )
    {
        $this->apps [ ] = new application ( 'Food tracker', 'food-tracker', '/resources/icons/egg-flat.svg' );
        $this->apps [ ] = new application ( 'Fitness', 'fitness', '/resources/icons/heart-curvy-flat.svg' );
    }

    function all ( ) : array
    {
        return $this->apps;
    }
}