<?php

namespace goal;

use goal;

abstract class manager
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

    abstract function addReasonTo ( goal $goal, reason $reason );

    abstract function has ( goal $goal ) : bool;

    abstract function hasGoalWithDescription ( string $description ) : bool;

    abstract function find ( $id ) : goal;

    abstract function findAllById ( array $ids ) : array;

    abstract function update ( goal $goal );

    abstract function updateReasonFor ( goal $goal, reason $reason );

    abstract function remove ( goal $goal );

    abstract function removeReasonFrom ( goal $goal, reason $reason );

    abstract function complete ( goal $goal );

    abstract function uncomplete ( goal $goal );
}