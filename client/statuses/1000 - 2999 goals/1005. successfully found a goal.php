<?php

use function compact as with;

status::matching ( 1005, function ( goal $goal )
{
	view::title ( $goal->title );

	if ( request::uri ( ) === "/{$goal->id}/tasks" )
		return view::ok ( 'tasks.listing', with ( 'goal' ) );
		
	return view::ok ( 'goals.edit', with ( 'goal' ) );
} );
