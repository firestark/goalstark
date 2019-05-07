<?php

when ( 'i want to remove a reason from a goal', then ( apply ( a ( 
    
function ( goal\reason $reason, goal $goal, goal\manager $manager )
{
    $manager->removeReasonFrom ( $goal, $reason );
    return [ 1012, [ ] ];
} ) ) ) );