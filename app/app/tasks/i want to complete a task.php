<?php

when ( 'i want to complete a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];
        
    $goal = $manager->find ( $goal->id );
    $goal->complete ( $task );
    $manager->update ( $goal );

    return [ 1010, [ 'id' => $goal->id ] ];
} ) ) ) );