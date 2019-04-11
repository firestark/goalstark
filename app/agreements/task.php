<?php

class task
{
    public $description, $completed;

    function __construct ( string $description, bool $completed = false )
    {
        $this->description = $description;
        $this->completed = $completed;
    }
}