<?php

namespace task;

use dietitian;
use task;

class manager
{
    private $dietitian = null;

    function __construct ( dietitian $dietitian )
    {
        $this->dietitian = $dietitian;
    }

    function isCompleted ( task $task ) : bool
    {
        switch ( $task ) {
            case $task instanceof product\count:
                return ( $this->dietitian->eatenTimes ( $task->product ) >= $task->times );

            case $task instanceof count:
                return ( count ( $task->completions ) >= $task->times );
            
            case $task instanceof daily:
                return end ( $task->completions ) >= beginOfDay ( time ( ) );

            case $task instanceof due:
                return $task->completed;

            case $task instanceof protein:
                return $this->dietitian->protein ( ) >= $task->goal;
            
            default:
                return false;
        }
    }

    function isOverdue ( task $task ) : bool
    {
        
    }
}