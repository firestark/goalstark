<?php

when ( 'i want to see my tasks', then ( apply ( a ( 
    
function ( task\manager $taskManager )
{
    return [ 3006, [ 'tasks' => $taskManager->all ( ) ] ];
} ) ) ) );