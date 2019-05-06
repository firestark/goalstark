<?php

use function compact as with;

when ( 'i want to see a task\'s goals', then ( apply ( a ( 
    
function ( task $task, goal\manager $manager )
{
    $goals = $manager->findAllById ( $task->goals );

    return [ 3011, with ( 'goals' ) ];
} ) ) ) );