<?php

use function compact as with;


status::matching ( 1004, function ( )
{
	session::flash ( 'message', 'Goal completed.' );
	return redirect::to ( '/' );
} );
