<?php

use function compact as with;

status::matching ( 3006, function ( array $tasks )
{
	$protein = 0;
	$consumations = app::make ( 'dietitian' )->today ( );
	
	foreach ( $consumations as $consumation )
		$protein += $consumation->product->nutrition->protein;


	$tasks = array_reverse ( $tasks );
	$today = array_filter ( $tasks, function ( $task ) { return $task->dueToday ( ); } );
	$later = array_filter ( $tasks, function ( $task ) { return ! $task->dueToday ( ); } );

	return view::ok ( 'tasks.list', with ( 'tasks', 'today', 'later', 'protein' ) );
} );