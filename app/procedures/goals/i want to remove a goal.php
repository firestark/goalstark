<?php

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager, task\manager $taskManager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->remove ( $goal );
    $taskManager->removeGoal ( $goal );
    return [ 1003, [ ] ];
} ) ) ) );