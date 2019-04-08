<?php

abstract class goalManager
{
    abstract function all ( ) : array;

    function overdue ( ) : array
    {
        $now = time ( );
        
        foreach ( $this->all ( ) as $goal )
            if ( $goal->completeBy < $now )
                $overdue [ ] = $goal;

        return $overdue ?? [ ];
    }

    abstract function add ( goal $goal );

    abstract function has ( goal $goal ) : bool;

    abstract function hasGoalWithDescription ( string $description ) : bool;

    abstract function find ( $id ) : goal;

    abstract function update ( goal $goal );

    abstract function remove ( goal $goal );

    abstract function complete ( goal $goal );

    abstract function uncomplete ( goal $goal );
}