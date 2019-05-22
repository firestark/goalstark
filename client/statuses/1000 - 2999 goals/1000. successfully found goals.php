<?php

use function compact as with;

status::matching ( 1000, function ( array $goals )
{
	$due = array_filter ( $goals, function ( $goal ) { return ! $goal->isOverdue ( $goal->tasks ) and ! $goal->isCompleted ( $goal->tasks ); } );
	$overdue = array_filter ( $goals, function ( $goal ) { return $goal->isOverdue ( $goal->tasks ); } );
	$completed = array_filter ( $goals, function ( $goal ) { return $goal->isCompleted ( $goal->tasks ); } );
	return view::ok ( 'goals.list', with ( 'goals', 'due', 'overdue', 'completed' ) );
} );
