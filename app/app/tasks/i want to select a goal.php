<?php

when ( 'i want to select a goal', then ( apply ( a ( 
    
function ( goalManager $goalManager )
{
    return [ 1007, [ 'goals' => $goalManager->all ( ) ] ];
} ) ) ) );