<?php

class task
{
    public $goalid, $id, $description, $completed;

    function __construct ( $goalid, $id, string $description, bool $completed = false )
    {
        $this->goalid       = $goalid;
        $this->id           = $id;
        $this->description  = $description;
        $this->completed    = $completed;
    }
}