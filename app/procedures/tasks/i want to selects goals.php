<?php

when ( 'i want to select goals', then ( apply ( a ( 
    
function ( goalManager $goalManager )
{
    return [ 3008, [ 'goals' => $goalManager->all ( ) ] ];
} ) ) ) );