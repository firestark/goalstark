<?php

when ( 'i want to add a reason to my goal', then ( apply ( a ( 
    
function ( goal\reason $reason, goal $goal, goal\manager $manager )
{
    $manager->addReasonTo ( $goal, $reason );
    return [ 1011, [ ] ];
} ) ) ) );