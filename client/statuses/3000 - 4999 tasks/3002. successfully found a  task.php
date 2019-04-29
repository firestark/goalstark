<?php

use function compact as with;

status::matching ( 3002, function ( task $task, array $goals )
{
	view::title ( 'Task details' );
	return view::ok ( 'tasks.edit', with ( 'task', 'goals' ) );
} );
