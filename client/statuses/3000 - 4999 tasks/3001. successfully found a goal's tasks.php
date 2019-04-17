<?php

use function compact as with;

status::matching ( 3001, function ( goal $goal, array $tasks )
{
	view::title ( $goal->title );
	$tasks = array_reverse ( $tasks );
	return view::ok ( 'goals.tasklist', with ( 'goal', 'tasks' ) );
} );
