<?php

when ( 'i want to see my tasks', then ( apply ( a ( 
    
function ( taskManager $taskManager )
{
    return [ 3006, [ 'tasks' => $taskManager->all ( ) ] ];
} ) ) ) );