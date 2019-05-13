<?php

when ( 'i want to remove a task from a goal', then ( apply ( a ( 
    
function ( goal $goal, task $task, task\manager $taskManager )
{
    $taskManager->removeGoalFromTask ( $task, $goal );
    return [ 1007, [ ] ];
} ) ) ) );