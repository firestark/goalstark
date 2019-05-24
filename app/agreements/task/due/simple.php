<?php

namespace task\due;

class simple extends \task\due
{
    public $completed = false;

    function __construct ( $id, string $description, int $due, bool $completed = false )
    {
        $this->completed = $completed;
        parent::__construct ( $id, $description, $due );
    }

    function __toString ( )
    {
        return uniqid ( );
    }
}