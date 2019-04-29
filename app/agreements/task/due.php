<?php

namespace task;

class due extends \task
{
    public $due = 0;

    function __construct ( array $goals, $id, string $description, int $due )
    {
        $this->due = $this->endOfDay ( $due );
        parent::__construct ( $goals, $id, $description );
    }

    private function endOfDay ( int $timestamp ) : int
    {
        $beginOfDay = strtotime ( 'midnight', $timestamp );
        return strtotime ( 'tomorrow', $beginOfDay ) - 1;
    }
}