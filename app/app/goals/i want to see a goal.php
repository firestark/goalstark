<?php

use function compact as with;

when ( 'i want to see a goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( ! $manager->has ( $goal ) )
        return [ 2001, [ ] ];
    
    $goal = $manager->find ( $goal->id );
    return [ 1005, with ( 'goal' ) ];
} ) ) ) );