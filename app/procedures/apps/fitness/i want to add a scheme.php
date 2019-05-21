<?php

when ( 'i want to add a scheme', then ( apply ( a ( 
    
function ( scheme $scheme, scheme\manager $manager, task\manager $taskManager )
{
    $manager->add ( $scheme );

    foreach ( $taskManager->all ( ) as $task )
        if ( $task instanceof task\scheme\create )
            $taskManager->complete ( $task );

    return [ 9002, [ ] ];
} ) ) ) );