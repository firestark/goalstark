<?php

class task
{
    public $id = 0;
    public $goals = [ ];
    public $description = '';

    function __construct ( array $goals, $id, string $description )
    {
        foreach ( $goals as $goal )
            $this->add ( $goal );
        
        $this->id           = $id;
        $this->description  = $description;
    }

    function add ( int $goal )
    {
        $this->goals [ ] = $goal;
    }
}