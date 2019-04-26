<?php

use function compact as with;

status::matching ( 3006, function ( array $tasks )
{
	$tasks = array_reverse ( $tasks );
	return view::ok ( 'tasks.list', with ( 'tasks' ) );
} );