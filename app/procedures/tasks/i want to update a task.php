<?php

when ( 'i want to update a task', then ( apply ( a ( 
    
function ( task $task, goal $goal, goal\manager $manager )
{
    $goal->tasks [ $task->id ] = $task; 
    $manager->update ( $goal );
    return [ 3003, [ 'goalid' => $goal->id ] ];
} ) ) ) );