<?php

use function compact as with;

when ( 'i want to see a task', then ( apply ( a ( 
    
function ( task $task, task\manager $taskManager, goal\manager $goalManager )
{
    if ( ! $taskManager->has ( $task ) )
        return [ 4000, [ ] ];

    $task = $taskManager->find ( $task );
    $goals = $goalManager->findAllById ( $task->goals );

    return [ 3002, with ( 'task', 'goals' ) ];
} ) ) ) );