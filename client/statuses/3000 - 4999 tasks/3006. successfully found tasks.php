<?php

use function compact as with;

status::matching ( 3006, function ( array $tasks )
{
	return view::ok ( 'tasks.list', with ( 'tasks' ) );
} );
