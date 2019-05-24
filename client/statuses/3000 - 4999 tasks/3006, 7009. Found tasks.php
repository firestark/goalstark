<?php

use function compact as with;

status::matching ( [ 3006, 7009 ], function ( array $tasks, int $protein )
{
	$manager = app::make ( task\manager::class );

	$tasks = array_reverse ( array_unique ( $tasks ) );
	$dailies = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $task instanceof task\daily; } );
	$today = array_filter ( $tasks, function ( $task ) use ( $manager ) { return ! $task instanceof task\daily and $manager->isDueToday ( $task ); } );
	$later = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isDueLater ( $task ); } );
	$overdue = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isOverdue ( $task ); } );
	$completed = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isCompleted ( $task ); } );
	
	return view::ok ( 'tasks.list', with ( 'tasks', 'dailies', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );