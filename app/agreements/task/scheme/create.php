<?php

namespace task\scheme;

class create extends \task\due
{    
    function __construct ( $id, int $due, bool $completed = false )
    {
        $description = 'Create a fitness scheme';
        parent::__construct ( $id, $description, $due, $completed );
    }
}