<?php

use function compact as with;

when ( 'i want to see a goal\'s tasks', then ( apply ( a ( 
    
function ( goal $goal )
{
    return [ 1009, with ( 'goal' ) ];
} ) ) ) );