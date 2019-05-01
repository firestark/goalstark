<?php

when ( 'i want to remove a consumation', then ( apply ( a ( 
    
function ( consumation $consumation, dietitian $dietitian )
{
    $dietitian->remove ( $consumation );
    return [ 7008, [ ] ];
} ) ) ) );