<?php

when ( 'i want to add a product', then ( apply ( a ( 
    
function ( product $product, dietitian $dietitian )
{
    $dietitian->add ( $product );
    return [ 7000, [ ] ];
} ) ) ) );