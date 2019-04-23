<?php

when ( 'i want to update a product', then ( apply ( a ( 
    
function ( product $product, dietitian $dietitian )
{
    if ( ! $dietitian->has ( $product ) )
        return [ 8000, [ ] ];


    $dietitian->update ( $product );
    return [ 7003, [ ] ];
} ) ) ) );