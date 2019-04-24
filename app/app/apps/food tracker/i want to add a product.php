<?php

when ( 'i want to add a product', then ( apply ( a ( 
    
function ( product $product, productManager $productManager )
{
    $productManager->add ( $product );
    return [ 7000, [ ] ];
} ) ) ) );