<?php

class flatfileGoalManager extends goal\manager
{
    private $goals, $file;

    function __construct ( string $file, array $goals )
    {
        $this->file = $file;
        $this->goals = $goals;
    }

    function all ( ) : array
    {
        return $this->goals;
    }

    function add ( goal $goal )
    {
        $this->goals [ $goal->id ] = $goal;
        $this->write ( );
    }

    function has ( goal $goal ) : bool
    {
        return isset ( $this->goals [ $goal->id ] );
    }

    function hasGoalWithDescription ( string $description ) : bool
    {
        foreach ( $this->goals as $stored )
            if ( $stored->description === $description )
                return true;
        
        return false;
    }

    function find ( $id ) : goal
    {
        if ( ! isset ( $this->goals [ $id ] ) )
            throw new \exception ( "A goal with id: {$id} does not exist." );
        
        return $this->goals [ $id ];
    }

    function findAllById ( array $ids ) : array 
    {
        foreach ( $this->goals as $id => $goal )
            if ( in_array ( $id, $ids ) )
                $goals [ ] = $goal;
        
        return $goals ?? [ ];
    }

    function update ( goal $goal )
    {
        $this->check ( $goal );
        $this->goals [ $goal->id ] = $goal;
        $this->write ( );
    }

    function remove ( goal $goal )
    {
        $this->check ( $goal );
        unset ( $this->goals [ $goal->id ] );
        $this->write ( );
    }

    function complete ( goal $goal )
    {
        $this->check ( $goal );
        $this->goals [ $goal->id ]->completed = true;
        $this->write ( );
    }

    function uncomplete ( goal $goal )
    {
        $this->check ( $goal );
        $this->goals [ $goal->id ]->completed = false;
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->goals ) );
    }
    
    private function check ( goal $goal )
    {
        if ( ! isset ( $this->goals [ $goal->id ] ) )
            throw new \exception ( "A goal with id: {$goal->id} does not exist." );
    }
}