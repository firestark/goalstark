<?php

when ( 'i want to see my overdue goals', then ( apply ( a ( 
    
function ( goalManager $manager )
{
    return [ 1000, [ 'goals' => $manager->overdue ( ) ] ];
} ) ) ) );