<?php

use function compact as with;


status::matching ( 1001, function ( goal $goal )
{
	if ( input::has ( 'task-submit' ) )
		return redirect::to ( "/{$goal->id}/tasks" );

	else if ( input::has ( 'general-submit' ) )
		return redirect::to ( "/{$goal->id}" );

	else if ( input::has ( 'add-task' ) )
	{
		session::flash ( 'add-task-field', 1 );
		return redirect::to ( "/{$goal->id}/tasks" );
	}


	session::flash ( 'message', 'Successfully added goal.' );
	return redirect::to ( '/' );
} );
