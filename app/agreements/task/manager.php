<?php

namespace task;

class manager
{
    private $dietitian = null;

    function __construct ( dietitian $dietitian )
    {
        $this->dietitian = $dietitian;
    }

    function isCompleted ( \task $task ) : bool
    {
        
    }
}