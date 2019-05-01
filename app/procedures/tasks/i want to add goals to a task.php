<?php

when ( 'i want to add goals to a task', then ( apply ( a ( 
    
function ( array $goals, task $task, task\manager $manager )
{
    $manager->merge ( $task, $goals );
    return [ 3010, [ 'taskid' => $task->id ] ];
} ) ) ) );