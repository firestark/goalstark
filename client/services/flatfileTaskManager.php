<?php

class flatfileTaskManager extends \task\manager
{
    private $tasks, $file;

    function __construct ( string $file, array $tasks )
    {
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
        $this->check ( $id );
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

    function update ( task $task )
    {
        $this->check ( $task->id );
        $this->tasks [ $task->id ] = $task;
        $this->write ( );
    }

    function complete ( task $task )
    {
        $this->check ( $task->id );
        $this->tasks [ $task->id ]->complete ( );
        $this->write ( );
    }

    function uncomplete ( task $task )
    {
        $this->check ( $task->id );
        $this->tasks [ $task->id ]->uncomplete ( );
        $this->write ( );
    }

    function remove ( task $task )
    {
        $this->check ( $task->id );
        unset ( $this->tasks [ $task->id ] );
        $this->write ( );
    }

    function removeForGoal ( $goalid )
    {
        foreach ( $this->tasks as $task )
            if ( $task->goalid === $goalid )
                unset ( $this->tasks [ $task->id ] );
        
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->tasks ) );
    }
    
    private function check ( $id )
    {
        if ( ! isset ( $this->tasks [ $id ] ) )
            throw new \exception ( "A task with id: {$id} does not exist." );
    }
}