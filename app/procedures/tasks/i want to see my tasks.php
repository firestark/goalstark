<?php

when ( 'i want to see my tasks', then ( apply ( a ( 
    
function ( goal\manager $manager )
{
    $tasks = [ ];
    
    foreach ( $manager->all ( ) as $goal )
        $tasks = array_merge ( $tasks, $goal->tasks );

    return [ 3006, [ 'tasks' => $tasks ] ];
} ) ) ) );