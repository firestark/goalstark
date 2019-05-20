<?php

when ( 'i want to remove an exercise', then ( apply ( a ( 
    
function ( exercise $exercise, exercise\manager $manager )
{
    $manager->remove ( $exercise );
    return [ 9001, [ ] ];
} ) ) ) );