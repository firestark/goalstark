<?php

use function compact as with;

status::matching ( [ 1009, 7009 ], function ( goal $goal, array $tasks, int $protein )
{
	$tasks = array_reverse ( $tasks );
	$today = array_filter ( $tasks, function ( $task ) { return $task->dueToday ( ); } );
	$later = array_filter ( $tasks, function ( $task ) { return $task->dueLater ( ); } );
	$overdue = array_filter ( $tasks, function ( $task ) { return $task->isOverdue ( ); } );
	$completed = array_filter ( $tasks, function ( $task ) { return $task->isCompleted ( ); } );

	return view::ok ( 'goals.tasks.list', with ( 'goal', 'tasks', 'today', 'later', 'overdue', 'protein', 'completed' ) );
} );

