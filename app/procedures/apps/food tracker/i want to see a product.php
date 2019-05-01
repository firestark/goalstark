<?php

use function compact as with;

when ( 'i want to see a product', then ( apply ( a ( 
    
function ( product $product, productManager $productManager )
{
    if ( ! $productManager->has ( $product ) )
        return [ 8000, [ ] ];

    $product = $productManager->find ( $product );
    return [ 7002, with ( 'product' ) ];
} ) ) ) );