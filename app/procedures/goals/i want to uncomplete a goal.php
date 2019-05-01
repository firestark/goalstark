<?php

when ( 'i want to uncomplete a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];

    $manager->uncomplete ( $goal );
    return [ 1006, [ ] ];
} ) ) ) );