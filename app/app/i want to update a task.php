<?php

use function compact as with;

when ( 'i want to updated a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];
        
    $goal = $manager->find ( $goal->id );
    $goal->update ( $task );
    $manager->update ( $goal );

    return [ 1009, [ 'id' => $goal->id ] ];
} ) ) ) );