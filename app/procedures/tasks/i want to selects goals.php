<?php

when ( 'i want to select goals', then ( apply ( a ( 
    
function ( goal\manager $goalManager )
{
    return [ 3008, [ 'goals' => $goalManager->all ( ) ] ];
} ) ) ) );