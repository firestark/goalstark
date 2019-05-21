<?php

when ( 'i want to add a routine to a scheme', then ( apply ( a ( 
    
function ( scheme $scheme, scheme\manager $manager, scheme\routine $routine )
{
    $scheme->add ( $routine );
    $manager->update ( $scheme );
    return [ 9005, [ 'scheme_id' => $scheme->id ] ];
} ) ) ) );