<?php

when ( 'i want to update a goal\'s reason', then ( apply ( a ( 
    
function ( goal\reason $reason, goal $goal, goal\manager $manager )
{
    $manager->updateReasonFor ( $goal, $reason );
    return [ 1013, [ ] ];
} ) ) ) );