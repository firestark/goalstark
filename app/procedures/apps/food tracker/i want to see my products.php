<?php

when ( 'i want to see my products', then ( apply ( a ( 
    
function ( productManager $productManager )
{
    return [ 7001, [ 'products' => $productManager->all ( ) ] ];
} ) ) ) );