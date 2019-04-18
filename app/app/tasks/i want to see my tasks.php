<?php

when ( 'i want to see my tasks', then ( apply ( a ( 
    
function ( taskManager $taskManager )
{
    return [ 3006, [ 'today' => $taskManager->today ( ), 'later' => $taskManager->later ( ) ] ];
} ) ) ) );