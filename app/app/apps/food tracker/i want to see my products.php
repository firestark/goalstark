<?php

when ( 'i want to see my products', then ( apply ( a ( 
    
function ( dietitian $dietitian )
{
    return [ 7001, [ 'products' => $dietitian->all ( ) ] ];
} ) ) ) );