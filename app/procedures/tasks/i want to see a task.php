<?php

use function compact as with;

when ( 'i want to see a task', then ( apply ( a ( 
    
function ( $taskid, goal $goal )
{
    $task = $goal->tasks [ $taskid ];
    return [ 3002, with ( 'goal', 'task' ) ];
} ) ) ) );