<?php

class task
{
    public $id, $description, $completed;

    function __construct ( $id, string $description, bool $completed = false )
    {
        $this->id           = $id;
        $this->description  = $description;
        $this->completed    = $completed;
    }
}