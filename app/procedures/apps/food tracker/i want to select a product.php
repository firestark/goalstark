<?php

when ( 'i want to select a product', then ( apply ( a ( 
    
function ( productManager $productManager )
{
    return [ 7005, [ 'products' => $productManager->all ( ) ] ];
} ) ) ) );