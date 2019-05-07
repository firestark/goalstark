<?php

use function compact as with;

status::matching ( [ 3006, 7009 ], function ( array $tasks, int $protein )
{
	$tasks = array_reverse ( $tasks );
	$today = array_filter ( $tasks, function ( $task ) { return $task->dueToday ( ); } );
	$later = array_filter ( $tasks, function ( $task ) { return ! $task->isOverdue ( ) and ! $task->dueToday ( ); } );
	$overdue = array_filter ( $tasks, function ( $task ) { return $task->isOverdue ( ); } );


	if ( strpos ( request::uri ( ), '/tasks/add' ) !== false )
		return view::ok ( 'goals.tasks.add', with ( 'tasks', 'today', 'later', 'protein' ) );

	return view::ok ( 'tasks.list', with ( 'tasks', 'today', 'later', 'overdue', 'protein' ) );
} );