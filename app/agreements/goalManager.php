<?php

abstract class goalManager
{
    abstract function all ( ) : array;

    function open ( ) : array
    {
        foreach ( $this->all ( ) as $goal )
            if ( ! $goal->completed )
                $open [ ] = $goal;
        
        return $open ?? [ ];
    }

    function completed ( ) : array
    {
        foreach ( $this->all ( ) as $goal )
            if ( $goal->completed )
                $completed [ ] = $goal;

        return $completed ?? [ ];
    }

    function overdue ( ) : array
    {
        $now = time ( );
        
        foreach ( $this->all ( ) as $goal )
            if ( ! $goal->completed and $goal->completeBy < $now )
                $overdue [ ] = $goal;

        return $overdue ?? [ ];
    }

    abstract function add ( goal $goal );

    abstract function has ( goal $goal ) : bool;

    abstract function hasGoalWithDescription ( string $description ) : bool;

    abstract function find ( $id ) : goal;

    abstract function findAllById ( array $ids ) : array;

    abstract function update ( goal $goal );

    abstract function remove ( goal $goal );

    abstract function complete ( goal $goal );

    abstract function uncomplete ( goal $goal );
}