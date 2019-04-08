<?php

when ( 'i want to see my completed goals', then ( apply ( a ( 
    
function ( goalManager $manager )
{
    return [ 1000, [ 'goals' => $manager->completed ( ) ] ];
} ) ) ) );