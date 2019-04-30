<?php

when ( 'i want to add a task', then ( apply ( a ( 
    
function ( task $task, task\manager $taskManager )
{
    if ( $taskManager->hasWithDescription ( $task->description ) )
        return [ 4001 , [ ] ];
    
    $taskManager->add ( $task );
    return [ 3000, [ 'id' => $task->id ] ];
} ) ) ) );