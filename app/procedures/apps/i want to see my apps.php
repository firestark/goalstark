<?php

when ( 'i want to see my apps', then ( apply ( a ( 
    
function ( appManager $appManager )
{
    return [ 5000, [ 'apps' => $appManager->all ( ) ] ];
} ) ) ) );