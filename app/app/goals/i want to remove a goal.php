<?php

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->remove ( $goal );
    return [ 1003, [ ] ];
} ) ) ) );