<?php

when ( 'i want to add a new goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    if ( $manager->hasGoalWithDescription ( $goal->description ) )
        return [ 2000, [ ] ];
    
    $manager->add ( $goal );
    return [ 1001, [ 'id' => $goal->id ] ];
} ) ) ) );