<?php

when ( 'i want to update a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->update ( $goal );
    return [ 1002, [ ] ];
} ) ) ) );