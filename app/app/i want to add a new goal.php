<?php

use function compact as with;

when ( 'i want to add a new goal', then ( apply ( a ( 
    
function ( goal $goal, goalManager $manager )
{
    if ( $manager->hasGoalWithDescription ( $goal->description ) )
        return [ 2000, with ( 'goal' ) ];
    
    $manager->add ( $goal );
    return [ 1001, [ 'id' => $goal->id ] ];
} ) ) ) );