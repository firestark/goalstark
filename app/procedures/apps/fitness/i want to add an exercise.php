<?php

when ( 'i want to add an exercise', then ( apply ( a ( 
    
function ( exercise $exercise, exercise\manager $manager )
{
    $manager->add ( $exercise );
    return [ 9000, [ ] ];
} ) ) ) );