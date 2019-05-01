<?php

when ( 'i want to update a product', then ( apply ( a ( 
    
function ( product $product, productManager $productManager )
{
    if ( ! $productManager->has ( $product ) )
        return [ 8000, [ ] ];


    $productManager->update ( $product );
    return [ 7003, [ ] ];
} ) ) ) );