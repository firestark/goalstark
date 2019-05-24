<?php

use function compact as with;

status::matching ( [ 1009, 7009 ], function ( goal $goal, int $protein )
{
	$manager = app::make ( task\manager::class );

	$tasks = array_reverse ( $goal->tasks );
	foreach ( $tasks as $task )
		$task->goal = $goal;
	
	$dailies = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $task instanceof task\daily; } );
	$today = array_filter ( $tasks, function ( $task ) use ( $manager ) { return ! $task instanceof task\daily and $manager->isDueToday ( $task ); } );
	$later = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isDueLater ( $task ); } );
	$overdue = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isOverdue ( $task ); } );
	$completed = array_filter ( $tasks, function ( $task ) use ( $manager ) { return $manager->isCompleted ( $task ); } );

	return view::ok ( 'goals.tasks.list', with ( 'goal', 'tasks', 'dailies', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );

