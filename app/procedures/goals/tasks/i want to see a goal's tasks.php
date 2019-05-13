<?php

use function compact as with;

when ( 'i want to see a goal\'s tasks', then ( apply ( a ( 
    
function ( goal $goal, task\manager $taskManager )
{
    $tasks = $taskManager->tasksFor ( $goal );
    return [ 1009, with ( 'goal', 'tasks' ) ];
} ) ) ) );