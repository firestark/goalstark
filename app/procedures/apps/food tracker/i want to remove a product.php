<?php

when ( 'i want to remove a product', then ( apply ( a ( 
    
function ( product $product, productManager $productManager )
{
    if ( ! $productManager->has ( $product ) )
        return [ 8000, [ ] ];
    
    $productManager->remove ( $product );
    return [ 7004, [ ] ];
} ) ) ) );