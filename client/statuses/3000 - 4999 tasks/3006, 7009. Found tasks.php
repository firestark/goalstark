<?php

use function compact as with;

status::matching ( [ 3006, 7009 ], function ( array $tasks, int $protein )
{
	$manager = app::make ( task\manager::class );
	$tasks = array_reverse ( $tasks );
	$dailies = crop ( array_filter ( $tasks, function ( $task ) use ( $manager ) { return $task instanceof task\daily and ! $manager->isCompleted ( $task ); } ) );
	$today = crop ( array_filter ( $tasks, function ( $task ) use ( $manager ) { return ! $task instanceof task\daily and $manager->isDueToday ( $task ); } ) );
	$later = crop ( array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isDueLater ( $task ); } ) );
	$overdue = crop ( array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isOverdue ( $task ); } ) );
	$completed = crop ( array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isCompleted ( $task ); } ) );
	
	return view::ok ( 'tasks.list', with ( 'tasks', 'dailies', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );

function crop ( array $tasks ) : array
{
	foreach ( $tasks as $task )
		$cropped [ ( string ) $task ] [ ] = $task;

	return $cropped ?? [ ];
}