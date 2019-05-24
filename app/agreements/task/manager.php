<?php

namespace task;

use consumation;
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

            case $task instanceof due\simple:
                return $task->completed;

            case $task instanceof protein:
                return ( $this->dietitian->protein ( ) >= $task->goal );
            
            default:
                return false;
        }
    }

    function isOverdue ( task $task ) : bool
    {
        if ( $this->isCompleted ( $task ) )
            return false;
        
        switch ( $task ) {
            case $task instanceof due:
                return ( $task->due < time ( ) );
            
            default:
                return false;
        }
    }

    function isDueToday ( task $task ) : bool
    {
        if ( $this->isCompleted ( $task ) )
            return false;
        
        switch ( $task ) {
            case $task instanceof due:
                return ( $task->due === endOfDay ( time ( ) ) );
            
            default:
                return false;
        }
    }

    function isDueLater ( task $task ) : bool
    {
        if ( $this->isCompleted ( $task ) )
            return false;
        
        switch ( $task ) {
            case $task instanceof daily:
                return false;
            
            case $task instanceof due:
                return ( ! $this->isDueToday ( $task ) and ! $this->isOverdue ( $task ) );
            
            default:
                return false;
        }
    }

    function complete ( task $task )
    {
        switch ( $task ) {
            case $task instanceof product\count:
                $this->dietitian->add ( new consumation ( uniqid ( ), $task->product ) );
                break;
            case $task instanceof count:
                $task->completions [ ] = time ( );
                break;
            case $task instanceof due\simple:
                $task->completed = true;
                break;
            default:
                return;
        }
    }

    function uncomplete ( task $task )
    {
        switch ( $task ) {
            case $task instanceof product\count:
                $this->dietitian->removeLastWithProduct ( $task->product );
                break;
            case $task instanceof count:
                array_pop ( $task->completions );
                break;
            case $task instanceof due\simple:
                $task->completed = false;
                break;
            default:
                return;
        }
    }
}