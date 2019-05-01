<?php

use function compact as with;

status::matching ( [ 1005, 7009 ], function ( goal $goal, array $tasks, int $protein )
{
	view::title ( $goal->title );
	$tasks = array_reverse ( $tasks );
	return view::ok ( 'goals.edit', with ( 'goal', 'tasks', 'protein' ) );
} );

