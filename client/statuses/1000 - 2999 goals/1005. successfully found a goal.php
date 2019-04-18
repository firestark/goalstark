<?php

use function compact as with;

status::matching ( 1005, function ( goal $goal, array $tasks )
{
	view::title ( "Goal: {$goal->title}" );

	$tasks = array_reverse ( $tasks );
	$oneTimers = array_filter ( $tasks, function ( $task ) { return ! $task instanceof dailyTask; } );
	$dailies = array_filter ( $tasks, function ( $task ) { return $task instanceof dailyTask; } );

	if ( request::uri ( ) === "/{$goal->id}/tasks" )
		return view::ok ( 'tasks.listing', with ( 'goal' ) );
		
	return view::ok ( 'goals.edit', with ( 'goal', 'tasks', 'oneTimers', 'dailies' ) );
} );
