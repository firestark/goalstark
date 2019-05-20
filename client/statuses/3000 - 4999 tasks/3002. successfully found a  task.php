<?php

use function compact as with;

status::matching ( 3002, function ( task $task )
{
	$type = taskToTypeString ( $task );
	return view::ok ( 'tasks.edit', with ( 'task', 'type' ) );
} );