<?php

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager, task\manager $taskManager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->remove ( $goal );
    $taskManager->removeGoal ( $goal->id );
    return [ 1003, [ ] ];
} ) ) ) );