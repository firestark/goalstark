<?php

when ( 'i want to see my consumations', then ( apply ( a ( 
    
function ( dietitian $dietitian )
{
    return [ 7007, [ 'consumations' => $dietitian->all ( ) ] ];
} ) ) ) );