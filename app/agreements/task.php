<?php

abstract class task
{
    public $id = 0;
    public $description = '';

    function __construct ( $id, string $description )
    {
        $this->id           = $id;
        $this->description  = $description;
    }

    function isOverdue ( ) : bool
    {
        return false;
    }

    function dueLater ( ) : bool
    {
        return ( ! $this->isCompleted ( ) and ! $this->isOverdue ( ) and ! $this->dueToday ( ) );
    }

    function __toString ( )
    {
        return $this->description;
    }
}