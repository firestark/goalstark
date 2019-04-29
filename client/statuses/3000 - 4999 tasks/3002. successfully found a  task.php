<?php

use function compact as with;

status::matching ( 3002, function ( task $task )
{
	view::title ( 'Task details' );

	if ( $task instanceof task\protein )
		return view::ok ( 'tasks.protein.edit', with ( 'task' ) );
	
	return view::ok ( 'tasks.edit', with ( 'task' ) );
} );
