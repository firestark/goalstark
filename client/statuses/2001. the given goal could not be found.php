<?php

use function compact as with;


status::matching ( 2001, function ( )
{
	session::flash ( 'message', 'Goal could not be found.' );
	return redirect::to ( '/' );
} );
