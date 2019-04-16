<?php

use function compact as with;

when ( 'i want to remove a task', then ( apply ( a ( 
    
function ( task $task, taskManager $taskManager )
{
    if ( ! $taskManager->has ( $task ) )
        return [ 4000, [ ] ];
         
    $taskManager->remove ( $task );
    return [ 3007, [ ] ];
} ) ) ) );