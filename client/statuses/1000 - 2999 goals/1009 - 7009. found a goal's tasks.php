<?php

use function compact as with;

status::matching ( [ 1009, 7009 ], function ( goal $goal, array $tasks, int $protein )
{
	$tasks = array_reverse ( $tasks );
	$dailies = array_filter ( $tasks, function ( $task ) { return $task instanceof task\daily; } );
	$today = array_filter ( $tasks, function ( $task ) { return $task->dueToday ( ) and ! $task instanceof task\daily; } );
	$later = array_filter ( $tasks, function ( $task ) { return $task->dueLater ( ); } );
	$overdue = array_filter ( $tasks, function ( $task ) { return $task->isOverdue ( ); } );
	$completed = array_filter ( $tasks, function ( $task ) { return $task->isCompleted ( ); } );

	return view::ok ( 'goals.tasks.list', with ( 'goal', 'tasks', 'dailies', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );

