<?php

use function compact as with;

status::matching ( 3002, function ( goal $goal, task $task )
{
	$type = taskToTypeString ( $task );
	return view::ok ( 'goals.tasks.edit', with ( 'goal', 'task', 'type' ) );
} );