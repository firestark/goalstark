<?php

when ( 'i want to remove a scheme', then ( apply ( a ( 
    
function ( scheme $scheme, scheme\manager $manager )
{
    $manager->remove ( $scheme );
    return [ 9003, [ ] ];
} ) ) ) );