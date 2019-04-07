<?php

class goal
{
    public $id, $description, $completeBy, $completed;

    function __construct ( $id, string $description, int $completeBy, bool $completed = false )
    {
        $this->id           = $id;
        $this->description  = $description;
        $this->completeBy   = $completeBy;
        $this->completed    = $completed;
    }
}