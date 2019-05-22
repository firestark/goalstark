<?php

when ( 'i want to remove a goal', then ( apply ( a ( 
    
function ( goal $goal, goal\manager $manager )
{
    $manager->remove ( $goal );
    return [ 1003, [ ] ];
} ) ) ) );