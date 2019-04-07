<?php

interface goalManager
{
    function all ( ) : array;

    function add ( goal $goal );

    function has ( goal $goal ) : bool;

    function hasGoalWithDescription ( string $description ) : bool;

    function find ( $id ) : goal;

    function update ( goal $goal );

    function remove ( goal $goal );

    function complete ( goal $goal );

    function uncomplete ( goal $goal );
}