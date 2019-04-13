<?php

use function compact as with;


status::matching ( 1008, function ( $id )
{
	session::flash ( 'message', 'Task removed.' );
	return redirect::to ( "/{$id}/tasks" );
} );
