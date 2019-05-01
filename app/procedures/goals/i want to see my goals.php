<?php

when ( 'i want to see my goals', then ( apply ( a ( function ( goalManager $manager )
{
    return [ 1000, [ 'goals' => $manager->all ( ) ] ];
} ) ) ) );