<?php

use function compact as with;

status::matching ( 3002, function ( task $task )
{
	return view::ok ( 'tasks.edit', with ( 'task' ) );
} );