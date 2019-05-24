<?php

use function compact as with;

when ( 'i want to uncomplete a task', then ( apply ( a ( 
    
function ( task $task, goal $goal, task\manager $taskManager, goal\manager $manager )
{    
    $taskManager->uncomplete ( $task );
    $manager->update ( $goal );
    return [ 3005, with ( 'task' ) ];
} ) ) ) );