<?php

class flatfileTaskManager extends \task\manager
{
    private $tasks, $file;

    function __construct ( dietitian $dietitian, string $file, array $tasks )
    {
        parent::__construct ( $dietitian );
        $this->file = $file;
        $this->tasks = $tasks;
    }

    function add ( task $task )
    {
        $this->tasks [ $task->id ] = $task;
        $this->write ( );
    }

    function all ( ) : array
    {
        return $this->tasks;
    }

    function find ( task $task ) : task
    {
        return $this->findById ( $task->id );
    }

    function findById ( $id ) : task
    {
        if ( ! isset ( $this->tasks [ $id ] ) )
            throw new \exception ( "A task with id: {$id} does not exist." );
        
        return $this->tasks [ $id ];
    }

    function tasksFor ( goal $goal ) : array
    {
        foreach ( $this->tasks as $task )
            if ( in_array ( $goal->id, $task->goals ) )
                $tasks [ ] = $task;
        
        return $tasks ?? [ ];
    }

    function has ( task $task ) : bool
    {
        return isset ( $this->tasks [ $task->id ] );
    }

    function hasWithDescription ( string $description ) : bool
    {
        foreach ( $this->tasks as $task )
            if ( $task->description === $description )
                return true;
        
        return false;
    }

    function update ( task $task )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ] = $task;
        $this->write ( );
    }
    
    function remove ( task $task )
    {
        $this->check ( $task );
        unset ( $this->tasks [ $task->id ] );
        $this->write ( );
    }

    function removeGoal ( goal $goal )
    {
        foreach ( $this->tasks as $task )
           $task->remove ( $goal->id );
        
        $this->write ( );
    }

    function removeGoalFromTask ( task $task, goal $goal )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ]->remove ( $goal->id );
        $this->write ( );
    }

    function merge ( task $task, array $goals )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ]->merge ( $goals );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->tasks ) );
    }
}