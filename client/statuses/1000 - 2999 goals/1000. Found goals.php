<?php

use function compact as with;

status::matching ( 1000, function ( array $goals )
{
	$manager = app::make ( goal\manager::class );

	$due = array_filter ( $goals, function ( $goal ) use ( $manager ) { return ! $manager->isOverdue ( $goal ) and ! $manager->isCompleted ( $goal ); } );
	$overdue = array_filter ( $goals, function ( $goal ) use ( $manager ) { return $manager->isOverdue ( $goal ); } );
	$completed = array_filter ( $goals, function ( $goal ) use ( $manager ) { return $manager->isCompleted ( $goal ); } );
	return view::ok ( 'goals.list', with ( 'goals', 'due', 'overdue', 'completed' ) );
} );
