<?php

when ( 'i want to remove a goal from a task', then ( apply ( a ( 
    
function ( goal $goal, task $task, task\manager $taskManager )
{
    $taskManager->removeGoalFromTask ( $task, $goal );
    return [ 3009, [ ] ];
} ) ) ) );