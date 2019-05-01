<?php

when ( 'i want to add tasks to a goal', then ( apply ( a ( 
    
function ( array $tasks, goal $goal, task\manager $taskManager )
{
    foreach ( $tasks as $task )
        $taskManager->merge ( $task, [ $goal->id ] );
    
    return [ 1008, [ ] ];
} ) ) ) );