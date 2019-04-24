<?php

when ( 'i want to select a product', then ( apply ( a ( 
    
function ( dietitian $dietitian )
{
    return [ 7005, [ 'products' => $dietitian->all ( ) ] ];
} ) ) ) );