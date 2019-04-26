<?php

when ( 'i want to updated a task', then ( apply ( a ( 
    
function ( task $task, task\manager $taskManager )
{
    if ( ! $taskManager->has ( $task ) )
        return [ 4000, [ ] ];
        
    $taskManager->update ( $task );
    return [ 3003, [ 'id' => $task->goalid ] ];
} ) ) ) );