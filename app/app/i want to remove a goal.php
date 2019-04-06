<?php

use function compact as with;

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $manager->remove ( $goal );
    return [ 1003, with ( 'goal' ) ];
} ) ) ) );