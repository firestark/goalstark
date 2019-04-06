<?php

class goal
{
    public $id, $description;

    function __construct ( $id, string $description )
    {
        $this->id = $id;
        $this->description = $description;
    }
}