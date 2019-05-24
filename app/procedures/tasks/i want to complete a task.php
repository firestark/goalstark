<?php

use function compact as with;

when ( 'i want to complete a task', then ( apply ( a ( 
    
function ( task $task, goal $goal, task\manager $taskManager, goal\manager $manager )
{     
    $taskManager->complete ( $task );
    $manager->update ( $goal );
    return [ 3004, with ( 'task' ) ];
} ) ) ) );