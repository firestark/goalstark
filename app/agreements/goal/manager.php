<?php

namespace goal;

use goal;

abstract class manager
{
    private $tasks = null;

    function __construct ( \task\manager $tasks )
    {
        $this->tasks = $tasks;
    }

    abstract function all ( ) : array;

    abstract function add ( goal $goal );

    abstract function addReasonTo ( goal $goal, reason $reason );

    abstract function has ( goal $goal ) : bool;

    abstract function hasGoalWithDescription ( string $description ) : bool;

    abstract function find ( $id ) : goal;

    abstract function findAllById ( array $ids ) : array;

    abstract function update ( goal $goal );

    abstract function updateReasonFor ( goal $goal, reason $reason );

    abstract function remove ( goal $goal );

    abstract function removeReasonFrom ( goal $goal, reason $reason );

    abstract function complete ( goal $goal );

    abstract function uncomplete ( goal $goal );

    function isOverdue ( goal $goal ) : bool
    {
        return ( ! $this->isCompleted ( $goal ) and ( $goal->due < time ( ) ) ); 
    }

    function isCompleted ( goal $goal ) : bool
    {
        foreach ( $goal->tasks as $task )
            if ( ( $task instanceof \task\daily and time ( ) < $goal->due ) or ( ! $task instanceof \task\daily and ! $this->tasks->isCompleted ( $task ) ) )
                return false;
        
        return ! empty ( $goal->tasks );
    }

    function isDraft ( goal $goal ) : bool
    {
        return ( empty ( $goal->tasks ) and ! $this->isOverdue ( $goal ) );
    }
}