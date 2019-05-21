<?php

when ( 'i want to remove a routine from a scheme', then ( apply ( a ( 
    
function ( scheme $scheme, scheme\routine $routine, scheme\manager $manager )
{
    $scheme->remove ( $routine );
    $manager->update ( $scheme );
    
    return [ 9006, [  'scheme_id' => $scheme->id ] ];
} ) ) ) );