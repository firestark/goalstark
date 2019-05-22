<?php

use function compact as with;

when ( 'i want to remove a task', then ( apply ( a ( 
    
function ( $taskid, goal $goal, goal\manager $manager )
{
    unset ( $goal->tasks [ $taskid ] );
    $manager->update ( $goal );
    return [ 3007, [ ] ];
} ) ) ) );