<?php

use function compact as with;

status::matching ( 1000, function ( array $goals )
{
	foreach ( $goals as $goal )
		$goal->tasks = app::make ( task\manager::class )->tasksFor ( $goal );

	$due = array_filter ( $goals, function ( $goal ) { return ! $goal->isOverdue ( ) and ! $goal->completed; } );
	$overdue = array_filter ( $goals, function ( $goal ) { return $goal->isOverdue ( ); } );
	$completed = array_filter ( $goals, function ( $goal ) { return $goal->completed; } );
	return view::ok ( 'goals.list', with ( 'goals', 'due', 'overdue', 'completed' ) );
} );
