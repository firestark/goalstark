<?php

use function compact as with;

when ( 'i want to update a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $manager->update ( $goal );
    return [ 1002, with ( 'goal' ) ];
} ) ) ) );