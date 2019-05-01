<?php

when ( 'i want to see my completed goals', then ( apply ( a ( 
    
function ( goal\manager $manager )
{
    return [ 1000, [ 'goals' => $manager->completed ( ) ] ];
} ) ) ) );