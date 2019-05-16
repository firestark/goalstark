<?php

when ( 'i want to see my open goals', then ( apply ( a ( 
    
function ( goal\manager $manager, task\manager $tasks )
{
    return [ 1000, [ 'goals' => $manager->open ( $tasks->all ( ) ) ] ];
} ) ) ) );