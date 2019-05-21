<?php

class flatfileExerciseManager implements exercise\manager
{
    private $exercises, $file;

    function __construct ( string $file, array $exercises )
    {
        $this->file = $file;
        $this->exercises = $exercises;
    }

    function all ( ) : array
    {
        return $this->exercises;
    }

    function add ( exercise $exercise )
    {
        $this->exercises [ $exercise->id ] = $exercise;
        $this->write ( );
    }

    function find ( $id ) : exercise
    {
        if ( ! isset ( $this->exercises [ $id ] ) )
            throw new exception ( "Exercise with id: {$id} not found." );
        
        return $this->exercises [ $id ];
    }

    function remove ( exercise $exercise ) 
    {
        unset ( $this->exercises [ $exercise->id ] );
        $this->write ( );
    }

    function has ( $id ) : bool
    {
        return isset ( $this->exercises [ $id ] );
    }

    private function check ( exercise $exercise )
    {
        if ( ! isset ( $this->exercises [ $exercise->id ] ) )
            throw new \exception ( "An exercise with id: {$exercise->id} does not exist." );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->exercises ) );
    }
}