<?php

when ( 'i want to add a consumation', then ( apply ( a ( 
    
function ( consumation $consumation, dietitian $dietitian )
{
    $dietitian->add ( $consumation );
    return [ 7006, [ ] ];
} ) ) ) );