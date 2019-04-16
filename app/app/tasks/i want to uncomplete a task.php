<?php

when ( 'i want to uncomplete a task', then ( apply ( a ( 
    
    function ( task $task, taskManager $taskManager )
    {
        if ( ! $taskManager->has ( $task ) )
            return [ 4000, [ ] ];
             
        $taskManager->uncomplete ( $task );
        return [ 3005, [ ] ];
    } ) ) ) );