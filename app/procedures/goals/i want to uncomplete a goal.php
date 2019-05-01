<?php

when ( 'i want to uncomplete a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->uncomplete ( $goal );
    return [ 1006, [ ] ];
} ) ) ) );