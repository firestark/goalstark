<?php

when ( 'i want to add a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, goalManager $goalManager, task\manager $taskManager )
{
    if ( ! $goalManager->has ( $goal ) )
        return [ 2001, [ ] ];

    $taskManager->add ( $task );
    return [ 3000, [ 'id' => $goal->id ] ];
} ) ) ) );