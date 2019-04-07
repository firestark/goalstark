<?php

use function compact as with;

when ( 'i want to uncomplete a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $manager->uncomplete ( $goal );
    return [ 1006, with ( 'goal' ) ];
} ) ) ) );