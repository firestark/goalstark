<?php

use function compact as with;

when ( 'i want to remove a task', then ( apply ( a ( 
    
function ( task $task, goal $goal, goal\manager $manager )
{
    unset ( $goal->tasks [ $task->id ] );
    $manager->update ( $goal );
    return [ 3007, [ ] ];
} ) ) ) );