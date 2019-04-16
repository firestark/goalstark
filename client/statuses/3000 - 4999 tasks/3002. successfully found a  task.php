<?php

use function compact as with;

status::matching ( 3002, function ( task $task )
{
	$tasks = array_reverse ( $tasks );
	return view::ok ( 'tasks.edit', with ( 'task' ) );
} );
