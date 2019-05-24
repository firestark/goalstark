<?php

namespace task;

abstract class due extends \task
{
    public $due = 0;

    function __construct ( $id, string $description, int $due )
    {
        $this->due = endOfDay ( $due );
        parent::__construct ( $id, $description );
    }
}