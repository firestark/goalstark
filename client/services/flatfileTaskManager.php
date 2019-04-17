<?php

class flatfileTaskManager implements taskManager
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
        $this->check ( $task );
        return $this->tasks [ $task->id ];
    }

    function tasksFor ( goal $goal ) : array
    {
        foreach ( $this->tasks as $task )
            if ( $task->goalid === $goal->id )
                $tasks [ ] = $task;
        
        return $tasks ?? [ ];
    }

    function has ( task $task ) : bool
    {
        return isset ( $this->tasks [ $task->id ] );
    }

    function update ( task $task )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ] = $task;
        $this->write ( );
    }

    function complete ( task $task )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ]->complete ( );
        $this->write ( );
    }

    function uncomplete ( task $task )
    {
        $this->check ( $task );
        $this->tasks [ $task->id ]->uncomplete ( );
        $this->write ( );
    }

    function remove ( task $task )
    {
        $this->check ( $task );
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
    
    private function check ( task $task )
    {
        if ( ! isset ( $this->tasks [ $task->id ] ) )
            throw new \exception ( "A task with id: {$task->id} does not exist." );
    }
}