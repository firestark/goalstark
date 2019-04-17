<?php

use function compact as with;

status::matching ( 3001, function ( goal $goal, array $tasks )
{
	view::title ( $goal->title );
	$tasks = array_reverse ( $tasks );
	$oneTimers = array_filter ( $tasks, function ( $task ) { return ! $task instanceof dailyTask; } );
	$dailies = array_filter ( $tasks, function ( $task ) { return $task instanceof dailyTask; } );
	return view::ok ( 'goals.task-list', with ( 'goal', 'tasks', 'oneTimers', 'dailies' ) );
} );
