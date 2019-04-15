<?php

use function compact as with;

when ( 'i want to remove a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $goal = $manager->find ( $goal->id );
    $goal->remove ( $task );
    $manager->update ( $goal );

    return [ 1008, [ 'id' => $goal->id ] ];
} ) ) ) );