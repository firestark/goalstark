<?php

namespace task;

use consumation;
use dietitian;
use goal;
use task;

abstract class manager
{
    protected $dietitian = null;

    function __construct ( dietitian $dietitian )
    {
        $this->dietitian = $dietitian;
    }

    abstract function add ( task $task );

    abstract function tasksFor ( goal $goal ) : array;

    abstract function has ( task $task ) : bool;

    abstract function hasWithDescription ( string $description ) : bool;

    abstract function all ( ) : array;

    abstract function find ( task $task ) : task;

    abstract function findById ( $id ) : task;

    abstract function update ( task $task );

    function complete ( task $task )
    {
        if ( ! $this->has ( $task ) )
            throw new \exception ( "A task with id: {$task->id} does not exist." );

        $this->findById ( $task->id )->complete ( );

        if ( $task instanceof task\product\count )
            $this->dietitian->add ( new consumation ( uniqid ( ), $task->product ) );

        $this->update ( $task );
    }

    abstract function uncomplete ( task $task );

    abstract function remove ( task $task );

    abstract function removeGoal ( goal $goal );

    abstract function removeGoalFromTask ( task $task, goal $goal );

    abstract function merge ( task $task, array $goals );

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