<?php

use function compact as with;


status::matching ( 1005, function ( goal $goal )
{
	if ( request::uri ( ) === "/{$goal->id}/tasks" )
		return view::ok ( 'tasks', with ( 'goal' ) );
		
	return view::ok ( 'edit', with ( 'goal' ) );
} );
