<?php

class flatfileGoalManager implements goalManager
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

    function update ( goal $goal )
    {
        if ( ! isset ( $this->goals [ $goal->id ] ) )
            throw new \exception ( "A goal with id: {$goal->id} does not exist." );

        $this->goals [ $goal->id ] = $goal;
        $this->write ( );
    }

    function remove ( goal $goal )
    {
        if ( ! isset ( $this->goals [ $goal->id ] ) )
            throw new \exception ( "A goal with id: {$goal->id} does not exist." );

        unset ( $this->goals [ $goal->id ] );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->goals ) );
	}
}