<?php

use function compact as with;

status::matching ( 1007, function ( array $goals )
{
	$goals = array_reverse ( $goals );
	return view::ok ( 'tasks.select-goal', with ( 'goals' ) );
} );
