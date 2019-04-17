<?php

when ( 'i want to see a goal\'s tasks', then ( apply ( a ( 
    
function ( goal $goal, goalManager $goalManager, taskManager $taskManager )
{
    if ( ! $goalManager->has ( $goal ) )
        return [ 2001, [ ] ];

    $goal = $goalManager->find ( $goal->id );
    return [ 3001, [ 'goal' => $goal, 'tasks' => $taskManager->tasksFor ( $goal ) ] ];
} ) ) ) );