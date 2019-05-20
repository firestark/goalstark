<?php

class flatfileSchemeManager implements scheme\manager
{
    private $schemes, $file;

    function __construct ( string $file, array $schemes )
    {
        $this->file = $file;
        $this->schemes = $schemes;
    }

    function all ( ) : array
    {
        return $this->schemes;
    }

    function add ( scheme $scheme )
    {
        $this->schemes [ $scheme->name ] = $scheme;
        $this->write ( );
    }

    function find ( string $name ) : scheme
    {
        if ( ! isset ( $this->schemes [ $name ] ) )
            throw new exception ( "scheme: {$name} not found." );
        
        return $this->schemes [ $name ];
    }

    function remove ( scheme $scheme ) 
    {
        unset ( $this->schemes [ $scheme->name ] );
        $this->write ( );
    }

    private function check ( scheme $scheme )
    {
        if ( ! isset ( $this->schemes [ $scheme->name ] ) )
            throw new \exception ( "A scheme with name: {$scheme->name} does not exist." );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->schemes ) );
    }
}