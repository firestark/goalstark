<?php

use function compact as with;

when ( 'i want to add a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $goal = $manager->find ( $goal->id );
    $goal->add ( $task );
    $manager->update ( $goal );
    
    return [ 1007, [ 'id' => $goal->id ] ];
} ) ) ) );