<?php

use function compact as with;

status::matching ( 3006, function ( array $tasks )
{
	$tasks = array_reverse ( $tasks );
	$oneTimers = array_filter ( $tasks, function ( $task ) { return ! $task instanceof dailyTask; } );
	$dailies = array_filter ( $tasks, function ( $task ) { return $task instanceof dailyTask; } );
	return view::ok ( 'tasks.list', with ( 'tasks', 'oneTimers', 'dailies' ) );
} );
