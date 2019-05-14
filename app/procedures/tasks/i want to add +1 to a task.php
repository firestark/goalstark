<?php

use function compact as with;

when ( 'i want to add +1 to a task', then ( apply ( a ( 
    
function ( task $task, task\manager $manager, dietitian $dietitian )
{
    $manager->complete ( $task );
    $dietitian->add ( new consumation ( uniqid ( ), $task->product ) );
    return [ 3004, with ( 'task' ) ];
} ) ) ) );