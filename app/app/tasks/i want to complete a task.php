<?php

use function compact as with;

when ( 'i want to complete a task', then ( apply ( a ( 
    
function ( task $task, taskManager $taskManager )
{
    if ( ! $taskManager->has ( $task ) )
        return [ 4000, [ ] ];
         
    $taskManager->complete ( $task );
    return [ 3004, [ ] ];
} ) ) ) );