<?php

use function compact as with;

when ( 'i want to complete a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, with ( 'goal' ) ];

    $manager->complete ( $goal );
    return [ 1004, with ( 'goal' ) ];
} ) ) ) );