<?php

abstract class task
{
    public $id = 0;
    public $goals = [ ];
    public $description = '';

    function __construct ( array $goals, $id, string $description )
    {
        $this->goals        = $goals;
        $this->id           = $id;
        $this->description  = $description;
    }

    function remove ( $goalid )
    {
        if ( ( $key = array_search ( $goalid, $this->goals ) ) !== false )
            unset ( $this->goals [ $key ] );
    }
}