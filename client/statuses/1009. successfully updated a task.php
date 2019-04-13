<?php

use function compact as with;


status::matching ( 1009, function ( $id )
{
	session::flash ( 'message', 'Task updated.' );
	return redirect::to ( "/{$id}/tasks" );
} );
