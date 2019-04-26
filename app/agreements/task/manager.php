<?php

namespace task;

use goal;
use task;

abstract class manager
{
    abstract function add ( task $task );

    abstract function tasksFor ( goal $goal ) : array;

    abstract function has ( task $task ) : bool;

    abstract function all ( ) : array;

    abstract function find ( task $task ) : task;

    abstract function update ( task $task );

    abstract function complete ( task $task );

    abstract function uncomplete ( task $task );

    abstract function remove ( task $task );

    abstract function removeForGoal ( $goalid );

    function today ( ) : array
    {
        foreach ( $this->all ( ) as $task )
            if ( $task->dueToday ( ) )
                $tasks [ ] = $task;
        
        return $tasks ?? [ ];
    }

    function later ( ) : array
    {
        foreach ( $this->all ( ) as $task )
            if ( ! $task->dueToday ( ) )
                $tasks [ ] = $task;
        
        return $tasks ?? [ ];
    }
}