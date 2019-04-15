<?php

when ( 'i want to uncomplete a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];
        
    $goal = $manager->find ( $goal->id );
    $goal->uncomplete ( $task );
    $manager->update ( $goal );

    return [ 1011, [ 'id' => $goal->id ] ];
} ) ) ) );