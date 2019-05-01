<?php

when ( 'i want to complete a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->complete ( $goal );
    return [ 1004, [ ] ];
} ) ) ) );