<?php

use function compact as with;

status::matching ( 1005, function ( goal $goal, array $tasks )
{
	view::title ( "Goal: {$goal->title}" );
	$tasks = array_reverse ( $tasks );
	return view::ok ( 'goals.edit', with ( 'goal', 'tasks' ) );
} );
