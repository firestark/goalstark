<?php

use function compact as with;

status::matching ( [ 3006, 7009 ], function ( array $tasks, int $protein )
{
	$manager = app::make ( task\manager::class );

	foreach ( $tasks as $task )
		$cropped [ ( string ) $task ] [ ] = $task;

	$tasks = [ ];

	foreach ( $cropped as $crop )
	{
		$crop [ 0 ]->total = count ( $crop );
		$tasks [ ] = $crop [ 0 ];
	}

	$tasks = array_reverse ( $tasks );
	$dailies = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $task instanceof task\daily; } );
	$today = array_filter ( $tasks, function ( $task ) use ( $manager ) { return ! $task instanceof task\daily and $manager->isDueToday ( $task ); } );
	$later = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isDueLater ( $task ); } );
	$overdue = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isOverdue ( $task ); } );
	$completed = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isCompleted ( $task ); } );
	
	return view::ok ( 'tasks.list', with ( 'tasks', 'dailies', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );