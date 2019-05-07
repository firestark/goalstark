<?php

use function compact as with;

status::matching ( 3011, function ( array $goals )
{
	$taskid = input::get ( 'taskid', '' );
	return view::ok ( 'tasks.goals.list', with ( 'taskid', 'goals' ) );
} );
