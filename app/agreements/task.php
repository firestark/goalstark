<?php

class task
{
    public $goalid, $id, $description;

    function __construct ( $goalid, $id, string $description )
    {
        $this->goalid       = $goalid;
        $this->id           = $id;
        $this->description  = $description;
    }
}