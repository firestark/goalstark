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

    function merge ( array $goalids )
    {
        $this->goals = array_unique ( array_merge ( $this->goals, $goalids ) );
    }

    abstract function dueToday ( ) : bool;

    abstract function complete ( );

    abstract function uncomplete ( );

    abstract function isCompleted ( ) : bool;

}