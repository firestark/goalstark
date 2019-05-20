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
        $this->schemes [ $scheme->id ] = $scheme;
        $this->write ( );
    }

    function find ( $id ) : scheme
    {
        if ( ! isset ( $this->schemes [ $id ] ) )
            throw new exception ( "scheme with id: {$id} not found." );
        
        return $this->schemes [ $id ];
    }

    function remove ( scheme $scheme ) 
    {
        unset ( $this->schemes [ $scheme->id ] );
        $this->write ( );
    }

    function update ( scheme $scheme )
    {
        $this->check ( $scheme );
        $this->schemes [ $scheme->id ] = $scheme;
        $this->write ( );
    }

    private function check ( scheme $scheme )
    {
        if ( ! isset ( $this->schemes [ $scheme->id ] ) )
            throw new \exception ( "A scheme with id: {$scheme->id} does not exist." );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->schemes ) );
    }
}