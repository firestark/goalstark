<?php

namespace task\scheme;

class create extends \task\due
{    
    function __construct ( array $goals, $id, int $due, bool $completed = false )
    {
        $description = 'Create a fitness scheme.';
        parent::__construct ( $goals, $id, $description, $due, $completed );
    }
}