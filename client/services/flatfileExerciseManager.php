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
        $this->exercises [ $exercise->name ] = $exercise;
        $this->write ( );
    }

    function find ( string $name ) : exercise
    {
        if ( ! isset ( $this->exercises [ $name ] ) )
            throw new exception ( "Exercise: {$name} not found." );
        
        return $this->exercises [ $name ];
    }

    function remove ( exercise $exercise ) 
    {
        unset ( $this->exercises [ $exercise->name ] );
        $this->write ( );
    }

    private function check ( exercise $exercise )
    {
        if ( ! isset ( $this->exercises [ $exercise->name ] ) )
            throw new \exception ( "An exercise with name: {$exercise->name} does not exist." );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->exercises ) );
    }
}