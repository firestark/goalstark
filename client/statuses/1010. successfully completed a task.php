<?php

use function compact as with;


status::matching ( 1010, function ( $id )
{
	session::flash ( 'message', 'Task completed.' );
	return redirect::to ( "/{$id}/tasks" );
} );
