<?php

when ( 'i want to see my consumed protein for today', then ( apply ( a ( 
    
function ( dietitian $dietitian )
{
    $protein = 0;
    
    foreach ( $dietitian->today ( ) as $consumation )
        $protein += $consumation->product->nutrition->protein;

    return [ 7009, [ 'protein' => $protein ] ];
} ) ) ) );