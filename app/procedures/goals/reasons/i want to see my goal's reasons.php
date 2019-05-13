<?php

when ( 'i want to see my goal\'s reasons', then ( apply ( a ( 
    
function ( goal $goal )
{
    return [ 1010, [ 'reasons' => $goal->reasons ] ];
} ) ) ) );