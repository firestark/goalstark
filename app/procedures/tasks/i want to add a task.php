<?php

when ( 'i want to add a task', then ( apply ( a ( 
    
function ( task $task, goal $goal, goal\manager $manager )
{   
    $goal->tasks [ ] = $task;
    $manager->update ( $goal );
    return [ 3000, [ 'id' => $goal->id ] ];
} ) ) ) );