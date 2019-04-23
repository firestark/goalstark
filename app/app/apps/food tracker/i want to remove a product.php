<?php

when ( 'i want to remove a product', then ( apply ( a ( 
    
function ( product $product, dietitian $dietitian )
{
    if ( ! $dietitian->has ( $product ) )
        return [ 8000, [ ] ];
    
    $dietitian->remove ( $product );
    return [ 7004, [ ] ];
} ) ) ) );