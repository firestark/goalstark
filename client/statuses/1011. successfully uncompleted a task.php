<?php

use function compact as with;


status::matching ( 1011, function ( $id )
{
	session::flash ( 'message', 'Task uncompleted.' );
	return redirect::to ( "/{$id}/tasks" );
} );
