<?php

use function compact as with;


status::matching ( 1007, function ( )
{
	session::flash ( 'message', 'Task added.' );
	return redirect::back ( );
} );
