<?php

use function compact as with;

when ( 'i want to see a product', then ( apply ( a ( 
    
function ( product $product, dietitian $dietitian )
{
    if ( ! $dietitian->has ( $product ) )
        return [ 8000, [ ] ];

    $product = $dietitian->find ( $product );
    return [ 7002, with ( 'product' ) ];
} ) ) ) );