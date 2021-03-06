<?php

class flatfileDietitian implements dietitian
{
    private $consumations, $file;

    function __construct ( string $file, array $consumations )
    {
        $this->file = $file;
        $this->consumations = $consumations;
    }

    function add ( consumation $consumation )
    {
        $this->consumations [ $consumation->id ] = $consumation;
        $this->write ( );
    }

    function all ( ) : array
    {
        return $this->consumations;
    }

    function today ( ) : array
    {
        $date = date ( 'Ymd' );

        foreach ( $this->consumations as $consumation ) 
            if ( date ( 'Ymd', $consumation->date ) === $date )
                $consumations [ ] = $consumation;

        return $consumations ?? [ ];
    }

    function remove ( consumation $consumation )
    {
        unset ( $this->consumations [ $consumation->id ] );
        $this->write ( );
    }

    private function write ( )
	{
		file_put_contents ( $this->file, serialize ( $this->consumations ) );
    }

    private function check ( consumation $consumation )
    {
        if ( ! isset ( $this->consumations [ $consumation->id ] ) )
            throw new \exception ( "A consumation with id: {$consumation->id} does not exist." );
    }
}