<?php

use function compact as with;


status::matching ( 1007, function ( $id )
{
	session::flash ( 'message', 'Task added.' );
	return redirect::to ( "/{$id}/tasks" );
} );
