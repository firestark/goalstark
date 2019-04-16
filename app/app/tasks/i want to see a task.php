<?php

use function compact as with;

when ( 'i want to see a task', then ( apply ( a ( 
    
function ( task $task, taskManager $taskManager )
{
    if ( ! $taskManager->has ( $task ) )
        return [ 4000, [ ] ];

    $task = $taskManager->find ( $task );
    return [ 3002, with ( 'task' ) ];
} ) ) ) );



