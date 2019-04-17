<?php

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager, taskManager $taskManager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->remove ( $goal );
    $taskManager->removeForGoal ( $goal->id );
    return [ 1003, [ ] ];
} ) ) ) );